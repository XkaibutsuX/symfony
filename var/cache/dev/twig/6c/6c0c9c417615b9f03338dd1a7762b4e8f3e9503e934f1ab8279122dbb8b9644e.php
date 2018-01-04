<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_2de5a58b31e6e88dfd267ddcc809e587cf00094a9e2efabeefdf4339e1a0d17a extends Twig_Template
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
        $__internal_ac8cd9c5113d04f3792cc0a6efe09123ddaf0e7fa3fb86b45c6e4b3f1c42771f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8cd9c5113d04f3792cc0a6efe09123ddaf0e7fa3fb86b45c6e4b3f1c42771f->enter($__internal_ac8cd9c5113d04f3792cc0a6efe09123ddaf0e7fa3fb86b45c6e4b3f1c42771f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_ab8b11528ffd8ab775331c296fcb7a21fdcb2446b82d396e72f670dc1238d531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8b11528ffd8ab775331c296fcb7a21fdcb2446b82d396e72f670dc1238d531->enter($__internal_ab8b11528ffd8ab775331c296fcb7a21fdcb2446b82d396e72f670dc1238d531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_ac8cd9c5113d04f3792cc0a6efe09123ddaf0e7fa3fb86b45c6e4b3f1c42771f->leave($__internal_ac8cd9c5113d04f3792cc0a6efe09123ddaf0e7fa3fb86b45c6e4b3f1c42771f_prof);

        
        $__internal_ab8b11528ffd8ab775331c296fcb7a21fdcb2446b82d396e72f670dc1238d531->leave($__internal_ab8b11528ffd8ab775331c296fcb7a21fdcb2446b82d396e72f670dc1238d531_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
