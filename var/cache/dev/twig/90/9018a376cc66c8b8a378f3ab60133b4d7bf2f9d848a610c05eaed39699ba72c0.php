<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_523c3c66d400f92e5e17123938e6ef540fc2376238f463ee3d3139ab589c1dc8 extends Twig_Template
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
        $__internal_0330b92d3655ff7ae5707c9675349c19575c10e75f98c86462448ebee5cee4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0330b92d3655ff7ae5707c9675349c19575c10e75f98c86462448ebee5cee4a0->enter($__internal_0330b92d3655ff7ae5707c9675349c19575c10e75f98c86462448ebee5cee4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d3ccc471d36818b754601257d8a958d58d0ca80cbbc64266bda592594066018e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ccc471d36818b754601257d8a958d58d0ca80cbbc64266bda592594066018e->enter($__internal_d3ccc471d36818b754601257d8a958d58d0ca80cbbc64266bda592594066018e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0330b92d3655ff7ae5707c9675349c19575c10e75f98c86462448ebee5cee4a0->leave($__internal_0330b92d3655ff7ae5707c9675349c19575c10e75f98c86462448ebee5cee4a0_prof);

        
        $__internal_d3ccc471d36818b754601257d8a958d58d0ca80cbbc64266bda592594066018e->leave($__internal_d3ccc471d36818b754601257d8a958d58d0ca80cbbc64266bda592594066018e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
