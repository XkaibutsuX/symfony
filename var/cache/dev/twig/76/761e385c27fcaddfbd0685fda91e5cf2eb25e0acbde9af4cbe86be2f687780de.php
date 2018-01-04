<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c057f2106ca0e8e0729e8d30eee15fe89e349207a536c28a8b7ea075a49a8b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2c12d1c911279c7b408ade7eda47da13e5c270f347ac4b131156f378c94268f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c12d1c911279c7b408ade7eda47da13e5c270f347ac4b131156f378c94268f->enter($__internal_e2c12d1c911279c7b408ade7eda47da13e5c270f347ac4b131156f378c94268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_bf7f6d26c663442c3d9c04ad8d1bfc42056db6c1950e479be7ab056424360ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7f6d26c663442c3d9c04ad8d1bfc42056db6c1950e479be7ab056424360ea9->enter($__internal_bf7f6d26c663442c3d9c04ad8d1bfc42056db6c1950e479be7ab056424360ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2c12d1c911279c7b408ade7eda47da13e5c270f347ac4b131156f378c94268f->leave($__internal_e2c12d1c911279c7b408ade7eda47da13e5c270f347ac4b131156f378c94268f_prof);

        
        $__internal_bf7f6d26c663442c3d9c04ad8d1bfc42056db6c1950e479be7ab056424360ea9->leave($__internal_bf7f6d26c663442c3d9c04ad8d1bfc42056db6c1950e479be7ab056424360ea9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2d89895d66c339ce57b2b5190875b7214b2d4b317978dd83ad1a2711b5b8d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d89895d66c339ce57b2b5190875b7214b2d4b317978dd83ad1a2711b5b8d90->enter($__internal_a2d89895d66c339ce57b2b5190875b7214b2d4b317978dd83ad1a2711b5b8d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4cbda2a79d047c1687294cd8eecf546c7bfd18f70056af458f479753f801e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cbda2a79d047c1687294cd8eecf546c7bfd18f70056af458f479753f801e8d->enter($__internal_d4cbda2a79d047c1687294cd8eecf546c7bfd18f70056af458f479753f801e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d4cbda2a79d047c1687294cd8eecf546c7bfd18f70056af458f479753f801e8d->leave($__internal_d4cbda2a79d047c1687294cd8eecf546c7bfd18f70056af458f479753f801e8d_prof);

        
        $__internal_a2d89895d66c339ce57b2b5190875b7214b2d4b317978dd83ad1a2711b5b8d90->leave($__internal_a2d89895d66c339ce57b2b5190875b7214b2d4b317978dd83ad1a2711b5b8d90_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb12419d690265b0a86c62af69a846766a47fee252816518f94c22f7425aaa79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb12419d690265b0a86c62af69a846766a47fee252816518f94c22f7425aaa79->enter($__internal_bb12419d690265b0a86c62af69a846766a47fee252816518f94c22f7425aaa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7dc85659d4249d0b3ba44ed0a0601929617e3cbe9a20638da934ef7f4aec5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dc85659d4249d0b3ba44ed0a0601929617e3cbe9a20638da934ef7f4aec5f7->enter($__internal_b7dc85659d4249d0b3ba44ed0a0601929617e3cbe9a20638da934ef7f4aec5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b7dc85659d4249d0b3ba44ed0a0601929617e3cbe9a20638da934ef7f4aec5f7->leave($__internal_b7dc85659d4249d0b3ba44ed0a0601929617e3cbe9a20638da934ef7f4aec5f7_prof);

        
        $__internal_bb12419d690265b0a86c62af69a846766a47fee252816518f94c22f7425aaa79->leave($__internal_bb12419d690265b0a86c62af69a846766a47fee252816518f94c22f7425aaa79_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/justine/yolo/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
