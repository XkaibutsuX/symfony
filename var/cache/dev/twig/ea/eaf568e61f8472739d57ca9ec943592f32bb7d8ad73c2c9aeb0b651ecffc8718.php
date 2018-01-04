<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7f92682cc90ae24d4ad22f1e078df818719263e625cd3a8737aef959d4f64498 extends Twig_Template
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
        $__internal_4e08b5d1370c17628620d48c80f119b44db73b9b90e65447c54dd1daf8f7e7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e08b5d1370c17628620d48c80f119b44db73b9b90e65447c54dd1daf8f7e7b8->enter($__internal_4e08b5d1370c17628620d48c80f119b44db73b9b90e65447c54dd1daf8f7e7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7435d3add1ad9d821f92e8dc3e17dabf34b9980bb207f77b3d6ad468c3d47f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7435d3add1ad9d821f92e8dc3e17dabf34b9980bb207f77b3d6ad468c3d47f27->enter($__internal_7435d3add1ad9d821f92e8dc3e17dabf34b9980bb207f77b3d6ad468c3d47f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4e08b5d1370c17628620d48c80f119b44db73b9b90e65447c54dd1daf8f7e7b8->leave($__internal_4e08b5d1370c17628620d48c80f119b44db73b9b90e65447c54dd1daf8f7e7b8_prof);

        
        $__internal_7435d3add1ad9d821f92e8dc3e17dabf34b9980bb207f77b3d6ad468c3d47f27->leave($__internal_7435d3add1ad9d821f92e8dc3e17dabf34b9980bb207f77b3d6ad468c3d47f27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
