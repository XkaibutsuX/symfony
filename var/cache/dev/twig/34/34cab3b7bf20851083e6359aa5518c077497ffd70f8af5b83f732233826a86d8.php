<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_58301420a80fbeca792f5141b3bbd617fc5a0702da1613af30c51bd22dbf2ab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5ad85cac46df637adc198e39b4d23c99b7e501345ff9ce81e7184d855fa2167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ad85cac46df637adc198e39b4d23c99b7e501345ff9ce81e7184d855fa2167->enter($__internal_c5ad85cac46df637adc198e39b4d23c99b7e501345ff9ce81e7184d855fa2167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a5251ebbf50ba618d7e3286aaa320041c4a1223ca182c42d46a147ac1dc91b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5251ebbf50ba618d7e3286aaa320041c4a1223ca182c42d46a147ac1dc91b74->enter($__internal_a5251ebbf50ba618d7e3286aaa320041c4a1223ca182c42d46a147ac1dc91b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5ad85cac46df637adc198e39b4d23c99b7e501345ff9ce81e7184d855fa2167->leave($__internal_c5ad85cac46df637adc198e39b4d23c99b7e501345ff9ce81e7184d855fa2167_prof);

        
        $__internal_a5251ebbf50ba618d7e3286aaa320041c4a1223ca182c42d46a147ac1dc91b74->leave($__internal_a5251ebbf50ba618d7e3286aaa320041c4a1223ca182c42d46a147ac1dc91b74_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cceb5644c83c2bb72d83a15a6ce19edc99ce4059852ae4049d7a0d3d3ed7f71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cceb5644c83c2bb72d83a15a6ce19edc99ce4059852ae4049d7a0d3d3ed7f71b->enter($__internal_cceb5644c83c2bb72d83a15a6ce19edc99ce4059852ae4049d7a0d3d3ed7f71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd6bca8ffaf9b0926623b2c40bd3f9d53b70cf5c875b6785ff5cfaef6effa2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6bca8ffaf9b0926623b2c40bd3f9d53b70cf5c875b6785ff5cfaef6effa2ed->enter($__internal_fd6bca8ffaf9b0926623b2c40bd3f9d53b70cf5c875b6785ff5cfaef6effa2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fd6bca8ffaf9b0926623b2c40bd3f9d53b70cf5c875b6785ff5cfaef6effa2ed->leave($__internal_fd6bca8ffaf9b0926623b2c40bd3f9d53b70cf5c875b6785ff5cfaef6effa2ed_prof);

        
        $__internal_cceb5644c83c2bb72d83a15a6ce19edc99ce4059852ae4049d7a0d3d3ed7f71b->leave($__internal_cceb5644c83c2bb72d83a15a6ce19edc99ce4059852ae4049d7a0d3d3ed7f71b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/justine/yolo/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
