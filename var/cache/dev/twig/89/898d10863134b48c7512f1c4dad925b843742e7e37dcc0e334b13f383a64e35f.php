<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2ec6fd2fa5df919abd91885ab3012dd9588f82f7a17260fe79f33019736f1ebf extends Twig_Template
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
        $__internal_08b439f2ef2f9fbf4fa98c9dcade606ced27da5aae8c9bd4f26e0ab63ef0aa02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b439f2ef2f9fbf4fa98c9dcade606ced27da5aae8c9bd4f26e0ab63ef0aa02->enter($__internal_08b439f2ef2f9fbf4fa98c9dcade606ced27da5aae8c9bd4f26e0ab63ef0aa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_42ea80d03fd7cad5838ecff7b8e0bd5383d5f9000bc8dc03ca0f9ba5c680f639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ea80d03fd7cad5838ecff7b8e0bd5383d5f9000bc8dc03ca0f9ba5c680f639->enter($__internal_42ea80d03fd7cad5838ecff7b8e0bd5383d5f9000bc8dc03ca0f9ba5c680f639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08b439f2ef2f9fbf4fa98c9dcade606ced27da5aae8c9bd4f26e0ab63ef0aa02->leave($__internal_08b439f2ef2f9fbf4fa98c9dcade606ced27da5aae8c9bd4f26e0ab63ef0aa02_prof);

        
        $__internal_42ea80d03fd7cad5838ecff7b8e0bd5383d5f9000bc8dc03ca0f9ba5c680f639->leave($__internal_42ea80d03fd7cad5838ecff7b8e0bd5383d5f9000bc8dc03ca0f9ba5c680f639_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_189cd1f803bb22a28bd3cfb69fab154ace4ecb8be44ff29ea7727a07090abcd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189cd1f803bb22a28bd3cfb69fab154ace4ecb8be44ff29ea7727a07090abcd2->enter($__internal_189cd1f803bb22a28bd3cfb69fab154ace4ecb8be44ff29ea7727a07090abcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c0ad59f1075437ed6aefc24e8cd5be24f2ee83b371366ea4aefaf96f7930c405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ad59f1075437ed6aefc24e8cd5be24f2ee83b371366ea4aefaf96f7930c405->enter($__internal_c0ad59f1075437ed6aefc24e8cd5be24f2ee83b371366ea4aefaf96f7930c405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c0ad59f1075437ed6aefc24e8cd5be24f2ee83b371366ea4aefaf96f7930c405->leave($__internal_c0ad59f1075437ed6aefc24e8cd5be24f2ee83b371366ea4aefaf96f7930c405_prof);

        
        $__internal_189cd1f803bb22a28bd3cfb69fab154ace4ecb8be44ff29ea7727a07090abcd2->leave($__internal_189cd1f803bb22a28bd3cfb69fab154ace4ecb8be44ff29ea7727a07090abcd2_prof);

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
