<?php
namespace Ife\AloesBundle\Controller;

use Ife\AloesBundle\AloesModel\AbstractLinkController;
use Ife\AloesBundle\Form\AssessmentType; 

/**
 * Handles selection, rating and visualisation of the weighted links
 * between a specific objective and its associated specific
 * competences.
 *
 */
class AssessmentObjectiveController extends AbstractLinkController
{
    
    public function getLinkName()
    {
      return 'assessment_objective';  
    } 

    public function getSourceName()
    {
        return 'assessment';
    }

    public function getTargetName()
    {
        return 'objective';
    }

    public function getLinkClass()
    {
        return 'IfeAloesBundle:AssessmentObjective';
    }
    
    public function getSourceClass() 
    {
        return 'IfeAloesBundle:Assessment';
    }

    public function getTargetParentClass()
    {
        return 'IfeAloesBundle:GeneralObjective';
    }

    public function getTargetClass()
    {
        return 'IfeAloesBundle:SpecificObjective';
    }

    protected function createSourceType()
    {
        return new AssessmentType();
    }

}
