<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_afcd13f84793c7a617dd04a150f7e86d3b8e9eb83c37c37d6e66a9830152fbc6 extends Twig_Template
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
        $__internal_07310341c154c6657329af09aa573f1a3e8449df0d47db266049fb8af197215b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07310341c154c6657329af09aa573f1a3e8449df0d47db266049fb8af197215b->enter($__internal_07310341c154c6657329af09aa573f1a3e8449df0d47db266049fb8af197215b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8c88364aee30cb63cf40fc2225184eb1ebd64579c21ecf82547a8df50a4f9522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c88364aee30cb63cf40fc2225184eb1ebd64579c21ecf82547a8df50a4f9522->enter($__internal_8c88364aee30cb63cf40fc2225184eb1ebd64579c21ecf82547a8df50a4f9522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_07310341c154c6657329af09aa573f1a3e8449df0d47db266049fb8af197215b->leave($__internal_07310341c154c6657329af09aa573f1a3e8449df0d47db266049fb8af197215b_prof);

        
        $__internal_8c88364aee30cb63cf40fc2225184eb1ebd64579c21ecf82547a8df50a4f9522->leave($__internal_8c88364aee30cb63cf40fc2225184eb1ebd64579c21ecf82547a8df50a4f9522_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
