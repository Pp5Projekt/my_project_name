<?php

namespace ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjektBundle:Default:index.html.twig');
    }

    public function categoryAction()
    {
        return $this->render('ProjektBundle:Kategorie:category.html.twig');
    }
}
