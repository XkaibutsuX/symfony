<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_808c9a5fac27e826efb7061ecca7e1e5444f57ef24b851ef1e4e9bf83c4300aa extends Twig_Template
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
        $__internal_e5765973abbf7053e6744b08a4b07a9d73fc5f63982644e56313e2821fcb6089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5765973abbf7053e6744b08a4b07a9d73fc5f63982644e56313e2821fcb6089->enter($__internal_e5765973abbf7053e6744b08a4b07a9d73fc5f63982644e56313e2821fcb6089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_fa0daa17f30a37c501c30ae9f4ad76bd1dd1d5467229839aad0c6d4a748cc3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0daa17f30a37c501c30ae9f4ad76bd1dd1d5467229839aad0c6d4a748cc3c5->enter($__internal_fa0daa17f30a37c501c30ae9f4ad76bd1dd1d5467229839aad0c6d4a748cc3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e5765973abbf7053e6744b08a4b07a9d73fc5f63982644e56313e2821fcb6089->leave($__internal_e5765973abbf7053e6744b08a4b07a9d73fc5f63982644e56313e2821fcb6089_prof);

        
        $__internal_fa0daa17f30a37c501c30ae9f4ad76bd1dd1d5467229839aad0c6d4a748cc3c5->leave($__internal_fa0daa17f30a37c501c30ae9f4ad76bd1dd1d5467229839aad0c6d4a748cc3c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
