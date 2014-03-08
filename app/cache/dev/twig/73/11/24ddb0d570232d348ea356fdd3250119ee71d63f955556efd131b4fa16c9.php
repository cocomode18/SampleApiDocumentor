<?php

/* CocomodeSampleApiDocumentorBundle:Default:edit.html.twig */
class __TwigTemplate_731124ddb0d570232d348ea356fdd3250119ee71d63f955556efd131b4fa16c9 extends Twig_Template
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
        echo "<h1>Edit Page</h1>
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
        return "CocomodeSampleApiDocumentorBundle:Default:edit.html.twig";
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
