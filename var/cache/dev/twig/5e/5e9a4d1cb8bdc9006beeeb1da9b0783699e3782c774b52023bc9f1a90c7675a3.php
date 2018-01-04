<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c96621d256eeab9805040dfef4d74d81516ed384c66961b10f4b21e5681f5571 extends Twig_Template
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
        $__internal_dbb5b95bbf56f0e9d41896eb128c1a0f2e5d086b14968fa7294bce0409853ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb5b95bbf56f0e9d41896eb128c1a0f2e5d086b14968fa7294bce0409853ee5->enter($__internal_dbb5b95bbf56f0e9d41896eb128c1a0f2e5d086b14968fa7294bce0409853ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_851be54719a378023fdd004a06c80ceac7e9c7bf6e4f2cbd745e7a10bc959838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851be54719a378023fdd004a06c80ceac7e9c7bf6e4f2cbd745e7a10bc959838->enter($__internal_851be54719a378023fdd004a06c80ceac7e9c7bf6e4f2cbd745e7a10bc959838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dbb5b95bbf56f0e9d41896eb128c1a0f2e5d086b14968fa7294bce0409853ee5->leave($__internal_dbb5b95bbf56f0e9d41896eb128c1a0f2e5d086b14968fa7294bce0409853ee5_prof);

        
        $__internal_851be54719a378023fdd004a06c80ceac7e9c7bf6e4f2cbd745e7a10bc959838->leave($__internal_851be54719a378023fdd004a06c80ceac7e9c7bf6e4f2cbd745e7a10bc959838_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
