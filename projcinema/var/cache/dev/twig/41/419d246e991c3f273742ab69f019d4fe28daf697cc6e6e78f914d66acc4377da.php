<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_420662ea07c7eb31eafbc2e4c79560047a4af17b2eea2a28471cad821cd71dc7 extends Twig_Template
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
        $__internal_57224c5f21b60629ecb5dc9cf37f3b5a5757d36000fa025d1b5a1fffaf431708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57224c5f21b60629ecb5dc9cf37f3b5a5757d36000fa025d1b5a1fffaf431708->enter($__internal_57224c5f21b60629ecb5dc9cf37f3b5a5757d36000fa025d1b5a1fffaf431708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7c66d015895cfdde9119a2d8eb8416134edfa557e21f43cc671253103a1a3650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c66d015895cfdde9119a2d8eb8416134edfa557e21f43cc671253103a1a3650->enter($__internal_7c66d015895cfdde9119a2d8eb8416134edfa557e21f43cc671253103a1a3650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_57224c5f21b60629ecb5dc9cf37f3b5a5757d36000fa025d1b5a1fffaf431708->leave($__internal_57224c5f21b60629ecb5dc9cf37f3b5a5757d36000fa025d1b5a1fffaf431708_prof);

        
        $__internal_7c66d015895cfdde9119a2d8eb8416134edfa557e21f43cc671253103a1a3650->leave($__internal_7c66d015895cfdde9119a2d8eb8416134edfa557e21f43cc671253103a1a3650_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
