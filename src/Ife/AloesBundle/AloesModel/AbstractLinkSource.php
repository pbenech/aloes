<?php
namespace Ife\AloesBundle\AloesModel;

abstract class AbstractLinkSource 
{

    /* Methods that child classes must implement. */
    /* ==========================================  */

    abstract protected function createLink();

    abstract protected function getLinks();

    /* Operations on links */
    /* ================== */

    public function addLink($link) 
    {
        $this->getLinks()->add($link);
    }

    public function removeLink($link) 
    {
        $this->getLinks()->removeElement($link);
    }

    private function getLinkLabel()
    {
        return $this->getSourceLabel().'_'.$this->getTargetLabel();
    }

    /* Operations on linked entities */
    /* ============================= */

    /**
     * Add link to the given target.
     * 
     */
    public function addTarget($target, $rating = 1) 
    {
        $link = $this->createLink();
        $link->setSource($this);
        $link->setTarget($target);
        $link->setRating($rating);
        $this->addLink($link);
        
        return $this;
    }

    /**
     * Remove link to the given target.
     * 
     */
    public function removeTarget($target) 
    {
        foreach ($this->getLinks() as $link) {
            if ($link->getTarget()->getId() == $target->getId()) {
                $this->getLinks()->removeElement($link);
                break;
            }
        }
    }

    /**
     * Get an array with all linked targets.
     * 
     */
    public function getTargets() 
    {
        if (!$this->hasLinks()) return array();
        
        $this->setTargetWeights();

        return $this
            ->getLinks()
            ->map(function ($l) {
                return $l->getTarget();
            })
            ->toArray();
    }

    /**
     * Set the targets.
     * 
     */
    public function setTargets($targets)
    {
        // Remember the ratings before clearing out old links.
        $ratings = array();
        foreach ($this->getLinks() as $link) {
            $ratings[$link->getTarget()->getId()] = $link->getRating();
        }

        $this->getLinks()->clear();

        // Add each objective, possibly again with its old rating.
        foreach($targets as $target) {
            $r = (array_key_exists($target->getId(), $ratings)) ? $ratings[$target->getId()] : 1;
            $this->addTarget($target, $r);
        }

        return $this;
    }

    /**
     * Get an array with the identifiers of all linked targets.
     * 
     */
    public function getTargetIds() 
    {
        return $this
            ->getLinks()
            ->map(function ($l) {
                return $l->getTarget()->getId();
            })
            ->toArray();
    }

    /**
     * Compute the weight of each target given all the link ratings.
     * 
     */
    private function setTargetWeights() 
    {

        if (!$this->hasLinks()) return;

        $sum = 0;
        foreach($this->getLinks() as $link) {
            $sum += $link->getRating();
        }

        foreach($this->getLinks() as $link) {
            $link->getTarget()->weight = round($link->getRating() / $sum, 2);  
        } 
    }

    /**
     * Check if the source has at least one link.
     * 
     */
    public function hasLinks()
    {
        return ($this->getLinks()->count() > 0);
    }

    public function isLinkedTo($target)
    {
        return in_array($target->getId(), $this->getTargetIds());
    }

    public function flagTargets()
    {
        foreach ($this->getTargets() as $target) {
            $target->isSelected = true;
        }
    }
}

