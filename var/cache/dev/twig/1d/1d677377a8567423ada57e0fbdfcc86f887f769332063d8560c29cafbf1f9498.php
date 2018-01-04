<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9c740b1a95e89ce92fb93638676a896aed1a124d14131527ef2c27abaf92d521 extends Twig_Template
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
        $__internal_dda4a458cae971c8e1150bd1e9bc3dd9164b8fa51bdaa64a322811c79cbb834d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda4a458cae971c8e1150bd1e9bc3dd9164b8fa51bdaa64a322811c79cbb834d->enter($__internal_dda4a458cae971c8e1150bd1e9bc3dd9164b8fa51bdaa64a322811c79cbb834d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0ae6b0476ef6c0c7942c3db97a0f3f408cacfb144a813426c8f1d1ef5d83e1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae6b0476ef6c0c7942c3db97a0f3f408cacfb144a813426c8f1d1ef5d83e1d4->enter($__internal_0ae6b0476ef6c0c7942c3db97a0f3f408cacfb144a813426c8f1d1ef5d83e1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_dda4a458cae971c8e1150bd1e9bc3dd9164b8fa51bdaa64a322811c79cbb834d->leave($__internal_dda4a458cae971c8e1150bd1e9bc3dd9164b8fa51bdaa64a322811c79cbb834d_prof);

        
        $__internal_0ae6b0476ef6c0c7942c3db97a0f3f408cacfb144a813426c8f1d1ef5d83e1d4->leave($__internal_0ae6b0476ef6c0c7942c3db97a0f3f408cacfb144a813426c8f1d1ef5d83e1d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
