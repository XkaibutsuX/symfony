<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2a010404b98e49e82e681463f67a437952bf082f0fa8701ed0e88a1fd5cdb98f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d324aee7e0c29dedb047c2b5544d8bfdf0a5d38faac5636432e4b4b108d85667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d324aee7e0c29dedb047c2b5544d8bfdf0a5d38faac5636432e4b4b108d85667->enter($__internal_d324aee7e0c29dedb047c2b5544d8bfdf0a5d38faac5636432e4b4b108d85667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f44ada8489fb84ec86c452b3305c96d54ab674562b9b73b3dc0944cc91f6b066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44ada8489fb84ec86c452b3305c96d54ab674562b9b73b3dc0944cc91f6b066->enter($__internal_f44ada8489fb84ec86c452b3305c96d54ab674562b9b73b3dc0944cc91f6b066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d324aee7e0c29dedb047c2b5544d8bfdf0a5d38faac5636432e4b4b108d85667->leave($__internal_d324aee7e0c29dedb047c2b5544d8bfdf0a5d38faac5636432e4b4b108d85667_prof);

        
        $__internal_f44ada8489fb84ec86c452b3305c96d54ab674562b9b73b3dc0944cc91f6b066->leave($__internal_f44ada8489fb84ec86c452b3305c96d54ab674562b9b73b3dc0944cc91f6b066_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95f55b0d9af26a2aadabeacb099854b66abc0a1bd2e5b6ff86aeb8a3a04c2ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f55b0d9af26a2aadabeacb099854b66abc0a1bd2e5b6ff86aeb8a3a04c2ce7->enter($__internal_95f55b0d9af26a2aadabeacb099854b66abc0a1bd2e5b6ff86aeb8a3a04c2ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a39f946095b72951ca21ad9939198b62fd434574cb4cdece31a5b4c97f38707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a39f946095b72951ca21ad9939198b62fd434574cb4cdece31a5b4c97f38707->enter($__internal_4a39f946095b72951ca21ad9939198b62fd434574cb4cdece31a5b4c97f38707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4a39f946095b72951ca21ad9939198b62fd434574cb4cdece31a5b4c97f38707->leave($__internal_4a39f946095b72951ca21ad9939198b62fd434574cb4cdece31a5b4c97f38707_prof);

        
        $__internal_95f55b0d9af26a2aadabeacb099854b66abc0a1bd2e5b6ff86aeb8a3a04c2ce7->leave($__internal_95f55b0d9af26a2aadabeacb099854b66abc0a1bd2e5b6ff86aeb8a3a04c2ce7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c3f9b699ba5a41f7c02380d731774e4d55a40c218d7fed3367ea33a3216f07c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3f9b699ba5a41f7c02380d731774e4d55a40c218d7fed3367ea33a3216f07c->enter($__internal_0c3f9b699ba5a41f7c02380d731774e4d55a40c218d7fed3367ea33a3216f07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e1ae2c992376b015767260f276f9af616f21658c08506e1750cad051862e524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1ae2c992376b015767260f276f9af616f21658c08506e1750cad051862e524->enter($__internal_8e1ae2c992376b015767260f276f9af616f21658c08506e1750cad051862e524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8e1ae2c992376b015767260f276f9af616f21658c08506e1750cad051862e524->leave($__internal_8e1ae2c992376b015767260f276f9af616f21658c08506e1750cad051862e524_prof);

        
        $__internal_0c3f9b699ba5a41f7c02380d731774e4d55a40c218d7fed3367ea33a3216f07c->leave($__internal_0c3f9b699ba5a41f7c02380d731774e4d55a40c218d7fed3367ea33a3216f07c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a759579626ddeb037c23a8f6229a2c554e4571383797876d46eadd95451f76cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a759579626ddeb037c23a8f6229a2c554e4571383797876d46eadd95451f76cd->enter($__internal_a759579626ddeb037c23a8f6229a2c554e4571383797876d46eadd95451f76cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dee57a35fdc7b73924ebc36b8a02e90961b3b281238c5860d0a442b57da81b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dee57a35fdc7b73924ebc36b8a02e90961b3b281238c5860d0a442b57da81b3->enter($__internal_7dee57a35fdc7b73924ebc36b8a02e90961b3b281238c5860d0a442b57da81b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7dee57a35fdc7b73924ebc36b8a02e90961b3b281238c5860d0a442b57da81b3->leave($__internal_7dee57a35fdc7b73924ebc36b8a02e90961b3b281238c5860d0a442b57da81b3_prof);

        
        $__internal_a759579626ddeb037c23a8f6229a2c554e4571383797876d46eadd95451f76cd->leave($__internal_a759579626ddeb037c23a8f6229a2c554e4571383797876d46eadd95451f76cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/justine/yolo/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
