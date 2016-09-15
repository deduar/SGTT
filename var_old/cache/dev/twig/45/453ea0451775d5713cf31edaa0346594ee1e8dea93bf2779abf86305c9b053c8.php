<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ea0a2e26ee195b9cdfdb498389db317e3bc03a916dc66d504d78488c5528c387 extends Twig_Template
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
        $__internal_e66dc90cfe05fe0d085d3992154a79dbe53f13e6536c86b5554d8c6d26e453e6 = $this->env->getExtension("native_profiler");
        $__internal_e66dc90cfe05fe0d085d3992154a79dbe53f13e6536c86b5554d8c6d26e453e6->enter($__internal_e66dc90cfe05fe0d085d3992154a79dbe53f13e6536c86b5554d8c6d26e453e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e66dc90cfe05fe0d085d3992154a79dbe53f13e6536c86b5554d8c6d26e453e6->leave($__internal_e66dc90cfe05fe0d085d3992154a79dbe53f13e6536c86b5554d8c6d26e453e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
