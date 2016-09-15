<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ac48df369bc5a5a3e86f89c72029b0823da53a748d5cd56e36a8d7ca1c9e9e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88976e16eff942341d2142a9a7a614c8f18d70b5a673d3265ed5e2a180b733ad = $this->env->getExtension("native_profiler");
        $__internal_88976e16eff942341d2142a9a7a614c8f18d70b5a673d3265ed5e2a180b733ad->enter($__internal_88976e16eff942341d2142a9a7a614c8f18d70b5a673d3265ed5e2a180b733ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88976e16eff942341d2142a9a7a614c8f18d70b5a673d3265ed5e2a180b733ad->leave($__internal_88976e16eff942341d2142a9a7a614c8f18d70b5a673d3265ed5e2a180b733ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4f5563c68e6e0fdb6529f434c964490e1314ae885b8e741d35772a10a070ffc = $this->env->getExtension("native_profiler");
        $__internal_a4f5563c68e6e0fdb6529f434c964490e1314ae885b8e741d35772a10a070ffc->enter($__internal_a4f5563c68e6e0fdb6529f434c964490e1314ae885b8e741d35772a10a070ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a4f5563c68e6e0fdb6529f434c964490e1314ae885b8e741d35772a10a070ffc->leave($__internal_a4f5563c68e6e0fdb6529f434c964490e1314ae885b8e741d35772a10a070ffc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_56e419e515d5fc8f34fc231a8ba1cc1d8c9b019ad1c48338558e6e4246e48d1d = $this->env->getExtension("native_profiler");
        $__internal_56e419e515d5fc8f34fc231a8ba1cc1d8c9b019ad1c48338558e6e4246e48d1d->enter($__internal_56e419e515d5fc8f34fc231a8ba1cc1d8c9b019ad1c48338558e6e4246e48d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_56e419e515d5fc8f34fc231a8ba1cc1d8c9b019ad1c48338558e6e4246e48d1d->leave($__internal_56e419e515d5fc8f34fc231a8ba1cc1d8c9b019ad1c48338558e6e4246e48d1d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b0812a6422c024899973d2235cbb98153a646197922192680515086045599d2 = $this->env->getExtension("native_profiler");
        $__internal_8b0812a6422c024899973d2235cbb98153a646197922192680515086045599d2->enter($__internal_8b0812a6422c024899973d2235cbb98153a646197922192680515086045599d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8b0812a6422c024899973d2235cbb98153a646197922192680515086045599d2->leave($__internal_8b0812a6422c024899973d2235cbb98153a646197922192680515086045599d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
