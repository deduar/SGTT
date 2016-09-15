<?php

/* :empleado:new.html.twig */
class __TwigTemplate_37a8be9238301c6e25a57a98764d1abcccecd658532a21b98373c5b0efdeff27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":empleado:new.html.twig", 1);
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
        $__internal_b4e390c9891d6a5b28e6a309edfe2f064529624527b85d4440fcd06c4928ee11 = $this->env->getExtension("native_profiler");
        $__internal_b4e390c9891d6a5b28e6a309edfe2f064529624527b85d4440fcd06c4928ee11->enter($__internal_b4e390c9891d6a5b28e6a309edfe2f064529624527b85d4440fcd06c4928ee11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empleado:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4e390c9891d6a5b28e6a309edfe2f064529624527b85d4440fcd06c4928ee11->leave($__internal_b4e390c9891d6a5b28e6a309edfe2f064529624527b85d4440fcd06c4928ee11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83bd155d8e25306577322b8684ca4e9d653dcbe3f92f92106921d0df8160ead1 = $this->env->getExtension("native_profiler");
        $__internal_83bd155d8e25306577322b8684ca4e9d653dcbe3f92f92106921d0df8160ead1->enter($__internal_83bd155d8e25306577322b8684ca4e9d653dcbe3f92f92106921d0df8160ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("empleado_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_83bd155d8e25306577322b8684ca4e9d653dcbe3f92f92106921d0df8160ead1->leave($__internal_83bd155d8e25306577322b8684ca4e9d653dcbe3f92f92106921d0df8160ead1_prof);

    }

    public function getTemplateName()
    {
        return ":empleado:new.html.twig";
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
/*     <h1>Empleado creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empleado_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
