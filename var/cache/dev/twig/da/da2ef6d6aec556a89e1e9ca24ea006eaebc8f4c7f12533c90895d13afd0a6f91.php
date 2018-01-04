<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_0d586b1bde866019c54a19be2f32daa82ef42ac975b7d3900748074828f0f101 extends Twig_Template
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
        $__internal_8f049952076c87ed071a62fd2519104b08080aced7224d0c58b978d6fe72e10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f049952076c87ed071a62fd2519104b08080aced7224d0c58b978d6fe72e10c->enter($__internal_8f049952076c87ed071a62fd2519104b08080aced7224d0c58b978d6fe72e10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_9bfcb35198cad43942a18cec9480f751eb231c2bdd8ac859e77aa1b683485b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfcb35198cad43942a18cec9480f751eb231c2bdd8ac859e77aa1b683485b04->enter($__internal_9bfcb35198cad43942a18cec9480f751eb231c2bdd8ac859e77aa1b683485b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8f049952076c87ed071a62fd2519104b08080aced7224d0c58b978d6fe72e10c->leave($__internal_8f049952076c87ed071a62fd2519104b08080aced7224d0c58b978d6fe72e10c_prof);

        
        $__internal_9bfcb35198cad43942a18cec9480f751eb231c2bdd8ac859e77aa1b683485b04->leave($__internal_9bfcb35198cad43942a18cec9480f751eb231c2bdd8ac859e77aa1b683485b04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
