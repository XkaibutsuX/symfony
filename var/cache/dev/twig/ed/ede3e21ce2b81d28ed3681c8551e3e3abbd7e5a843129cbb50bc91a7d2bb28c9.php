<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_04a1afa21cb1e081eee2fef72902e08efdd6b97c6884d52161af70d707826d83 extends Twig_Template
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
        $__internal_a59498c1a2c45ba9fe613a74349d04a9c4149009dd6154ef384a11f418bb71a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59498c1a2c45ba9fe613a74349d04a9c4149009dd6154ef384a11f418bb71a2->enter($__internal_a59498c1a2c45ba9fe613a74349d04a9c4149009dd6154ef384a11f418bb71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b0771088db5241b4df667052598a03998780033fd16a78d6b6ac8525f4359064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0771088db5241b4df667052598a03998780033fd16a78d6b6ac8525f4359064->enter($__internal_b0771088db5241b4df667052598a03998780033fd16a78d6b6ac8525f4359064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a59498c1a2c45ba9fe613a74349d04a9c4149009dd6154ef384a11f418bb71a2->leave($__internal_a59498c1a2c45ba9fe613a74349d04a9c4149009dd6154ef384a11f418bb71a2_prof);

        
        $__internal_b0771088db5241b4df667052598a03998780033fd16a78d6b6ac8525f4359064->leave($__internal_b0771088db5241b4df667052598a03998780033fd16a78d6b6ac8525f4359064_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
