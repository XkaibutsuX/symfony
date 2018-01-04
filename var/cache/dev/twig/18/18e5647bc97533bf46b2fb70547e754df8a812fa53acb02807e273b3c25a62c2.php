<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_36f87e791b11985b39933a27938a4a7cc71981d89443d804437eaf563f5c9494 extends Twig_Template
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
        $__internal_869cfedd9da2b1b7f72991395899c5f1bc211c6860b00a17ed22291d5abe62d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869cfedd9da2b1b7f72991395899c5f1bc211c6860b00a17ed22291d5abe62d9->enter($__internal_869cfedd9da2b1b7f72991395899c5f1bc211c6860b00a17ed22291d5abe62d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a037a8d81d0f6c34531d76b91c9686904a9f5dfe873605ab28cdf9cfec3f37ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a037a8d81d0f6c34531d76b91c9686904a9f5dfe873605ab28cdf9cfec3f37ad->enter($__internal_a037a8d81d0f6c34531d76b91c9686904a9f5dfe873605ab28cdf9cfec3f37ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_869cfedd9da2b1b7f72991395899c5f1bc211c6860b00a17ed22291d5abe62d9->leave($__internal_869cfedd9da2b1b7f72991395899c5f1bc211c6860b00a17ed22291d5abe62d9_prof);

        
        $__internal_a037a8d81d0f6c34531d76b91c9686904a9f5dfe873605ab28cdf9cfec3f37ad->leave($__internal_a037a8d81d0f6c34531d76b91c9686904a9f5dfe873605ab28cdf9cfec3f37ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
