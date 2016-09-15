<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ac12aa69a823f73a0ae4e8394bb5f7cafd8f015c9d9b1c71f3ff0c13117419ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b35ecd04f19a635e91286bd21aeaaf1678c18ae443c8029a48956f27b5c364d = $this->env->getExtension("native_profiler");
        $__internal_5b35ecd04f19a635e91286bd21aeaaf1678c18ae443c8029a48956f27b5c364d->enter($__internal_5b35ecd04f19a635e91286bd21aeaaf1678c18ae443c8029a48956f27b5c364d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b35ecd04f19a635e91286bd21aeaaf1678c18ae443c8029a48956f27b5c364d->leave($__internal_5b35ecd04f19a635e91286bd21aeaaf1678c18ae443c8029a48956f27b5c364d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a1da60952ec4c1e3ee6c7b7bcd8f1c467eb90ec7617b949341581d971cf3f0c = $this->env->getExtension("native_profiler");
        $__internal_7a1da60952ec4c1e3ee6c7b7bcd8f1c467eb90ec7617b949341581d971cf3f0c->enter($__internal_7a1da60952ec4c1e3ee6c7b7bcd8f1c467eb90ec7617b949341581d971cf3f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a1da60952ec4c1e3ee6c7b7bcd8f1c467eb90ec7617b949341581d971cf3f0c->leave($__internal_7a1da60952ec4c1e3ee6c7b7bcd8f1c467eb90ec7617b949341581d971cf3f0c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b15548eaaca29707e3ad677a54ece35a91136c1ac5ba444fcc6506573340f313 = $this->env->getExtension("native_profiler");
        $__internal_b15548eaaca29707e3ad677a54ece35a91136c1ac5ba444fcc6506573340f313->enter($__internal_b15548eaaca29707e3ad677a54ece35a91136c1ac5ba444fcc6506573340f313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b15548eaaca29707e3ad677a54ece35a91136c1ac5ba444fcc6506573340f313->leave($__internal_b15548eaaca29707e3ad677a54ece35a91136c1ac5ba444fcc6506573340f313_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44c06e0071f3a21ae9c02e6d6881058b045cdefab2dfff6204d2641f9472fba7 = $this->env->getExtension("native_profiler");
        $__internal_44c06e0071f3a21ae9c02e6d6881058b045cdefab2dfff6204d2641f9472fba7->enter($__internal_44c06e0071f3a21ae9c02e6d6881058b045cdefab2dfff6204d2641f9472fba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_44c06e0071f3a21ae9c02e6d6881058b045cdefab2dfff6204d2641f9472fba7->leave($__internal_44c06e0071f3a21ae9c02e6d6881058b045cdefab2dfff6204d2641f9472fba7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
