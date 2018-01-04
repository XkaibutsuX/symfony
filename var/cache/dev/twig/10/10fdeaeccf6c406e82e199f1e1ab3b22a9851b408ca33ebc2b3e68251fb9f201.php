<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_dc95b711fa57cc45f0e5fb6bf2f790060ad73818c082f7094b894da3b9ca79c9 extends Twig_Template
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
        $__internal_2eb47f48597eb9a6b7615f2b1e75095f3e05a05e32b67d0b1753975dadd4ae06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb47f48597eb9a6b7615f2b1e75095f3e05a05e32b67d0b1753975dadd4ae06->enter($__internal_2eb47f48597eb9a6b7615f2b1e75095f3e05a05e32b67d0b1753975dadd4ae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_dbc01cf1eb093e924673daaf2b6edddb87b3dca8f18a3fdeba1adfa208b5beda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc01cf1eb093e924673daaf2b6edddb87b3dca8f18a3fdeba1adfa208b5beda->enter($__internal_dbc01cf1eb093e924673daaf2b6edddb87b3dca8f18a3fdeba1adfa208b5beda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2eb47f48597eb9a6b7615f2b1e75095f3e05a05e32b67d0b1753975dadd4ae06->leave($__internal_2eb47f48597eb9a6b7615f2b1e75095f3e05a05e32b67d0b1753975dadd4ae06_prof);

        
        $__internal_dbc01cf1eb093e924673daaf2b6edddb87b3dca8f18a3fdeba1adfa208b5beda->leave($__internal_dbc01cf1eb093e924673daaf2b6edddb87b3dca8f18a3fdeba1adfa208b5beda_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
