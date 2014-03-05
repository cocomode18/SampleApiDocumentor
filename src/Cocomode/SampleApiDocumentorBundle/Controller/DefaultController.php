<?php

namespace Cocomode\SampleApiDocumentorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('CocomodeSampleApiDocumentorBundle:Default:index.html.twig', array('name' => $name));
        return $this->render('CocomodeSampleApiDocumentorBundle:Default:index.html.twig', array(
            'activeNav' => 'home',
        ));
    }

    public function createAction()
    {
        return $this->render('CocomodeSampleApiDocumentorBundle:Default:create.html.twig', array(
            'activeNav' => 'create',
        ));
    }

    public function editAction($apiId)
    {
    }

    public function deleteAction($apiId)
    {
    }

    public function detailAction($route1, $route2, $route3, $route4, $route5, $route6)
    {
    }

    public function apiAction($route1, $route2, $route3, $route4, $route5, $route6)
    {
    }
}
