<?php

/* base.html.twig */
class __TwigTemplate_7cf4efc1df6530f7ce86754d2e1760cdce4244d6d88038ecc207636f3d0ca3c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa0437bdcf09b5c425ba579fffad57817b20750e16bc4ef4c45a626181281574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0437bdcf09b5c425ba579fffad57817b20750e16bc4ef4c45a626181281574->enter($__internal_fa0437bdcf09b5c425ba579fffad57817b20750e16bc4ef4c45a626181281574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_042f8f9b37e8f14fd281d9836b8cbd859d4d026d69845e4e88134bb1d6f8e8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042f8f9b37e8f14fd281d9836b8cbd859d4d026d69845e4e88134bb1d6f8e8bb->enter($__internal_042f8f9b37e8f14fd281d9836b8cbd859d4d026d69845e4e88134bb1d6f8e8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_fa0437bdcf09b5c425ba579fffad57817b20750e16bc4ef4c45a626181281574->leave($__internal_fa0437bdcf09b5c425ba579fffad57817b20750e16bc4ef4c45a626181281574_prof);

        
        $__internal_042f8f9b37e8f14fd281d9836b8cbd859d4d026d69845e4e88134bb1d6f8e8bb->leave($__internal_042f8f9b37e8f14fd281d9836b8cbd859d4d026d69845e4e88134bb1d6f8e8bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec92f275f0e941048357bcd58c187270fd40e71e0fa48d9ce31e065468a912b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec92f275f0e941048357bcd58c187270fd40e71e0fa48d9ce31e065468a912b2->enter($__internal_ec92f275f0e941048357bcd58c187270fd40e71e0fa48d9ce31e065468a912b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74682653637386d35cc14d479e00bf215264d23c63175aad1cee94c4e4a023d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74682653637386d35cc14d479e00bf215264d23c63175aad1cee94c4e4a023d6->enter($__internal_74682653637386d35cc14d479e00bf215264d23c63175aad1cee94c4e4a023d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_74682653637386d35cc14d479e00bf215264d23c63175aad1cee94c4e4a023d6->leave($__internal_74682653637386d35cc14d479e00bf215264d23c63175aad1cee94c4e4a023d6_prof);

        
        $__internal_ec92f275f0e941048357bcd58c187270fd40e71e0fa48d9ce31e065468a912b2->leave($__internal_ec92f275f0e941048357bcd58c187270fd40e71e0fa48d9ce31e065468a912b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55d7cf7c14d9a6cdbcf72b457665080f434c6c10da8666dd5869f9620dcfa41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d7cf7c14d9a6cdbcf72b457665080f434c6c10da8666dd5869f9620dcfa41a->enter($__internal_55d7cf7c14d9a6cdbcf72b457665080f434c6c10da8666dd5869f9620dcfa41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c22183e7ab102a05f71d6dd4f24e06401e959d1f5173979cfec0b680346d1ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22183e7ab102a05f71d6dd4f24e06401e959d1f5173979cfec0b680346d1ddf->enter($__internal_c22183e7ab102a05f71d6dd4f24e06401e959d1f5173979cfec0b680346d1ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c22183e7ab102a05f71d6dd4f24e06401e959d1f5173979cfec0b680346d1ddf->leave($__internal_c22183e7ab102a05f71d6dd4f24e06401e959d1f5173979cfec0b680346d1ddf_prof);

        
        $__internal_55d7cf7c14d9a6cdbcf72b457665080f434c6c10da8666dd5869f9620dcfa41a->leave($__internal_55d7cf7c14d9a6cdbcf72b457665080f434c6c10da8666dd5869f9620dcfa41a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fec2bf19b84dd62a2a847316873b2d2d32863c36a88b36ad823fc0d653d9318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fec2bf19b84dd62a2a847316873b2d2d32863c36a88b36ad823fc0d653d9318->enter($__internal_1fec2bf19b84dd62a2a847316873b2d2d32863c36a88b36ad823fc0d653d9318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_823bbb0e6f4e7e92ac52378f240a33e1f96aca79688d336a6d58fcf248021c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823bbb0e6f4e7e92ac52378f240a33e1f96aca79688d336a6d58fcf248021c3e->enter($__internal_823bbb0e6f4e7e92ac52378f240a33e1f96aca79688d336a6d58fcf248021c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_823bbb0e6f4e7e92ac52378f240a33e1f96aca79688d336a6d58fcf248021c3e->leave($__internal_823bbb0e6f4e7e92ac52378f240a33e1f96aca79688d336a6d58fcf248021c3e_prof);

        
        $__internal_1fec2bf19b84dd62a2a847316873b2d2d32863c36a88b36ad823fc0d653d9318->leave($__internal_1fec2bf19b84dd62a2a847316873b2d2d32863c36a88b36ad823fc0d653d9318_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d86d91be0e8a91063aa819696203481dd055023d6e0b8b62696d549b1522aa9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86d91be0e8a91063aa819696203481dd055023d6e0b8b62696d549b1522aa9c->enter($__internal_d86d91be0e8a91063aa819696203481dd055023d6e0b8b62696d549b1522aa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ad0828b6887e1cab6f639ec912428d00e3ee48bc045777522031048a2241136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad0828b6887e1cab6f639ec912428d00e3ee48bc045777522031048a2241136->enter($__internal_3ad0828b6887e1cab6f639ec912428d00e3ee48bc045777522031048a2241136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ad0828b6887e1cab6f639ec912428d00e3ee48bc045777522031048a2241136->leave($__internal_3ad0828b6887e1cab6f639ec912428d00e3ee48bc045777522031048a2241136_prof);

        
        $__internal_d86d91be0e8a91063aa819696203481dd055023d6e0b8b62696d549b1522aa9c->leave($__internal_d86d91be0e8a91063aa819696203481dd055023d6e0b8b62696d549b1522aa9c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/justine/yolo/templates/base.html.twig");
    }
}
