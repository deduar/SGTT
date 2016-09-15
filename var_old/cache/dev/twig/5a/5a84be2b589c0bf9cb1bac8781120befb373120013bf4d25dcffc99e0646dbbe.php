<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4c03c5052d3841198d2decefa45d173537becae075c3d3ee0c4216ffc2928d23 extends Twig_Template
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
        $__internal_556459591c62c036c76a7c4438c9f2aceaf12105ac7ba7da8f9bd3b0363a6c73 = $this->env->getExtension("native_profiler");
        $__internal_556459591c62c036c76a7c4438c9f2aceaf12105ac7ba7da8f9bd3b0363a6c73->enter($__internal_556459591c62c036c76a7c4438c9f2aceaf12105ac7ba7da8f9bd3b0363a6c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_556459591c62c036c76a7c4438c9f2aceaf12105ac7ba7da8f9bd3b0363a6c73->leave($__internal_556459591c62c036c76a7c4438c9f2aceaf12105ac7ba7da8f9bd3b0363a6c73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
