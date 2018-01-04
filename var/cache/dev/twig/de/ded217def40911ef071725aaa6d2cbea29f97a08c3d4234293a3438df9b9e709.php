<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_92fd4f7a04447941a5773809c09ef78a54a545d9e22fe958f1507f50cd3d344b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58f89321be970c6ae970ad415b582bee5d148002b64e9cb02523cd6356e28c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f89321be970c6ae970ad415b582bee5d148002b64e9cb02523cd6356e28c2b->enter($__internal_58f89321be970c6ae970ad415b582bee5d148002b64e9cb02523cd6356e28c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_ef88f267dc3c61cb596387d5fcdb5d44df438a7c472baa5ddf9718912da60e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef88f267dc3c61cb596387d5fcdb5d44df438a7c472baa5ddf9718912da60e0d->enter($__internal_ef88f267dc3c61cb596387d5fcdb5d44df438a7c472baa5ddf9718912da60e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_58f89321be970c6ae970ad415b582bee5d148002b64e9cb02523cd6356e28c2b->leave($__internal_58f89321be970c6ae970ad415b582bee5d148002b64e9cb02523cd6356e28c2b_prof);

        
        $__internal_ef88f267dc3c61cb596387d5fcdb5d44df438a7c472baa5ddf9718912da60e0d->leave($__internal_ef88f267dc3c61cb596387d5fcdb5d44df438a7c472baa5ddf9718912da60e0d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
