<?php

/* :persona:index.html.twig */
class __TwigTemplate_8388998230665983a98702c8af6c9e98256b8037be3e71d5bc0df68b324227e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":persona:index.html.twig", 1);
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
        $__internal_9d79bc69461aef5731a6669426a1549c406473affd48384c211ad4c8bb726fe8 = $this->env->getExtension("native_profiler");
        $__internal_9d79bc69461aef5731a6669426a1549c406473affd48384c211ad4c8bb726fe8->enter($__internal_9d79bc69461aef5731a6669426a1549c406473affd48384c211ad4c8bb726fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":persona:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d79bc69461aef5731a6669426a1549c406473affd48384c211ad4c8bb726fe8->leave($__internal_9d79bc69461aef5731a6669426a1549c406473affd48384c211ad4c8bb726fe8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47731214b454a8c3ed8471ab1872e7122623b73412024702d1c882b7f2ab7168 = $this->env->getExtension("native_profiler");
        $__internal_47731214b454a8c3ed8471ab1872e7122623b73412024702d1c882b7f2ab7168->enter($__internal_47731214b454a8c3ed8471ab1872e7122623b73412024702d1c882b7f2ab7168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Persona list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Ci</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personas"]) ? $context["personas"] : $this->getContext($context, "personas")));
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_show", array("id" => $this->getAttribute($context["persona"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "ci", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_show", array("id" => $this->getAttribute($context["persona"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona_edit", array("id" => $this->getAttribute($context["persona"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("persona_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_47731214b454a8c3ed8471ab1872e7122623b73412024702d1c882b7f2ab7168->leave($__internal_47731214b454a8c3ed8471ab1872e7122623b73412024702d1c882b7f2ab7168_prof);

    }

    public function getTemplateName()
    {
        return ":persona:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Persona list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Apellido</th>*/
/*                 <th>Ci</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for persona in personas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('persona_show', { 'id': persona.id }) }}">{{ persona.id }}</a></td>*/
/*                 <td>{{ persona.nombre }}</td>*/
/*                 <td>{{ persona.apellido }}</td>*/
/*                 <td>{{ persona.ci }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('persona_show', { 'id': persona.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('persona_edit', { 'id': persona.id }) }}">edit</a>*/
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
/*             <a href="{{ path('persona_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
