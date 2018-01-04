<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_45ee7a3bbf1d3f4e3794ab1dcfe035a9121607fb0c4db95d9295cac41cf319f2 extends Twig_Template
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
        $__internal_d0e4a0fcde5ba783c40ca4682c6b0ca29efb6bc3a1ecd2e07643184b5188965b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e4a0fcde5ba783c40ca4682c6b0ca29efb6bc3a1ecd2e07643184b5188965b->enter($__internal_d0e4a0fcde5ba783c40ca4682c6b0ca29efb6bc3a1ecd2e07643184b5188965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_e5b289b0b0dc46103ca7fb6c1a40f3e17da56fb8f11a06c9a5e73d304cd9c346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b289b0b0dc46103ca7fb6c1a40f3e17da56fb8f11a06c9a5e73d304cd9c346->enter($__internal_e5b289b0b0dc46103ca7fb6c1a40f3e17da56fb8f11a06c9a5e73d304cd9c346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d0e4a0fcde5ba783c40ca4682c6b0ca29efb6bc3a1ecd2e07643184b5188965b->leave($__internal_d0e4a0fcde5ba783c40ca4682c6b0ca29efb6bc3a1ecd2e07643184b5188965b_prof);

        
        $__internal_e5b289b0b0dc46103ca7fb6c1a40f3e17da56fb8f11a06c9a5e73d304cd9c346->leave($__internal_e5b289b0b0dc46103ca7fb6c1a40f3e17da56fb8f11a06c9a5e73d304cd9c346_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
