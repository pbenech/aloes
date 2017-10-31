<?php
namespace Ife\AloesBundle\Entity;

abstract class GeneralItem
{ 
    abstract protected function getChildren();

    public $weight = 0;
  
    public function setWeights($weights) {
    	// YVF
    	$this->weight = 0;

        if(!count($this->getChildren())) return;

        if (!count($weights)) return;
    
        foreach ($this->getChildren() as $child) {      
            $id = $child->getId();
            $w = (array_key_exists($id, $weights)) ? $weights[$id]: 0;
            $child->weight = $w;
            $this->weight += $w;
        }
    }
} 

