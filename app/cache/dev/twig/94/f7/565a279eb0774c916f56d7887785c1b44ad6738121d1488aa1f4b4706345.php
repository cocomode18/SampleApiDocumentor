<?php

/* CocomodeSampleApiDocumentorBundle:Default:detail.html.twig */
class __TwigTemplate_94f7565a279eb0774c916f56d7887785c1b44ad6738121d1488aa1f4b4706345 extends Twig_Template
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
        echo "<h1>Api detail</h1>
<h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route"), "html", null, true);
        echo "</h3>
<h4><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit", array("apiId" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "id"))), "html", null, true);
        echo "\">edit</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete", array("apiId" => $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "id"))), "html", null, true);
        echo "\">delete</a></h4>
<br />
<ul>
    <li>
<h4>Api Url</h4>
<p><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("index");
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('routing')->getUrl("index");
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "route"), "html", null, true);
        echo "</a></p>
</li>
<li>
<h4>Status Code</h4>
<p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "statusCode"), "html", null, true);
        echo "</p>
    </li>
<li>
<h4>Content Type</h4>
<p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "contentType"), "html", null, true);
        echo "</p>
    </li>
<li>
<h4>Response</h4>
<p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Api"]) ? $context["Api"] : $this->getContext($context, "Api")), "response"), "html", null, true);
        echo "</p>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CocomodeSampleApiDocumentorBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  66 => 18,  59 => 14,  48 => 10,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
