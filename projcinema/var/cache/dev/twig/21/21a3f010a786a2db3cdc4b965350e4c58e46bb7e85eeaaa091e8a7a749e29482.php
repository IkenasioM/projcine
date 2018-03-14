<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f0550b2cf8b5db2b08e5961f1d40dacf000683bdb1364cf45a021bbd6f803c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0550b2cf8b5db2b08e5961f1d40dacf000683bdb1364cf45a021bbd6f803c8->enter($__internal_1f0550b2cf8b5db2b08e5961f1d40dacf000683bdb1364cf45a021bbd6f803c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_130709b6ac485add26ed2e20da6f25f82eb15ef6dbc6d4a7e2ca9e4e35f557e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130709b6ac485add26ed2e20da6f25f82eb15ef6dbc6d4a7e2ca9e4e35f557e6->enter($__internal_130709b6ac485add26ed2e20da6f25f82eb15ef6dbc6d4a7e2ca9e4e35f557e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f0550b2cf8b5db2b08e5961f1d40dacf000683bdb1364cf45a021bbd6f803c8->leave($__internal_1f0550b2cf8b5db2b08e5961f1d40dacf000683bdb1364cf45a021bbd6f803c8_prof);

        
        $__internal_130709b6ac485add26ed2e20da6f25f82eb15ef6dbc6d4a7e2ca9e4e35f557e6->leave($__internal_130709b6ac485add26ed2e20da6f25f82eb15ef6dbc6d4a7e2ca9e4e35f557e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9da95524ff3fa2824453140df49d1842ffc30ed564bcecc8f441bce60802a449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da95524ff3fa2824453140df49d1842ffc30ed564bcecc8f441bce60802a449->enter($__internal_9da95524ff3fa2824453140df49d1842ffc30ed564bcecc8f441bce60802a449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4630dd2463e88398318a066fa5a5e7f80cbecc8c3dd60588d11750d0a81d4218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4630dd2463e88398318a066fa5a5e7f80cbecc8c3dd60588d11750d0a81d4218->enter($__internal_4630dd2463e88398318a066fa5a5e7f80cbecc8c3dd60588d11750d0a81d4218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4630dd2463e88398318a066fa5a5e7f80cbecc8c3dd60588d11750d0a81d4218->leave($__internal_4630dd2463e88398318a066fa5a5e7f80cbecc8c3dd60588d11750d0a81d4218_prof);

        
        $__internal_9da95524ff3fa2824453140df49d1842ffc30ed564bcecc8f441bce60802a449->leave($__internal_9da95524ff3fa2824453140df49d1842ffc30ed564bcecc8f441bce60802a449_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a29f7445df9193c2a7dbcb07ee6abe3a87fbc33d062389c3e8fb0d096e830362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29f7445df9193c2a7dbcb07ee6abe3a87fbc33d062389c3e8fb0d096e830362->enter($__internal_a29f7445df9193c2a7dbcb07ee6abe3a87fbc33d062389c3e8fb0d096e830362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f60ca5f4f7e76ace733e81af35b227703023f6f50ac490e73ecffae3077932c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f60ca5f4f7e76ace733e81af35b227703023f6f50ac490e73ecffae3077932c->enter($__internal_9f60ca5f4f7e76ace733e81af35b227703023f6f50ac490e73ecffae3077932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_9f60ca5f4f7e76ace733e81af35b227703023f6f50ac490e73ecffae3077932c->leave($__internal_9f60ca5f4f7e76ace733e81af35b227703023f6f50ac490e73ecffae3077932c_prof);

        
        $__internal_a29f7445df9193c2a7dbcb07ee6abe3a87fbc33d062389c3e8fb0d096e830362->leave($__internal_a29f7445df9193c2a7dbcb07ee6abe3a87fbc33d062389c3e8fb0d096e830362_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
