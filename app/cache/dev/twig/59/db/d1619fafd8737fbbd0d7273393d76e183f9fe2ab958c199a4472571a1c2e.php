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
        echo "<h1>Api List</h1>
<ul>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Apis"]) ? $context["Apis"] : $this->getContext($context, "Apis")));
        foreach ($context['_seq'] as $context["_key"] => $context["Api"]) {
            // line 6
            echo "    ";
            if (($this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "createdAt") == $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "updatedAt"))) {
                // line 7
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail", array("route1" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route1"), "route2" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route2"), "route3" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route3"), "route4" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route4"), "route5" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route5"), "route6" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route6"))), "html", null, true);
                echo "\">
        ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route"), "html", null, true);
                echo "</a> (created ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "createdAt"), "Y/m/d H:i:s"), "html", null, true);
                echo ")
    </li>
    ";
            } else {
                // line 11
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail", array("route1" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route1"), "route2" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route2"), "route3" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route3"), "route4" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route4"), "route5" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route5"), "route6" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route6"))), "html", null, true);
                echo "\">
        ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route"), "html", null, true);
                echo "</a> (updated ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "updatedAt"), "Y/m/d H:i:s"), "html", null, true);
                echo ")
    </li>
    ";
            }
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
<h3>Temp Api</h3>
<ul>
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TempApis"]) ? $context["TempApis"] : $this->getContext($context, "TempApis")));
        foreach ($context['_seq'] as $context["_key"] => $context["TempApi"]) {
            // line 20
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail", array("route1" => $this->getAttribute((isset($context["TempApi"]) ? $context["TempApi"] : $this->getContext($context, "TempApi")), "route1"))), "html", null, true);
            echo "\">
        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["TempApi"]) ? $context["TempApi"] : $this->getContext($context, "TempApi")), "route"), "html", null, true);
            echo "</a> (expires ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["TempApi"]) ? $context["TempApi"] : $this->getContext($context, "TempApi")), "expireDate"), "Y/m/d H:i:s"), "html", null, true);
            echo ")
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TempApi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
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
        return array (  99 => 24,  88 => 21,  83 => 20,  79 => 19,  74 => 16,  68 => 15,  60 => 12,  55 => 11,  47 => 8,  42 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
