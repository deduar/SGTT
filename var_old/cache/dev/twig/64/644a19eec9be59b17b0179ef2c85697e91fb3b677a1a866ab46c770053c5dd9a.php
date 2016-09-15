<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b2e94eb5acd08a2d8ed6c7d5a6f17a7f61b7f9882c4dfb8f07ca409374b4c43f extends Twig_Template
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
        $__internal_aea43384761cefceff3481a32a95c959ef00a874e0f12bae5cdb4d520a4888c7 = $this->env->getExtension("native_profiler");
        $__internal_aea43384761cefceff3481a32a95c959ef00a874e0f12bae5cdb4d520a4888c7->enter($__internal_aea43384761cefceff3481a32a95c959ef00a874e0f12bae5cdb4d520a4888c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aea43384761cefceff3481a32a95c959ef00a874e0f12bae5cdb4d520a4888c7->leave($__internal_aea43384761cefceff3481a32a95c959ef00a874e0f12bae5cdb4d520a4888c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
