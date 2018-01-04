<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_98cbc6d2318682acc75958df02ca182d20fd9f125305783d4b9cd73b7c217718 extends Twig_Template
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
        $__internal_7b29c92ef8d1bb25f42937a6434979352187b5a7f2ff2bdb9c3846183631bf51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b29c92ef8d1bb25f42937a6434979352187b5a7f2ff2bdb9c3846183631bf51->enter($__internal_7b29c92ef8d1bb25f42937a6434979352187b5a7f2ff2bdb9c3846183631bf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_d9b48b5ed9b1fc924d578acad4bd13ba1789054d668a5255515230be4e1fc90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b48b5ed9b1fc924d578acad4bd13ba1789054d668a5255515230be4e1fc90a->enter($__internal_d9b48b5ed9b1fc924d578acad4bd13ba1789054d668a5255515230be4e1fc90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7b29c92ef8d1bb25f42937a6434979352187b5a7f2ff2bdb9c3846183631bf51->leave($__internal_7b29c92ef8d1bb25f42937a6434979352187b5a7f2ff2bdb9c3846183631bf51_prof);

        
        $__internal_d9b48b5ed9b1fc924d578acad4bd13ba1789054d668a5255515230be4e1fc90a->leave($__internal_d9b48b5ed9b1fc924d578acad4bd13ba1789054d668a5255515230be4e1fc90a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
