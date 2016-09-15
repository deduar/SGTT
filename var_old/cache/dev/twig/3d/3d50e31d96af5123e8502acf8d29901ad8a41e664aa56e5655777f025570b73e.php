<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b95faddc9a53fe3f2c6ecbac260c05a8cbfadbee0596e68d703732d30c4680d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7a7e929c68d18bbc5b4f1bc6ff9138800170fb1dc716c4e44a6c768d1f3e238 = $this->env->getExtension("native_profiler");
        $__internal_b7a7e929c68d18bbc5b4f1bc6ff9138800170fb1dc716c4e44a6c768d1f3e238->enter($__internal_b7a7e929c68d18bbc5b4f1bc6ff9138800170fb1dc716c4e44a6c768d1f3e238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b7a7e929c68d18bbc5b4f1bc6ff9138800170fb1dc716c4e44a6c768d1f3e238->leave($__internal_b7a7e929c68d18bbc5b4f1bc6ff9138800170fb1dc716c4e44a6c768d1f3e238_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e63d7310f2146bff2da0001e2355f1c9445427a501a2083faf96bf184dde29e = $this->env->getExtension("native_profiler");
        $__internal_6e63d7310f2146bff2da0001e2355f1c9445427a501a2083faf96bf184dde29e->enter($__internal_6e63d7310f2146bff2da0001e2355f1c9445427a501a2083faf96bf184dde29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e63d7310f2146bff2da0001e2355f1c9445427a501a2083faf96bf184dde29e->leave($__internal_6e63d7310f2146bff2da0001e2355f1c9445427a501a2083faf96bf184dde29e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
