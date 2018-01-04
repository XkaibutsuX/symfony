<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4a42d8a3d96cf818b3cf35a9319bc13851339a262f6a196a1840a1f6c8a2dfe0 extends Twig_Template
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
        $__internal_00e651130b1a091b19480775ed3ef5e3b5f7a81596b9635e3f000d9df312058d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e651130b1a091b19480775ed3ef5e3b5f7a81596b9635e3f000d9df312058d->enter($__internal_00e651130b1a091b19480775ed3ef5e3b5f7a81596b9635e3f000d9df312058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_950d09457113c4ccb0af27f28035a506c4d4d9157f6877c8a0403af93d4d539e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950d09457113c4ccb0af27f28035a506c4d4d9157f6877c8a0403af93d4d539e->enter($__internal_950d09457113c4ccb0af27f28035a506c4d4d9157f6877c8a0403af93d4d539e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_00e651130b1a091b19480775ed3ef5e3b5f7a81596b9635e3f000d9df312058d->leave($__internal_00e651130b1a091b19480775ed3ef5e3b5f7a81596b9635e3f000d9df312058d_prof);

        
        $__internal_950d09457113c4ccb0af27f28035a506c4d4d9157f6877c8a0403af93d4d539e->leave($__internal_950d09457113c4ccb0af27f28035a506c4d4d9157f6877c8a0403af93d4d539e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
