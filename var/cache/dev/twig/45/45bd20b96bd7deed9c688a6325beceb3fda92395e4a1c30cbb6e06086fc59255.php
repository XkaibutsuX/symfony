<?php

/* default/index.html.twig */
class __TwigTemplate_08ad2091167d8fb5f4de648978a3a8e6638470901ec61f7feab5d00eae2d4c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06b224f237bd6d0f3fef882f1c4b7c10b26954722a9d6ec821cc50bb94282ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b224f237bd6d0f3fef882f1c4b7c10b26954722a9d6ec821cc50bb94282ff2->enter($__internal_06b224f237bd6d0f3fef882f1c4b7c10b26954722a9d6ec821cc50bb94282ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_50f43e030df3024e3316ba5a9d75514410595a3914fe6877eca42784870581a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f43e030df3024e3316ba5a9d75514410595a3914fe6877eca42784870581a4->enter($__internal_50f43e030df3024e3316ba5a9d75514410595a3914fe6877eca42784870581a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b224f237bd6d0f3fef882f1c4b7c10b26954722a9d6ec821cc50bb94282ff2->leave($__internal_06b224f237bd6d0f3fef882f1c4b7c10b26954722a9d6ec821cc50bb94282ff2_prof);

        
        $__internal_50f43e030df3024e3316ba5a9d75514410595a3914fe6877eca42784870581a4->leave($__internal_50f43e030df3024e3316ba5a9d75514410595a3914fe6877eca42784870581a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c889f64baa0bd1a8d7cb89f3903bf1e4a7a344087d030005cb3e049c9859b88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c889f64baa0bd1a8d7cb89f3903bf1e4a7a344087d030005cb3e049c9859b88d->enter($__internal_c889f64baa0bd1a8d7cb89f3903bf1e4a7a344087d030005cb3e049c9859b88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af0051505f27691bc7a8308ea543ab307114e1f769cfe5abdea6ab1098b065e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0051505f27691bc7a8308ea543ab307114e1f769cfe5abdea6ab1098b065e8->enter($__internal_af0051505f27691bc7a8308ea543ab307114e1f769cfe5abdea6ab1098b065e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('App\Twig\GreetExtension')->greetUser((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
        echo "</h1>

";
        
        $__internal_af0051505f27691bc7a8308ea543ab307114e1f769cfe5abdea6ab1098b065e8->leave($__internal_af0051505f27691bc7a8308ea543ab307114e1f769cfe5abdea6ab1098b065e8_prof);

        
        $__internal_c889f64baa0bd1a8d7cb89f3903bf1e4a7a344087d030005cb3e049c9859b88d->leave($__internal_c889f64baa0bd1a8d7cb89f3903bf1e4a7a344087d030005cb3e049c9859b88d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends 'base.html.twig' %}

{% block body %}


<h1>{{ name|greet }}</h1>

{% endblock %}
", "default/index.html.twig", "/home/justine/yolo/templates/default/index.html.twig");
    }
}
