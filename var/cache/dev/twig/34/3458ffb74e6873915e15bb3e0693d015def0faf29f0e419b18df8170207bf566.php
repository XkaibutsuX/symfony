<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_69cc997ef6331fcf9c6f256e48ae246ddf650b441f94eca959f08481b4e04cfc extends Twig_Template
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
        $__internal_550b569ff47a90f0496fd7dce88a39d50b12d52520c5476685154ef42657eba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550b569ff47a90f0496fd7dce88a39d50b12d52520c5476685154ef42657eba2->enter($__internal_550b569ff47a90f0496fd7dce88a39d50b12d52520c5476685154ef42657eba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_44635d8cd93a3f9893d7eb9efff4eac11d5f1912636dd8b61d77271cbf878e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44635d8cd93a3f9893d7eb9efff4eac11d5f1912636dd8b61d77271cbf878e11->enter($__internal_44635d8cd93a3f9893d7eb9efff4eac11d5f1912636dd8b61d77271cbf878e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_550b569ff47a90f0496fd7dce88a39d50b12d52520c5476685154ef42657eba2->leave($__internal_550b569ff47a90f0496fd7dce88a39d50b12d52520c5476685154ef42657eba2_prof);

        
        $__internal_44635d8cd93a3f9893d7eb9efff4eac11d5f1912636dd8b61d77271cbf878e11->leave($__internal_44635d8cd93a3f9893d7eb9efff4eac11d5f1912636dd8b61d77271cbf878e11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
