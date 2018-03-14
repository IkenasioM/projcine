<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_784d673f2ad3558fb39b5b446218b843f066ed17f08dcb158203f61269cea7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b158d0e745dbb923e3a57bc4ae4ff6d8f3560457a266220772fafdface24d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b158d0e745dbb923e3a57bc4ae4ff6d8f3560457a266220772fafdface24d1b->enter($__internal_3b158d0e745dbb923e3a57bc4ae4ff6d8f3560457a266220772fafdface24d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1c9f16452963fcab41d4798af4060f5ac23776797ff7833d5353e072c28f48ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9f16452963fcab41d4798af4060f5ac23776797ff7833d5353e072c28f48ae->enter($__internal_1c9f16452963fcab41d4798af4060f5ac23776797ff7833d5353e072c28f48ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_3b158d0e745dbb923e3a57bc4ae4ff6d8f3560457a266220772fafdface24d1b->leave($__internal_3b158d0e745dbb923e3a57bc4ae4ff6d8f3560457a266220772fafdface24d1b_prof);

        
        $__internal_1c9f16452963fcab41d4798af4060f5ac23776797ff7833d5353e072c28f48ae->leave($__internal_1c9f16452963fcab41d4798af4060f5ac23776797ff7833d5353e072c28f48ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/html/cine/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
