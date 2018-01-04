<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_40de45572a8c56a477d39f8dc63beda49ef1b1173d9730ec3bcf785f20dab86b extends Twig_Template
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
        $__internal_321222a9493ce85bc5548ab990a0af263f0507cbf29626edbf3b01e496587aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321222a9493ce85bc5548ab990a0af263f0507cbf29626edbf3b01e496587aa8->enter($__internal_321222a9493ce85bc5548ab990a0af263f0507cbf29626edbf3b01e496587aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_0a8520519069990c18238d393095d4dab4d7f65e071d342638ac9d69f471977f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8520519069990c18238d393095d4dab4d7f65e071d342638ac9d69f471977f->enter($__internal_0a8520519069990c18238d393095d4dab4d7f65e071d342638ac9d69f471977f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_321222a9493ce85bc5548ab990a0af263f0507cbf29626edbf3b01e496587aa8->leave($__internal_321222a9493ce85bc5548ab990a0af263f0507cbf29626edbf3b01e496587aa8_prof);

        
        $__internal_0a8520519069990c18238d393095d4dab4d7f65e071d342638ac9d69f471977f->leave($__internal_0a8520519069990c18238d393095d4dab4d7f65e071d342638ac9d69f471977f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
