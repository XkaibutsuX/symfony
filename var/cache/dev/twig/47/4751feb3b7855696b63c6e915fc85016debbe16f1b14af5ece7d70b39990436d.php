<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3c3cc12263fb92dd7e05a8b849aad148109c5cc7f3ab4d2c1a5a114d5dd4e35c extends Twig_Template
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
        $__internal_8068c758ba26503fe820b3d8556ec58f9272807400d892e073ae89f7a5285aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8068c758ba26503fe820b3d8556ec58f9272807400d892e073ae89f7a5285aba->enter($__internal_8068c758ba26503fe820b3d8556ec58f9272807400d892e073ae89f7a5285aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d929ab730efaf4f9dedad45692d6579edc66ab9d4caa91330926c5240d82560c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d929ab730efaf4f9dedad45692d6579edc66ab9d4caa91330926c5240d82560c->enter($__internal_d929ab730efaf4f9dedad45692d6579edc66ab9d4caa91330926c5240d82560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8068c758ba26503fe820b3d8556ec58f9272807400d892e073ae89f7a5285aba->leave($__internal_8068c758ba26503fe820b3d8556ec58f9272807400d892e073ae89f7a5285aba_prof);

        
        $__internal_d929ab730efaf4f9dedad45692d6579edc66ab9d4caa91330926c5240d82560c->leave($__internal_d929ab730efaf4f9dedad45692d6579edc66ab9d4caa91330926c5240d82560c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
