<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_9a66517d31644ca486f9d57bb0e6fb59a13bde2cc610a284ae3f49fd9bd96a17 extends Twig_Template
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
        $__internal_519b9aa9bffa9fd8c9180e3c91daa03b0a1d578c500c8fbf482d9a03a5442a14 = $this->env->getExtension("native_profiler");
        $__internal_519b9aa9bffa9fd8c9180e3c91daa03b0a1d578c500c8fbf482d9a03a5442a14->enter($__internal_519b9aa9bffa9fd8c9180e3c91daa03b0a1d578c500c8fbf482d9a03a5442a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_519b9aa9bffa9fd8c9180e3c91daa03b0a1d578c500c8fbf482d9a03a5442a14->leave($__internal_519b9aa9bffa9fd8c9180e3c91daa03b0a1d578c500c8fbf482d9a03a5442a14_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
