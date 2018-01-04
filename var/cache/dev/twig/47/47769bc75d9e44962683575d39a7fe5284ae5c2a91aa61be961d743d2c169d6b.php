<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1035a201ab978eb2c88752332e59ace639830d835365a95d4d484513e6aac03b extends Twig_Template
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
        $__internal_4617e556676b0f803b3a140da078a676fb1a0dbb322a28b90f46ddfb87dca845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4617e556676b0f803b3a140da078a676fb1a0dbb322a28b90f46ddfb87dca845->enter($__internal_4617e556676b0f803b3a140da078a676fb1a0dbb322a28b90f46ddfb87dca845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9539e1218cdbc17c5674051758c60bdec4827e170ca6c7a9e016e7b154403c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9539e1218cdbc17c5674051758c60bdec4827e170ca6c7a9e016e7b154403c1f->enter($__internal_9539e1218cdbc17c5674051758c60bdec4827e170ca6c7a9e016e7b154403c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4617e556676b0f803b3a140da078a676fb1a0dbb322a28b90f46ddfb87dca845->leave($__internal_4617e556676b0f803b3a140da078a676fb1a0dbb322a28b90f46ddfb87dca845_prof);

        
        $__internal_9539e1218cdbc17c5674051758c60bdec4827e170ca6c7a9e016e7b154403c1f->leave($__internal_9539e1218cdbc17c5674051758c60bdec4827e170ca6c7a9e016e7b154403c1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
