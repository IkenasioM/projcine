<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a3fbe77b88790b36413b44197f33bb72014f2b307f4b4476323b79f7940d113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3fbe77b88790b36413b44197f33bb72014f2b307f4b4476323b79f7940d113->enter($__internal_8a3fbe77b88790b36413b44197f33bb72014f2b307f4b4476323b79f7940d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3b0af0cd76160a614ebf71a1d91e549921c3f974842548791e4d5796b9c0c604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0af0cd76160a614ebf71a1d91e549921c3f974842548791e4d5796b9c0c604->enter($__internal_3b0af0cd76160a614ebf71a1d91e549921c3f974842548791e4d5796b9c0c604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a3fbe77b88790b36413b44197f33bb72014f2b307f4b4476323b79f7940d113->leave($__internal_8a3fbe77b88790b36413b44197f33bb72014f2b307f4b4476323b79f7940d113_prof);

        
        $__internal_3b0af0cd76160a614ebf71a1d91e549921c3f974842548791e4d5796b9c0c604->leave($__internal_3b0af0cd76160a614ebf71a1d91e549921c3f974842548791e4d5796b9c0c604_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b6c66f5ef16fef16e287947349fcfb5371781b114d43aa4a0be60171e5140cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c66f5ef16fef16e287947349fcfb5371781b114d43aa4a0be60171e5140cd2->enter($__internal_b6c66f5ef16fef16e287947349fcfb5371781b114d43aa4a0be60171e5140cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6e9780f7ca5541397461f0909cae3bdeba48b7455c1ce3e8599f8ca1b6112d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9780f7ca5541397461f0909cae3bdeba48b7455c1ce3e8599f8ca1b6112d62->enter($__internal_6e9780f7ca5541397461f0909cae3bdeba48b7455c1ce3e8599f8ca1b6112d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6e9780f7ca5541397461f0909cae3bdeba48b7455c1ce3e8599f8ca1b6112d62->leave($__internal_6e9780f7ca5541397461f0909cae3bdeba48b7455c1ce3e8599f8ca1b6112d62_prof);

        
        $__internal_b6c66f5ef16fef16e287947349fcfb5371781b114d43aa4a0be60171e5140cd2->leave($__internal_b6c66f5ef16fef16e287947349fcfb5371781b114d43aa4a0be60171e5140cd2_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3d054eba269926e5d0df6c9cae4ee96aafdb64693d19db3d0bb0d5c82cc997a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d054eba269926e5d0df6c9cae4ee96aafdb64693d19db3d0bb0d5c82cc997a->enter($__internal_d3d054eba269926e5d0df6c9cae4ee96aafdb64693d19db3d0bb0d5c82cc997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_825ae2d8e81b5f60780ce6e0b7b5d88564d871f14c98c9f80894ae05860e0766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825ae2d8e81b5f60780ce6e0b7b5d88564d871f14c98c9f80894ae05860e0766->enter($__internal_825ae2d8e81b5f60780ce6e0b7b5d88564d871f14c98c9f80894ae05860e0766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_825ae2d8e81b5f60780ce6e0b7b5d88564d871f14c98c9f80894ae05860e0766->leave($__internal_825ae2d8e81b5f60780ce6e0b7b5d88564d871f14c98c9f80894ae05860e0766_prof);

        
        $__internal_d3d054eba269926e5d0df6c9cae4ee96aafdb64693d19db3d0bb0d5c82cc997a->leave($__internal_d3d054eba269926e5d0df6c9cae4ee96aafdb64693d19db3d0bb0d5c82cc997a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
