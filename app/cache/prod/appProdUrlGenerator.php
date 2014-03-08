<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'cocomode_sample_api_documentor_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create',    ),  ),  4 =>   array (  ),),
        'create_temp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::createTempAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/createTemp',    ),  ),  4 =>   array (  ),),
        'edit' => array (  0 =>   array (    0 => 'apiId',  ),  1 =>   array (    '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'apiId',    ),    1 =>     array (      0 => 'text',      1 => '/edit',    ),  ),  4 =>   array (  ),),
        'delete' => array (  0 =>   array (    0 => 'apiId',  ),  1 =>   array (    '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'apiId',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),),
        'detail' => array (  0 =>   array (    0 => 'route1',    1 => 'route2',    2 => 'route3',    3 => 'route4',    4 => 'route5',    5 => 'route6',  ),  1 =>   array (    '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::detailAction',    'route2' => NULL,    'route3' => NULL,    'route4' => NULL,    'route5' => NULL,    'route6' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route6',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route5',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route4',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route3',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route2',    ),    5 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route1',    ),    6 =>     array (      0 => 'text',      1 => '/detail',    ),  ),  4 =>   array (  ),),
        'api' => array (  0 =>   array (    0 => 'route1',    1 => 'route2',    2 => 'route3',    3 => 'route4',    4 => 'route5',    5 => 'route6',  ),  1 =>   array (    '_controller' => 'Cocomode\\SampleApiDocumentorBundle\\Controller\\DefaultController::apiAction',    'route2' => NULL,    'route3' => NULL,    'route4' => NULL,    'route5' => NULL,    'route6' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route6',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route5',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route4',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route3',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route2',    ),    5 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'route1',    ),    6 =>     array (      0 => 'text',      1 => '/api',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
