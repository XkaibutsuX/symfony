<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1fa2fca35cdfec3ad4a4129d72443f2ade5160dfc0a5bd8777de8d6c4a3293fc extends Twig_Template
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
        $__internal_d9cdd21484be57b779da5770727af7e34e2d472ace8557c1f827d17c502ee2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9cdd21484be57b779da5770727af7e34e2d472ace8557c1f827d17c502ee2fb->enter($__internal_d9cdd21484be57b779da5770727af7e34e2d472ace8557c1f827d17c502ee2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_21e62bf15187482b477a8031c2fadb72485500524e7aff6de3fc61a01c15dab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e62bf15187482b477a8031c2fadb72485500524e7aff6de3fc61a01c15dab4->enter($__internal_21e62bf15187482b477a8031c2fadb72485500524e7aff6de3fc61a01c15dab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d9cdd21484be57b779da5770727af7e34e2d472ace8557c1f827d17c502ee2fb->leave($__internal_d9cdd21484be57b779da5770727af7e34e2d472ace8557c1f827d17c502ee2fb_prof);

        
        $__internal_21e62bf15187482b477a8031c2fadb72485500524e7aff6de3fc61a01c15dab4->leave($__internal_21e62bf15187482b477a8031c2fadb72485500524e7aff6de3fc61a01c15dab4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
