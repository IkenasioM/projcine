<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c1666146a2f6eb159bbdc4ca849be12207a39249dc7ce8fa2f0b9315aa3c6506 extends Twig_Template
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
        $__internal_d1f1780ec8446b8b568761ce424e7a625886586b32c1320f96395a0d066b09b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f1780ec8446b8b568761ce424e7a625886586b32c1320f96395a0d066b09b9->enter($__internal_d1f1780ec8446b8b568761ce424e7a625886586b32c1320f96395a0d066b09b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0eb4180f6a1ab6585284cb32ced40c48028d93b7b70466d81f69df512796f53f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb4180f6a1ab6585284cb32ced40c48028d93b7b70466d81f69df512796f53f->enter($__internal_0eb4180f6a1ab6585284cb32ced40c48028d93b7b70466d81f69df512796f53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d1f1780ec8446b8b568761ce424e7a625886586b32c1320f96395a0d066b09b9->leave($__internal_d1f1780ec8446b8b568761ce424e7a625886586b32c1320f96395a0d066b09b9_prof);

        
        $__internal_0eb4180f6a1ab6585284cb32ced40c48028d93b7b70466d81f69df512796f53f->leave($__internal_0eb4180f6a1ab6585284cb32ced40c48028d93b7b70466d81f69df512796f53f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
