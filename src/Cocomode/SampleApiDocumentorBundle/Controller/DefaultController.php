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
        $apis = $this->getDoctrine()
            ->getRepository('CocomodeSampleApiDocumentorBundle:Api')
            ->findBy(
                array(
                    'type' => 1,
                    'deleteFlag' => 0,
                ),
                array(
                    'route1' => 'ASC',
                )
            );

        $tempApis = $this->getDoctrine()
            ->getRepository('CocomodeSampleApiDocumentorBundle:Api')
            ->createQueryBuilder('a')
            ->where('a.type = :type')
            ->andWhere('a.deleteFlag = :deleteFlag')
            ->andWhere('a.expireDate > :expireDate')
            ->setParameters(array(
                'type' => 2,
                'deleteFlag' => 0,
                'expireDate' => new \DateTime(),
            ))
            ->getQuery()
            ->getResult();

        return $this->render('CocomodeSampleApiDocumentorBundle:Default:index.html.twig', array(
            'activeNav' => 'home',
            'Apis' => $apis,
            'TempApis' => $tempApis,
        ));
    }

    public function createAction(Request $request)
    {
        $api = new Api();
        $form = $this->createFormBuilder($api, array(
            'validation_groups' => array('create_api'),
        ))
            ->add('route', 'text')
            ->add('statusCode', 'choice', array(
                'choices' => $this->getStatusCodeList(),
                'required' => true,
            ))
            ->add('contentType', 'choice', array(
                'choices' => $this->getContentTypeList(),
                'required' => true,
            ))
            ->add('response', 'textarea')
            ->add('Create Api', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $session = $request->getSession();

            $currentApi = $this->findApi(
                $api->getRoute1(), $api->getRoute2(), $api->getRoute3(),
                $api->getRoute4(), $api->getRoute5(), $api->getRoute6()
            );

            if ($currentApi) {
                $apiEditPage = $this->generateUrl('edit', array('apiId' => $currentApi->getId()));
                $session->getFlashBag()->add('alert-danger', 'Api url "'.$api->getRoute().'" already exists. Choose another or <a href="'.$apiEditPage.'">edit</a> the api');
                return $this->render('CocomodeSampleApiDocumentorBundle:Default:create.html.twig', array(
                    'activeNav' => 'create',
                    'form' => $form->createView(),
                ));
            }

            if ($api->getContentType() === 'application/json') {
                $jsonDecode = json_decode($api->getResponse());
                if (empty($jsonDecode)) {
                    $session->getFlashBag()->add('alert-danger', 'Response field was not a valid json');
                    return $this->render('CocomodeSampleApiDocumentorBundle:Default:create.html.twig', array(
                        'activeNav' => 'create',
                        'form' => $form->createView(),
                    ));
                }
                $api->setResponse(json_encode($jsonDecode));
            }

            $api->setCreatedAt(new \DateTime());
            $api->setUpdatedAt(new \DateTime());
            $api->setType(1);
            $api->setDeleteFlag(0);

            $em = $this->getDoctrine()->getManager();
            $em->persist($api);
            $em->flush();

            $session->getFlashBag()->add('alert-success', 'New Api has been created');
            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('CocomodeSampleApiDocumentorBundle:Default:create.html.twig', array(
            'activeNav' => 'create',
            'form' => $form->createView(),
        ));
    }

    public function createTempAction(Request $request)
    {
        $api = new Api();
        $form = $this->createFormBuilder($api, array(
            'validation_groups' => array('create_temp'),
        ))
            ->add('statusCode', 'choice', array(
                'choices' => $this->getStatusCodeList(),
                'required' => true,
            ))
            ->add('contentType', 'choice', array(
                'choices' => $this->getContentTypeList(),
                'required' => true,
            ))
            ->add('response', 'textarea')
            ->add('Create Temp Api', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $session = $request->getSession();

            $route = '';
            do {
                $oauth = new \OAuthProvider(array("oauth_signature_method" => OAUTH_SIG_METHOD_HMACSHA1));
                $token = $oauth->generateToken(10);
                $route = bin2hex($token);

                $currentApi = $this->findApi($route);
            } while (!empty($currentApi));
            $api->setRoute($route);

            if ($api->getContentType() === 'application/json') {
                $jsonDecode = json_decode($api->getResponse());
                if (empty($jsonDecode)) {
                    $session->getFlashBag()->add('alert-danger', 'Response field was not a valid json');
                    return $this->render('CocomodeSampleApiDocumentorBundle:Default:createTemp.html.twig', array(
                        'activeNav' => 'create_temp',
                        'form' => $form->createView(),
                    ));
                }
                $api->setResponse(json_encode($jsonDecode));
            }

            $api->setCreatedAt(new \DateTime());
            $api->setUpdatedAt(new \DateTime());
            $api->setExpireDate(new \DateTime('+24 hours'));
            $api->setType(2);
            $api->setDeleteFlag(0);

            $em = $this->getDoctrine()->getManager();
            $em->persist($api);
            $em->flush();

            $session->getFlashBag()->add('alert-success', 'New Api has been created');
            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('CocomodeSampleApiDocumentorBundle:Default:createTemp.html.twig', array(
            'activeNav' => 'create_temp',
            'form' => $form->createView(),
        ));
    }

    public function editAction(Request $request, $apiId)
    {
        $api = $this->getDoctrine()
            ->getRepository('CocomodeSampleApiDocumentorBundle:Api')
            ->findOneById($apiId);

        if (empty($api)) {
            $session = $request->getSession();
            $session->getFlashBag()->add('alert-warning', 'No Api was found');
            return $this->redirect($this->generateUrl('index'));
        }

        $api->setResponse($this->unicodeEncode($api->getResponse()));

        $form = $this->createFormBuilder($api, array(
            'validation_groups' => array('edit_api'),
        ))
            ->add('statusCode', 'choice', array(
                'choices' => $this->getStatusCodeList(),
                'required' => true,
            ))
            ->add('contentType', 'choice', array(
                'choices' => $this->getContentTypeList(),
                'required' => true,
            ))
            ->add('response', 'textarea')
            ->add('Save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            if ($api->getContentType() === 'application/json') {
                $jsonDecode = json_decode($api->getResponse());
                if (empty($jsonDecode)) {
                    $session->getFlashBag()->add('alert-danger', 'Response field was not a valid json');
                    return $this->render('CocomodeSampleApiDocumentorBundle:Default:create.html.twig', array(
                        'activeNav' => 'create',
                        'form' => $form->createView(),
                    ));
                }
                $api->setResponse(json_encode($jsonDecode));
            }

            $api->setUpdatedAt(new \DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()->add('alert-success', 'Edited Api "'.$api->getRoute().'"');
            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('CocomodeSampleApiDocumentorBundle:Default:edit.html.twig', array(
            'activeNav' => 'home',
            'form' => $form->createView(),
        ));
    }

    public function deleteAction(Request $request, $apiId)
    {
        $api = $this->getDoctrine()
            ->getRepository('CocomodeSampleApiDocumentorBundle:Api')
            ->findOneById($apiId);

        $session = $request->getSession();

        if (empty($api)) {
            $session->getFlashBag()->add('alert-warning', 'No Api was found');
            return $this->redirect($this->generateUrl('index'));
        }

        $api->setDeleteFlag(1);
        $this->getDoctrine()->getManager()->flush();

        $session->getFlashBag()->add('alert-success', 'Deleted Api "'.$api->getRoute().'"');
        return $this->redirect($this->generateUrl('index'));
    }

    public function detailAction(Request $request, $route1, $route2=null, $route3=null, $route4=null, $route5=null, $route6=null)
    {
        $api = $this->findApi($route1, $route2, $route3, $route4, $route5, $route6);

        if (empty($api)) {
            $session = $request->getSession();
            $session->getFlashBag()->add('alert-warning', 'No Api was found');
            return $this->redirect($this->generateUrl('index'));
        }

        return $this->render('CocomodeSampleApiDocumentorBundle:Default:detail.html.twig', array(
            'activeNav' => 'home',
            'Api' => $api,
        ));
    }

    public function apiAction($route1, $route2=null, $route3=null, $route4=null, $route5=null, $route6=null)
    {
        $api = $this->findApi($route1, $route2, $route3, $route4, $route5, $route6);

        if (empty($api)) return new Response(null,Response::HTTP_NOT_FOUND);

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
                'deleteFlag' => 0,
            ));
        return $api;
    }

    private function getStatusCodeList()
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

    private function getContentTypeList()
    {
        return array(
            'application/json' => 'json (application/json)',
            'text/html' => 'html (text/html)',
            'text/plain' => 'plain text (text/plain)',
            'text/csv' => 'csv (text/csv)',
            'application/xml' => 'xml (application/xml)',
        );
    }

    private function unicodeEncode($str)
    {
        return preg_replace_callback("/\\\\u([0-9a-zA-Z]{4})/", function ($matches) {
            return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UTF-16");
        }, $str);
    }
}
