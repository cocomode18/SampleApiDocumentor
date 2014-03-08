<?php

/* CocomodeSampleApiDocumentorBundle:Default:createTemp.html.twig */
class __TwigTemplate_338255ad95f5be223e5d4596a2ff3370912129882834552efe3c41e27ea49678 extends Twig_Template
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
        echo "<h1>Create Temp Page</h1>
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
";
    }

    public function getTemplateName()
    {
        return "CocomodeSampleApiDocumentorBundle:Default:createTemp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
