<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_455ba376ca715d3b9f6db4944b386ed97ae0c525d1d1daa6feb642fbf2a3f6bd extends Twig_Template
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
        $__internal_4c8c1be994f3b9e306d6ecc2d01c7da06ec3201b5cf370fde66b5938f77cda3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8c1be994f3b9e306d6ecc2d01c7da06ec3201b5cf370fde66b5938f77cda3f->enter($__internal_4c8c1be994f3b9e306d6ecc2d01c7da06ec3201b5cf370fde66b5938f77cda3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2b9e62837105e857e0303b6e49c7f004c1b017dbb9de853d4543be1f0ea98cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9e62837105e857e0303b6e49c7f004c1b017dbb9de853d4543be1f0ea98cfe->enter($__internal_2b9e62837105e857e0303b6e49c7f004c1b017dbb9de853d4543be1f0ea98cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4c8c1be994f3b9e306d6ecc2d01c7da06ec3201b5cf370fde66b5938f77cda3f->leave($__internal_4c8c1be994f3b9e306d6ecc2d01c7da06ec3201b5cf370fde66b5938f77cda3f_prof);

        
        $__internal_2b9e62837105e857e0303b6e49c7f004c1b017dbb9de853d4543be1f0ea98cfe->leave($__internal_2b9e62837105e857e0303b6e49c7f004c1b017dbb9de853d4543be1f0ea98cfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
