<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1d190bc83e13700ce7358e93ef3d43f7b1822ad94aac608e7356f24f750de202 extends Twig_Template
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
        $__internal_f70d6f237bf7b13af16ad9d844279996ce4aeb59c48736b29ed7547fa5543805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70d6f237bf7b13af16ad9d844279996ce4aeb59c48736b29ed7547fa5543805->enter($__internal_f70d6f237bf7b13af16ad9d844279996ce4aeb59c48736b29ed7547fa5543805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_837824d76dac0b28055b0997e6365c286563ad4adce8184eea2179a63ecdcc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837824d76dac0b28055b0997e6365c286563ad4adce8184eea2179a63ecdcc34->enter($__internal_837824d76dac0b28055b0997e6365c286563ad4adce8184eea2179a63ecdcc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f70d6f237bf7b13af16ad9d844279996ce4aeb59c48736b29ed7547fa5543805->leave($__internal_f70d6f237bf7b13af16ad9d844279996ce4aeb59c48736b29ed7547fa5543805_prof);

        
        $__internal_837824d76dac0b28055b0997e6365c286563ad4adce8184eea2179a63ecdcc34->leave($__internal_837824d76dac0b28055b0997e6365c286563ad4adce8184eea2179a63ecdcc34_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
