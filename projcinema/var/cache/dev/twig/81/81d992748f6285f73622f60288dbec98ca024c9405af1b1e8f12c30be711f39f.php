<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_26ee846c4dd28eded1343f5f8fb371637c73a111d7d70fa1a8bed47160f1c23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ee846c4dd28eded1343f5f8fb371637c73a111d7d70fa1a8bed47160f1c23d->enter($__internal_26ee846c4dd28eded1343f5f8fb371637c73a111d7d70fa1a8bed47160f1c23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_277a450721ee40ba67ec046b3f7774efdd18fc7aa99edf0756c8dd7e6a227052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277a450721ee40ba67ec046b3f7774efdd18fc7aa99edf0756c8dd7e6a227052->enter($__internal_277a450721ee40ba67ec046b3f7774efdd18fc7aa99edf0756c8dd7e6a227052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_26ee846c4dd28eded1343f5f8fb371637c73a111d7d70fa1a8bed47160f1c23d->leave($__internal_26ee846c4dd28eded1343f5f8fb371637c73a111d7d70fa1a8bed47160f1c23d_prof);

        
        $__internal_277a450721ee40ba67ec046b3f7774efdd18fc7aa99edf0756c8dd7e6a227052->leave($__internal_277a450721ee40ba67ec046b3f7774efdd18fc7aa99edf0756c8dd7e6a227052_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
