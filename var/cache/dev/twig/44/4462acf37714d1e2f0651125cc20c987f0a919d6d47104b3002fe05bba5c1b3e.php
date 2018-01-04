<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b9b7e8c8bcc32569756bb07a7595a837009055ef12d5f74ecc478fa304b51f68 extends Twig_Template
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
        $__internal_dc3ddfa5b5a6661c076eea4a8424c10682f062127cfec062b079afbbb7a4c384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3ddfa5b5a6661c076eea4a8424c10682f062127cfec062b079afbbb7a4c384->enter($__internal_dc3ddfa5b5a6661c076eea4a8424c10682f062127cfec062b079afbbb7a4c384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_bff3a66cde22daaf9ee5fe0b8d5010e40271f6e1bce854619eac43c575460107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff3a66cde22daaf9ee5fe0b8d5010e40271f6e1bce854619eac43c575460107->enter($__internal_bff3a66cde22daaf9ee5fe0b8d5010e40271f6e1bce854619eac43c575460107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dc3ddfa5b5a6661c076eea4a8424c10682f062127cfec062b079afbbb7a4c384->leave($__internal_dc3ddfa5b5a6661c076eea4a8424c10682f062127cfec062b079afbbb7a4c384_prof);

        
        $__internal_bff3a66cde22daaf9ee5fe0b8d5010e40271f6e1bce854619eac43c575460107->leave($__internal_bff3a66cde22daaf9ee5fe0b8d5010e40271f6e1bce854619eac43c575460107_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
