<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd25338c62e3b3fec4220c1c64c01f6f877adc1f734669e4a994787abe4c7560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd25338c62e3b3fec4220c1c64c01f6f877adc1f734669e4a994787abe4c7560->enter($__internal_bd25338c62e3b3fec4220c1c64c01f6f877adc1f734669e4a994787abe4c7560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_970d68b1bd69c66ad67a97411d0d201f72137d6ef5faafffababc2122be0cd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970d68b1bd69c66ad67a97411d0d201f72137d6ef5faafffababc2122be0cd89->enter($__internal_970d68b1bd69c66ad67a97411d0d201f72137d6ef5faafffababc2122be0cd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd25338c62e3b3fec4220c1c64c01f6f877adc1f734669e4a994787abe4c7560->leave($__internal_bd25338c62e3b3fec4220c1c64c01f6f877adc1f734669e4a994787abe4c7560_prof);

        
        $__internal_970d68b1bd69c66ad67a97411d0d201f72137d6ef5faafffababc2122be0cd89->leave($__internal_970d68b1bd69c66ad67a97411d0d201f72137d6ef5faafffababc2122be0cd89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68f983aec70163d53eefcdd9ff4c48b2f4b136314308f786637fa39fba7eef2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f983aec70163d53eefcdd9ff4c48b2f4b136314308f786637fa39fba7eef2c->enter($__internal_68f983aec70163d53eefcdd9ff4c48b2f4b136314308f786637fa39fba7eef2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b22d3b4660deec1a9d47723ded8b3f953aa4ee558ac73f23c4e82fc594990015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22d3b4660deec1a9d47723ded8b3f953aa4ee558ac73f23c4e82fc594990015->enter($__internal_b22d3b4660deec1a9d47723ded8b3f953aa4ee558ac73f23c4e82fc594990015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b22d3b4660deec1a9d47723ded8b3f953aa4ee558ac73f23c4e82fc594990015->leave($__internal_b22d3b4660deec1a9d47723ded8b3f953aa4ee558ac73f23c4e82fc594990015_prof);

        
        $__internal_68f983aec70163d53eefcdd9ff4c48b2f4b136314308f786637fa39fba7eef2c->leave($__internal_68f983aec70163d53eefcdd9ff4c48b2f4b136314308f786637fa39fba7eef2c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_632c9b960c3bc8a310c2fb5414be7731bcf07914d434808955e73fdbabdb2d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632c9b960c3bc8a310c2fb5414be7731bcf07914d434808955e73fdbabdb2d97->enter($__internal_632c9b960c3bc8a310c2fb5414be7731bcf07914d434808955e73fdbabdb2d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f685d3d06bf261c6e86817759b03817404b35a3a03540682ee9b392bfdc369d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f685d3d06bf261c6e86817759b03817404b35a3a03540682ee9b392bfdc369d2->enter($__internal_f685d3d06bf261c6e86817759b03817404b35a3a03540682ee9b392bfdc369d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f685d3d06bf261c6e86817759b03817404b35a3a03540682ee9b392bfdc369d2->leave($__internal_f685d3d06bf261c6e86817759b03817404b35a3a03540682ee9b392bfdc369d2_prof);

        
        $__internal_632c9b960c3bc8a310c2fb5414be7731bcf07914d434808955e73fdbabdb2d97->leave($__internal_632c9b960c3bc8a310c2fb5414be7731bcf07914d434808955e73fdbabdb2d97_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22e449c4b0f61c318e8876bfd2d4f217511c89305dfafa594ab39a912cf46908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e449c4b0f61c318e8876bfd2d4f217511c89305dfafa594ab39a912cf46908->enter($__internal_22e449c4b0f61c318e8876bfd2d4f217511c89305dfafa594ab39a912cf46908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_34040806066e95453a39761b3c1ebdcd0143103a4de89c2a584cc241a55e2dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34040806066e95453a39761b3c1ebdcd0143103a4de89c2a584cc241a55e2dbd->enter($__internal_34040806066e95453a39761b3c1ebdcd0143103a4de89c2a584cc241a55e2dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_34040806066e95453a39761b3c1ebdcd0143103a4de89c2a584cc241a55e2dbd->leave($__internal_34040806066e95453a39761b3c1ebdcd0143103a4de89c2a584cc241a55e2dbd_prof);

        
        $__internal_22e449c4b0f61c318e8876bfd2d4f217511c89305dfafa594ab39a912cf46908->leave($__internal_22e449c4b0f61c318e8876bfd2d4f217511c89305dfafa594ab39a912cf46908_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
