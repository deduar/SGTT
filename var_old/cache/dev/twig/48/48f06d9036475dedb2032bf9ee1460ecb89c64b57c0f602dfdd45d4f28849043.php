<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_340c087f6e8536316c9308bc9be237db687d7633003eaa3be198137dec52447a extends Twig_Template
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
        $__internal_331e98832520cf3231128007ce9798aa0726fce08d80554dad60fa88867ca8a2 = $this->env->getExtension("native_profiler");
        $__internal_331e98832520cf3231128007ce9798aa0726fce08d80554dad60fa88867ca8a2->enter($__internal_331e98832520cf3231128007ce9798aa0726fce08d80554dad60fa88867ca8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_331e98832520cf3231128007ce9798aa0726fce08d80554dad60fa88867ca8a2->leave($__internal_331e98832520cf3231128007ce9798aa0726fce08d80554dad60fa88867ca8a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
