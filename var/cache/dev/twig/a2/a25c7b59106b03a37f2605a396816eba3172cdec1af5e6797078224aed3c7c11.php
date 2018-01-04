<?php

/* default/index.html.twig */
class __TwigTemplate_44b0fd354846b15ab75674b5f6654bc08862725490e812a7e785f842a86e58ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e62f7d16ce41af0f23d1e2d174c7d2537f209c98d8baa71997f2ce5f12105c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62f7d16ce41af0f23d1e2d174c7d2537f209c98d8baa71997f2ce5f12105c97->enter($__internal_e62f7d16ce41af0f23d1e2d174c7d2537f209c98d8baa71997f2ce5f12105c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_11c676fb75d995a3fc9b7c272ba4c555e66ca2acbe12693e875d7ce9b857f762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c676fb75d995a3fc9b7c272ba4c555e66ca2acbe12693e875d7ce9b857f762->enter($__internal_11c676fb75d995a3fc9b7c272ba4c555e66ca2acbe12693e875d7ce9b857f762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e62f7d16ce41af0f23d1e2d174c7d2537f209c98d8baa71997f2ce5f12105c97->leave($__internal_e62f7d16ce41af0f23d1e2d174c7d2537f209c98d8baa71997f2ce5f12105c97_prof);

        
        $__internal_11c676fb75d995a3fc9b7c272ba4c555e66ca2acbe12693e875d7ce9b857f762->leave($__internal_11c676fb75d995a3fc9b7c272ba4c555e66ca2acbe12693e875d7ce9b857f762_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1241d404e35bbe39c53058e3027f23030649323415200024ff273a1e74660369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1241d404e35bbe39c53058e3027f23030649323415200024ff273a1e74660369->enter($__internal_1241d404e35bbe39c53058e3027f23030649323415200024ff273a1e74660369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9635298389aa784d0eae72d95d92ad6f54966933e32f187cef0f54ed6cf3b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9635298389aa784d0eae72d95d92ad6f54966933e32f187cef0f54ed6cf3b37->enter($__internal_b9635298389aa784d0eae72d95d92ad6f54966933e32f187cef0f54ed6cf3b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Hello ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>

";
        
        $__internal_b9635298389aa784d0eae72d95d92ad6f54966933e32f187cef0f54ed6cf3b37->leave($__internal_b9635298389aa784d0eae72d95d92ad6f54966933e32f187cef0f54ed6cf3b37_prof);

        
        $__internal_1241d404e35bbe39c53058e3027f23030649323415200024ff273a1e74660369->leave($__internal_1241d404e35bbe39c53058e3027f23030649323415200024ff273a1e74660369_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends 'base.html.twig' %}

{% block body %}

<h1>Hello {{name}}</h1>

{% endblock %}
", "default/index.html.twig", "/home/justine/yolo/templates/default/index.html.twig");
    }
}
