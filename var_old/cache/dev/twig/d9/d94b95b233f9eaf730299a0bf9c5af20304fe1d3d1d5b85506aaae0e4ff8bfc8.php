<?php

/* :persona:edit.html.twig */
class __TwigTemplate_a25180a58176fc195729cf9401488c677fc843da343f9924a12adc23776dac6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":persona:edit.html.twig", 1);
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
        $__internal_0f3130d8266b2abf8d181122854074865f032a2992970a5c7c4b3acc50518232 = $this->env->getExtension("native_profiler");
        $__internal_0f3130d8266b2abf8d181122854074865f032a2992970a5c7c4b3acc50518232->enter($__internal_0f3130d8266b2abf8d181122854074865f032a2992970a5c7c4b3acc50518232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":persona:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3130d8266b2abf8d181122854074865f032a2992970a5c7c4b3acc50518232->leave($__internal_0f3130d8266b2abf8d181122854074865f032a2992970a5c7c4b3acc50518232_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28aedb25ecd5676d88e355bc83b823b6e00bd855936c3b21c225bb379fed88ea = $this->env->getExtension("native_profiler");
        $__internal_28aedb25ecd5676d88e355bc83b823b6e00bd855936c3b21c225bb379fed88ea->enter($__internal_28aedb25ecd5676d88e355bc83b823b6e00bd855936c3b21c225bb379fed88ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Persona edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("persona_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_28aedb25ecd5676d88e355bc83b823b6e00bd855936c3b21c225bb379fed88ea->leave($__internal_28aedb25ecd5676d88e355bc83b823b6e00bd855936c3b21c225bb379fed88ea_prof);

    }

    public function getTemplateName()
    {
        return ":persona:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Persona edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('persona_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
