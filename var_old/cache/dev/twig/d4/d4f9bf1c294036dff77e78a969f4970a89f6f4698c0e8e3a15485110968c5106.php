<?php

/* :empleado:index.html.twig */
class __TwigTemplate_c31ca34bc70f5a3a3feab5408278fe35701a7c5f9ff77eddd0dfda5291a9f2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":empleado:index.html.twig", 1);
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
        $__internal_a492b31946443d313e239fad339aba0aecb52f4acc995b846d217f198bbb8336 = $this->env->getExtension("native_profiler");
        $__internal_a492b31946443d313e239fad339aba0aecb52f4acc995b846d217f198bbb8336->enter($__internal_a492b31946443d313e239fad339aba0aecb52f4acc995b846d217f198bbb8336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empleado:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a492b31946443d313e239fad339aba0aecb52f4acc995b846d217f198bbb8336->leave($__internal_a492b31946443d313e239fad339aba0aecb52f4acc995b846d217f198bbb8336_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be9d09dd1e630032dca7d3666d531969ce1a4c5a8b4c936b91f0c272b84a9775 = $this->env->getExtension("native_profiler");
        $__internal_be9d09dd1e630032dca7d3666d531969ce1a4c5a8b4c936b91f0c272b84a9775->enter($__internal_be9d09dd1e630032dca7d3666d531969ce1a4c5a8b4c936b91f0c272b84a9775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Ficha</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleados"]) ? $context["empleados"] : $this->getContext($context, "empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empleado_show", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "login", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "ficha", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empleado_show", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empleado_edit", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("empleado_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_be9d09dd1e630032dca7d3666d531969ce1a4c5a8b4c936b91f0c272b84a9775->leave($__internal_be9d09dd1e630032dca7d3666d531969ce1a4c5a8b4c936b91f0c272b84a9775_prof);

    }

    public function getTemplateName()
    {
        return ":empleado:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Empleado list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Login</th>*/
/*                 <th>Ficha</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for empleado in empleados %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('empleado_show', { 'id': empleado.id }) }}">{{ empleado.id }}</a></td>*/
/*                 <td>{{ empleado.login }}</td>*/
/*                 <td>{{ empleado.ficha }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('empleado_show', { 'id': empleado.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('empleado_edit', { 'id': empleado.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empleado_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
