<?php

/* ::base.html.twig */
class __TwigTemplate_a8fa38effae690c5eaf26c39316916b242cdd1af8de9701a1754dcc48177e171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a976574d5b4f5024e019bdd22478487aaa94e89f5f845cb704ea803a20d8181 = $this->env->getExtension("native_profiler");
        $__internal_6a976574d5b4f5024e019bdd22478487aaa94e89f5f845cb704ea803a20d8181->enter($__internal_6a976574d5b4f5024e019bdd22478487aaa94e89f5f845cb704ea803a20d8181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6a976574d5b4f5024e019bdd22478487aaa94e89f5f845cb704ea803a20d8181->leave($__internal_6a976574d5b4f5024e019bdd22478487aaa94e89f5f845cb704ea803a20d8181_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9b781b98abf6eac0127192ed113ba86c9f72da5fe05565673105954b569f9fd = $this->env->getExtension("native_profiler");
        $__internal_c9b781b98abf6eac0127192ed113ba86c9f72da5fe05565673105954b569f9fd->enter($__internal_c9b781b98abf6eac0127192ed113ba86c9f72da5fe05565673105954b569f9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c9b781b98abf6eac0127192ed113ba86c9f72da5fe05565673105954b569f9fd->leave($__internal_c9b781b98abf6eac0127192ed113ba86c9f72da5fe05565673105954b569f9fd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c46738d131fa2d5281a10a7fc22fc3fe658b98b89f767b465827e117453f6084 = $this->env->getExtension("native_profiler");
        $__internal_c46738d131fa2d5281a10a7fc22fc3fe658b98b89f767b465827e117453f6084->enter($__internal_c46738d131fa2d5281a10a7fc22fc3fe658b98b89f767b465827e117453f6084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c46738d131fa2d5281a10a7fc22fc3fe658b98b89f767b465827e117453f6084->leave($__internal_c46738d131fa2d5281a10a7fc22fc3fe658b98b89f767b465827e117453f6084_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d65e79cbaaeb4aec56690bbf7a3e26f66c860ef6c084520e7a8a0b97933fdd6f = $this->env->getExtension("native_profiler");
        $__internal_d65e79cbaaeb4aec56690bbf7a3e26f66c860ef6c084520e7a8a0b97933fdd6f->enter($__internal_d65e79cbaaeb4aec56690bbf7a3e26f66c860ef6c084520e7a8a0b97933fdd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d65e79cbaaeb4aec56690bbf7a3e26f66c860ef6c084520e7a8a0b97933fdd6f->leave($__internal_d65e79cbaaeb4aec56690bbf7a3e26f66c860ef6c084520e7a8a0b97933fdd6f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e796f1f7cb70534000b7c52b9a4e930794abea59f4c62a285ef118d0d46b240 = $this->env->getExtension("native_profiler");
        $__internal_3e796f1f7cb70534000b7c52b9a4e930794abea59f4c62a285ef118d0d46b240->enter($__internal_3e796f1f7cb70534000b7c52b9a4e930794abea59f4c62a285ef118d0d46b240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e796f1f7cb70534000b7c52b9a4e930794abea59f4c62a285ef118d0d46b240->leave($__internal_3e796f1f7cb70534000b7c52b9a4e930794abea59f4c62a285ef118d0d46b240_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
