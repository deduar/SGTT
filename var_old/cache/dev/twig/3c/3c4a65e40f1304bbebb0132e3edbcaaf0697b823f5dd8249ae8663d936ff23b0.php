<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d05941c640e77566020db6890323667622fadda2532dab9554cff88c8a65bc39 extends Twig_Template
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
        $__internal_8eefc04a1a0fde608e2e5a3ba484d14c7b83728fb8f4903b852de7f5bbeb8e4e = $this->env->getExtension("native_profiler");
        $__internal_8eefc04a1a0fde608e2e5a3ba484d14c7b83728fb8f4903b852de7f5bbeb8e4e->enter($__internal_8eefc04a1a0fde608e2e5a3ba484d14c7b83728fb8f4903b852de7f5bbeb8e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8eefc04a1a0fde608e2e5a3ba484d14c7b83728fb8f4903b852de7f5bbeb8e4e->leave($__internal_8eefc04a1a0fde608e2e5a3ba484d14c7b83728fb8f4903b852de7f5bbeb8e4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
