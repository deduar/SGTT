<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bf1a767b1dece759c935a011c5b4fcf441a9f1b21dbc2b68f475775987f459df extends Twig_Template
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
        $__internal_8a6fd3f3d3f7641c5ffd6b23f6f20229c38487725fdb891796da3125f2aa296e = $this->env->getExtension("native_profiler");
        $__internal_8a6fd3f3d3f7641c5ffd6b23f6f20229c38487725fdb891796da3125f2aa296e->enter($__internal_8a6fd3f3d3f7641c5ffd6b23f6f20229c38487725fdb891796da3125f2aa296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8a6fd3f3d3f7641c5ffd6b23f6f20229c38487725fdb891796da3125f2aa296e->leave($__internal_8a6fd3f3d3f7641c5ffd6b23f6f20229c38487725fdb891796da3125f2aa296e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
