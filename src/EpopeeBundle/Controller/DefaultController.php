<?php

namespace EpopeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EpopeeBundle:Default:index.html.twig');
    }

    public function bookAction($book)
    {
        return $this->render('EpopeeBundle:Book:k'.$book.'.html.twig', array('book'=>$book));
    }
}
