<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8e6d909098ad23adc5e840c848f04576a7ef233613ed6f70e1fe716c1c3c6a11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05aadbad89bb80bb4e9c293e6d64e08436d661fa6ee3848870ddfde6310d4108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05aadbad89bb80bb4e9c293e6d64e08436d661fa6ee3848870ddfde6310d4108->enter($__internal_05aadbad89bb80bb4e9c293e6d64e08436d661fa6ee3848870ddfde6310d4108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d3cef1caa7bfdf2a3afbb811ede3cd68e833de6369cddfb3805c22f82f3cd73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cef1caa7bfdf2a3afbb811ede3cd68e833de6369cddfb3805c22f82f3cd73e->enter($__internal_d3cef1caa7bfdf2a3afbb811ede3cd68e833de6369cddfb3805c22f82f3cd73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05aadbad89bb80bb4e9c293e6d64e08436d661fa6ee3848870ddfde6310d4108->leave($__internal_05aadbad89bb80bb4e9c293e6d64e08436d661fa6ee3848870ddfde6310d4108_prof);

        
        $__internal_d3cef1caa7bfdf2a3afbb811ede3cd68e833de6369cddfb3805c22f82f3cd73e->leave($__internal_d3cef1caa7bfdf2a3afbb811ede3cd68e833de6369cddfb3805c22f82f3cd73e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1097f161544e8404e0d6ca4f67f2331eb12c323c9ba2d75c5fee8582ee197e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1097f161544e8404e0d6ca4f67f2331eb12c323c9ba2d75c5fee8582ee197e6f->enter($__internal_1097f161544e8404e0d6ca4f67f2331eb12c323c9ba2d75c5fee8582ee197e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8906e9d85744f317797aba1a76b24997dd05bde18b4a9e126b6c7a6a8e2fd1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8906e9d85744f317797aba1a76b24997dd05bde18b4a9e126b6c7a6a8e2fd1be->enter($__internal_8906e9d85744f317797aba1a76b24997dd05bde18b4a9e126b6c7a6a8e2fd1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8906e9d85744f317797aba1a76b24997dd05bde18b4a9e126b6c7a6a8e2fd1be->leave($__internal_8906e9d85744f317797aba1a76b24997dd05bde18b4a9e126b6c7a6a8e2fd1be_prof);

        
        $__internal_1097f161544e8404e0d6ca4f67f2331eb12c323c9ba2d75c5fee8582ee197e6f->leave($__internal_1097f161544e8404e0d6ca4f67f2331eb12c323c9ba2d75c5fee8582ee197e6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77a60769a65e4675b50b091da4259c8595bbf3f50dc5ae67f8b9160bf23c6675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a60769a65e4675b50b091da4259c8595bbf3f50dc5ae67f8b9160bf23c6675->enter($__internal_77a60769a65e4675b50b091da4259c8595bbf3f50dc5ae67f8b9160bf23c6675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fbebec6250a3491e0a7b9ef7b46b2737d8f22dd714adaaf716103692efff1a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbebec6250a3491e0a7b9ef7b46b2737d8f22dd714adaaf716103692efff1a86->enter($__internal_fbebec6250a3491e0a7b9ef7b46b2737d8f22dd714adaaf716103692efff1a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fbebec6250a3491e0a7b9ef7b46b2737d8f22dd714adaaf716103692efff1a86->leave($__internal_fbebec6250a3491e0a7b9ef7b46b2737d8f22dd714adaaf716103692efff1a86_prof);

        
        $__internal_77a60769a65e4675b50b091da4259c8595bbf3f50dc5ae67f8b9160bf23c6675->leave($__internal_77a60769a65e4675b50b091da4259c8595bbf3f50dc5ae67f8b9160bf23c6675_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d82c6bc4acb9c7621e3c9a3d5d721e5e8a4dc69530193ee127687e12f2c372a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82c6bc4acb9c7621e3c9a3d5d721e5e8a4dc69530193ee127687e12f2c372a9->enter($__internal_d82c6bc4acb9c7621e3c9a3d5d721e5e8a4dc69530193ee127687e12f2c372a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8678849c7a001b4c0baa795ef5c853a81b9ec74ea0b3033c103912be3cce99a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8678849c7a001b4c0baa795ef5c853a81b9ec74ea0b3033c103912be3cce99a4->enter($__internal_8678849c7a001b4c0baa795ef5c853a81b9ec74ea0b3033c103912be3cce99a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8678849c7a001b4c0baa795ef5c853a81b9ec74ea0b3033c103912be3cce99a4->leave($__internal_8678849c7a001b4c0baa795ef5c853a81b9ec74ea0b3033c103912be3cce99a4_prof);

        
        $__internal_d82c6bc4acb9c7621e3c9a3d5d721e5e8a4dc69530193ee127687e12f2c372a9->leave($__internal_d82c6bc4acb9c7621e3c9a3d5d721e5e8a4dc69530193ee127687e12f2c372a9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/justine/yolo/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
