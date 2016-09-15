<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1d754fe81722d5c58c682fef9db4938f0fd63ee00ef10b4a3a5372ee56e0fbd5 extends Twig_Template
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
        $__internal_2b4109af09a256e2c2e58f77039ab0ef6066c39f7ef645003a5615f0a6c9bcb5 = $this->env->getExtension("native_profiler");
        $__internal_2b4109af09a256e2c2e58f77039ab0ef6066c39f7ef645003a5615f0a6c9bcb5->enter($__internal_2b4109af09a256e2c2e58f77039ab0ef6066c39f7ef645003a5615f0a6c9bcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2b4109af09a256e2c2e58f77039ab0ef6066c39f7ef645003a5615f0a6c9bcb5->leave($__internal_2b4109af09a256e2c2e58f77039ab0ef6066c39f7ef645003a5615f0a6c9bcb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
