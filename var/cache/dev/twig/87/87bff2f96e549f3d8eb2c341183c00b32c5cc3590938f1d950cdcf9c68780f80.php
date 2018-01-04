<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7b84e0f3b06472173b1089d5e05166815208f39b7ae65ddf9d77776046dc09ab extends Twig_Template
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
        $__internal_6d6ed1994e4eb444d9f41199403c79e0ffff818d77d4ac62b2caf8cb578d8699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6ed1994e4eb444d9f41199403c79e0ffff818d77d4ac62b2caf8cb578d8699->enter($__internal_6d6ed1994e4eb444d9f41199403c79e0ffff818d77d4ac62b2caf8cb578d8699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_65e1e8670b638bd5a80671d7be3f9102b8d7def15143dbb2a9007903b718be8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e1e8670b638bd5a80671d7be3f9102b8d7def15143dbb2a9007903b718be8f->enter($__internal_65e1e8670b638bd5a80671d7be3f9102b8d7def15143dbb2a9007903b718be8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_6d6ed1994e4eb444d9f41199403c79e0ffff818d77d4ac62b2caf8cb578d8699->leave($__internal_6d6ed1994e4eb444d9f41199403c79e0ffff818d77d4ac62b2caf8cb578d8699_prof);

        
        $__internal_65e1e8670b638bd5a80671d7be3f9102b8d7def15143dbb2a9007903b718be8f->leave($__internal_65e1e8670b638bd5a80671d7be3f9102b8d7def15143dbb2a9007903b718be8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
