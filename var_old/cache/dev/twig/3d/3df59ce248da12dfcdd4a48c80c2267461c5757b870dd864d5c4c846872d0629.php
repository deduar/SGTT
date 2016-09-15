<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_296ecc0d996045e25804edcaa49a2ab2f976dc5d6b1fc10f89a64d46fe686f8c extends Twig_Template
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
        $__internal_37f41c56e114cebc508402b9d5f02f17866ec5be18390ab672eda87883739e2d = $this->env->getExtension("native_profiler");
        $__internal_37f41c56e114cebc508402b9d5f02f17866ec5be18390ab672eda87883739e2d->enter($__internal_37f41c56e114cebc508402b9d5f02f17866ec5be18390ab672eda87883739e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_37f41c56e114cebc508402b9d5f02f17866ec5be18390ab672eda87883739e2d->leave($__internal_37f41c56e114cebc508402b9d5f02f17866ec5be18390ab672eda87883739e2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
