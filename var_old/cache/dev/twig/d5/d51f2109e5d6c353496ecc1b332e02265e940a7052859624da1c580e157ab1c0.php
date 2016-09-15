<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_668577f5bd8ce6749d8a348f4732192be024936e17b6c7fe5d1cbf55203d1e70 extends Twig_Template
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
        $__internal_3521314d0fad3517d831d06a57c8fc91b5336c0eded9a834cf58da3a7a1b54a3 = $this->env->getExtension("native_profiler");
        $__internal_3521314d0fad3517d831d06a57c8fc91b5336c0eded9a834cf58da3a7a1b54a3->enter($__internal_3521314d0fad3517d831d06a57c8fc91b5336c0eded9a834cf58da3a7a1b54a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3521314d0fad3517d831d06a57c8fc91b5336c0eded9a834cf58da3a7a1b54a3->leave($__internal_3521314d0fad3517d831d06a57c8fc91b5336c0eded9a834cf58da3a7a1b54a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
