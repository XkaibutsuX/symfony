<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_86fa43c91bf5ef04f1014f035aa5781c5406d1c56ff652814cef7fe53f31daa1 extends Twig_Template
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
        $__internal_72f5f8cc4e0c05b477f11475ca611df454835d5b9f314e090838656bac50f65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f5f8cc4e0c05b477f11475ca611df454835d5b9f314e090838656bac50f65a->enter($__internal_72f5f8cc4e0c05b477f11475ca611df454835d5b9f314e090838656bac50f65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ed97b9264e3e6e8af6860e5da741cede0061f9eb1420e11d39e17c6d6de1bbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed97b9264e3e6e8af6860e5da741cede0061f9eb1420e11d39e17c6d6de1bbba->enter($__internal_ed97b9264e3e6e8af6860e5da741cede0061f9eb1420e11d39e17c6d6de1bbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_72f5f8cc4e0c05b477f11475ca611df454835d5b9f314e090838656bac50f65a->leave($__internal_72f5f8cc4e0c05b477f11475ca611df454835d5b9f314e090838656bac50f65a_prof);

        
        $__internal_ed97b9264e3e6e8af6860e5da741cede0061f9eb1420e11d39e17c6d6de1bbba->leave($__internal_ed97b9264e3e6e8af6860e5da741cede0061f9eb1420e11d39e17c6d6de1bbba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
