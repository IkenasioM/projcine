<?php

/* FrontBundle:Bonjour:salut.html.twig */
class __TwigTemplate_0f7640f224cf900d090d59bef0b178c388ad0e467e8d3c0302c1809a1193312c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Bonjour:salut.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ce4f5e7e9858e4477d38b6e65b7caf21141c8e1e5916114ce3a4513d0bd4a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce4f5e7e9858e4477d38b6e65b7caf21141c8e1e5916114ce3a4513d0bd4a9c->enter($__internal_2ce4f5e7e9858e4477d38b6e65b7caf21141c8e1e5916114ce3a4513d0bd4a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Bonjour:salut.html.twig"));

        $__internal_7d51f60ade2ad3d31a5fa96dd66312ca4ef90b84a2eb45e196c507fc0eddc8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d51f60ade2ad3d31a5fa96dd66312ca4ef90b84a2eb45e196c507fc0eddc8fc->enter($__internal_7d51f60ade2ad3d31a5fa96dd66312ca4ef90b84a2eb45e196c507fc0eddc8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Bonjour:salut.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce4f5e7e9858e4477d38b6e65b7caf21141c8e1e5916114ce3a4513d0bd4a9c->leave($__internal_2ce4f5e7e9858e4477d38b6e65b7caf21141c8e1e5916114ce3a4513d0bd4a9c_prof);

        
        $__internal_7d51f60ade2ad3d31a5fa96dd66312ca4ef90b84a2eb45e196c507fc0eddc8fc->leave($__internal_7d51f60ade2ad3d31a5fa96dd66312ca4ef90b84a2eb45e196c507fc0eddc8fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_84b1b189c5678e8fc0e7a064fc6e1281d750a9770917ce36e5a9a6639ee347f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b1b189c5678e8fc0e7a064fc6e1281d750a9770917ce36e5a9a6639ee347f0->enter($__internal_84b1b189c5678e8fc0e7a064fc6e1281d750a9770917ce36e5a9a6639ee347f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd7f8f84c09d07410304b517fb4e5e2ec8def4c624be929a0ca19fb1f6efd058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7f8f84c09d07410304b517fb4e5e2ec8def4c624be929a0ca19fb1f6efd058->enter($__internal_fd7f8f84c09d07410304b517fb4e5e2ec8def4c624be929a0ca19fb1f6efd058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FrontBundle:Bonjour:salut";
        
        $__internal_fd7f8f84c09d07410304b517fb4e5e2ec8def4c624be929a0ca19fb1f6efd058->leave($__internal_fd7f8f84c09d07410304b517fb4e5e2ec8def4c624be929a0ca19fb1f6efd058_prof);

        
        $__internal_84b1b189c5678e8fc0e7a064fc6e1281d750a9770917ce36e5a9a6639ee347f0->leave($__internal_84b1b189c5678e8fc0e7a064fc6e1281d750a9770917ce36e5a9a6639ee347f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15197faefdab4c2777b2baaf912b0a298ba0accfde6420ed2f00196ec6eee701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15197faefdab4c2777b2baaf912b0a298ba0accfde6420ed2f00196ec6eee701->enter($__internal_15197faefdab4c2777b2baaf912b0a298ba0accfde6420ed2f00196ec6eee701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a345fc6fbb193ba5e80a2434e64b9dc891170b65a455fbe467d5250e26e3517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a345fc6fbb193ba5e80a2434e64b9dc891170b65a455fbe467d5250e26e3517->enter($__internal_9a345fc6fbb193ba5e80a2434e64b9dc891170b65a455fbe467d5250e26e3517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Bonjour:salut page</h1>
";
        
        $__internal_9a345fc6fbb193ba5e80a2434e64b9dc891170b65a455fbe467d5250e26e3517->leave($__internal_9a345fc6fbb193ba5e80a2434e64b9dc891170b65a455fbe467d5250e26e3517_prof);

        
        $__internal_15197faefdab4c2777b2baaf912b0a298ba0accfde6420ed2f00196ec6eee701->leave($__internal_15197faefdab4c2777b2baaf912b0a298ba0accfde6420ed2f00196ec6eee701_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Bonjour:salut.html.twig";
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
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}FrontBundle:Bonjour:salut{% endblock %}

{% block body %}
<h1>Welcome to the Bonjour:salut page</h1>
{% endblock %}
", "FrontBundle:Bonjour:salut.html.twig", "/var/www/html/projcinema/src/FrontBundle/Resources/views/Bonjour/salut.html.twig");
    }
}
