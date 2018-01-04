<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c2cc6b0050951647dc5a7bf4477c18847d3cd998bbdf85f378607a622fb104e2 extends Twig_Template
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
        $__internal_073feadbd49d8cb26d9dcc29807a7cea4c966563dd61f0199639ab7c528332ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073feadbd49d8cb26d9dcc29807a7cea4c966563dd61f0199639ab7c528332ef->enter($__internal_073feadbd49d8cb26d9dcc29807a7cea4c966563dd61f0199639ab7c528332ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_62ce8bbfe6fb0bac59cc2c191dcd267bd3303bb8c27ee76e372b56baddb6dbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ce8bbfe6fb0bac59cc2c191dcd267bd3303bb8c27ee76e372b56baddb6dbc0->enter($__internal_62ce8bbfe6fb0bac59cc2c191dcd267bd3303bb8c27ee76e372b56baddb6dbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_073feadbd49d8cb26d9dcc29807a7cea4c966563dd61f0199639ab7c528332ef->leave($__internal_073feadbd49d8cb26d9dcc29807a7cea4c966563dd61f0199639ab7c528332ef_prof);

        
        $__internal_62ce8bbfe6fb0bac59cc2c191dcd267bd3303bb8c27ee76e372b56baddb6dbc0->leave($__internal_62ce8bbfe6fb0bac59cc2c191dcd267bd3303bb8c27ee76e372b56baddb6dbc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
