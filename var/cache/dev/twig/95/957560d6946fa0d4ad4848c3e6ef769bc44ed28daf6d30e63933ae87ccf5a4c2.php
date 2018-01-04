<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e5a21616a5682a32993c43e76d9a0b5df351847ca5a69c36d8c0dfebd134bc73 extends Twig_Template
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
        $__internal_84835585223eb9b312ef257d482ffbb451223abe2721ae83c44ab2c040f810ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84835585223eb9b312ef257d482ffbb451223abe2721ae83c44ab2c040f810ca->enter($__internal_84835585223eb9b312ef257d482ffbb451223abe2721ae83c44ab2c040f810ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7b6cbb0a6968c523322323fe34ef599595a3dcc7305f6010e988171da583ca06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6cbb0a6968c523322323fe34ef599595a3dcc7305f6010e988171da583ca06->enter($__internal_7b6cbb0a6968c523322323fe34ef599595a3dcc7305f6010e988171da583ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_84835585223eb9b312ef257d482ffbb451223abe2721ae83c44ab2c040f810ca->leave($__internal_84835585223eb9b312ef257d482ffbb451223abe2721ae83c44ab2c040f810ca_prof);

        
        $__internal_7b6cbb0a6968c523322323fe34ef599595a3dcc7305f6010e988171da583ca06->leave($__internal_7b6cbb0a6968c523322323fe34ef599595a3dcc7305f6010e988171da583ca06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
