<?php

namespace Cocomode\SampleApiDocumentorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Cocomode\SampleApiDocumentorBundle\Entity\Api;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CocomodeSampleApiDocumentorBundle:Default:index.html.twig', array(
            'activeNav' => 'home',
        ));
    }

    public function createAction(Request $request)
    {
        $api = new Api();
        $form = $this->createFormBuilder($api)
            ->add('route', 'text')
            ->add('statusCode', 'choice', array(
                'choices' => $this->getStatusCodes(),
                'required' => true,
            ))
            ->add('contentType', 'choice', array(
                'choices' => array(
                    'application/json' => 'json (application/json)',
                    'text/html' => 'html (text/html)',
                    'text/plain' => 'plain text (text/plain)',
                    'text/csv' => 'csv (text/csv)',
                    'application/xml' => 'xml (application/xml)',
                ),
                'required' => true,
            ))
            ->add('response', 'textarea')
            ->add('Create Api', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $currentApi = $this->findApi(
                $api->getRoute1(), $api->getRoute2(), $api->getRoute3(),
                $api->getRoute4(), $api->getRoute5(), $api->getRoute6()
            );

            if ($currentApi) {
                $apiEditPage = $this->generateUrl('edit', array('apiId' => $currentApi->getId()));
                $session = $request->getSession();
                $session->getFlashBag()->add('alert-danger', 'Api url "'.$api->getRoute().'" already exists. Choose another or <a href="'.$apiEditPage.'">edit</a> the api');
                return $this->render('CocomodeSampleApiDocumentorBundle:Default:create.html.twig', array(
                    'activeNav' => 'create',
                    'form' => $form->createView(),
                ));
            }

            $api->setCreatedAt(new \DateTime());
            $api->setUpdatedAt(new \DateTime());
            $api->setType(1);

            $em = $this->getDoctrine()->getManager();
            $em->persist($api);
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()->add('alert-success', 'New Api has been created :)');
            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('CocomodeSampleApiDocumentorBundle:Default:create.html.twig', array(
            'activeNav' => 'create',
            'form' => $form->createView(),
        ));
    }

    public function editAction($apiId)
    {
    }

    public function deleteAction($apiId)
    {
    }

    public function detailAction($route1, $route2=null, $route3=null, $route4=null, $route5=null, $route6=null)
    {
    }

    public function apiAction($route1, $route2=null, $route3=null, $route4=null, $route5=null, $route6=null)
    {
        $api = $this->findApi($route1, $route2, $route3, $route4, $route5, $route6);

        $statusCode = $api->getStatusCode();

        $response = new Response(
            $api->getResponse(),
            constant("Symfony\Component\HttpFoundation\Response::".$statusCode),
            array('content-type' => $api->getContentType())
        );

        return $response;
    }

    private function findApi($route1, $route2=null, $route3=null, $route4=null, $route5=null, $route6=null)
    {
        $api = $this->getDoctrine()
            ->getRepository('CocomodeSampleApiDocumentorBundle:Api')
            ->findOneBy(array(
                'route1' => $route1,
                'route2' => $route2,
                'route3' => $route3,
                'route4' => $route4,
                'route5' => $route5,
                'route6' => $route6,
            ));
        return $api;
    }

    private function getStatusCodes()
    {
        return array(
            'HTTP_OK' => '200 OK',
            'HTTP_CREATED' => '201 Created',
            'HTTP_ACCEPTED' => '202 Accepted',
            'HTTP_NO_CONTENT' => '204 No Content',
            'HTTP_RESET_CONTENT' => '205 Reset Content',
            'HTTP_BAD_REQUEST' => '400 Bad Request',
            'HTTP_UNAUTHORIZED' => '401 Unauthorized',
            'HTTP_PAYMENT_REQUIRED' => '402 Payment Required',
            'HTTP_FORBIDDEN' => '403 Forbidden',
            'HTTP_NOT_FOUND' => '404 Not Found',
            'HTTP_METHOD_NOT_ALLOWED' => '405 Method Not Allowed',
            'HTTP_NOT_ACCEPTABLE' => '406 Not Acceptable',
            'HTTP_PROXY_AUTHENTICATION_REQUIRED' => '407 ProxyAuthentication Required',
            'HTTP_REQUEST_TIMEOUT' => '408 Request Timeout',
            'HTTP_CONFLICT' => '409 Conflict',
            'HTTP_INTERNAL_SERVER_ERROR' => '500 Internal Server Error',
            'HTTP_NOT_IMPLEMENTED' => '501 Not Implemented',
            'HTTP_BAD_GATEWAY' => '502 Bad Gateway',
            'HTTP_SERVICE_UNAVAILABLE' => '503 Service Unavailable',
            'HTTP_GATEWAY_TIMEOUT' => '504 Gateway Timeout',
            'HTTP_VERSION_NOT_SUPPORTED' => '505 HTTPVersion Not Supported',
        );
    }
}
