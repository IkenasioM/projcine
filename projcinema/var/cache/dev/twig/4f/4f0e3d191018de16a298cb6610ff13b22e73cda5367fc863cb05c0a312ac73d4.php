<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d863d1cef9de841ba69b04c507182b0dc0f20c72576928c759ef2f2e3e76abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d863d1cef9de841ba69b04c507182b0dc0f20c72576928c759ef2f2e3e76abd->enter($__internal_3d863d1cef9de841ba69b04c507182b0dc0f20c72576928c759ef2f2e3e76abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_38941878741016f2bd0c40e117a7b857498175ca33c7287f05250f3e0bdea396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38941878741016f2bd0c40e117a7b857498175ca33c7287f05250f3e0bdea396->enter($__internal_38941878741016f2bd0c40e117a7b857498175ca33c7287f05250f3e0bdea396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d863d1cef9de841ba69b04c507182b0dc0f20c72576928c759ef2f2e3e76abd->leave($__internal_3d863d1cef9de841ba69b04c507182b0dc0f20c72576928c759ef2f2e3e76abd_prof);

        
        $__internal_38941878741016f2bd0c40e117a7b857498175ca33c7287f05250f3e0bdea396->leave($__internal_38941878741016f2bd0c40e117a7b857498175ca33c7287f05250f3e0bdea396_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4667f3711ba62f31ffec7877eb1908c236a9c198aadca98c3f667b8e9297b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4667f3711ba62f31ffec7877eb1908c236a9c198aadca98c3f667b8e9297b8c->enter($__internal_d4667f3711ba62f31ffec7877eb1908c236a9c198aadca98c3f667b8e9297b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f1e58fa7a89c01bc21fbbaab827302fda509e1dbf567b38e0aab9b7a927cf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1e58fa7a89c01bc21fbbaab827302fda509e1dbf567b38e0aab9b7a927cf00->enter($__internal_1f1e58fa7a89c01bc21fbbaab827302fda509e1dbf567b38e0aab9b7a927cf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1f1e58fa7a89c01bc21fbbaab827302fda509e1dbf567b38e0aab9b7a927cf00->leave($__internal_1f1e58fa7a89c01bc21fbbaab827302fda509e1dbf567b38e0aab9b7a927cf00_prof);

        
        $__internal_d4667f3711ba62f31ffec7877eb1908c236a9c198aadca98c3f667b8e9297b8c->leave($__internal_d4667f3711ba62f31ffec7877eb1908c236a9c198aadca98c3f667b8e9297b8c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f5706ef9ba56803cd7e2f96230230f12fb7bf8e0f210a389e39d7016cdf517b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5706ef9ba56803cd7e2f96230230f12fb7bf8e0f210a389e39d7016cdf517b->enter($__internal_9f5706ef9ba56803cd7e2f96230230f12fb7bf8e0f210a389e39d7016cdf517b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7688bb84aa847de2eae924c0bb311331ecdd56694393f382e5c2b0cde7dab8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7688bb84aa847de2eae924c0bb311331ecdd56694393f382e5c2b0cde7dab8c3->enter($__internal_7688bb84aa847de2eae924c0bb311331ecdd56694393f382e5c2b0cde7dab8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7688bb84aa847de2eae924c0bb311331ecdd56694393f382e5c2b0cde7dab8c3->leave($__internal_7688bb84aa847de2eae924c0bb311331ecdd56694393f382e5c2b0cde7dab8c3_prof);

        
        $__internal_9f5706ef9ba56803cd7e2f96230230f12fb7bf8e0f210a389e39d7016cdf517b->leave($__internal_9f5706ef9ba56803cd7e2f96230230f12fb7bf8e0f210a389e39d7016cdf517b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
