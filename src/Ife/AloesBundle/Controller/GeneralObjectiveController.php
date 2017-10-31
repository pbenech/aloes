<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Course;
use Ife\AloesBundle\Entity\GeneralObjective;
use Ife\AloesBundle\Form\GeneralObjectiveType;

/**
 * GeneralObjective controller.
 *
 */
class GeneralObjectiveController extends Controller
{

    /**
     * Lists all GeneralObjective entities.
     *
     */ 
    public function indexAction(Course $course,$sequence)
    {
        $em = $this->getDoctrine()->getManager();
         
        $entities = $em->getRepository('IfeAloesBundle:GeneralObjective')->findByCourse($course);        

        $weights = $em->getRepository('IfeAloesBundle:SpecificObjective')->findWeightsByCourse($course);

        $objectifCompetences = $em->getRepository('IfeAloesBundle:SpecificObjective')->findObjectiveCompetencefByCourse($course);

        foreach ($entities as $entity)
        {           
        	$entity->setWeights($weights);
        }

        return $this->render('IfeAloesBundle:GeneralObjective:index.html.twig', array(
            'entities' => $entities,
            'course' => $course,
        	'menu'	=> "course_objective",
        	'sequence'	=> $sequence,
        	'objectifCompetences'		=> $objectifCompetences
        ));

    }
    /**
     * Creates a new GeneralObjective entity.
     *
     */
    public function createAction(Request $request, Course $course)
    {
        $entity = new GeneralObjective();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setCourse($course);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

        }
	    
        return $this->redirect($this->generateUrl('course_objective', 
        	array('id' 			=> $course->getId(),
        		  'sequence'	=> $entity->getId() )));
        
    }

    /**
     * Creates a form to create a GeneralObjective entity.
     *
     * @param GeneralObjective $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(GeneralObjective $entity)
    {
        $form = $this->createForm(new GeneralObjectiveType(), $entity, array(
            'action' => $this->generateUrl('general_objective_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    } 

    /**
     * Displays a form to create a new GeneralObjective entity.
     *
     */
    public function newAction()
    {
        $entity = new GeneralObjective();
        $form   = $this->createCreateForm($entity);

        return $this->render('IfeAloesBundle:GeneralObjective:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a GeneralObjective entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:GeneralObjective')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GeneralObjective entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:GeneralObjective:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing GeneralObjective entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:GeneralObjective')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GeneralObjective entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:GeneralObjective:edit.html.twig', array(
            'objective'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'course' => $entity->getCourse(),
        	'menu'	=> "course_objective"
        ));
    }

    /**
    * Creates a form to edit a GeneralObjective entity.
    *
    * @param GeneralObjective $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(GeneralObjective $entity)
    {
        $form = $this->createForm(new GeneralObjectiveType(), $entity, array(
            'action' => $this->generateUrl('general_objective_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit');

        return $form;
    }
    /**
     * Edits an existing GeneralObjective entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:GeneralObjective')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find GeneralObjective entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('course_objective', array(
                'id' 			=> $entity->getCourse()->getId(),
            	'sequence'		=> $entity->getId()
            )));
        }

        return $this->render('IfeAloesBundle:GeneralObjective:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'course' => $entity->getCourse(),
        	'menu'	=> "course_objective"
        ));
    }
    /**
     * Deletes a GeneralObjective entity.
     *
     */
    public function deleteAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:GeneralObjective')->find($id);    	
    	        
        foreach($entity->getSpecificObjectives() as $specObj) {
        	$em->remove($specObj);       
        }    
        
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('course_objective', array(
            'id'=>$entity->getCourse()->getId()
        )));
    }

    /**
     * Creates a form to delete a GeneralObjective entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('general_objective_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
