<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\GeneralObjective;
use Ife\AloesBundle\Entity\SpecificObjective;
use Ife\AloesBundle\Form\SpecificObjectiveType;

/**
 * SpecificObjective controller.
 *
 */
class SpecificObjectiveController extends Controller
{

    /**
     * Lists all SpecificObjective entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IfeAloesBundle:SpecificObjective')->findAll();

        return $this->render('IfeAloesBundle:SpecificObjective:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new SpecificObjective entity.
     *
     */
    public function createAction(Request $request, GeneralObjective $parent)
    {
        $entity = new SpecificObjective();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            // Attach to the parent general objective
            $entity->setGeneralObjective($parent);
            
            // Attach to the parent course
            $entity->setCourse($parent->getCourse());

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
        } 

        return $this->redirect($this->generateUrl('course_objective', array(
            'id' 		=> $parent->getCourse()->getId(),
        	'sequence' 	=> $parent->getId()
        )));        
    }

    /**
     * Creates a form to create a SpecificObjective entity.
     *
     * @param SpecificObjective $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SpecificObjective $entity)
    {
        $form = $this->createForm(new SpecificObjectiveType(), $entity, array(
            'action' => $this->generateUrl('specific_objective_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SpecificObjective entity.
     *
     */
    public function newAction()
    {
        $entity = new SpecificObjective();
        $form   = $this->createCreateForm($entity);

        return $this->render('IfeAloesBundle:SpecificObjective:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SpecificObjective entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:SpecificObjective')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SpecificObjective entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:SpecificObjective:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SpecificObjective entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:SpecificObjective')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SpecificObjective entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:SpecificObjective:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a SpecificObjective entity.
    *
    * @param SpecificObjective $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SpecificObjective $entity)
    {
        $form = $this->createForm(new SpecificObjectiveType(), $entity, array(
            'action' => $this->generateUrl('specific_objective_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }
    /**
     * Edits an existing SpecificObjective entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:SpecificObjective')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SpecificObjective entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('specific_objective_edit', array('id' => $id)));
        }

        return $this->render('IfeAloesBundle:SpecificObjective:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a SpecificObjective entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
     
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('IfeAloesBundle:SpecificObjective')->find($id);

	    $sequence = $entity->getGeneralObjective()->getId();        
	    
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SpecificObjective entity.');
        }

        $em->remove($entity);
        $em->flush();
     
        return $this->redirect($this->generateUrl('course_objective', array(
            'id' => $entity->getCourse()->getId(),
        	'sequence'	=> $sequence
        )));
    }

    /**
     * Creates a form to delete a SpecificObjective entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('specific_objective_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

}
