<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6a6d38a4746afd318faadfa08804ea0f2b218fb793be2651e86d1ec33356b38b extends Twig_Template
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
        $__internal_fef148c958da8ed3d725e3b98c06b6f3931e5433c7f8430eeb30c38f8355c0cf = $this->env->getExtension("native_profiler");
        $__internal_fef148c958da8ed3d725e3b98c06b6f3931e5433c7f8430eeb30c38f8355c0cf->enter($__internal_fef148c958da8ed3d725e3b98c06b6f3931e5433c7f8430eeb30c38f8355c0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fef148c958da8ed3d725e3b98c06b6f3931e5433c7f8430eeb30c38f8355c0cf->leave($__internal_fef148c958da8ed3d725e3b98c06b6f3931e5433c7f8430eeb30c38f8355c0cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
