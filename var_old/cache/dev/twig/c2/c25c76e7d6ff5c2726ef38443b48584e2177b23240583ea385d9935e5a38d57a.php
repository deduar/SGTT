<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5e750b5dc4b9ed39629765322d485d5fb7782090a52bed43bce3b7c65900f970 extends Twig_Template
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
        $__internal_0175a52bc85b3d05d943c75b9a6d176ea1c292703051754a9f78bf1b73f74759 = $this->env->getExtension("native_profiler");
        $__internal_0175a52bc85b3d05d943c75b9a6d176ea1c292703051754a9f78bf1b73f74759->enter($__internal_0175a52bc85b3d05d943c75b9a6d176ea1c292703051754a9f78bf1b73f74759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0175a52bc85b3d05d943c75b9a6d176ea1c292703051754a9f78bf1b73f74759->leave($__internal_0175a52bc85b3d05d943c75b9a6d176ea1c292703051754a9f78bf1b73f74759_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
