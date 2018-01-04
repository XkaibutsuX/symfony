<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_23490468564d8cb316d92aa214fc928169caa2526d71435038557022e06f5a69 extends Twig_Template
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
        $__internal_fdd1ec3a23ba8ede79d7be740575ed6651c45696e30a32168735bf1fe07da865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd1ec3a23ba8ede79d7be740575ed6651c45696e30a32168735bf1fe07da865->enter($__internal_fdd1ec3a23ba8ede79d7be740575ed6651c45696e30a32168735bf1fe07da865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4c5a6d3f450261035c92eeadf7e9f760849ebac178211d66c0051dede958ab5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5a6d3f450261035c92eeadf7e9f760849ebac178211d66c0051dede958ab5a->enter($__internal_4c5a6d3f450261035c92eeadf7e9f760849ebac178211d66c0051dede958ab5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fdd1ec3a23ba8ede79d7be740575ed6651c45696e30a32168735bf1fe07da865->leave($__internal_fdd1ec3a23ba8ede79d7be740575ed6651c45696e30a32168735bf1fe07da865_prof);

        
        $__internal_4c5a6d3f450261035c92eeadf7e9f760849ebac178211d66c0051dede958ab5a->leave($__internal_4c5a6d3f450261035c92eeadf7e9f760849ebac178211d66c0051dede958ab5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
