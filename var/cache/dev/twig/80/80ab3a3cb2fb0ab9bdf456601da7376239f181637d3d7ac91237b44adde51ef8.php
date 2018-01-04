<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_098bb478c96c013663029176eaa7b66d02f890c9ffdd5bb5792192814731b880 extends Twig_Template
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
        $__internal_8882cd11c02e5f9128c435716fd6be40f78f3d15f5a6198d89797c3b3a14872f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8882cd11c02e5f9128c435716fd6be40f78f3d15f5a6198d89797c3b3a14872f->enter($__internal_8882cd11c02e5f9128c435716fd6be40f78f3d15f5a6198d89797c3b3a14872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1047eff4c43297c4a1f29525f51bb042636c2b5b406f69e15e842bd08f93519e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1047eff4c43297c4a1f29525f51bb042636c2b5b406f69e15e842bd08f93519e->enter($__internal_1047eff4c43297c4a1f29525f51bb042636c2b5b406f69e15e842bd08f93519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8882cd11c02e5f9128c435716fd6be40f78f3d15f5a6198d89797c3b3a14872f->leave($__internal_8882cd11c02e5f9128c435716fd6be40f78f3d15f5a6198d89797c3b3a14872f_prof);

        
        $__internal_1047eff4c43297c4a1f29525f51bb042636c2b5b406f69e15e842bd08f93519e->leave($__internal_1047eff4c43297c4a1f29525f51bb042636c2b5b406f69e15e842bd08f93519e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
