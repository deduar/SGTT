<?php

/* :persona:show.html.twig */
class __TwigTemplate_55ca75a3b6d5cd49b6ebe3def9be231a562154641c8774e6076b1dc5d5e059bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":persona:show.html.twig", 1);
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
        $__internal_a5da433a2d0999eb85d1f473b87bdbf427e3c49dc0c4e2774b0c1cd3c27133f3 = $this->env->getExtension("native_profiler");
        $__internal_a5da433a2d0999eb85d1f473b87bdbf427e3c49dc0c4e2774b0c1cd3c27133f3->enter($__internal_a5da433a2d0999eb85d1f473b87bdbf427e3c49dc0c4e2774b0c1cd3c27133f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":persona:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5da433a2d0999eb85d1f473b87bdbf427e3c49dc0c4e2774b0c1cd3c27133f3->leave($__internal_a5da433a2d0999eb85d1f473b87bdbf427e3c49dc0c4e2774b0c1cd3c27133f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8311ca40482990e18ce09e6b7519a4be01c8036de0f2104985be7ce02f97f374 = $this->env->getExtension("native_profiler");
        $__internal_8311ca40482990e18ce09e6b7519a4be01c8036de0f2104985be7ce02f97f374->enter($__internal_8311ca40482990e18ce09e6b7519a4be01c8036de0f2104985be7ce02f97f374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Persona</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "apellido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ci</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "ci", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("persona_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_edit", array("id" => $this->getAttribute((isset($context["persona"]) ? $context["persona"] : $this->getContext($context, "persona")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8311ca40482990e18ce09e6b7519a4be01c8036de0f2104985be7ce02f97f374->leave($__internal_8311ca40482990e18ce09e6b7519a4be01c8036de0f2104985be7ce02f97f374_prof);

    }

    public function getTemplateName()
    {
        return ":persona:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Persona</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ persona.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ persona.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellido</th>*/
/*                 <td>{{ persona.apellido }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ci</th>*/
/*                 <td>{{ persona.ci }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('persona_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('persona_edit', { 'id': persona.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
