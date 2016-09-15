<?php

/* :empleado:edit.html.twig */
class __TwigTemplate_c6027612275e95bc0eb7ecb4d782f96b3be99a8a58a02c4cd44135053ac59e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":empleado:edit.html.twig", 1);
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
        $__internal_08d524280e370a370ed4f4dd83bd82e6beb06b0707f2dfba90e476295574482f = $this->env->getExtension("native_profiler");
        $__internal_08d524280e370a370ed4f4dd83bd82e6beb06b0707f2dfba90e476295574482f->enter($__internal_08d524280e370a370ed4f4dd83bd82e6beb06b0707f2dfba90e476295574482f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empleado:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d524280e370a370ed4f4dd83bd82e6beb06b0707f2dfba90e476295574482f->leave($__internal_08d524280e370a370ed4f4dd83bd82e6beb06b0707f2dfba90e476295574482f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da8947e8825722cb93ddc05f3e19ea44bc1c024f02e857da1541823bdab74f7a = $this->env->getExtension("native_profiler");
        $__internal_da8947e8825722cb93ddc05f3e19ea44bc1c024f02e857da1541823bdab74f7a->enter($__internal_da8947e8825722cb93ddc05f3e19ea44bc1c024f02e857da1541823bdab74f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("empleado_index");
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
        
        $__internal_da8947e8825722cb93ddc05f3e19ea44bc1c024f02e857da1541823bdab74f7a->leave($__internal_da8947e8825722cb93ddc05f3e19ea44bc1c024f02e857da1541823bdab74f7a_prof);

    }

    public function getTemplateName()
    {
        return ":empleado:edit.html.twig";
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
/*     <h1>Empleado edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empleado_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
