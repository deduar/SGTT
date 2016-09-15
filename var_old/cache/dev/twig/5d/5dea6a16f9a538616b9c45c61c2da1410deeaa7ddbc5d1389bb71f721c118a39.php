<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2387fd74116b32d79d0890397e864927b3d5ec83efeb87e834e0df8c62c3ec8a extends Twig_Template
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
        $__internal_647baf86740fbee207e759bdf34b9eb11be0fe9646ffe8fd14a272cb87d24147 = $this->env->getExtension("native_profiler");
        $__internal_647baf86740fbee207e759bdf34b9eb11be0fe9646ffe8fd14a272cb87d24147->enter($__internal_647baf86740fbee207e759bdf34b9eb11be0fe9646ffe8fd14a272cb87d24147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_647baf86740fbee207e759bdf34b9eb11be0fe9646ffe8fd14a272cb87d24147->leave($__internal_647baf86740fbee207e759bdf34b9eb11be0fe9646ffe8fd14a272cb87d24147_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
