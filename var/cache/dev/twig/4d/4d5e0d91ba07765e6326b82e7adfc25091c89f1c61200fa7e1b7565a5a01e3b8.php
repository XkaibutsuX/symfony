<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_702ae09351895e019f2d1ced99eab0037d95f44a439b2c0b322f64252486e377 extends Twig_Template
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
        $__internal_9cad94e2409055f5f80bda2e0eb6196b9f816593de0ffcbd5b19b5a5a36a4abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cad94e2409055f5f80bda2e0eb6196b9f816593de0ffcbd5b19b5a5a36a4abf->enter($__internal_9cad94e2409055f5f80bda2e0eb6196b9f816593de0ffcbd5b19b5a5a36a4abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_84b7336e805114c9225f9a87940dca740bf58fa118acb958a1e575130e7dcfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b7336e805114c9225f9a87940dca740bf58fa118acb958a1e575130e7dcfef->enter($__internal_84b7336e805114c9225f9a87940dca740bf58fa118acb958a1e575130e7dcfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9cad94e2409055f5f80bda2e0eb6196b9f816593de0ffcbd5b19b5a5a36a4abf->leave($__internal_9cad94e2409055f5f80bda2e0eb6196b9f816593de0ffcbd5b19b5a5a36a4abf_prof);

        
        $__internal_84b7336e805114c9225f9a87940dca740bf58fa118acb958a1e575130e7dcfef->leave($__internal_84b7336e805114c9225f9a87940dca740bf58fa118acb958a1e575130e7dcfef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
