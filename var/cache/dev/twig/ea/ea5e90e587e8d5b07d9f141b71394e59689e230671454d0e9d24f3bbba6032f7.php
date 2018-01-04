<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_5e81d6828841d4307ff0618aece1d703e6dadcba81cc04bae2b23006bd7ab910 extends Twig_Template
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
        $__internal_f1d8c39acbb38263b87e0fd33b80339ab7d921919bf8188a507167079169aab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d8c39acbb38263b87e0fd33b80339ab7d921919bf8188a507167079169aab7->enter($__internal_f1d8c39acbb38263b87e0fd33b80339ab7d921919bf8188a507167079169aab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_c75efbcffa65fba7b5e269b404a956dc68f82e540bab3b44a2b29b203fdb3a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75efbcffa65fba7b5e269b404a956dc68f82e540bab3b44a2b29b203fdb3a2c->enter($__internal_c75efbcffa65fba7b5e269b404a956dc68f82e540bab3b44a2b29b203fdb3a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_f1d8c39acbb38263b87e0fd33b80339ab7d921919bf8188a507167079169aab7->leave($__internal_f1d8c39acbb38263b87e0fd33b80339ab7d921919bf8188a507167079169aab7_prof);

        
        $__internal_c75efbcffa65fba7b5e269b404a956dc68f82e540bab3b44a2b29b203fdb3a2c->leave($__internal_c75efbcffa65fba7b5e269b404a956dc68f82e540bab3b44a2b29b203fdb3a2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
