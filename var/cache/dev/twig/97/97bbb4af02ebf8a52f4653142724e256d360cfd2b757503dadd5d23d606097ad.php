<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fcb4e38b065ec1fcc594975f20a6814963c36537e27874d5e98972aa6fb9f4f7 extends Twig_Template
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
        $__internal_38f41d139edcb9d5a8c7cf38d1a07715190255c564203cda25e3990a8870e241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f41d139edcb9d5a8c7cf38d1a07715190255c564203cda25e3990a8870e241->enter($__internal_38f41d139edcb9d5a8c7cf38d1a07715190255c564203cda25e3990a8870e241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_933c1938869804d9e8aa615855218d222e30c632511700fda0fe1946b3a932ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933c1938869804d9e8aa615855218d222e30c632511700fda0fe1946b3a932ee->enter($__internal_933c1938869804d9e8aa615855218d222e30c632511700fda0fe1946b3a932ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f41d139edcb9d5a8c7cf38d1a07715190255c564203cda25e3990a8870e241->leave($__internal_38f41d139edcb9d5a8c7cf38d1a07715190255c564203cda25e3990a8870e241_prof);

        
        $__internal_933c1938869804d9e8aa615855218d222e30c632511700fda0fe1946b3a932ee->leave($__internal_933c1938869804d9e8aa615855218d222e30c632511700fda0fe1946b3a932ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e113cd2eb332d4ef44b19b37e5be3131f4d115b1fc25e23d4a16898d786405b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e113cd2eb332d4ef44b19b37e5be3131f4d115b1fc25e23d4a16898d786405b4->enter($__internal_e113cd2eb332d4ef44b19b37e5be3131f4d115b1fc25e23d4a16898d786405b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6902615fda68fcc885bbb476b952a67c07e7f764479ca148161b02bbabecaa6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6902615fda68fcc885bbb476b952a67c07e7f764479ca148161b02bbabecaa6d->enter($__internal_6902615fda68fcc885bbb476b952a67c07e7f764479ca148161b02bbabecaa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6902615fda68fcc885bbb476b952a67c07e7f764479ca148161b02bbabecaa6d->leave($__internal_6902615fda68fcc885bbb476b952a67c07e7f764479ca148161b02bbabecaa6d_prof);

        
        $__internal_e113cd2eb332d4ef44b19b37e5be3131f4d115b1fc25e23d4a16898d786405b4->leave($__internal_e113cd2eb332d4ef44b19b37e5be3131f4d115b1fc25e23d4a16898d786405b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_815c443f779b94f414cd816f494930d644bc80d239af24bb9e850f6fae9a362f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815c443f779b94f414cd816f494930d644bc80d239af24bb9e850f6fae9a362f->enter($__internal_815c443f779b94f414cd816f494930d644bc80d239af24bb9e850f6fae9a362f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_476def1c31f9e53fa90fa3709d5d08befb184fd06e2c2883a9f4148836ecd092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476def1c31f9e53fa90fa3709d5d08befb184fd06e2c2883a9f4148836ecd092->enter($__internal_476def1c31f9e53fa90fa3709d5d08befb184fd06e2c2883a9f4148836ecd092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_476def1c31f9e53fa90fa3709d5d08befb184fd06e2c2883a9f4148836ecd092->leave($__internal_476def1c31f9e53fa90fa3709d5d08befb184fd06e2c2883a9f4148836ecd092_prof);

        
        $__internal_815c443f779b94f414cd816f494930d644bc80d239af24bb9e850f6fae9a362f->leave($__internal_815c443f779b94f414cd816f494930d644bc80d239af24bb9e850f6fae9a362f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e3bb8d968a8b56c171b5b05598e182f55bad204e07933e1bfa0cfd0f9dc4eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3bb8d968a8b56c171b5b05598e182f55bad204e07933e1bfa0cfd0f9dc4eaa->enter($__internal_0e3bb8d968a8b56c171b5b05598e182f55bad204e07933e1bfa0cfd0f9dc4eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1308364c58b954510aaac44e2c721552f642a94006b89bd33d4bf289f86b1550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1308364c58b954510aaac44e2c721552f642a94006b89bd33d4bf289f86b1550->enter($__internal_1308364c58b954510aaac44e2c721552f642a94006b89bd33d4bf289f86b1550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1308364c58b954510aaac44e2c721552f642a94006b89bd33d4bf289f86b1550->leave($__internal_1308364c58b954510aaac44e2c721552f642a94006b89bd33d4bf289f86b1550_prof);

        
        $__internal_0e3bb8d968a8b56c171b5b05598e182f55bad204e07933e1bfa0cfd0f9dc4eaa->leave($__internal_0e3bb8d968a8b56c171b5b05598e182f55bad204e07933e1bfa0cfd0f9dc4eaa_prof);

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
