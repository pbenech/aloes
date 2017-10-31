<?php

namespace Ife\AloesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IfeAloesBundle:Default:index.html.twig');
    }
}
