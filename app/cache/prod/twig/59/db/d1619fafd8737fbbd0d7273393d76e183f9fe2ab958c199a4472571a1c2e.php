<?php

/* CocomodeSampleApiDocumentorBundle:Default:index.html.twig */
class __TwigTemplate_59dbd1619fafd8737fbbd0d7273393d76e183f9fe2ab958c199a4472571a1c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CocomodeSampleApiDocumentorBundle::base.html.twig");

        $this->blocks = array(
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CocomodeSampleApiDocumentorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_Content($context, array $blocks = array())
    {
        // line 3
        echo $this->env->getExtension('routing')->getUrl("index");
        echo "
<h1>Api List</h1>
<ul>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Apis"]) ? $context["Apis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Api"]) {
            // line 7
            echo "    ";
            if (($this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "createdAt") == $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "updatedAt"))) {
                // line 8
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail", array("route1" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route1"), "route2" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route2"), "route3" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route3"), "route4" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route4"), "route5" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route5"), "route6" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route6"))), "html", null, true);
                echo "\">
        ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route"), "html", null, true);
                echo "</a> (created ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "createdAt"), "Y/m/d H:i:s"), "html", null, true);
                echo ")
    </li>
    ";
            } else {
                // line 12
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail", array("route1" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route1"), "route2" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route2"), "route3" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route3"), "route4" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route4"), "route5" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route5"), "route6" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route6"))), "html", null, true);
                echo "\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "route"), "html", null, true);
                echo "</a> (updated ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : null), "updatedAt"), "Y/m/d H:i:s"), "html", null, true);
                echo ")
    </li>
    ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
<h3>Temp Api</h3>
<ul>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TempApis"]) ? $context["TempApis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["TempApi"]) {
            // line 21
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail", array("route1" => $this->getAttribute((isset($context["TempApi"]) ? $context["TempApi"] : null), "route1"))), "html", null, true);
            echo "\">
        ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["TempApi"]) ? $context["TempApi"] : null), "route"), "html", null, true);
            echo "</a> (expires ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["TempApi"]) ? $context["TempApi"] : null), "expireDate"), "Y/m/d H:i:s"), "html", null, true);
            echo ")
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TempApi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "CocomodeSampleApiDocumentorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  81 => 20,  76 => 17,  70 => 16,  37 => 6,  192 => 82,  180 => 83,  178 => 82,  175 => 81,  165 => 77,  161 => 75,  157 => 74,  97 => 48,  83 => 44,  34 => 4,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 67,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 59,  108 => 36,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  98 => 31,  93 => 28,  88 => 6,  78 => 43,  40 => 8,  94 => 28,  89 => 20,  85 => 21,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  27 => 4,  38 => 5,  29 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 66,  123 => 61,  121 => 46,  117 => 44,  115 => 58,  105 => 40,  101 => 25,  91 => 27,  69 => 40,  62 => 13,  49 => 9,  43 => 8,  32 => 4,  28 => 2,  87 => 45,  72 => 16,  66 => 24,  55 => 34,  44 => 8,  41 => 7,  31 => 3,  25 => 3,  21 => 2,  46 => 7,  35 => 5,  26 => 6,  24 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 73,  149 => 51,  147 => 58,  144 => 69,  141 => 48,  133 => 65,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 28,  92 => 47,  86 => 28,  82 => 22,  80 => 41,  73 => 41,  64 => 39,  60 => 13,  57 => 12,  54 => 10,  51 => 14,  48 => 8,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
