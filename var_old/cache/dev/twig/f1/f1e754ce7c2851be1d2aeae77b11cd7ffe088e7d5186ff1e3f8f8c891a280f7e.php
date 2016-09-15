<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_85fb1437b248d93a0d7f5f9a232627a94eb6b6d84a89957bc259ff9d5532e6b5 extends Twig_Template
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
        $__internal_cbec2100f5d09fc43b631f96fc84936a032074927a15dcf327f2ce95adb48300 = $this->env->getExtension("native_profiler");
        $__internal_cbec2100f5d09fc43b631f96fc84936a032074927a15dcf327f2ce95adb48300->enter($__internal_cbec2100f5d09fc43b631f96fc84936a032074927a15dcf327f2ce95adb48300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_cbec2100f5d09fc43b631f96fc84936a032074927a15dcf327f2ce95adb48300->leave($__internal_cbec2100f5d09fc43b631f96fc84936a032074927a15dcf327f2ce95adb48300_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
