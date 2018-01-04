<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_720e63bedd827a23f98fa985e2ab84b11e28adfa980c6db65e70bd8eb0a64f64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_01d291d1b0a0ee47249e287e19d47a813d76bf30088fed701a19a2cb9453e253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d291d1b0a0ee47249e287e19d47a813d76bf30088fed701a19a2cb9453e253->enter($__internal_01d291d1b0a0ee47249e287e19d47a813d76bf30088fed701a19a2cb9453e253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8a97406985c4175a787cff497ba2272b0ad1a3d1f8b270b0a1ae079e8e2bcc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a97406985c4175a787cff497ba2272b0ad1a3d1f8b270b0a1ae079e8e2bcc1d->enter($__internal_8a97406985c4175a787cff497ba2272b0ad1a3d1f8b270b0a1ae079e8e2bcc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d291d1b0a0ee47249e287e19d47a813d76bf30088fed701a19a2cb9453e253->leave($__internal_01d291d1b0a0ee47249e287e19d47a813d76bf30088fed701a19a2cb9453e253_prof);

        
        $__internal_8a97406985c4175a787cff497ba2272b0ad1a3d1f8b270b0a1ae079e8e2bcc1d->leave($__internal_8a97406985c4175a787cff497ba2272b0ad1a3d1f8b270b0a1ae079e8e2bcc1d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82ce4a14a17094c8d08f8cdf15b77304101155597387d3fc44f683e63e3012a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ce4a14a17094c8d08f8cdf15b77304101155597387d3fc44f683e63e3012a2->enter($__internal_82ce4a14a17094c8d08f8cdf15b77304101155597387d3fc44f683e63e3012a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b990bb5792c50bad9e5e772ef84644b7e302396a77d432b324a783e95b8dd3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b990bb5792c50bad9e5e772ef84644b7e302396a77d432b324a783e95b8dd3a3->enter($__internal_b990bb5792c50bad9e5e772ef84644b7e302396a77d432b324a783e95b8dd3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b990bb5792c50bad9e5e772ef84644b7e302396a77d432b324a783e95b8dd3a3->leave($__internal_b990bb5792c50bad9e5e772ef84644b7e302396a77d432b324a783e95b8dd3a3_prof);

        
        $__internal_82ce4a14a17094c8d08f8cdf15b77304101155597387d3fc44f683e63e3012a2->leave($__internal_82ce4a14a17094c8d08f8cdf15b77304101155597387d3fc44f683e63e3012a2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ac43c679b76ea4f6d1e6347438f0c5cb2b63fab75e8f5d4ad50b8721b3bf210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac43c679b76ea4f6d1e6347438f0c5cb2b63fab75e8f5d4ad50b8721b3bf210->enter($__internal_1ac43c679b76ea4f6d1e6347438f0c5cb2b63fab75e8f5d4ad50b8721b3bf210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_124f8aafeb4e5c897892d03651687e6c6b8f3f2bda93a12512fa3a8fd0dbf319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124f8aafeb4e5c897892d03651687e6c6b8f3f2bda93a12512fa3a8fd0dbf319->enter($__internal_124f8aafeb4e5c897892d03651687e6c6b8f3f2bda93a12512fa3a8fd0dbf319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_124f8aafeb4e5c897892d03651687e6c6b8f3f2bda93a12512fa3a8fd0dbf319->leave($__internal_124f8aafeb4e5c897892d03651687e6c6b8f3f2bda93a12512fa3a8fd0dbf319_prof);

        
        $__internal_1ac43c679b76ea4f6d1e6347438f0c5cb2b63fab75e8f5d4ad50b8721b3bf210->leave($__internal_1ac43c679b76ea4f6d1e6347438f0c5cb2b63fab75e8f5d4ad50b8721b3bf210_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f558d8521aa9d9a0d18f5f87d1a05d4536b98ee785516c55a01fd2591d20a946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f558d8521aa9d9a0d18f5f87d1a05d4536b98ee785516c55a01fd2591d20a946->enter($__internal_f558d8521aa9d9a0d18f5f87d1a05d4536b98ee785516c55a01fd2591d20a946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54bb77769c2dd9550b691a4a35027a7c7ba94d7302268db70abe4d10500434df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bb77769c2dd9550b691a4a35027a7c7ba94d7302268db70abe4d10500434df->enter($__internal_54bb77769c2dd9550b691a4a35027a7c7ba94d7302268db70abe4d10500434df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_54bb77769c2dd9550b691a4a35027a7c7ba94d7302268db70abe4d10500434df->leave($__internal_54bb77769c2dd9550b691a4a35027a7c7ba94d7302268db70abe4d10500434df_prof);

        
        $__internal_f558d8521aa9d9a0d18f5f87d1a05d4536b98ee785516c55a01fd2591d20a946->leave($__internal_f558d8521aa9d9a0d18f5f87d1a05d4536b98ee785516c55a01fd2591d20a946_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
