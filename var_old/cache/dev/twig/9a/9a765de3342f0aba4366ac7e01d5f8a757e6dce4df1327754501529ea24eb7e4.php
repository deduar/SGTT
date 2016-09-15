<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ff8cd4c47c1bf851b0a84766121d6e8a6e4349386f3cdc8790008e961bfe2ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_63f8659dfce84a4f97f2e5732eaeda7eb39c7eb83a77eb7116a900618bf60f0c = $this->env->getExtension("native_profiler");
        $__internal_63f8659dfce84a4f97f2e5732eaeda7eb39c7eb83a77eb7116a900618bf60f0c->enter($__internal_63f8659dfce84a4f97f2e5732eaeda7eb39c7eb83a77eb7116a900618bf60f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f8659dfce84a4f97f2e5732eaeda7eb39c7eb83a77eb7116a900618bf60f0c->leave($__internal_63f8659dfce84a4f97f2e5732eaeda7eb39c7eb83a77eb7116a900618bf60f0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b419c55afc310a7e86e3d76cbcbd75b30ed3c7dcd72eb533ba16865d614ba3d = $this->env->getExtension("native_profiler");
        $__internal_6b419c55afc310a7e86e3d76cbcbd75b30ed3c7dcd72eb533ba16865d614ba3d->enter($__internal_6b419c55afc310a7e86e3d76cbcbd75b30ed3c7dcd72eb533ba16865d614ba3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6b419c55afc310a7e86e3d76cbcbd75b30ed3c7dcd72eb533ba16865d614ba3d->leave($__internal_6b419c55afc310a7e86e3d76cbcbd75b30ed3c7dcd72eb533ba16865d614ba3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_798167ebe48cda618342538ed8627cb41d0d59e25b7251d96a5e695627eae076 = $this->env->getExtension("native_profiler");
        $__internal_798167ebe48cda618342538ed8627cb41d0d59e25b7251d96a5e695627eae076->enter($__internal_798167ebe48cda618342538ed8627cb41d0d59e25b7251d96a5e695627eae076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_798167ebe48cda618342538ed8627cb41d0d59e25b7251d96a5e695627eae076->leave($__internal_798167ebe48cda618342538ed8627cb41d0d59e25b7251d96a5e695627eae076_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
