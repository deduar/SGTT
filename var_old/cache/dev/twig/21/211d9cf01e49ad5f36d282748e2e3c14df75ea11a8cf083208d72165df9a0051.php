<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_02f0a776a121f1f218fc29e8361b64dcceda1f3a4972f3eb5a43dbb89927bc3f extends Twig_Template
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
        $__internal_71f46cdf00bee9842d534f36be10f1733916c357d1012065ace3f23decf8ef27 = $this->env->getExtension("native_profiler");
        $__internal_71f46cdf00bee9842d534f36be10f1733916c357d1012065ace3f23decf8ef27->enter($__internal_71f46cdf00bee9842d534f36be10f1733916c357d1012065ace3f23decf8ef27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_71f46cdf00bee9842d534f36be10f1733916c357d1012065ace3f23decf8ef27->leave($__internal_71f46cdf00bee9842d534f36be10f1733916c357d1012065ace3f23decf8ef27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
