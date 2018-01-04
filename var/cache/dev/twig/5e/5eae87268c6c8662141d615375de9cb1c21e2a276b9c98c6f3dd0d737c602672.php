<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1476e1f80c89984344ab3715e195f228f63166a4ad5ed7423d1e2cab0055e496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_23d953120bf92439ca20ae9cb814beb42fc85878ae6c3d362d3bbb672c64b17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d953120bf92439ca20ae9cb814beb42fc85878ae6c3d362d3bbb672c64b17f->enter($__internal_23d953120bf92439ca20ae9cb814beb42fc85878ae6c3d362d3bbb672c64b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a223d6edfb6ba292f035f56b0fcd4a0bdf7d77b42a641b25581d0c1a6354e5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a223d6edfb6ba292f035f56b0fcd4a0bdf7d77b42a641b25581d0c1a6354e5ed->enter($__internal_a223d6edfb6ba292f035f56b0fcd4a0bdf7d77b42a641b25581d0c1a6354e5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d953120bf92439ca20ae9cb814beb42fc85878ae6c3d362d3bbb672c64b17f->leave($__internal_23d953120bf92439ca20ae9cb814beb42fc85878ae6c3d362d3bbb672c64b17f_prof);

        
        $__internal_a223d6edfb6ba292f035f56b0fcd4a0bdf7d77b42a641b25581d0c1a6354e5ed->leave($__internal_a223d6edfb6ba292f035f56b0fcd4a0bdf7d77b42a641b25581d0c1a6354e5ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cee99688d04dca50e38cc2064ef650ec63913a95fd146e6145f9b5bf2c51524e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee99688d04dca50e38cc2064ef650ec63913a95fd146e6145f9b5bf2c51524e->enter($__internal_cee99688d04dca50e38cc2064ef650ec63913a95fd146e6145f9b5bf2c51524e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3b3ef17b4ef575c7a7bef105eeb2e2eb6015593afbb768590befa5885cfbb477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3ef17b4ef575c7a7bef105eeb2e2eb6015593afbb768590befa5885cfbb477->enter($__internal_3b3ef17b4ef575c7a7bef105eeb2e2eb6015593afbb768590befa5885cfbb477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3b3ef17b4ef575c7a7bef105eeb2e2eb6015593afbb768590befa5885cfbb477->leave($__internal_3b3ef17b4ef575c7a7bef105eeb2e2eb6015593afbb768590befa5885cfbb477_prof);

        
        $__internal_cee99688d04dca50e38cc2064ef650ec63913a95fd146e6145f9b5bf2c51524e->leave($__internal_cee99688d04dca50e38cc2064ef650ec63913a95fd146e6145f9b5bf2c51524e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21d606039d953cf9e2e4288bb707e0e1169b71bd2e3ff2034573ba9f4d72a060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d606039d953cf9e2e4288bb707e0e1169b71bd2e3ff2034573ba9f4d72a060->enter($__internal_21d606039d953cf9e2e4288bb707e0e1169b71bd2e3ff2034573ba9f4d72a060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa2fda3eacc4737fbc548143782bf8dbfafd917e3cf0b6b19859169bdf9b6512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2fda3eacc4737fbc548143782bf8dbfafd917e3cf0b6b19859169bdf9b6512->enter($__internal_fa2fda3eacc4737fbc548143782bf8dbfafd917e3cf0b6b19859169bdf9b6512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fa2fda3eacc4737fbc548143782bf8dbfafd917e3cf0b6b19859169bdf9b6512->leave($__internal_fa2fda3eacc4737fbc548143782bf8dbfafd917e3cf0b6b19859169bdf9b6512_prof);

        
        $__internal_21d606039d953cf9e2e4288bb707e0e1169b71bd2e3ff2034573ba9f4d72a060->leave($__internal_21d606039d953cf9e2e4288bb707e0e1169b71bd2e3ff2034573ba9f4d72a060_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a78ff7eb033c0a53c7f4dffb3fbdd5b33aa598dbfc99db5d3b6c878c81239ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78ff7eb033c0a53c7f4dffb3fbdd5b33aa598dbfc99db5d3b6c878c81239ef3->enter($__internal_a78ff7eb033c0a53c7f4dffb3fbdd5b33aa598dbfc99db5d3b6c878c81239ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_58b0b9c89b6b4bb8be004a4628b84af37fb661a02ec4cd3f6a06b9ebc8ade70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b0b9c89b6b4bb8be004a4628b84af37fb661a02ec4cd3f6a06b9ebc8ade70c->enter($__internal_58b0b9c89b6b4bb8be004a4628b84af37fb661a02ec4cd3f6a06b9ebc8ade70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_58b0b9c89b6b4bb8be004a4628b84af37fb661a02ec4cd3f6a06b9ebc8ade70c->leave($__internal_58b0b9c89b6b4bb8be004a4628b84af37fb661a02ec4cd3f6a06b9ebc8ade70c_prof);

        
        $__internal_a78ff7eb033c0a53c7f4dffb3fbdd5b33aa598dbfc99db5d3b6c878c81239ef3->leave($__internal_a78ff7eb033c0a53c7f4dffb3fbdd5b33aa598dbfc99db5d3b6c878c81239ef3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/justine/yolo/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
