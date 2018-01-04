<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_dc941427a9bbc99d4ab040288f60609b576ea4e49ef4d7aa7a02931fd0fab760 extends Twig_Template
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
        $__internal_0e8a5534567d4cd573283ec15c61a22d65a5119477f6712e452b73ec0e0e951d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8a5534567d4cd573283ec15c61a22d65a5119477f6712e452b73ec0e0e951d->enter($__internal_0e8a5534567d4cd573283ec15c61a22d65a5119477f6712e452b73ec0e0e951d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_ad66dbac322cfc82a0147ed89054a62a61a664ed3a81d8ebfbf747f11cdda8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad66dbac322cfc82a0147ed89054a62a61a664ed3a81d8ebfbf747f11cdda8bf->enter($__internal_ad66dbac322cfc82a0147ed89054a62a61a664ed3a81d8ebfbf747f11cdda8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0e8a5534567d4cd573283ec15c61a22d65a5119477f6712e452b73ec0e0e951d->leave($__internal_0e8a5534567d4cd573283ec15c61a22d65a5119477f6712e452b73ec0e0e951d_prof);

        
        $__internal_ad66dbac322cfc82a0147ed89054a62a61a664ed3a81d8ebfbf747f11cdda8bf->leave($__internal_ad66dbac322cfc82a0147ed89054a62a61a664ed3a81d8ebfbf747f11cdda8bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
