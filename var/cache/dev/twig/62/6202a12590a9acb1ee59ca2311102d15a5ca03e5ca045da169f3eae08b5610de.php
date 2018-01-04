<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e095045cc7b45ff1eb0d97aa1636771ff06a4c8823837ed9a47dfe1e62e07710 extends Twig_Template
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
        $__internal_c3a14955f324af193a49a00978a73e183a102ae236840bca5090de57f588a5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a14955f324af193a49a00978a73e183a102ae236840bca5090de57f588a5af->enter($__internal_c3a14955f324af193a49a00978a73e183a102ae236840bca5090de57f588a5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_014917cab377f9d1710c63058a3c85c5741e5bfde4de537224ac2084810ed33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014917cab377f9d1710c63058a3c85c5741e5bfde4de537224ac2084810ed33d->enter($__internal_014917cab377f9d1710c63058a3c85c5741e5bfde4de537224ac2084810ed33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c3a14955f324af193a49a00978a73e183a102ae236840bca5090de57f588a5af->leave($__internal_c3a14955f324af193a49a00978a73e183a102ae236840bca5090de57f588a5af_prof);

        
        $__internal_014917cab377f9d1710c63058a3c85c5741e5bfde4de537224ac2084810ed33d->leave($__internal_014917cab377f9d1710c63058a3c85c5741e5bfde4de537224ac2084810ed33d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
