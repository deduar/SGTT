<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_17c391c5d474e2ea0df349d7d963d303aac06f5debdccadf3af13ee6251bf2c6 extends Twig_Template
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
        $__internal_dfb41381e78559c2976865262ab03b709f2102d5c8d0f2d58934065f8320d70f = $this->env->getExtension("native_profiler");
        $__internal_dfb41381e78559c2976865262ab03b709f2102d5c8d0f2d58934065f8320d70f->enter($__internal_dfb41381e78559c2976865262ab03b709f2102d5c8d0f2d58934065f8320d70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dfb41381e78559c2976865262ab03b709f2102d5c8d0f2d58934065f8320d70f->leave($__internal_dfb41381e78559c2976865262ab03b709f2102d5c8d0f2d58934065f8320d70f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
