<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3a55ea45f082da247515302fad285dd874115385c23c225f18be127b62c945c4 extends Twig_Template
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
        $__internal_1370fab7a7744aa2cb9ef9bb58d6801a6cb9f0d0bf16a323e5fb59f86eaac069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1370fab7a7744aa2cb9ef9bb58d6801a6cb9f0d0bf16a323e5fb59f86eaac069->enter($__internal_1370fab7a7744aa2cb9ef9bb58d6801a6cb9f0d0bf16a323e5fb59f86eaac069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_73ec617c8b6372cd1e012887eed3faf470634cfe05c8ed3d583ff4c3afa8a463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ec617c8b6372cd1e012887eed3faf470634cfe05c8ed3d583ff4c3afa8a463->enter($__internal_73ec617c8b6372cd1e012887eed3faf470634cfe05c8ed3d583ff4c3afa8a463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1370fab7a7744aa2cb9ef9bb58d6801a6cb9f0d0bf16a323e5fb59f86eaac069->leave($__internal_1370fab7a7744aa2cb9ef9bb58d6801a6cb9f0d0bf16a323e5fb59f86eaac069_prof);

        
        $__internal_73ec617c8b6372cd1e012887eed3faf470634cfe05c8ed3d583ff4c3afa8a463->leave($__internal_73ec617c8b6372cd1e012887eed3faf470634cfe05c8ed3d583ff4c3afa8a463_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
