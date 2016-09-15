<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d27528a5ab219711de0d9dc9e68f8e358a02b0bcdbbb0f40eafe8cb64cb506c4 extends Twig_Template
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
        $__internal_f0d5ec7b6739a16efc6c6adbccde3c10ee0d93524d1c0a9ed2d6c47669de8966 = $this->env->getExtension("native_profiler");
        $__internal_f0d5ec7b6739a16efc6c6adbccde3c10ee0d93524d1c0a9ed2d6c47669de8966->enter($__internal_f0d5ec7b6739a16efc6c6adbccde3c10ee0d93524d1c0a9ed2d6c47669de8966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f0d5ec7b6739a16efc6c6adbccde3c10ee0d93524d1c0a9ed2d6c47669de8966->leave($__internal_f0d5ec7b6739a16efc6c6adbccde3c10ee0d93524d1c0a9ed2d6c47669de8966_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
