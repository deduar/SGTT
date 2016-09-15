<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_93ab5e97ce3b1fc672ca330694499be336f8621fe575a960e7582cf91ef9846c extends Twig_Template
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
        $__internal_1f4192170bc8421a9bd6eee6b84de19d3366a54a7b224d284947ebbef1d5082d = $this->env->getExtension("native_profiler");
        $__internal_1f4192170bc8421a9bd6eee6b84de19d3366a54a7b224d284947ebbef1d5082d->enter($__internal_1f4192170bc8421a9bd6eee6b84de19d3366a54a7b224d284947ebbef1d5082d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1f4192170bc8421a9bd6eee6b84de19d3366a54a7b224d284947ebbef1d5082d->leave($__internal_1f4192170bc8421a9bd6eee6b84de19d3366a54a7b224d284947ebbef1d5082d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
