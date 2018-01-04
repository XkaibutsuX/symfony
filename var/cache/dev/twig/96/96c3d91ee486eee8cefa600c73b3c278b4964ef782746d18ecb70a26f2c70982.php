<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_df980bd01f7198e337b868d5c079699207bd99fb4712ea7df85324365564ca91 extends Twig_Template
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
        $__internal_e964ce847bbb3806ed4a051fc78488a2cf2282a52785e93b1d6199525c74c980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e964ce847bbb3806ed4a051fc78488a2cf2282a52785e93b1d6199525c74c980->enter($__internal_e964ce847bbb3806ed4a051fc78488a2cf2282a52785e93b1d6199525c74c980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_caa56c5c553d947879c12436807aa45f193d19c0de0edc159b49a958d1490bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa56c5c553d947879c12436807aa45f193d19c0de0edc159b49a958d1490bb4->enter($__internal_caa56c5c553d947879c12436807aa45f193d19c0de0edc159b49a958d1490bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e964ce847bbb3806ed4a051fc78488a2cf2282a52785e93b1d6199525c74c980->leave($__internal_e964ce847bbb3806ed4a051fc78488a2cf2282a52785e93b1d6199525c74c980_prof);

        
        $__internal_caa56c5c553d947879c12436807aa45f193d19c0de0edc159b49a958d1490bb4->leave($__internal_caa56c5c553d947879c12436807aa45f193d19c0de0edc159b49a958d1490bb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/justine/yolo/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
