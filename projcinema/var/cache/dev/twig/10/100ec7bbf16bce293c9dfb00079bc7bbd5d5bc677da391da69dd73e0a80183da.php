<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_185465045c6dc15145cc74432053d972c640213f9859b623a87d06d8b4f0eb98 extends Twig_Template
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
        $__internal_73dd6a5dd2604b02848ce1e55aa66fa2cec9b581e648c6bc054e38b60a55156a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73dd6a5dd2604b02848ce1e55aa66fa2cec9b581e648c6bc054e38b60a55156a->enter($__internal_73dd6a5dd2604b02848ce1e55aa66fa2cec9b581e648c6bc054e38b60a55156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_982b1ed6c374130404f1664ddedafb84f4dc8fbd19b51b31f99b860ba552509b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982b1ed6c374130404f1664ddedafb84f4dc8fbd19b51b31f99b860ba552509b->enter($__internal_982b1ed6c374130404f1664ddedafb84f4dc8fbd19b51b31f99b860ba552509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_73dd6a5dd2604b02848ce1e55aa66fa2cec9b581e648c6bc054e38b60a55156a->leave($__internal_73dd6a5dd2604b02848ce1e55aa66fa2cec9b581e648c6bc054e38b60a55156a_prof);

        
        $__internal_982b1ed6c374130404f1664ddedafb84f4dc8fbd19b51b31f99b860ba552509b->leave($__internal_982b1ed6c374130404f1664ddedafb84f4dc8fbd19b51b31f99b860ba552509b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
