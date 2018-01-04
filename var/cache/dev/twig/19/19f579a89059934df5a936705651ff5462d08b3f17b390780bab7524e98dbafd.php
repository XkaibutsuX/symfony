<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_bca67d01963438edb33677681fe4bb97a531d953ec63665ad8cece14c49e421b extends Twig_Template
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
        $__internal_1b719fa0dd49356a7af3df40cdd81b2914ad6371ae61e35a902ef5b364f14764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b719fa0dd49356a7af3df40cdd81b2914ad6371ae61e35a902ef5b364f14764->enter($__internal_1b719fa0dd49356a7af3df40cdd81b2914ad6371ae61e35a902ef5b364f14764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_e04634db78ff17f876cf47811c33cb23e2048a188c4d80735411a88a86a2cfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04634db78ff17f876cf47811c33cb23e2048a188c4d80735411a88a86a2cfee->enter($__internal_e04634db78ff17f876cf47811c33cb23e2048a188c4d80735411a88a86a2cfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_1b719fa0dd49356a7af3df40cdd81b2914ad6371ae61e35a902ef5b364f14764->leave($__internal_1b719fa0dd49356a7af3df40cdd81b2914ad6371ae61e35a902ef5b364f14764_prof);

        
        $__internal_e04634db78ff17f876cf47811c33cb23e2048a188c4d80735411a88a86a2cfee->leave($__internal_e04634db78ff17f876cf47811c33cb23e2048a188c4d80735411a88a86a2cfee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
