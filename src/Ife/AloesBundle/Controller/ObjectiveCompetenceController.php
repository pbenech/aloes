<?php
namespace Ife\AloesBundle\Controller;

use Ife\AloesBundle\AloesModel\AbstractLinkController;
use Ife\AloesBundle\Form\SpecificObjectiveType;

/**
 * Handles selection, rating and visualisation of the weighted links
 * between a specific objective and its associated specific
 * competences.
 *
 */
class ObjectiveCompetenceController extends AbstractLinkController
{
    
    public function getLinkName()
    {
      return 'objective_competence';  
    } 

    public function getSourceName()
    {
        return 'objective';
    }

    public function getTargetName()
    {
        return 'competence';
    }

    public function getLinkClass()
    {
        return 'IfeAloesBundle:ObjectiveCompetence';
    }
    
    public function getSourceClass() 
    {
        return 'IfeAloesBundle:SpecificObjective';
    }

    public function getTargetParentClass()
    {
        return 'IfeAloesBundle:GeneralCompetence';
    }

     public function getTargetClass()
    {
        return 'IfeAloesBundle:SpecificCompetence';
    }

    protected function createSourceType()
    {
        return new SpecificObjectiveType();
    }

}
