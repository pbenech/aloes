<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Entity\Topic;
use Ife\AloesBundle\Form\TopicType;

/**
 * Topic controller.
 */
class TopicController extends Controller
{

    /**
     * Lists all Topic entities.
     *
     */
    public function indexAction(Course $course,$sequence)
    {
    	 
    	
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IfeAloesBundle:Topic')->findAllByCourses($course);

     	$assessmentObjectives= $em->getRepository('IfeAloesBundle:Assessment')->findAssessmentObjectiveByCourse($course);
     	
        return $this->render('IfeAloesBundle:Topic:index.html.twig', array(
            'entities' 	=> $entities,
            'course' 	=> $course,
        	'menu'		=> 'course_assessment',
        	'sequence'	=> $sequence,
        	'assessmentObjectives' => $assessmentObjectives
        ));
    }
    /**
     * Creates a new Topic entity.
     *
     */
    public function createAction(Request $request, Course $course)
    {
    	
        $entity = new Topic();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setCourse($course);

            // Start and end date remain unspecified upon creation
            $entity->setStartDate(null);
            $entity->setEndDate(null);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
        } 
        
        

        return $this->redirect($this->generateUrl('course_assessment', 
        array('id'          => $course->getId(),
        	  'sequence'	=> $entity->getId())));
    }

    /**
     * Creates a form to create a Topic entity.
     *
     * @param Topic $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Topic $entity)
    {
        $form = $this->createForm(new TopicType(), $entity);
        return $form;
    }

    /**
     * Displays a form to create a new Topic entity.
     *
     */
    public function newAction()
    {
        $entity = new Topic();
        $form   = $this->createCreateForm($entity);

        return $this->render('IfeAloesBundle:Topic:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Topic entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Topic')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Topic entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:Topic:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Topic entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Topic')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Topic entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:Topic:edit.html.twig', array(
            'topic'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'course' => $entity->getCourse(),
        	'menu'		=> 'course_assessment'
        ));
    }

    /**
    * Creates a form to edit a Topic entity.
    *
    * @param Topic $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Topic $entity)
    {
        $form = $this->createForm(new TopicType(), $entity, array(
            'action' => $this->generateUrl('topic_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit');

        return $form;
    }
    /**
     * Edits an existing Topic entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Topic')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Topic entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('course_assessment', array(
                'id' 			=> $entity->getCourse()->getId(),
            	'sequence'		=> $entity->getId()
            )));
        }

        return $this->render('IfeAloesBundle:Topic:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'course' => $entity->getCourse(),
        	'menu'		=> 'course_assessment'
        ));
    }
    /**
     * Deletes a Topic entity.
     *
     */
    public function deleteAction(Topic $topic)
    {
        $em = $this->getDoctrine()->getManager();
        

        foreach($topic->getAssessments() as $asses) {
        	$em->remove($asses);       
        } 

        
        $em->remove($topic); 
        $em->flush();
        return $this->redirectToRoute('course_assessment', array(
            'id' => $topic->getCourse()->getId()
        ));
    }

    /**
     * Creates a form to delete a Topic entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('topic_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
