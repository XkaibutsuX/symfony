<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4fc9bbaef0884eca50ac1da6e204daaff32e4a9f07a250471b530f6c4029b035 extends Twig_Template
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
        $__internal_845b380acc35832e12a4aeccd017e49f19dfe642cd05fa90fa716a3eb95b59c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845b380acc35832e12a4aeccd017e49f19dfe642cd05fa90fa716a3eb95b59c2->enter($__internal_845b380acc35832e12a4aeccd017e49f19dfe642cd05fa90fa716a3eb95b59c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_665eb6205737eb7141f666bf8f85f25f6384d9bcd1bd75c6f0cf42afc2868e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665eb6205737eb7141f666bf8f85f25f6384d9bcd1bd75c6f0cf42afc2868e53->enter($__internal_665eb6205737eb7141f666bf8f85f25f6384d9bcd1bd75c6f0cf42afc2868e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_845b380acc35832e12a4aeccd017e49f19dfe642cd05fa90fa716a3eb95b59c2->leave($__internal_845b380acc35832e12a4aeccd017e49f19dfe642cd05fa90fa716a3eb95b59c2_prof);

        
        $__internal_665eb6205737eb7141f666bf8f85f25f6384d9bcd1bd75c6f0cf42afc2868e53->leave($__internal_665eb6205737eb7141f666bf8f85f25f6384d9bcd1bd75c6f0cf42afc2868e53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
