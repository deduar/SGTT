<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5c0ef6b5e970e205a44ee210a4df97c25a7450178d13c796cfe03423916dba46 extends Twig_Template
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
        $__internal_4538b0941da80c90a25e6d5c6c411c6908d4ab46cc756e53fb1a180aefc73fcc = $this->env->getExtension("native_profiler");
        $__internal_4538b0941da80c90a25e6d5c6c411c6908d4ab46cc756e53fb1a180aefc73fcc->enter($__internal_4538b0941da80c90a25e6d5c6c411c6908d4ab46cc756e53fb1a180aefc73fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4538b0941da80c90a25e6d5c6c411c6908d4ab46cc756e53fb1a180aefc73fcc->leave($__internal_4538b0941da80c90a25e6d5c6c411c6908d4ab46cc756e53fb1a180aefc73fcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
