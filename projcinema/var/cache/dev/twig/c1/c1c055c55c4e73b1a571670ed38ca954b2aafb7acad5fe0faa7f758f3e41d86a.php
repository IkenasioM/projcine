<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_877508cad7d200fcf78773b6eb6f491100e7815a9640bc823c2181189114503d extends Twig_Template
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
        $__internal_d76c3807217d0f5bcd15345ed836876c6e758c3d9f53812fc035515101f1c9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76c3807217d0f5bcd15345ed836876c6e758c3d9f53812fc035515101f1c9f6->enter($__internal_d76c3807217d0f5bcd15345ed836876c6e758c3d9f53812fc035515101f1c9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_cbc0541388a33e9fd2d6bae0337e605275cec40d9109f4fd21d9a2f477dd6a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc0541388a33e9fd2d6bae0337e605275cec40d9109f4fd21d9a2f477dd6a8f->enter($__internal_cbc0541388a33e9fd2d6bae0337e605275cec40d9109f4fd21d9a2f477dd6a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d76c3807217d0f5bcd15345ed836876c6e758c3d9f53812fc035515101f1c9f6->leave($__internal_d76c3807217d0f5bcd15345ed836876c6e758c3d9f53812fc035515101f1c9f6_prof);

        
        $__internal_cbc0541388a33e9fd2d6bae0337e605275cec40d9109f4fd21d9a2f477dd6a8f->leave($__internal_cbc0541388a33e9fd2d6bae0337e605275cec40d9109f4fd21d9a2f477dd6a8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
