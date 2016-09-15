<?php

/* :persona:new.html.twig */
class __TwigTemplate_b6a3c2eebfac5099489deed232b4e9fb62448f8740403cfa409882524d7efa7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":persona:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92f02ffb7b28721c0e500f9e9f82ded48dbe150c237997bbc7cc0ab488935acd = $this->env->getExtension("native_profiler");
        $__internal_92f02ffb7b28721c0e500f9e9f82ded48dbe150c237997bbc7cc0ab488935acd->enter($__internal_92f02ffb7b28721c0e500f9e9f82ded48dbe150c237997bbc7cc0ab488935acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":persona:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92f02ffb7b28721c0e500f9e9f82ded48dbe150c237997bbc7cc0ab488935acd->leave($__internal_92f02ffb7b28721c0e500f9e9f82ded48dbe150c237997bbc7cc0ab488935acd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57c466bd28f30c5ff025a0cdf5b043340887c46873e0d67e259825eef536e16b = $this->env->getExtension("native_profiler");
        $__internal_57c466bd28f30c5ff025a0cdf5b043340887c46873e0d67e259825eef536e16b->enter($__internal_57c466bd28f30c5ff025a0cdf5b043340887c46873e0d67e259825eef536e16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Persona creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("persona_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_57c466bd28f30c5ff025a0cdf5b043340887c46873e0d67e259825eef536e16b->leave($__internal_57c466bd28f30c5ff025a0cdf5b043340887c46873e0d67e259825eef536e16b_prof);

    }

    public function getTemplateName()
    {
        return ":persona:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Persona creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('persona_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
