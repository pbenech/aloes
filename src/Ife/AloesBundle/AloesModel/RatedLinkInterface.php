<?php
namespace Ife\AloesBundle\AloesModel;

interface RatedLinkInterface
{
    public function getSourceName();
    
    public function getTargetName();
    
    public function getSourceClass();
    
    public function getTargetClass();

    public function setTarget();
    
    public function getTarget();

    public function setSource();

    public function getSource();

    public function setRating();

    public function getRating();
}