<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_35480e9324c65beddd1565ddb0d82b49cef1601c2df1a12ce25faf785862d7ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_017e0e258c54b23a7e0ac7fd46471ff1d840a0ae7be3aaee01eaf065e35e8d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017e0e258c54b23a7e0ac7fd46471ff1d840a0ae7be3aaee01eaf065e35e8d43->enter($__internal_017e0e258c54b23a7e0ac7fd46471ff1d840a0ae7be3aaee01eaf065e35e8d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_da7b361d191beff0d5ac25adb3976d1c2cb68a012ec78bf871fdf5434caf8bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7b361d191beff0d5ac25adb3976d1c2cb68a012ec78bf871fdf5434caf8bb0->enter($__internal_da7b361d191beff0d5ac25adb3976d1c2cb68a012ec78bf871fdf5434caf8bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_017e0e258c54b23a7e0ac7fd46471ff1d840a0ae7be3aaee01eaf065e35e8d43->leave($__internal_017e0e258c54b23a7e0ac7fd46471ff1d840a0ae7be3aaee01eaf065e35e8d43_prof);

        
        $__internal_da7b361d191beff0d5ac25adb3976d1c2cb68a012ec78bf871fdf5434caf8bb0->leave($__internal_da7b361d191beff0d5ac25adb3976d1c2cb68a012ec78bf871fdf5434caf8bb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f79734b5ccad40839116a8d12ea889bc564367711837c9fe5cc0c31c09e0a5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79734b5ccad40839116a8d12ea889bc564367711837c9fe5cc0c31c09e0a5b3->enter($__internal_f79734b5ccad40839116a8d12ea889bc564367711837c9fe5cc0c31c09e0a5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b1d832912270e780743c9c5127af10dc00850cf72e4b1a344eedb83cfdc2d15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d832912270e780743c9c5127af10dc00850cf72e4b1a344eedb83cfdc2d15a->enter($__internal_b1d832912270e780743c9c5127af10dc00850cf72e4b1a344eedb83cfdc2d15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b1d832912270e780743c9c5127af10dc00850cf72e4b1a344eedb83cfdc2d15a->leave($__internal_b1d832912270e780743c9c5127af10dc00850cf72e4b1a344eedb83cfdc2d15a_prof);

        
        $__internal_f79734b5ccad40839116a8d12ea889bc564367711837c9fe5cc0c31c09e0a5b3->leave($__internal_f79734b5ccad40839116a8d12ea889bc564367711837c9fe5cc0c31c09e0a5b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c34002c995770224ad15e31e9cb1b03b857894b91e184b5b5807189aca9605ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34002c995770224ad15e31e9cb1b03b857894b91e184b5b5807189aca9605ba->enter($__internal_c34002c995770224ad15e31e9cb1b03b857894b91e184b5b5807189aca9605ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab0777e1b958330e3e35478456e262ba39d92f7044da32e4ea48a71a2b11b853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0777e1b958330e3e35478456e262ba39d92f7044da32e4ea48a71a2b11b853->enter($__internal_ab0777e1b958330e3e35478456e262ba39d92f7044da32e4ea48a71a2b11b853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_ab0777e1b958330e3e35478456e262ba39d92f7044da32e4ea48a71a2b11b853->leave($__internal_ab0777e1b958330e3e35478456e262ba39d92f7044da32e4ea48a71a2b11b853_prof);

        
        $__internal_c34002c995770224ad15e31e9cb1b03b857894b91e184b5b5807189aca9605ba->leave($__internal_c34002c995770224ad15e31e9cb1b03b857894b91e184b5b5807189aca9605ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/justine/yolo/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
