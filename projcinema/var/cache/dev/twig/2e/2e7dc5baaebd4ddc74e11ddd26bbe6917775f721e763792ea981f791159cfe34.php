<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25f33fd65cdea225244a4fa5fe9ad30cf4bfdf4e2f3452fb019efa2435d6a7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f69eb0d377e3071e9c5ec82f514d84c4b40b53d5914c270e669957dd5e106172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69eb0d377e3071e9c5ec82f514d84c4b40b53d5914c270e669957dd5e106172->enter($__internal_f69eb0d377e3071e9c5ec82f514d84c4b40b53d5914c270e669957dd5e106172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2fdb55c9dda382bab76f60829693378025b3e97856eaf14f239b56de26eac6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdb55c9dda382bab76f60829693378025b3e97856eaf14f239b56de26eac6cc->enter($__internal_2fdb55c9dda382bab76f60829693378025b3e97856eaf14f239b56de26eac6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f69eb0d377e3071e9c5ec82f514d84c4b40b53d5914c270e669957dd5e106172->leave($__internal_f69eb0d377e3071e9c5ec82f514d84c4b40b53d5914c270e669957dd5e106172_prof);

        
        $__internal_2fdb55c9dda382bab76f60829693378025b3e97856eaf14f239b56de26eac6cc->leave($__internal_2fdb55c9dda382bab76f60829693378025b3e97856eaf14f239b56de26eac6cc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_efca8e95cbc3dbfdad8f88ae7606f5468dc47b27a3fbf7426ad455d5367f2139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efca8e95cbc3dbfdad8f88ae7606f5468dc47b27a3fbf7426ad455d5367f2139->enter($__internal_efca8e95cbc3dbfdad8f88ae7606f5468dc47b27a3fbf7426ad455d5367f2139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c11086e402e5ec99a1207adb8e75ea5ea7903c6a5ea3cbc3efc091a45c72cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c11086e402e5ec99a1207adb8e75ea5ea7903c6a5ea3cbc3efc091a45c72cd8->enter($__internal_5c11086e402e5ec99a1207adb8e75ea5ea7903c6a5ea3cbc3efc091a45c72cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5c11086e402e5ec99a1207adb8e75ea5ea7903c6a5ea3cbc3efc091a45c72cd8->leave($__internal_5c11086e402e5ec99a1207adb8e75ea5ea7903c6a5ea3cbc3efc091a45c72cd8_prof);

        
        $__internal_efca8e95cbc3dbfdad8f88ae7606f5468dc47b27a3fbf7426ad455d5367f2139->leave($__internal_efca8e95cbc3dbfdad8f88ae7606f5468dc47b27a3fbf7426ad455d5367f2139_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
