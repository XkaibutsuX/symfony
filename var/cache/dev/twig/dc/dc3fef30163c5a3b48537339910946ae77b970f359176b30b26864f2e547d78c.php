<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_81dc3d7ce74bf832deb2a037b098c4d546dad03f94a3f3becf3bd1bf1e523724 extends Twig_Template
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
        $__internal_cb4f4e2a2bdb3af5e618242a3f47627db9a010ca63e9e08b199427d0878e3a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4f4e2a2bdb3af5e618242a3f47627db9a010ca63e9e08b199427d0878e3a60->enter($__internal_cb4f4e2a2bdb3af5e618242a3f47627db9a010ca63e9e08b199427d0878e3a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8ce35679d228c106511cba55610874c40249fcb33e75559d1df0bceacb940ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce35679d228c106511cba55610874c40249fcb33e75559d1df0bceacb940ad6->enter($__internal_8ce35679d228c106511cba55610874c40249fcb33e75559d1df0bceacb940ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cb4f4e2a2bdb3af5e618242a3f47627db9a010ca63e9e08b199427d0878e3a60->leave($__internal_cb4f4e2a2bdb3af5e618242a3f47627db9a010ca63e9e08b199427d0878e3a60_prof);

        
        $__internal_8ce35679d228c106511cba55610874c40249fcb33e75559d1df0bceacb940ad6->leave($__internal_8ce35679d228c106511cba55610874c40249fcb33e75559d1df0bceacb940ad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
