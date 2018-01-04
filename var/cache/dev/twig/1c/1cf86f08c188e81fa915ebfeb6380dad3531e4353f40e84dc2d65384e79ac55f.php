<?php

/* base.html.twig */
class __TwigTemplate_2df5a7c430f84dda53778985c9332572fe714f7b0c14b6eb6b1c9cde22b333d8 extends Twig_Template
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
        $__internal_7f59b509b5f5204a082359fae55395a509e1ecb32ede0ad8b064c956e35e8c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f59b509b5f5204a082359fae55395a509e1ecb32ede0ad8b064c956e35e8c53->enter($__internal_7f59b509b5f5204a082359fae55395a509e1ecb32ede0ad8b064c956e35e8c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7b249c6aac5ee499c9aa33822a48b984fdd4fb8a5e5dab39de17984afec205a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b249c6aac5ee499c9aa33822a48b984fdd4fb8a5e5dab39de17984afec205a9->enter($__internal_7b249c6aac5ee499c9aa33822a48b984fdd4fb8a5e5dab39de17984afec205a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7f59b509b5f5204a082359fae55395a509e1ecb32ede0ad8b064c956e35e8c53->leave($__internal_7f59b509b5f5204a082359fae55395a509e1ecb32ede0ad8b064c956e35e8c53_prof);

        
        $__internal_7b249c6aac5ee499c9aa33822a48b984fdd4fb8a5e5dab39de17984afec205a9->leave($__internal_7b249c6aac5ee499c9aa33822a48b984fdd4fb8a5e5dab39de17984afec205a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_25dd782fb7574d00f832e05003cf5600ee5e27e6684574d20e012ba8562b4a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25dd782fb7574d00f832e05003cf5600ee5e27e6684574d20e012ba8562b4a43->enter($__internal_25dd782fb7574d00f832e05003cf5600ee5e27e6684574d20e012ba8562b4a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bec28e6875e834c6ee81bcac694df82188c24577091e7801f62542368f463d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec28e6875e834c6ee81bcac694df82188c24577091e7801f62542368f463d16->enter($__internal_bec28e6875e834c6ee81bcac694df82188c24577091e7801f62542368f463d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bec28e6875e834c6ee81bcac694df82188c24577091e7801f62542368f463d16->leave($__internal_bec28e6875e834c6ee81bcac694df82188c24577091e7801f62542368f463d16_prof);

        
        $__internal_25dd782fb7574d00f832e05003cf5600ee5e27e6684574d20e012ba8562b4a43->leave($__internal_25dd782fb7574d00f832e05003cf5600ee5e27e6684574d20e012ba8562b4a43_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4067286db0579d611425bbba39f29f5a200e8d6c606454b7dd0b849f445d0dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4067286db0579d611425bbba39f29f5a200e8d6c606454b7dd0b849f445d0dff->enter($__internal_4067286db0579d611425bbba39f29f5a200e8d6c606454b7dd0b849f445d0dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06fe19ec00713eee103b34f2d253ea6ce05ec7fda846f9f6db32624874720bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fe19ec00713eee103b34f2d253ea6ce05ec7fda846f9f6db32624874720bc9->enter($__internal_06fe19ec00713eee103b34f2d253ea6ce05ec7fda846f9f6db32624874720bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_06fe19ec00713eee103b34f2d253ea6ce05ec7fda846f9f6db32624874720bc9->leave($__internal_06fe19ec00713eee103b34f2d253ea6ce05ec7fda846f9f6db32624874720bc9_prof);

        
        $__internal_4067286db0579d611425bbba39f29f5a200e8d6c606454b7dd0b849f445d0dff->leave($__internal_4067286db0579d611425bbba39f29f5a200e8d6c606454b7dd0b849f445d0dff_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d17584391e3aa2c88847f6556ff6967d1904e08fc1f3cb398bf12752567cdee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d17584391e3aa2c88847f6556ff6967d1904e08fc1f3cb398bf12752567cdee->enter($__internal_7d17584391e3aa2c88847f6556ff6967d1904e08fc1f3cb398bf12752567cdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce7784e4d2e4d2179f845401e3bcb93c08241a44486447ec8b71151906782675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7784e4d2e4d2179f845401e3bcb93c08241a44486447ec8b71151906782675->enter($__internal_ce7784e4d2e4d2179f845401e3bcb93c08241a44486447ec8b71151906782675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce7784e4d2e4d2179f845401e3bcb93c08241a44486447ec8b71151906782675->leave($__internal_ce7784e4d2e4d2179f845401e3bcb93c08241a44486447ec8b71151906782675_prof);

        
        $__internal_7d17584391e3aa2c88847f6556ff6967d1904e08fc1f3cb398bf12752567cdee->leave($__internal_7d17584391e3aa2c88847f6556ff6967d1904e08fc1f3cb398bf12752567cdee_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_189d19ed2ac4c0fb643b0ed2c0e4bcb17642cdb68afc1dd7f1972ae65bddd53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189d19ed2ac4c0fb643b0ed2c0e4bcb17642cdb68afc1dd7f1972ae65bddd53a->enter($__internal_189d19ed2ac4c0fb643b0ed2c0e4bcb17642cdb68afc1dd7f1972ae65bddd53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_de75c24000f2d9b846cc8b6de8cbfc6fb8e90114f95903cd4a2957ac155ac53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de75c24000f2d9b846cc8b6de8cbfc6fb8e90114f95903cd4a2957ac155ac53c->enter($__internal_de75c24000f2d9b846cc8b6de8cbfc6fb8e90114f95903cd4a2957ac155ac53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de75c24000f2d9b846cc8b6de8cbfc6fb8e90114f95903cd4a2957ac155ac53c->leave($__internal_de75c24000f2d9b846cc8b6de8cbfc6fb8e90114f95903cd4a2957ac155ac53c_prof);

        
        $__internal_189d19ed2ac4c0fb643b0ed2c0e4bcb17642cdb68afc1dd7f1972ae65bddd53a->leave($__internal_189d19ed2ac4c0fb643b0ed2c0e4bcb17642cdb68afc1dd7f1972ae65bddd53a_prof);

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
