<?php

/* CocomodeSampleApiDocumentorBundle::base.html.twig */
class __TwigTemplate_e0d4c26744672a221f6273aa9d9bee60bb1e60f68c592c767e36730777a4c3aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>SampleApiDocumentor</title>

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">

";
        // line 15
        echo "
<!-- Latest compiled and minified JavaScript -->
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>
<body>
<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("index")), "html", null, true);
        echo "\">SampleApiDocumentor</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 38
        if (((isset($context["activeNav"]) ? $context["activeNav"] : $this->getContext($context, "activeNav")) == "home")) {
            // line 39
            echo "                <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("index")), "html", null, true);
            echo "\">Home</a></li>
                <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("create")), "html", null, true);
            echo "\">Create</a></li>
                <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("create_temp")), "html", null, true);
            echo "\">Create Temp</a></li>
                ";
        } elseif (((isset($context["activeNav"]) ? $context["activeNav"] : $this->getContext($context, "activeNav")) == "create")) {
            // line 43
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("index")), "html", null, true);
            echo "\">Home</a></li>
                <li class=\"active\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("create")), "html", null, true);
            echo "\">Create</a></li>
                <li><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("create_temp")), "html", null, true);
            echo "\">Create Temp</a></li>
                ";
        } elseif (((isset($context["activeNav"]) ? $context["activeNav"] : $this->getContext($context, "activeNav")) == "create_temp")) {
            // line 47
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("index")), "html", null, true);
            echo "\">Home</a></li>
                <li><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("create")), "html", null, true);
            echo "\">Create</a></li>
                <li class=\"active\"><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("create_temp")), "html", null, true);
            echo "\">Create Temp</a></li>
                ";
        }
        // line 51
        echo "            </ul>
        </div>
    </div>
</nav>

<div class=\"container\">

    ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            echo "    <div class=\"row\">
        <div class=\"col-md-12 bg-success\">
            <h4><span class=\"glyphicon glyphicon-ok\"></span> ";
            // line 61
            echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
            echo "</h4>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
    ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 67
            echo "    <div class=\"row\">
        <div class=\"col-md-12 bg-danger\">
            <h4><span class=\"glyphicon glyphicon-flash\"></span> ";
            // line 69
            echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
            echo "</h4>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
    ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert-warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 75
            echo "    <div class=\"row\">
        <div class=\"col-md-12 bg-warning\">
            <h4><span class=\"glyphicon glyphicon-bullhorn\"></span> ";
            // line 77
            echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
            echo "</h4>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
    ";
        // line 82
        $this->displayBlock('Content', $context, $blocks);
        // line 83
        echo "</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"js/bootstrap.min.js\"></script>
</body>
</html>
";
    }

    // line 82
    public function block_Content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CocomodeSampleApiDocumentorBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 82,  180 => 83,  178 => 82,  175 => 81,  165 => 77,  161 => 75,  157 => 74,  154 => 73,  144 => 69,  140 => 67,  136 => 66,  133 => 65,  123 => 61,  119 => 59,  115 => 58,  106 => 51,  101 => 49,  97 => 48,  92 => 47,  87 => 45,  83 => 44,  78 => 43,  73 => 41,  69 => 40,  64 => 39,  62 => 38,  55 => 34,  34 => 15,  20 => 1,  48 => 8,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
