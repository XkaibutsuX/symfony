<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_bf0e1a044ea23c87709cbc56e68d53c77653e90eb1e11007980104fdc8a3ad04 extends Twig_Template
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
        $__internal_e213407c398e3618e8e33c4ff1350c944f1c6f34424cb7ee6e31a6a517615a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e213407c398e3618e8e33c4ff1350c944f1c6f34424cb7ee6e31a6a517615a0f->enter($__internal_e213407c398e3618e8e33c4ff1350c944f1c6f34424cb7ee6e31a6a517615a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1c2239e835ad0bb7c0423d6fb59b474ceb3b5a939b965d016c526dd87e771961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2239e835ad0bb7c0423d6fb59b474ceb3b5a939b965d016c526dd87e771961->enter($__internal_1c2239e835ad0bb7c0423d6fb59b474ceb3b5a939b965d016c526dd87e771961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e213407c398e3618e8e33c4ff1350c944f1c6f34424cb7ee6e31a6a517615a0f->leave($__internal_e213407c398e3618e8e33c4ff1350c944f1c6f34424cb7ee6e31a6a517615a0f_prof);

        
        $__internal_1c2239e835ad0bb7c0423d6fb59b474ceb3b5a939b965d016c526dd87e771961->leave($__internal_1c2239e835ad0bb7c0423d6fb59b474ceb3b5a939b965d016c526dd87e771961_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
