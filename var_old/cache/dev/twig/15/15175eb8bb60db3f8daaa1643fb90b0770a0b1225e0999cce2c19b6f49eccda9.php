<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac3781609b63a95cdfbfb8207b860ebb36bdb00c38b7ade56803210e84d1fe2c extends Twig_Template
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
        $__internal_b57c69a800d2508a3153805cc9d7193d12786c7764426b08974734342509a515 = $this->env->getExtension("native_profiler");
        $__internal_b57c69a800d2508a3153805cc9d7193d12786c7764426b08974734342509a515->enter($__internal_b57c69a800d2508a3153805cc9d7193d12786c7764426b08974734342509a515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b57c69a800d2508a3153805cc9d7193d12786c7764426b08974734342509a515->leave($__internal_b57c69a800d2508a3153805cc9d7193d12786c7764426b08974734342509a515_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
