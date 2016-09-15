<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ad77354439a9eb47fef67142b5723f704ef3305f9f95ec8e3e256ea48b5ccec7 extends Twig_Template
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
        $__internal_0b45b5fa2cb6c8f3f57e67b4f0ec8f61779a3f7dea96f6123c3975ed5393c4b2 = $this->env->getExtension("native_profiler");
        $__internal_0b45b5fa2cb6c8f3f57e67b4f0ec8f61779a3f7dea96f6123c3975ed5393c4b2->enter($__internal_0b45b5fa2cb6c8f3f57e67b4f0ec8f61779a3f7dea96f6123c3975ed5393c4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0b45b5fa2cb6c8f3f57e67b4f0ec8f61779a3f7dea96f6123c3975ed5393c4b2->leave($__internal_0b45b5fa2cb6c8f3f57e67b4f0ec8f61779a3f7dea96f6123c3975ed5393c4b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
