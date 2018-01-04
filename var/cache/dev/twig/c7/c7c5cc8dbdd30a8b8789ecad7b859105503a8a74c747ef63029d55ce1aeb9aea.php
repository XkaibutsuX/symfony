<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5193b1baecbb5a97a547c975b9c1a152333d832de580c59a16482b610f4b22b9 extends Twig_Template
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
        $__internal_6c5c244a478ed2abd19d66253dd6cee71387e0127dc7c636144835b074a120ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5c244a478ed2abd19d66253dd6cee71387e0127dc7c636144835b074a120ff->enter($__internal_6c5c244a478ed2abd19d66253dd6cee71387e0127dc7c636144835b074a120ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9f12c3c1e1f23e852df1211fa7512a630afd7f89ba1ca4b4e81c700e5903049c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f12c3c1e1f23e852df1211fa7512a630afd7f89ba1ca4b4e81c700e5903049c->enter($__internal_9f12c3c1e1f23e852df1211fa7512a630afd7f89ba1ca4b4e81c700e5903049c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6c5c244a478ed2abd19d66253dd6cee71387e0127dc7c636144835b074a120ff->leave($__internal_6c5c244a478ed2abd19d66253dd6cee71387e0127dc7c636144835b074a120ff_prof);

        
        $__internal_9f12c3c1e1f23e852df1211fa7512a630afd7f89ba1ca4b4e81c700e5903049c->leave($__internal_9f12c3c1e1f23e852df1211fa7512a630afd7f89ba1ca4b4e81c700e5903049c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
