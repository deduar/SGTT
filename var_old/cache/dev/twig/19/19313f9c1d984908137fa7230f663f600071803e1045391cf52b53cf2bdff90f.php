<?php

/* :empleado:show.html.twig */
class __TwigTemplate_e15ed1326be9e572ea5894484b6cf23616dde55c5b373f0d2959935175dff981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":empleado:show.html.twig", 1);
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
        $__internal_cfcbe92e80d5651c1853053e4de977da097d81741e0817200daad273d4d6ea69 = $this->env->getExtension("native_profiler");
        $__internal_cfcbe92e80d5651c1853053e4de977da097d81741e0817200daad273d4d6ea69->enter($__internal_cfcbe92e80d5651c1853053e4de977da097d81741e0817200daad273d4d6ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empleado:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfcbe92e80d5651c1853053e4de977da097d81741e0817200daad273d4d6ea69->leave($__internal_cfcbe92e80d5651c1853053e4de977da097d81741e0817200daad273d4d6ea69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_614182bce14088f65a2e4e5b3cea514891369afb5618e6c610f840a3212d4695 = $this->env->getExtension("native_profiler");
        $__internal_614182bce14088f65a2e4e5b3cea514891369afb5618e6c610f840a3212d4695->enter($__internal_614182bce14088f65a2e4e5b3cea514891369afb5618e6c610f840a3212d4695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "login", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ficha</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "ficha", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("empleado_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empleado_edit", array("id" => $this->getAttribute((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_614182bce14088f65a2e4e5b3cea514891369afb5618e6c610f840a3212d4695->leave($__internal_614182bce14088f65a2e4e5b3cea514891369afb5618e6c610f840a3212d4695_prof);

    }

    public function getTemplateName()
    {
        return ":empleado:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Empleado</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ empleado.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Login</th>*/
/*                 <td>{{ empleado.login }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ficha</th>*/
/*                 <td>{{ empleado.ficha }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empleado_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('empleado_edit', { 'id': empleado.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
