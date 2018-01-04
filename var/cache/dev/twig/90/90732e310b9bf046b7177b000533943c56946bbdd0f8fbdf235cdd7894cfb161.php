<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3b1440131552b5345c47d28a111d8d8a277bbeea372b9d9b1fa468e3879b8ee5 extends Twig_Template
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
        $__internal_cc19932e5523f8d20eaeaaa50f59cf137615ce24f4fc81f9235424c9f842b195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc19932e5523f8d20eaeaaa50f59cf137615ce24f4fc81f9235424c9f842b195->enter($__internal_cc19932e5523f8d20eaeaaa50f59cf137615ce24f4fc81f9235424c9f842b195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ba329ab817db7129056969a9ad2f46826acab2c5884206d5216e8a23241d166e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba329ab817db7129056969a9ad2f46826acab2c5884206d5216e8a23241d166e->enter($__internal_ba329ab817db7129056969a9ad2f46826acab2c5884206d5216e8a23241d166e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cc19932e5523f8d20eaeaaa50f59cf137615ce24f4fc81f9235424c9f842b195->leave($__internal_cc19932e5523f8d20eaeaaa50f59cf137615ce24f4fc81f9235424c9f842b195_prof);

        
        $__internal_ba329ab817db7129056969a9ad2f46826acab2c5884206d5216e8a23241d166e->leave($__internal_ba329ab817db7129056969a9ad2f46826acab2c5884206d5216e8a23241d166e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
