<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b2b7cb11770c5c843efe60eb544af3afae97f606719222a7322455115603e50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b7cb11770c5c843efe60eb544af3afae97f606719222a7322455115603e50e->enter($__internal_b2b7cb11770c5c843efe60eb544af3afae97f606719222a7322455115603e50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_165ba5a9e90ed025988bd58b356bc8cf93824f6bb5017029065aade13d21a829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165ba5a9e90ed025988bd58b356bc8cf93824f6bb5017029065aade13d21a829->enter($__internal_165ba5a9e90ed025988bd58b356bc8cf93824f6bb5017029065aade13d21a829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b7cb11770c5c843efe60eb544af3afae97f606719222a7322455115603e50e->leave($__internal_b2b7cb11770c5c843efe60eb544af3afae97f606719222a7322455115603e50e_prof);

        
        $__internal_165ba5a9e90ed025988bd58b356bc8cf93824f6bb5017029065aade13d21a829->leave($__internal_165ba5a9e90ed025988bd58b356bc8cf93824f6bb5017029065aade13d21a829_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5324834fab51c7d8c56e6a57e9f1d32d844fbabbc48f8bc40a6e124fb3ccdb20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5324834fab51c7d8c56e6a57e9f1d32d844fbabbc48f8bc40a6e124fb3ccdb20->enter($__internal_5324834fab51c7d8c56e6a57e9f1d32d844fbabbc48f8bc40a6e124fb3ccdb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_958f5fb6455ff465338804b56ee03962b82492720201048851f0e11f6ec287d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958f5fb6455ff465338804b56ee03962b82492720201048851f0e11f6ec287d3->enter($__internal_958f5fb6455ff465338804b56ee03962b82492720201048851f0e11f6ec287d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_958f5fb6455ff465338804b56ee03962b82492720201048851f0e11f6ec287d3->leave($__internal_958f5fb6455ff465338804b56ee03962b82492720201048851f0e11f6ec287d3_prof);

        
        $__internal_5324834fab51c7d8c56e6a57e9f1d32d844fbabbc48f8bc40a6e124fb3ccdb20->leave($__internal_5324834fab51c7d8c56e6a57e9f1d32d844fbabbc48f8bc40a6e124fb3ccdb20_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_421c43ee30d386ba72cda77a7b3d4c3985372defe8984ee42f04a3d380c82926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421c43ee30d386ba72cda77a7b3d4c3985372defe8984ee42f04a3d380c82926->enter($__internal_421c43ee30d386ba72cda77a7b3d4c3985372defe8984ee42f04a3d380c82926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a95c34a73a9ca315684d2a4ec7f80d09d8f62f3068b66ba731dc4352df8521a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95c34a73a9ca315684d2a4ec7f80d09d8f62f3068b66ba731dc4352df8521a7->enter($__internal_a95c34a73a9ca315684d2a4ec7f80d09d8f62f3068b66ba731dc4352df8521a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a95c34a73a9ca315684d2a4ec7f80d09d8f62f3068b66ba731dc4352df8521a7->leave($__internal_a95c34a73a9ca315684d2a4ec7f80d09d8f62f3068b66ba731dc4352df8521a7_prof);

        
        $__internal_421c43ee30d386ba72cda77a7b3d4c3985372defe8984ee42f04a3d380c82926->leave($__internal_421c43ee30d386ba72cda77a7b3d4c3985372defe8984ee42f04a3d380c82926_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d9f081c59601c210cd97c4b324e48b09e9f1ce6051cba7055c7b7677cc57895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9f081c59601c210cd97c4b324e48b09e9f1ce6051cba7055c7b7677cc57895->enter($__internal_7d9f081c59601c210cd97c4b324e48b09e9f1ce6051cba7055c7b7677cc57895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca36229426a53c64e27994c7eb19aa0332e72ddd6107ab791fccecec7f8441e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca36229426a53c64e27994c7eb19aa0332e72ddd6107ab791fccecec7f8441e4->enter($__internal_ca36229426a53c64e27994c7eb19aa0332e72ddd6107ab791fccecec7f8441e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ca36229426a53c64e27994c7eb19aa0332e72ddd6107ab791fccecec7f8441e4->leave($__internal_ca36229426a53c64e27994c7eb19aa0332e72ddd6107ab791fccecec7f8441e4_prof);

        
        $__internal_7d9f081c59601c210cd97c4b324e48b09e9f1ce6051cba7055c7b7677cc57895->leave($__internal_7d9f081c59601c210cd97c4b324e48b09e9f1ce6051cba7055c7b7677cc57895_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
