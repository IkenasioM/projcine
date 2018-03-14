<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d5c428101bf636b884fa673d5da5c9876a8d053a4e46f34355c172cf6afdd13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5c428101bf636b884fa673d5da5c9876a8d053a4e46f34355c172cf6afdd13->enter($__internal_3d5c428101bf636b884fa673d5da5c9876a8d053a4e46f34355c172cf6afdd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_be8c6393316c6941a45b5fd805b38a8eeda37193cd782757ba484ce72171d3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8c6393316c6941a45b5fd805b38a8eeda37193cd782757ba484ce72171d3f3->enter($__internal_be8c6393316c6941a45b5fd805b38a8eeda37193cd782757ba484ce72171d3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3d5c428101bf636b884fa673d5da5c9876a8d053a4e46f34355c172cf6afdd13->leave($__internal_3d5c428101bf636b884fa673d5da5c9876a8d053a4e46f34355c172cf6afdd13_prof);

        
        $__internal_be8c6393316c6941a45b5fd805b38a8eeda37193cd782757ba484ce72171d3f3->leave($__internal_be8c6393316c6941a45b5fd805b38a8eeda37193cd782757ba484ce72171d3f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce045c425e915e6cfc8d8f1fb63d5ecc7bd1c5eee1ffc5705a9311fbeba436ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce045c425e915e6cfc8d8f1fb63d5ecc7bd1c5eee1ffc5705a9311fbeba436ee->enter($__internal_ce045c425e915e6cfc8d8f1fb63d5ecc7bd1c5eee1ffc5705a9311fbeba436ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2efb7d00b3a71c62900d74268b28e840a5258b160225b4f2021e5888a0b73772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efb7d00b3a71c62900d74268b28e840a5258b160225b4f2021e5888a0b73772->enter($__internal_2efb7d00b3a71c62900d74268b28e840a5258b160225b4f2021e5888a0b73772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2efb7d00b3a71c62900d74268b28e840a5258b160225b4f2021e5888a0b73772->leave($__internal_2efb7d00b3a71c62900d74268b28e840a5258b160225b4f2021e5888a0b73772_prof);

        
        $__internal_ce045c425e915e6cfc8d8f1fb63d5ecc7bd1c5eee1ffc5705a9311fbeba436ee->leave($__internal_ce045c425e915e6cfc8d8f1fb63d5ecc7bd1c5eee1ffc5705a9311fbeba436ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_187878bc8c4854d5a6471e948c7a16528752b4a187e8df5be649d0133f667ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187878bc8c4854d5a6471e948c7a16528752b4a187e8df5be649d0133f667ebf->enter($__internal_187878bc8c4854d5a6471e948c7a16528752b4a187e8df5be649d0133f667ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_be2f922a09f49bc413019df195baf5edcdea6f4871366a7fc91c6f2d3ee9e9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2f922a09f49bc413019df195baf5edcdea6f4871366a7fc91c6f2d3ee9e9b7->enter($__internal_be2f922a09f49bc413019df195baf5edcdea6f4871366a7fc91c6f2d3ee9e9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_be2f922a09f49bc413019df195baf5edcdea6f4871366a7fc91c6f2d3ee9e9b7->leave($__internal_be2f922a09f49bc413019df195baf5edcdea6f4871366a7fc91c6f2d3ee9e9b7_prof);

        
        $__internal_187878bc8c4854d5a6471e948c7a16528752b4a187e8df5be649d0133f667ebf->leave($__internal_187878bc8c4854d5a6471e948c7a16528752b4a187e8df5be649d0133f667ebf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_80b7273cbd4218e8da891b92bc2c7a1c7739ffef943a2de4bb99b518e99b70b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b7273cbd4218e8da891b92bc2c7a1c7739ffef943a2de4bb99b518e99b70b2->enter($__internal_80b7273cbd4218e8da891b92bc2c7a1c7739ffef943a2de4bb99b518e99b70b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76bc889f1b7924ee6c85cd6c6ccf6694f1d50875b9e901534c7473f025fbe3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bc889f1b7924ee6c85cd6c6ccf6694f1d50875b9e901534c7473f025fbe3bf->enter($__internal_76bc889f1b7924ee6c85cd6c6ccf6694f1d50875b9e901534c7473f025fbe3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_76bc889f1b7924ee6c85cd6c6ccf6694f1d50875b9e901534c7473f025fbe3bf->leave($__internal_76bc889f1b7924ee6c85cd6c6ccf6694f1d50875b9e901534c7473f025fbe3bf_prof);

        
        $__internal_80b7273cbd4218e8da891b92bc2c7a1c7739ffef943a2de4bb99b518e99b70b2->leave($__internal_80b7273cbd4218e8da891b92bc2c7a1c7739ffef943a2de4bb99b518e99b70b2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ef530cd30851843ed5f81a7ceb4f3da6b59a78fea1bc53941a6632854210ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef530cd30851843ed5f81a7ceb4f3da6b59a78fea1bc53941a6632854210ffe->enter($__internal_0ef530cd30851843ed5f81a7ceb4f3da6b59a78fea1bc53941a6632854210ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b18f78dfc3db5ee81725356ce77c34c2b6c79bb3d948b7335c6e56b5f7a7fac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18f78dfc3db5ee81725356ce77c34c2b6c79bb3d948b7335c6e56b5f7a7fac1->enter($__internal_b18f78dfc3db5ee81725356ce77c34c2b6c79bb3d948b7335c6e56b5f7a7fac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b18f78dfc3db5ee81725356ce77c34c2b6c79bb3d948b7335c6e56b5f7a7fac1->leave($__internal_b18f78dfc3db5ee81725356ce77c34c2b6c79bb3d948b7335c6e56b5f7a7fac1_prof);

        
        $__internal_0ef530cd30851843ed5f81a7ceb4f3da6b59a78fea1bc53941a6632854210ffe->leave($__internal_0ef530cd30851843ed5f81a7ceb4f3da6b59a78fea1bc53941a6632854210ffe_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/projcinema/app/Resources/views/base.html.twig");
    }
}
