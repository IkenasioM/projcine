<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_53bd5f77cad09be4bfd1005b029091cc70956a83dc4019be69a0d1a9beea2758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bd5f77cad09be4bfd1005b029091cc70956a83dc4019be69a0d1a9beea2758->enter($__internal_53bd5f77cad09be4bfd1005b029091cc70956a83dc4019be69a0d1a9beea2758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7207cce6d6be5925cff79de45a85334e55b27968d7b0d13fd8440098bbc8c087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7207cce6d6be5925cff79de45a85334e55b27968d7b0d13fd8440098bbc8c087->enter($__internal_7207cce6d6be5925cff79de45a85334e55b27968d7b0d13fd8440098bbc8c087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53bd5f77cad09be4bfd1005b029091cc70956a83dc4019be69a0d1a9beea2758->leave($__internal_53bd5f77cad09be4bfd1005b029091cc70956a83dc4019be69a0d1a9beea2758_prof);

        
        $__internal_7207cce6d6be5925cff79de45a85334e55b27968d7b0d13fd8440098bbc8c087->leave($__internal_7207cce6d6be5925cff79de45a85334e55b27968d7b0d13fd8440098bbc8c087_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05b9be07c275b915388512e8f04e6c0ab605a4e4b105f57ffc42bc117c0fd872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b9be07c275b915388512e8f04e6c0ab605a4e4b105f57ffc42bc117c0fd872->enter($__internal_05b9be07c275b915388512e8f04e6c0ab605a4e4b105f57ffc42bc117c0fd872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_606316290ca5f5a596e15ad4d9ee2cbafdd12cc4072d1c8b987d166670a70d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606316290ca5f5a596e15ad4d9ee2cbafdd12cc4072d1c8b987d166670a70d2a->enter($__internal_606316290ca5f5a596e15ad4d9ee2cbafdd12cc4072d1c8b987d166670a70d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_606316290ca5f5a596e15ad4d9ee2cbafdd12cc4072d1c8b987d166670a70d2a->leave($__internal_606316290ca5f5a596e15ad4d9ee2cbafdd12cc4072d1c8b987d166670a70d2a_prof);

        
        $__internal_05b9be07c275b915388512e8f04e6c0ab605a4e4b105f57ffc42bc117c0fd872->leave($__internal_05b9be07c275b915388512e8f04e6c0ab605a4e4b105f57ffc42bc117c0fd872_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_148d0c69111493f77817eff4976d98952a751a40c3b8a11fadd4d43c55ec6567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148d0c69111493f77817eff4976d98952a751a40c3b8a11fadd4d43c55ec6567->enter($__internal_148d0c69111493f77817eff4976d98952a751a40c3b8a11fadd4d43c55ec6567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66454da7f498bc6b6942c58648f540ee72ad1bfd9db08ce84c48d8558be1e045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66454da7f498bc6b6942c58648f540ee72ad1bfd9db08ce84c48d8558be1e045->enter($__internal_66454da7f498bc6b6942c58648f540ee72ad1bfd9db08ce84c48d8558be1e045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_66454da7f498bc6b6942c58648f540ee72ad1bfd9db08ce84c48d8558be1e045->leave($__internal_66454da7f498bc6b6942c58648f540ee72ad1bfd9db08ce84c48d8558be1e045_prof);

        
        $__internal_148d0c69111493f77817eff4976d98952a751a40c3b8a11fadd4d43c55ec6567->leave($__internal_148d0c69111493f77817eff4976d98952a751a40c3b8a11fadd4d43c55ec6567_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5667e09df6c2b46bdfb38961dc685f17f72311dbdc82153b09fd537fe8f93b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5667e09df6c2b46bdfb38961dc685f17f72311dbdc82153b09fd537fe8f93b41->enter($__internal_5667e09df6c2b46bdfb38961dc685f17f72311dbdc82153b09fd537fe8f93b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4666ca34ceea2d8b0aa2d6684345be43e20dff30c265df3a96ecb9ed0717d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4666ca34ceea2d8b0aa2d6684345be43e20dff30c265df3a96ecb9ed0717d61->enter($__internal_f4666ca34ceea2d8b0aa2d6684345be43e20dff30c265df3a96ecb9ed0717d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f4666ca34ceea2d8b0aa2d6684345be43e20dff30c265df3a96ecb9ed0717d61->leave($__internal_f4666ca34ceea2d8b0aa2d6684345be43e20dff30c265df3a96ecb9ed0717d61_prof);

        
        $__internal_5667e09df6c2b46bdfb38961dc685f17f72311dbdc82153b09fd537fe8f93b41->leave($__internal_5667e09df6c2b46bdfb38961dc685f17f72311dbdc82153b09fd537fe8f93b41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
