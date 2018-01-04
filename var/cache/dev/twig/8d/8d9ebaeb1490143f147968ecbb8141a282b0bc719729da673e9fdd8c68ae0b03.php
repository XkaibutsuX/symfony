<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0adb86165c9c5c0fd1a6de1cc9252c346a1a2a8177b563261698bfb676ff7827 extends Twig_Template
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
        $__internal_15e2eff9cfdc6ed0f17658a186c4c67b4937eeb04b6338fbce3a99eea6ffed0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e2eff9cfdc6ed0f17658a186c4c67b4937eeb04b6338fbce3a99eea6ffed0c->enter($__internal_15e2eff9cfdc6ed0f17658a186c4c67b4937eeb04b6338fbce3a99eea6ffed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1575129e47a9a5aed55b306e1301a725e14ed54fb124c0afbc248de674e2a599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1575129e47a9a5aed55b306e1301a725e14ed54fb124c0afbc248de674e2a599->enter($__internal_1575129e47a9a5aed55b306e1301a725e14ed54fb124c0afbc248de674e2a599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_15e2eff9cfdc6ed0f17658a186c4c67b4937eeb04b6338fbce3a99eea6ffed0c->leave($__internal_15e2eff9cfdc6ed0f17658a186c4c67b4937eeb04b6338fbce3a99eea6ffed0c_prof);

        
        $__internal_1575129e47a9a5aed55b306e1301a725e14ed54fb124c0afbc248de674e2a599->leave($__internal_1575129e47a9a5aed55b306e1301a725e14ed54fb124c0afbc248de674e2a599_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
