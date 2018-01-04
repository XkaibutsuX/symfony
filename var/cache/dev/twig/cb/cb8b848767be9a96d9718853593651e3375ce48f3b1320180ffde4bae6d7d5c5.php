<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_45ff8555967f3a08dd4d33587bd533a57cdfed751129f076eb677a5d76cbcbd4 extends Twig_Template
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
        $__internal_e8be6ca73f28661e6066e58b7f5cbb2a3a3e9be36f17738ead47402e474d7392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8be6ca73f28661e6066e58b7f5cbb2a3a3e9be36f17738ead47402e474d7392->enter($__internal_e8be6ca73f28661e6066e58b7f5cbb2a3a3e9be36f17738ead47402e474d7392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1719560dd27b93f9a422eff813f70ff406ab7d588d11270af649bf54987a9309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1719560dd27b93f9a422eff813f70ff406ab7d588d11270af649bf54987a9309->enter($__internal_1719560dd27b93f9a422eff813f70ff406ab7d588d11270af649bf54987a9309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_e8be6ca73f28661e6066e58b7f5cbb2a3a3e9be36f17738ead47402e474d7392->leave($__internal_e8be6ca73f28661e6066e58b7f5cbb2a3a3e9be36f17738ead47402e474d7392_prof);

        
        $__internal_1719560dd27b93f9a422eff813f70ff406ab7d588d11270af649bf54987a9309->leave($__internal_1719560dd27b93f9a422eff813f70ff406ab7d588d11270af649bf54987a9309_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
