<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7f9ef577faef357a172e6ba4d7892a15a1e56f5fd91733d4526b6a90faecf3a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad18f392d2f83ab06dd2add985010c12d3c776b4aacbd2b5f4d2a015d69b53bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad18f392d2f83ab06dd2add985010c12d3c776b4aacbd2b5f4d2a015d69b53bf->enter($__internal_ad18f392d2f83ab06dd2add985010c12d3c776b4aacbd2b5f4d2a015d69b53bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_90cb0beabb0f03f7a3068ccb236047d3662a3a444bee1028003adc721c22a726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cb0beabb0f03f7a3068ccb236047d3662a3a444bee1028003adc721c22a726->enter($__internal_90cb0beabb0f03f7a3068ccb236047d3662a3a444bee1028003adc721c22a726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad18f392d2f83ab06dd2add985010c12d3c776b4aacbd2b5f4d2a015d69b53bf->leave($__internal_ad18f392d2f83ab06dd2add985010c12d3c776b4aacbd2b5f4d2a015d69b53bf_prof);

        
        $__internal_90cb0beabb0f03f7a3068ccb236047d3662a3a444bee1028003adc721c22a726->leave($__internal_90cb0beabb0f03f7a3068ccb236047d3662a3a444bee1028003adc721c22a726_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c594b85e5aa6eeaace86c6fc951a44a06d468cfbbdcf73deeafc165bc60c31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c594b85e5aa6eeaace86c6fc951a44a06d468cfbbdcf73deeafc165bc60c31a->enter($__internal_1c594b85e5aa6eeaace86c6fc951a44a06d468cfbbdcf73deeafc165bc60c31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7f2ae7c6d678ffe59dd3bdf5371fbf72d2a2dd1c2faa3887d8edda11fd7f7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f2ae7c6d678ffe59dd3bdf5371fbf72d2a2dd1c2faa3887d8edda11fd7f7cb->enter($__internal_c7f2ae7c6d678ffe59dd3bdf5371fbf72d2a2dd1c2faa3887d8edda11fd7f7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c7f2ae7c6d678ffe59dd3bdf5371fbf72d2a2dd1c2faa3887d8edda11fd7f7cb->leave($__internal_c7f2ae7c6d678ffe59dd3bdf5371fbf72d2a2dd1c2faa3887d8edda11fd7f7cb_prof);

        
        $__internal_1c594b85e5aa6eeaace86c6fc951a44a06d468cfbbdcf73deeafc165bc60c31a->leave($__internal_1c594b85e5aa6eeaace86c6fc951a44a06d468cfbbdcf73deeafc165bc60c31a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
