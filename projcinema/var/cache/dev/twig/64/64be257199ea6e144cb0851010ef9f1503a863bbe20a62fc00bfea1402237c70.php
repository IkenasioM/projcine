<?php

/* adminBundle:Cinema:addcinema.html.twig */
class __TwigTemplate_9e83dc684c4202b90a23ca761b8fe7c4ac4de38486076e9aeadef712f90538a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminBundle::layout.html.twig", "adminBundle:Cinema:addcinema.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd3437708f943fb47b37c783063707c16d559ded6c8a9e9c2a036af8107379ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3437708f943fb47b37c783063707c16d559ded6c8a9e9c2a036af8107379ec->enter($__internal_dd3437708f943fb47b37c783063707c16d559ded6c8a9e9c2a036af8107379ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:Cinema:addcinema.html.twig"));

        $__internal_ee2ceb0827a08b97a254ed2bad6b552427a6246d4cec66d0dbc5518ea136e11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2ceb0827a08b97a254ed2bad6b552427a6246d4cec66d0dbc5518ea136e11c->enter($__internal_ee2ceb0827a08b97a254ed2bad6b552427a6246d4cec66d0dbc5518ea136e11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:Cinema:addcinema.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd3437708f943fb47b37c783063707c16d559ded6c8a9e9c2a036af8107379ec->leave($__internal_dd3437708f943fb47b37c783063707c16d559ded6c8a9e9c2a036af8107379ec_prof);

        
        $__internal_ee2ceb0827a08b97a254ed2bad6b552427a6246d4cec66d0dbc5518ea136e11c->leave($__internal_ee2ceb0827a08b97a254ed2bad6b552427a6246d4cec66d0dbc5518ea136e11c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca7b9a9a70664058f9a5496f5fa34f49c81d8897aed8117611be85982f0bc358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7b9a9a70664058f9a5496f5fa34f49c81d8897aed8117611be85982f0bc358->enter($__internal_ca7b9a9a70664058f9a5496f5fa34f49c81d8897aed8117611be85982f0bc358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2c63225555bf1b3950dbb12acf42977af376f6822755153c724c00d6d14f5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c63225555bf1b3950dbb12acf42977af376f6822755153c724c00d6d14f5f2->enter($__internal_e2c63225555bf1b3950dbb12acf42977af376f6822755153c724c00d6d14f5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "adminBundle:Cinema:addcinema";
        
        $__internal_e2c63225555bf1b3950dbb12acf42977af376f6822755153c724c00d6d14f5f2->leave($__internal_e2c63225555bf1b3950dbb12acf42977af376f6822755153c724c00d6d14f5f2_prof);

        
        $__internal_ca7b9a9a70664058f9a5496f5fa34f49c81d8897aed8117611be85982f0bc358->leave($__internal_ca7b9a9a70664058f9a5496f5fa34f49c81d8897aed8117611be85982f0bc358_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_60dcb4355df974617e4c35d734c92760671cb66e57cb20495f98e4db18cfa695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60dcb4355df974617e4c35d734c92760671cb66e57cb20495f98e4db18cfa695->enter($__internal_60dcb4355df974617e4c35d734c92760671cb66e57cb20495f98e4db18cfa695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6af6a75498bc156445a1b020645c9a34059786af30561723cfc1908fbc50de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6af6a75498bc156445a1b020645c9a34059786af30561723cfc1908fbc50de5->enter($__internal_d6af6a75498bc156445a1b020645c9a34059786af30561723cfc1908fbc50de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Cinema:addcinema page</h1>
";
        
        $__internal_d6af6a75498bc156445a1b020645c9a34059786af30561723cfc1908fbc50de5->leave($__internal_d6af6a75498bc156445a1b020645c9a34059786af30561723cfc1908fbc50de5_prof);

        
        $__internal_60dcb4355df974617e4c35d734c92760671cb66e57cb20495f98e4db18cfa695->leave($__internal_60dcb4355df974617e4c35d734c92760671cb66e57cb20495f98e4db18cfa695_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:Cinema:addcinema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"adminBundle::layout.html.twig\" %}

{% block title %}adminBundle:Cinema:addcinema{% endblock %}

{% block body %}
<h1>Welcome to the Cinema:addcinema page</h1>
{% endblock %}
", "adminBundle:Cinema:addcinema.html.twig", "/var/www/html/projcinema/src/adminBundle/Resources/views/Cinema/addcinema.html.twig");
    }
}
