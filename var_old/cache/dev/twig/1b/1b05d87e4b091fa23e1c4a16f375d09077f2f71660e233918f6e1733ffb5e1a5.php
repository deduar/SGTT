<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ffae1182f3d700eb866d652337eadbb96e7fa78db4429f369572cbe27c4e0b1b extends Twig_Template
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
        $__internal_0e25957250cc0eaf510ad8e77e00a7ef8870509b65ed8a2b6860710246aa36f4 = $this->env->getExtension("native_profiler");
        $__internal_0e25957250cc0eaf510ad8e77e00a7ef8870509b65ed8a2b6860710246aa36f4->enter($__internal_0e25957250cc0eaf510ad8e77e00a7ef8870509b65ed8a2b6860710246aa36f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0e25957250cc0eaf510ad8e77e00a7ef8870509b65ed8a2b6860710246aa36f4->leave($__internal_0e25957250cc0eaf510ad8e77e00a7ef8870509b65ed8a2b6860710246aa36f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
