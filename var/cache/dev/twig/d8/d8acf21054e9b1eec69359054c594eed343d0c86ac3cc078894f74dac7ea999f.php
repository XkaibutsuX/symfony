<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_fca160ebe2a25d4d18fba1b29b2c2c07c88b3596cd31048657938eebdf0f6a9a extends Twig_Template
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
        $__internal_bf66aa5f7e39670ff290cfcc23788fa33aedb2475093e66c1dcfe2398f60d775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf66aa5f7e39670ff290cfcc23788fa33aedb2475093e66c1dcfe2398f60d775->enter($__internal_bf66aa5f7e39670ff290cfcc23788fa33aedb2475093e66c1dcfe2398f60d775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_4f0beeecef7bee1dc565b274b31c43f18a71bb5292a22fc78c36c9ba56417094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0beeecef7bee1dc565b274b31c43f18a71bb5292a22fc78c36c9ba56417094->enter($__internal_4f0beeecef7bee1dc565b274b31c43f18a71bb5292a22fc78c36c9ba56417094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_bf66aa5f7e39670ff290cfcc23788fa33aedb2475093e66c1dcfe2398f60d775->leave($__internal_bf66aa5f7e39670ff290cfcc23788fa33aedb2475093e66c1dcfe2398f60d775_prof);

        
        $__internal_4f0beeecef7bee1dc565b274b31c43f18a71bb5292a22fc78c36c9ba56417094->leave($__internal_4f0beeecef7bee1dc565b274b31c43f18a71bb5292a22fc78c36c9ba56417094_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
