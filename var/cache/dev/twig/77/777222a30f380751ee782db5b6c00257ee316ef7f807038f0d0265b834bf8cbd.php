<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_911453619c87e8df336b48fc5742e8915c51f7fc261234c27f47535449e5a647 extends Twig_Template
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
        $__internal_97507fae58583d8b40a71f2dd86b1ae734bb4a813614704490db5892f0e35356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97507fae58583d8b40a71f2dd86b1ae734bb4a813614704490db5892f0e35356->enter($__internal_97507fae58583d8b40a71f2dd86b1ae734bb4a813614704490db5892f0e35356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_73b8b50f6a3e98bed39b5751e6e7fb06ed5e66e165c990e1c9a30a3be3708bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b8b50f6a3e98bed39b5751e6e7fb06ed5e66e165c990e1c9a30a3be3708bb3->enter($__internal_73b8b50f6a3e98bed39b5751e6e7fb06ed5e66e165c990e1c9a30a3be3708bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_97507fae58583d8b40a71f2dd86b1ae734bb4a813614704490db5892f0e35356->leave($__internal_97507fae58583d8b40a71f2dd86b1ae734bb4a813614704490db5892f0e35356_prof);

        
        $__internal_73b8b50f6a3e98bed39b5751e6e7fb06ed5e66e165c990e1c9a30a3be3708bb3->leave($__internal_73b8b50f6a3e98bed39b5751e6e7fb06ed5e66e165c990e1c9a30a3be3708bb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
