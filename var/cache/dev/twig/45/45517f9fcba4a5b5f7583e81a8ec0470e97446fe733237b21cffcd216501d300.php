<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2aaf6dcbda1f293a7e2360507223edef08573ac4783636ed42662659e4cb492e extends Twig_Template
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
        $__internal_bbafa16e5179715a6127f8aa53abe40c04ca1e25a1f8f0b30e97a9a0ff4f8e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbafa16e5179715a6127f8aa53abe40c04ca1e25a1f8f0b30e97a9a0ff4f8e06->enter($__internal_bbafa16e5179715a6127f8aa53abe40c04ca1e25a1f8f0b30e97a9a0ff4f8e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f3fbfbf1835e170aa5bdc56acd9f4c4e5751524babbc64c80ce54cede28582e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fbfbf1835e170aa5bdc56acd9f4c4e5751524babbc64c80ce54cede28582e3->enter($__internal_f3fbfbf1835e170aa5bdc56acd9f4c4e5751524babbc64c80ce54cede28582e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_bbafa16e5179715a6127f8aa53abe40c04ca1e25a1f8f0b30e97a9a0ff4f8e06->leave($__internal_bbafa16e5179715a6127f8aa53abe40c04ca1e25a1f8f0b30e97a9a0ff4f8e06_prof);

        
        $__internal_f3fbfbf1835e170aa5bdc56acd9f4c4e5751524babbc64c80ce54cede28582e3->leave($__internal_f3fbfbf1835e170aa5bdc56acd9f4c4e5751524babbc64c80ce54cede28582e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e994b3767269301a8af0f81667ed06ba08ca924e16ce1e7d7ba5de9aec84c12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e994b3767269301a8af0f81667ed06ba08ca924e16ce1e7d7ba5de9aec84c12e->enter($__internal_e994b3767269301a8af0f81667ed06ba08ca924e16ce1e7d7ba5de9aec84c12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15e424b881b60a5b3b72f60b836376f83c7beb7d540f45dfdf4fbbdb9aac6217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e424b881b60a5b3b72f60b836376f83c7beb7d540f45dfdf4fbbdb9aac6217->enter($__internal_15e424b881b60a5b3b72f60b836376f83c7beb7d540f45dfdf4fbbdb9aac6217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_15e424b881b60a5b3b72f60b836376f83c7beb7d540f45dfdf4fbbdb9aac6217->leave($__internal_15e424b881b60a5b3b72f60b836376f83c7beb7d540f45dfdf4fbbdb9aac6217_prof);

        
        $__internal_e994b3767269301a8af0f81667ed06ba08ca924e16ce1e7d7ba5de9aec84c12e->leave($__internal_e994b3767269301a8af0f81667ed06ba08ca924e16ce1e7d7ba5de9aec84c12e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a025c60ca67116488ef42bf74a26a50e6893d8fa3a1f5c3844dc89916dfbbce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a025c60ca67116488ef42bf74a26a50e6893d8fa3a1f5c3844dc89916dfbbce3->enter($__internal_a025c60ca67116488ef42bf74a26a50e6893d8fa3a1f5c3844dc89916dfbbce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f63d6300de21ce9f67ca9b37485f7801253ee7332219f0d72ad5f4d366f78a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63d6300de21ce9f67ca9b37485f7801253ee7332219f0d72ad5f4d366f78a3d->enter($__internal_f63d6300de21ce9f67ca9b37485f7801253ee7332219f0d72ad5f4d366f78a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f63d6300de21ce9f67ca9b37485f7801253ee7332219f0d72ad5f4d366f78a3d->leave($__internal_f63d6300de21ce9f67ca9b37485f7801253ee7332219f0d72ad5f4d366f78a3d_prof);

        
        $__internal_a025c60ca67116488ef42bf74a26a50e6893d8fa3a1f5c3844dc89916dfbbce3->leave($__internal_a025c60ca67116488ef42bf74a26a50e6893d8fa3a1f5c3844dc89916dfbbce3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d31606bc6f74d6e4acbcd66febe8059212c3f1cb50061a7defc4ec8a4d04475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d31606bc6f74d6e4acbcd66febe8059212c3f1cb50061a7defc4ec8a4d04475->enter($__internal_0d31606bc6f74d6e4acbcd66febe8059212c3f1cb50061a7defc4ec8a4d04475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc58be4f30b19d86aa818eb46753b610224377fe9b4183aafb113daf5afa86bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc58be4f30b19d86aa818eb46753b610224377fe9b4183aafb113daf5afa86bd->enter($__internal_cc58be4f30b19d86aa818eb46753b610224377fe9b4183aafb113daf5afa86bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc58be4f30b19d86aa818eb46753b610224377fe9b4183aafb113daf5afa86bd->leave($__internal_cc58be4f30b19d86aa818eb46753b610224377fe9b4183aafb113daf5afa86bd_prof);

        
        $__internal_0d31606bc6f74d6e4acbcd66febe8059212c3f1cb50061a7defc4ec8a4d04475->leave($__internal_0d31606bc6f74d6e4acbcd66febe8059212c3f1cb50061a7defc4ec8a4d04475_prof);

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
