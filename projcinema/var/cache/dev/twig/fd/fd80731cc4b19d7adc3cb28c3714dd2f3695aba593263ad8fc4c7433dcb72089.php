<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_56027a76fb0cbc8231a447146ad120952aab48b1e01687a0b6292b9f65aa1dba extends Twig_Template
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
        $__internal_49059164ba0094d3818ebe167fecfa58e128f14773cd155818c4ced94bbbb362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49059164ba0094d3818ebe167fecfa58e128f14773cd155818c4ced94bbbb362->enter($__internal_49059164ba0094d3818ebe167fecfa58e128f14773cd155818c4ced94bbbb362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_15c724971540d8f9ccf6d41af09b4e95116de2208496bfa6406ee706b2e255b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c724971540d8f9ccf6d41af09b4e95116de2208496bfa6406ee706b2e255b0->enter($__internal_15c724971540d8f9ccf6d41af09b4e95116de2208496bfa6406ee706b2e255b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_49059164ba0094d3818ebe167fecfa58e128f14773cd155818c4ced94bbbb362->leave($__internal_49059164ba0094d3818ebe167fecfa58e128f14773cd155818c4ced94bbbb362_prof);

        
        $__internal_15c724971540d8f9ccf6d41af09b4e95116de2208496bfa6406ee706b2e255b0->leave($__internal_15c724971540d8f9ccf6d41af09b4e95116de2208496bfa6406ee706b2e255b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
