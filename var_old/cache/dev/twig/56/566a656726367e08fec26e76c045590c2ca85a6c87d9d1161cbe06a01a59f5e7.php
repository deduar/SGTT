<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_91c9a1cc77621147d4b47c49fc0f0a93d51fa405bc244c9d55cc73fa67c18637 extends Twig_Template
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
        $__internal_1d7887847079e9abb7abab69e351144c9ba7875503702c7b3487d1b95baf8198 = $this->env->getExtension("native_profiler");
        $__internal_1d7887847079e9abb7abab69e351144c9ba7875503702c7b3487d1b95baf8198->enter($__internal_1d7887847079e9abb7abab69e351144c9ba7875503702c7b3487d1b95baf8198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1d7887847079e9abb7abab69e351144c9ba7875503702c7b3487d1b95baf8198->leave($__internal_1d7887847079e9abb7abab69e351144c9ba7875503702c7b3487d1b95baf8198_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
