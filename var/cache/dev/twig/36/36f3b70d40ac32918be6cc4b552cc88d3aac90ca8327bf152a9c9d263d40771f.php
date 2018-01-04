<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_531cf7e7a9f06d239083ae3096cda07fc1f17709de9bd30d51ac6aed083dc9e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29ffacd468622fb3ae75a6be50e5ceeedc5aa110d5afdfe5a26a9c6f599fdf43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ffacd468622fb3ae75a6be50e5ceeedc5aa110d5afdfe5a26a9c6f599fdf43->enter($__internal_29ffacd468622fb3ae75a6be50e5ceeedc5aa110d5afdfe5a26a9c6f599fdf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_c2d5d4b56a0aef2717e5319ec6a4eeb267a13559ec1b120b32e08e1741eccf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d5d4b56a0aef2717e5319ec6a4eeb267a13559ec1b120b32e08e1741eccf49->enter($__internal_c2d5d4b56a0aef2717e5319ec6a4eeb267a13559ec1b120b32e08e1741eccf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29ffacd468622fb3ae75a6be50e5ceeedc5aa110d5afdfe5a26a9c6f599fdf43->leave($__internal_29ffacd468622fb3ae75a6be50e5ceeedc5aa110d5afdfe5a26a9c6f599fdf43_prof);

        
        $__internal_c2d5d4b56a0aef2717e5319ec6a4eeb267a13559ec1b120b32e08e1741eccf49->leave($__internal_c2d5d4b56a0aef2717e5319ec6a4eeb267a13559ec1b120b32e08e1741eccf49_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3667a3a10dc58cadaafb746d91d4005c577ca6a7eab74b3beeec1b0dd7ae56b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3667a3a10dc58cadaafb746d91d4005c577ca6a7eab74b3beeec1b0dd7ae56b6->enter($__internal_3667a3a10dc58cadaafb746d91d4005c577ca6a7eab74b3beeec1b0dd7ae56b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9df8c612bc80d5b8f30c3915f2c6f32ede9db5b6b59be75f4953a3495c28a9b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df8c612bc80d5b8f30c3915f2c6f32ede9db5b6b59be75f4953a3495c28a9b4->enter($__internal_9df8c612bc80d5b8f30c3915f2c6f32ede9db5b6b59be75f4953a3495c28a9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9df8c612bc80d5b8f30c3915f2c6f32ede9db5b6b59be75f4953a3495c28a9b4->leave($__internal_9df8c612bc80d5b8f30c3915f2c6f32ede9db5b6b59be75f4953a3495c28a9b4_prof);

        
        $__internal_3667a3a10dc58cadaafb746d91d4005c577ca6a7eab74b3beeec1b0dd7ae56b6->leave($__internal_3667a3a10dc58cadaafb746d91d4005c577ca6a7eab74b3beeec1b0dd7ae56b6_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71dd4b7cb3c3f8a50fc6ba67eba24644fa2b6f2d5f231dafb30d8b05d15cd067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71dd4b7cb3c3f8a50fc6ba67eba24644fa2b6f2d5f231dafb30d8b05d15cd067->enter($__internal_71dd4b7cb3c3f8a50fc6ba67eba24644fa2b6f2d5f231dafb30d8b05d15cd067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c33f104aa8b499a77630dbb08181a1d571ea4413004a12245b3a80b5aff6d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c33f104aa8b499a77630dbb08181a1d571ea4413004a12245b3a80b5aff6d95->enter($__internal_3c33f104aa8b499a77630dbb08181a1d571ea4413004a12245b3a80b5aff6d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3c33f104aa8b499a77630dbb08181a1d571ea4413004a12245b3a80b5aff6d95->leave($__internal_3c33f104aa8b499a77630dbb08181a1d571ea4413004a12245b3a80b5aff6d95_prof);

        
        $__internal_71dd4b7cb3c3f8a50fc6ba67eba24644fa2b6f2d5f231dafb30d8b05d15cd067->leave($__internal_71dd4b7cb3c3f8a50fc6ba67eba24644fa2b6f2d5f231dafb30d8b05d15cd067_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/justine/yolo/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
