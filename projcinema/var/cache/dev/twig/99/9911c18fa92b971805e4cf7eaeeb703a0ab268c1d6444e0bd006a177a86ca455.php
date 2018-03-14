<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f67d2fc2f7a2285ee9e986e046017b1d8e54b71d0756e0ffdddbf5be77ea14a4 extends Twig_Template
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
        $__internal_588e9026f7251a3cdb5f9e60c03db29731c2907475fbd245df4009fad967c5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588e9026f7251a3cdb5f9e60c03db29731c2907475fbd245df4009fad967c5ee->enter($__internal_588e9026f7251a3cdb5f9e60c03db29731c2907475fbd245df4009fad967c5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_16753ee588a7b0e1d1bcd51bc4908a46f83c0d39c5fb1b3c0ef89d863fe9c3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16753ee588a7b0e1d1bcd51bc4908a46f83c0d39c5fb1b3c0ef89d863fe9c3ef->enter($__internal_16753ee588a7b0e1d1bcd51bc4908a46f83c0d39c5fb1b3c0ef89d863fe9c3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_588e9026f7251a3cdb5f9e60c03db29731c2907475fbd245df4009fad967c5ee->leave($__internal_588e9026f7251a3cdb5f9e60c03db29731c2907475fbd245df4009fad967c5ee_prof);

        
        $__internal_16753ee588a7b0e1d1bcd51bc4908a46f83c0d39c5fb1b3c0ef89d863fe9c3ef->leave($__internal_16753ee588a7b0e1d1bcd51bc4908a46f83c0d39c5fb1b3c0ef89d863fe9c3ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
