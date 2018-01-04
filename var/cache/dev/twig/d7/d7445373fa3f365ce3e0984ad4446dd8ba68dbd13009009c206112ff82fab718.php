<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d145e8184b539fd2fe0c9eeaa7ac00bc96a4b64fbd80185f555e0badfbb680fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a0b2095e96a5ec41481e00de2e0c8864e2ebfa766573121eb2fbdfd8acbdf93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0b2095e96a5ec41481e00de2e0c8864e2ebfa766573121eb2fbdfd8acbdf93->enter($__internal_3a0b2095e96a5ec41481e00de2e0c8864e2ebfa766573121eb2fbdfd8acbdf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_1b6f62d88d7c9cc5223cebe26c2bdaf0a737364278bbf0aaacee3853fcbaccb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6f62d88d7c9cc5223cebe26c2bdaf0a737364278bbf0aaacee3853fcbaccb9->enter($__internal_1b6f62d88d7c9cc5223cebe26c2bdaf0a737364278bbf0aaacee3853fcbaccb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3a0b2095e96a5ec41481e00de2e0c8864e2ebfa766573121eb2fbdfd8acbdf93->leave($__internal_3a0b2095e96a5ec41481e00de2e0c8864e2ebfa766573121eb2fbdfd8acbdf93_prof);

        
        $__internal_1b6f62d88d7c9cc5223cebe26c2bdaf0a737364278bbf0aaacee3853fcbaccb9->leave($__internal_1b6f62d88d7c9cc5223cebe26c2bdaf0a737364278bbf0aaacee3853fcbaccb9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e82ce7ec15152426ea8fc9458e356c98624fdf24956021e227c2c9301a883b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e82ce7ec15152426ea8fc9458e356c98624fdf24956021e227c2c9301a883b4->enter($__internal_3e82ce7ec15152426ea8fc9458e356c98624fdf24956021e227c2c9301a883b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_028857d35288ce7df5f2cec518a4649a18feb5cb00b9e4cbe505979956ddbae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028857d35288ce7df5f2cec518a4649a18feb5cb00b9e4cbe505979956ddbae2->enter($__internal_028857d35288ce7df5f2cec518a4649a18feb5cb00b9e4cbe505979956ddbae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_028857d35288ce7df5f2cec518a4649a18feb5cb00b9e4cbe505979956ddbae2->leave($__internal_028857d35288ce7df5f2cec518a4649a18feb5cb00b9e4cbe505979956ddbae2_prof);

        
        $__internal_3e82ce7ec15152426ea8fc9458e356c98624fdf24956021e227c2c9301a883b4->leave($__internal_3e82ce7ec15152426ea8fc9458e356c98624fdf24956021e227c2c9301a883b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/justine/yolo/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
