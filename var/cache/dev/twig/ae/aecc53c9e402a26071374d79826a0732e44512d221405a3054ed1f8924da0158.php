<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ade6714912e936ea4e52166db47578398bc23ae53f5003aa0e29080664811f31 extends Twig_Template
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
        $__internal_ba71e5274356e3925ca4eeadd4841fd4e931c41ccb544efbef41fbf2073f5246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba71e5274356e3925ca4eeadd4841fd4e931c41ccb544efbef41fbf2073f5246->enter($__internal_ba71e5274356e3925ca4eeadd4841fd4e931c41ccb544efbef41fbf2073f5246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ce80664542a3ff48bf15e28c44ad0abfd7430fc7e383475f981feb74f0bcd5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce80664542a3ff48bf15e28c44ad0abfd7430fc7e383475f981feb74f0bcd5f1->enter($__internal_ce80664542a3ff48bf15e28c44ad0abfd7430fc7e383475f981feb74f0bcd5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ba71e5274356e3925ca4eeadd4841fd4e931c41ccb544efbef41fbf2073f5246->leave($__internal_ba71e5274356e3925ca4eeadd4841fd4e931c41ccb544efbef41fbf2073f5246_prof);

        
        $__internal_ce80664542a3ff48bf15e28c44ad0abfd7430fc7e383475f981feb74f0bcd5f1->leave($__internal_ce80664542a3ff48bf15e28c44ad0abfd7430fc7e383475f981feb74f0bcd5f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
