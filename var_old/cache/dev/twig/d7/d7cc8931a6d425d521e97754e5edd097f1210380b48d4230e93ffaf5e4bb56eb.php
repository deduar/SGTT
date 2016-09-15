<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0f1505906da8db6af94ccd4313f5a5610299442871d5c02b5d960e904830cec3 extends Twig_Template
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
        $__internal_e7667843de2307701436ab7f342f924c5bc908d7dc58f172a60311151eae1e4f = $this->env->getExtension("native_profiler");
        $__internal_e7667843de2307701436ab7f342f924c5bc908d7dc58f172a60311151eae1e4f->enter($__internal_e7667843de2307701436ab7f342f924c5bc908d7dc58f172a60311151eae1e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e7667843de2307701436ab7f342f924c5bc908d7dc58f172a60311151eae1e4f->leave($__internal_e7667843de2307701436ab7f342f924c5bc908d7dc58f172a60311151eae1e4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
