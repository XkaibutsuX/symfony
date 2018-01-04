<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_27d8edffd1a898090dc4e8bcfedc40d0d6de6bb5f0d353ee08d61a2f64f2e665 extends Twig_Template
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
        $__internal_f320bcbff0ff1468e321ad4e99e7855664d36d4c3871e2e5ba42f9633faec048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f320bcbff0ff1468e321ad4e99e7855664d36d4c3871e2e5ba42f9633faec048->enter($__internal_f320bcbff0ff1468e321ad4e99e7855664d36d4c3871e2e5ba42f9633faec048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_98664fc437213d0d9d1589137ad854b1ce396af31efeb5607013a46278a447b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98664fc437213d0d9d1589137ad854b1ce396af31efeb5607013a46278a447b6->enter($__internal_98664fc437213d0d9d1589137ad854b1ce396af31efeb5607013a46278a447b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_f320bcbff0ff1468e321ad4e99e7855664d36d4c3871e2e5ba42f9633faec048->leave($__internal_f320bcbff0ff1468e321ad4e99e7855664d36d4c3871e2e5ba42f9633faec048_prof);

        
        $__internal_98664fc437213d0d9d1589137ad854b1ce396af31efeb5607013a46278a447b6->leave($__internal_98664fc437213d0d9d1589137ad854b1ce396af31efeb5607013a46278a447b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
