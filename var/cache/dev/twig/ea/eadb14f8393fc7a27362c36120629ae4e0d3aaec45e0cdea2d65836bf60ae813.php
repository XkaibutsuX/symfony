<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5855e35a97803a2206aa6cde4997c45e10eb702f78a64f937e7de8d0b452880d extends Twig_Template
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
        $__internal_acf9a2935278a1bea7fa07ad87ddd74307f25376f7771b9926cba59576710d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf9a2935278a1bea7fa07ad87ddd74307f25376f7771b9926cba59576710d07->enter($__internal_acf9a2935278a1bea7fa07ad87ddd74307f25376f7771b9926cba59576710d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_e288662990cf658c045310229e94202d3914d7b0569e1a1d03a90ada409270cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e288662990cf658c045310229e94202d3914d7b0569e1a1d03a90ada409270cd->enter($__internal_e288662990cf658c045310229e94202d3914d7b0569e1a1d03a90ada409270cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_acf9a2935278a1bea7fa07ad87ddd74307f25376f7771b9926cba59576710d07->leave($__internal_acf9a2935278a1bea7fa07ad87ddd74307f25376f7771b9926cba59576710d07_prof);

        
        $__internal_e288662990cf658c045310229e94202d3914d7b0569e1a1d03a90ada409270cd->leave($__internal_e288662990cf658c045310229e94202d3914d7b0569e1a1d03a90ada409270cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
