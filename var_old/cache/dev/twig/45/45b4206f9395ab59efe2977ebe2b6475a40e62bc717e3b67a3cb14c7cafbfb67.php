<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_dd99525038802f5df23784ad1d360c4da3d7993dba98ca8bc71942ef309633a4 extends Twig_Template
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
        $__internal_7d50c8343e03034b9a7bb52b9e0801e83b90b074bc0b5a571a68a1cd2ead4536 = $this->env->getExtension("native_profiler");
        $__internal_7d50c8343e03034b9a7bb52b9e0801e83b90b074bc0b5a571a68a1cd2ead4536->enter($__internal_7d50c8343e03034b9a7bb52b9e0801e83b90b074bc0b5a571a68a1cd2ead4536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7d50c8343e03034b9a7bb52b9e0801e83b90b074bc0b5a571a68a1cd2ead4536->leave($__internal_7d50c8343e03034b9a7bb52b9e0801e83b90b074bc0b5a571a68a1cd2ead4536_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
