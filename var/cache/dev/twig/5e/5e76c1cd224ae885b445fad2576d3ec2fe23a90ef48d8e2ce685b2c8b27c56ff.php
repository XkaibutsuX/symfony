<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0317c070f7fd2f11a2a245eff2b640429b18c1dd3aa90eeebdf8c5ad3da22792 extends Twig_Template
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
        $__internal_829d56a5d3a8ec9f24e19a89f7c286d1f59b4f4f5a7cd9eefbbfef1b36b7d205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829d56a5d3a8ec9f24e19a89f7c286d1f59b4f4f5a7cd9eefbbfef1b36b7d205->enter($__internal_829d56a5d3a8ec9f24e19a89f7c286d1f59b4f4f5a7cd9eefbbfef1b36b7d205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_557de550228862e98d9d9c9edbcc5059aebff384b1f011f26d3d7b42cfa156a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557de550228862e98d9d9c9edbcc5059aebff384b1f011f26d3d7b42cfa156a2->enter($__internal_557de550228862e98d9d9c9edbcc5059aebff384b1f011f26d3d7b42cfa156a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_829d56a5d3a8ec9f24e19a89f7c286d1f59b4f4f5a7cd9eefbbfef1b36b7d205->leave($__internal_829d56a5d3a8ec9f24e19a89f7c286d1f59b4f4f5a7cd9eefbbfef1b36b7d205_prof);

        
        $__internal_557de550228862e98d9d9c9edbcc5059aebff384b1f011f26d3d7b42cfa156a2->leave($__internal_557de550228862e98d9d9c9edbcc5059aebff384b1f011f26d3d7b42cfa156a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
