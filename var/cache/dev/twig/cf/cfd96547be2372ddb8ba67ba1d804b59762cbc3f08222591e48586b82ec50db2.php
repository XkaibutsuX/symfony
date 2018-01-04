<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cabe48d0d1f49d618e5eb59610ca4da61c693c907ea858e785421f9bd832e95e extends Twig_Template
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
        $__internal_3c2147e9d7211de2ff98b82184a3cb1524890457be6769c48f041287c02986f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2147e9d7211de2ff98b82184a3cb1524890457be6769c48f041287c02986f2->enter($__internal_3c2147e9d7211de2ff98b82184a3cb1524890457be6769c48f041287c02986f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_8c9176c1e1ab1f3c2d539d60b453058d492896e38aa4d94cd7bab2c0431aa483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9176c1e1ab1f3c2d539d60b453058d492896e38aa4d94cd7bab2c0431aa483->enter($__internal_8c9176c1e1ab1f3c2d539d60b453058d492896e38aa4d94cd7bab2c0431aa483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3c2147e9d7211de2ff98b82184a3cb1524890457be6769c48f041287c02986f2->leave($__internal_3c2147e9d7211de2ff98b82184a3cb1524890457be6769c48f041287c02986f2_prof);

        
        $__internal_8c9176c1e1ab1f3c2d539d60b453058d492896e38aa4d94cd7bab2c0431aa483->leave($__internal_8c9176c1e1ab1f3c2d539d60b453058d492896e38aa4d94cd7bab2c0431aa483_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
