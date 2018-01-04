<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_20e3f1e79cbfd2791373b265f792bbc4caa9cc54df3c92738cbee803674e049b extends Twig_Template
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
        $__internal_342587e39c1aad056fffb7de77e5c5d204df517b83fd1f1b1e8ec1b3af6a57d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342587e39c1aad056fffb7de77e5c5d204df517b83fd1f1b1e8ec1b3af6a57d4->enter($__internal_342587e39c1aad056fffb7de77e5c5d204df517b83fd1f1b1e8ec1b3af6a57d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e6ecf43753dcba50bd8c41a1e56b9e1c2a90fae72c193c46a75dbcf04fef5fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ecf43753dcba50bd8c41a1e56b9e1c2a90fae72c193c46a75dbcf04fef5fff->enter($__internal_e6ecf43753dcba50bd8c41a1e56b9e1c2a90fae72c193c46a75dbcf04fef5fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_342587e39c1aad056fffb7de77e5c5d204df517b83fd1f1b1e8ec1b3af6a57d4->leave($__internal_342587e39c1aad056fffb7de77e5c5d204df517b83fd1f1b1e8ec1b3af6a57d4_prof);

        
        $__internal_e6ecf43753dcba50bd8c41a1e56b9e1c2a90fae72c193c46a75dbcf04fef5fff->leave($__internal_e6ecf43753dcba50bd8c41a1e56b9e1c2a90fae72c193c46a75dbcf04fef5fff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
