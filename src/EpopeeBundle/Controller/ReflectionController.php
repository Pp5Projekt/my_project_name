<?php

namespace EpopeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EpopeeBundle\Entity\Reflection;
use EpopeeBundle\Form\ReflectionType;


class ReflectionController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$reflectionrepo = $em->getRepository("EpopeeBundle:Reflection");
    	$reflections = $reflectionrepo->findAll();
        return $this->render('EpopeeBundle:Reflection:index.html.twig', array('reflections'=>$reflections));
    }

    public function addAction(Request $request)
    {
    	$reflection = new Reflection();
    	$form = $this->createForm(new ReflectionType(), $reflection);

    	if ($request->isMethod('POST')
    		&& $form->handleRequest($request)
    		&& $form->isValid()
    		) {
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($reflection);
    		$em->flush();
    		return $this->redirect($this->generateUrl('epopee_reflection_index', array()));
    	}
        return $this->render('EpopeeBundle:Reflection:add.html.twig', array('form'=>$form->createView()));
    }
}
