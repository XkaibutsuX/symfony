<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_a874d3bfad26ee4ad522087e3d221f2d0cbd5b4a291a2ca1ab507779d8d1f003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_740ab7714e280ebe03ca6da80610f575e88ff45bf10b1f8915c4d73bcd4e73de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740ab7714e280ebe03ca6da80610f575e88ff45bf10b1f8915c4d73bcd4e73de->enter($__internal_740ab7714e280ebe03ca6da80610f575e88ff45bf10b1f8915c4d73bcd4e73de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_49f726b52ad5c868ddd94786e35a59598683734db777b73cfcc3e3865e15278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f726b52ad5c868ddd94786e35a59598683734db777b73cfcc3e3865e15278b->enter($__internal_49f726b52ad5c868ddd94786e35a59598683734db777b73cfcc3e3865e15278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_740ab7714e280ebe03ca6da80610f575e88ff45bf10b1f8915c4d73bcd4e73de->leave($__internal_740ab7714e280ebe03ca6da80610f575e88ff45bf10b1f8915c4d73bcd4e73de_prof);

        
        $__internal_49f726b52ad5c868ddd94786e35a59598683734db777b73cfcc3e3865e15278b->leave($__internal_49f726b52ad5c868ddd94786e35a59598683734db777b73cfcc3e3865e15278b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/home/justine/yolo/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
