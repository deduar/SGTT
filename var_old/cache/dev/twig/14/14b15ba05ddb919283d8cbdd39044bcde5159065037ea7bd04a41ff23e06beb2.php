<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_71bb889cda7499e66c3af85f0faa47955973298fcc238a8ff94c02740ec770bc extends Twig_Template
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
        $__internal_8a5bf4761c6ffcdb60c17dac7c337e46d644297e9c5c7dd266a92b62e8a61c67 = $this->env->getExtension("native_profiler");
        $__internal_8a5bf4761c6ffcdb60c17dac7c337e46d644297e9c5c7dd266a92b62e8a61c67->enter($__internal_8a5bf4761c6ffcdb60c17dac7c337e46d644297e9c5c7dd266a92b62e8a61c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8a5bf4761c6ffcdb60c17dac7c337e46d644297e9c5c7dd266a92b62e8a61c67->leave($__internal_8a5bf4761c6ffcdb60c17dac7c337e46d644297e9c5c7dd266a92b62e8a61c67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
