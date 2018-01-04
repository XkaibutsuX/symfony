<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2f0e98d5f7e9900aad2e71fd121f65903f9588df88f8461522b8f4483aad2adb extends Twig_Template
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
        $__internal_d7502bc2edc08d8532a20fecf6db3e2df97a7c4f702c5856bad2248883f639b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7502bc2edc08d8532a20fecf6db3e2df97a7c4f702c5856bad2248883f639b2->enter($__internal_d7502bc2edc08d8532a20fecf6db3e2df97a7c4f702c5856bad2248883f639b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_79f934187c89d57ca2593cbf7ebac8fdb50802de846c9df5f65453017f3ad745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f934187c89d57ca2593cbf7ebac8fdb50802de846c9df5f65453017f3ad745->enter($__internal_79f934187c89d57ca2593cbf7ebac8fdb50802de846c9df5f65453017f3ad745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d7502bc2edc08d8532a20fecf6db3e2df97a7c4f702c5856bad2248883f639b2->leave($__internal_d7502bc2edc08d8532a20fecf6db3e2df97a7c4f702c5856bad2248883f639b2_prof);

        
        $__internal_79f934187c89d57ca2593cbf7ebac8fdb50802de846c9df5f65453017f3ad745->leave($__internal_79f934187c89d57ca2593cbf7ebac8fdb50802de846c9df5f65453017f3ad745_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
