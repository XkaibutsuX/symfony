<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7ea8f461f52cc8715ef44300cf4c2e5866593048cf06f037900bc0d1cf94a149 extends Twig_Template
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
        $__internal_2d1f30a20f6664127e0cb2744069a7b0a4ab7eef1025018e8bddbf7e21521977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1f30a20f6664127e0cb2744069a7b0a4ab7eef1025018e8bddbf7e21521977->enter($__internal_2d1f30a20f6664127e0cb2744069a7b0a4ab7eef1025018e8bddbf7e21521977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_38ac6825d0e8b18e62ac235b09222a9192a3c72d450354a006364683cf0d9799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ac6825d0e8b18e62ac235b09222a9192a3c72d450354a006364683cf0d9799->enter($__internal_38ac6825d0e8b18e62ac235b09222a9192a3c72d450354a006364683cf0d9799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2d1f30a20f6664127e0cb2744069a7b0a4ab7eef1025018e8bddbf7e21521977->leave($__internal_2d1f30a20f6664127e0cb2744069a7b0a4ab7eef1025018e8bddbf7e21521977_prof);

        
        $__internal_38ac6825d0e8b18e62ac235b09222a9192a3c72d450354a006364683cf0d9799->leave($__internal_38ac6825d0e8b18e62ac235b09222a9192a3c72d450354a006364683cf0d9799_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
