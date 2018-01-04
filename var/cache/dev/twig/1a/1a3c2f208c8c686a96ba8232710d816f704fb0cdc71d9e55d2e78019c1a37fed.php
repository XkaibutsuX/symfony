<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_317718c878488f33ead52a8b1829119e9608d6030d64eabeb7f79c1390422c91 extends Twig_Template
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
        $__internal_cdb2ae1d5d0d8c1726209010451452ff0994960c864106ba3155902ae0062b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb2ae1d5d0d8c1726209010451452ff0994960c864106ba3155902ae0062b3c->enter($__internal_cdb2ae1d5d0d8c1726209010451452ff0994960c864106ba3155902ae0062b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_32ef41fade2e9cddf579d4c1a112f4ece988eb065fb13b24d85ca4ef090cc29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ef41fade2e9cddf579d4c1a112f4ece988eb065fb13b24d85ca4ef090cc29a->enter($__internal_32ef41fade2e9cddf579d4c1a112f4ece988eb065fb13b24d85ca4ef090cc29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cdb2ae1d5d0d8c1726209010451452ff0994960c864106ba3155902ae0062b3c->leave($__internal_cdb2ae1d5d0d8c1726209010451452ff0994960c864106ba3155902ae0062b3c_prof);

        
        $__internal_32ef41fade2e9cddf579d4c1a112f4ece988eb065fb13b24d85ca4ef090cc29a->leave($__internal_32ef41fade2e9cddf579d4c1a112f4ece988eb065fb13b24d85ca4ef090cc29a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
