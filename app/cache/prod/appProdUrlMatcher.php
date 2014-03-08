<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // cocomode_sample_api_documentor_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cocomode_sample_api_documentor_homepage')), array (  '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::indexAction',));
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/create')) {
            // create
            if ($pathinfo === '/create') {
                return array (  '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::createAction',  '_route' => 'create',);
            }

            // create_temp
            if ($pathinfo === '/createTemp') {
                return array (  '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::createTempAction',  '_route' => 'create_temp',);
            }

        }

        // edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<apiId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::editAction',));
        }

        if (0 === strpos($pathinfo, '/de')) {
            // delete
            if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<apiId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::deleteAction',));
            }

            // detail
            if (0 === strpos($pathinfo, '/detail') && preg_match('#^/detail/(?P<route1>[^/]++)(?:/(?P<route2>[^/]++)(?:/(?P<route3>[^/]++)(?:/(?P<route4>[^/]++)(?:/(?P<route5>[^/]++)(?:/(?P<route6>[^/]++))?)?)?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail')), array (  '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::detailAction',  'route2' => NULL,  'route3' => NULL,  'route4' => NULL,  'route5' => NULL,  'route6' => NULL,));
            }

        }

        // api
        if (0 === strpos($pathinfo, '/api') && preg_match('#^/api/(?P<route1>[^/]++)(?:/(?P<route2>[^/]++)(?:/(?P<route3>[^/]++)(?:/(?P<route4>[^/]++)(?:/(?P<route5>[^/]++)(?:/(?P<route6>[^/]++))?)?)?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api')), array (  '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::apiAction',  'route2' => NULL,  'route3' => NULL,  'route4' => NULL,  'route5' => NULL,  'route6' => NULL,));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
