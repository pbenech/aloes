<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ife\AloesBundle\Entity\Topic;
use Ife\AloesBundle\Entity\Assessment;
use Ife\AloesBundle\Form\AssessmentType;


/**
 * Assessment controller.
 *
 */
class AssessmentController extends Controller
{

    /**
     * Lists all Assessment entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IfeAloesBundle:Assessment')->findAll();

        return $this->render('IfeAloesBundle:Assessment:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Assessment entity.
     *
     */
    public function createAction(Request $request, Topic $parent)
    {
        $entity = new Assessment();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            // Attach to the parent general objective
            $entity->setTopic($parent);
            
            // Attach to the parent course
            $entity->setCourse($parent->getCourse());
            
            // Deadline is null by default
            $entity->setDeadline(null);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
        }

        
        return $this->redirect($this->generateUrl('course_assessment', array(
            'id' => $parent->getCourse()->getId(),
        	'sequence' => $parent->getId()
        )));
    }

    /**
     * Creates a form to create a Assessment entity.
     *
     * @param Assessment $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Assessment $entity)
    {
        $form = $this->createForm(new AssessmentType(), $entity);
        return $form;
    }

    /**
     * Displays a form to create a new Assessment entity.
     *
     */
    public function newAction()
    {
        $entity = new Assessment();
        $form   = $this->createCreateForm($entity);

        return $this->render('IfeAloesBundle:Assessment:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Assessment entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Assessment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Assessment entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:Assessment:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Assessment entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Assessment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Assessment entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IfeAloesBundle:Assessment:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Assessment entity.
    *
    * @param Assessment $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Assessment $entity)
    {
        $form = $this->createForm(new AssessmentType(), $entity, array(
            'action' => $this->generateUrl('assessment_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }
    /**
     * Edits an existing Assessment entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IfeAloesBundle:Assessment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Assessment entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('assessment_edit', array('id' => $id)));
        }

        return $this->render('IfeAloesBundle:Assessment:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Assessment entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('IfeAloesBundle:Assessment')->find($id);

        $sequence = $entity->getTopic()->getId();
         
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Assessment entity.');
        }

        $em->remove($entity);
        $em->flush();
        

        return $this->redirect($this->generateUrl('course_assessment', array(
            'id' 		=> $entity->getCourse()->getId(),
        	'sequence'	=> $sequence
        )));

    }

    /**
     * Creates a form to delete a Assessment entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('assessment_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    /**
     * Displays a view to select the course objectives linked to the assessment.
     */
    public function objectiveSelectionAction(Assessment $assessment) 
    {
        $course = $assessment->getCourse();
        $em = $this->getDoctrine()->getManager();

        $objectives = $em->getRepository('IfeAloesBundle:GeneralObjective')->findByCourse($course);
        $selected = $assessment->getObjectiveIds();

        // Loop through all specific objectives and flag those that
        // are selected.x
        foreach($objectives as $objective) {
            $objective->getSpecificObjectives()->map(function ($o) use ($selected) {
                    $o->isSelected = in_array($o->getId(), $selected);
                });
        }
        
        return $this->render('IfeAloesBundle:Assessment:link-selection.html.twig', array(
            'course' => $course,
            'source' => $assessment,
            'targets' => $objectives,
            'routes' => $this->getLinkEditionRoutes()
        ));
    }

    /**
     * Sets linked objectives to the new selection
     */
    public function objectiveSelectionUpdateAction(Request $request, Assessment $assessment,$menu) 
    {
        $em = $this->getDoctrine()->getManager();
        
        $selectedIdsMap = $request->request->get('objectives', null);
        
        if ($selectedIdsMap === null) {
            throw $this->createNotFoundException('No objectives submitted.');
        }

        if (0 === $numSelected = count($selectedIdsMap)) {
            $assessment->getObjectives()->clear();
            return $this->redirectToRoute('assessment_objective',array('id'=>$assessment->getId(),$menu));
        }
        
        $objectives = $em
                    ->getRepository('IfeAloesBundle:SpecificObjective')
                    ->findById(array_keys($selectedIdsMap));
        
        if (count($objectives) != $numSelected) {
            throw $this->createNotFoundException('Not all selected objectives could be found.');
        }

        // Debugging: 
        // $s = array_reduce($objectives, function($s,$o){
        //     return $s.$o->getTitle().'<br/>';});
        // return new Response($s);        

        $assessment->setObjectives($objectives);
        $em->flush();
        
        return $this->redirectToRoute('assessment_objective_selection', array('id'=>$assessment->getId(),$menu));
    }


    /**
     * Shows a view to choose objective ratings.
     * 
     */
    public function objectiveRatingAction(Request $request, Assessment $assessment,$menu) 
    {
        $formView = null;

        if ($assessment->getObjectiveLinks()->count()) {
            $formView = $this->createObjectiveRatingForm($assessment,$menu)->createView();            
        }

        return $this->render('IfeAloesBundle:Assessment:link-rating.html.twig', array(
            'source' => $assessment,
            'course' => $assessment->getCourse(),            
            'routes' => $this->getLinkEditionRoutes(),
            'rating_form' => $formView
        ));
    }


    /**
     * Updates objective ratings.
     * 
     */
    public function objectiveRatingUpdateAction(Request $request, Assessment $assessment,$menu) 
    {
        $form = $this->createObjectiveRatingForm($assessment,$menu);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('assessment_objective_rating', array('id'=>$assessment->getId()));
        }

         return $this->render('IfeAloesBundle:Assessment:link-rating.html.twig', array(
            'source' => $assessment,
            'course' => $assessment->getCourse(),            
            'routes' => $this->getLinkEditionRoutes(),
            'rating_form' => $form->createView(),
         	'menu'		=> $menu
        ));
    }

    public function objectiveWeightsAction(Assessment $assessment) 
    {
        $objectives = $assessment->getObjectives();
        return $this->render('IfeAloesBundle:Assessment:link-weights.html.twig', array(
            'course' => $assessment->getCourse(),            
            'source' => $assessment,
            'routes' => $this->getLinkEditionRoutes(),
            'targets' => $objectives 
        ));
    }

    /**
     * Creates a form to edit objective ratings.
     * 
     */
    private function createObjectiveRatingForm(Assessment $assessment,$menu)
    {
        $form = $this->createForm(new AssessmentType(), $assessment, array(
            'action' => $this->generateUrl('assessment_objective_rating_update', array(
                'id' => $assessment->getId(),
        		'menu'	=> $menu
            )),
            'method' => 'POST'
        ));
        
        $form->add('submit', 'submit', array(
            'label' => 'Enregistrer',
            'attr' => array('class'=>'btn btn-success')
        ));

        return $form;
    }

    private function getLinkEditionRoutes() 
    {
        return array(
            'selection' => 'assessment_objective_selection',
            'rating' => 'assessment_objective_rating',
            'weights' => 'assessment_objective_weights',
            'index' => 'course_assessment'
        );
    }
}
