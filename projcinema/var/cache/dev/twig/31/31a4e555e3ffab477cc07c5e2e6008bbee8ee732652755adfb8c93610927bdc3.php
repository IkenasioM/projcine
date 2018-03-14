<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a40a6060e1adbd59aef8d786790e899ea0feb7bc866ea79c8b021c1d0e3332f3 extends Twig_Template
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
        $__internal_ea9b5552e81504c828e5f40901a053701280704bf9dd8016e3445fe138470173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9b5552e81504c828e5f40901a053701280704bf9dd8016e3445fe138470173->enter($__internal_ea9b5552e81504c828e5f40901a053701280704bf9dd8016e3445fe138470173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b546e7d378c9e80d2cece1a26a344a517136839df19ff8f5f954d6dbda285329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b546e7d378c9e80d2cece1a26a344a517136839df19ff8f5f954d6dbda285329->enter($__internal_b546e7d378c9e80d2cece1a26a344a517136839df19ff8f5f954d6dbda285329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ea9b5552e81504c828e5f40901a053701280704bf9dd8016e3445fe138470173->leave($__internal_ea9b5552e81504c828e5f40901a053701280704bf9dd8016e3445fe138470173_prof);

        
        $__internal_b546e7d378c9e80d2cece1a26a344a517136839df19ff8f5f954d6dbda285329->leave($__internal_b546e7d378c9e80d2cece1a26a344a517136839df19ff8f5f954d6dbda285329_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
