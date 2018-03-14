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
        $__internal_b70fa6f0dac0d4c413e0be7a6fa254664b2e2fb77b86778c72198fff26be8b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70fa6f0dac0d4c413e0be7a6fa254664b2e2fb77b86778c72198fff26be8b9c->enter($__internal_b70fa6f0dac0d4c413e0be7a6fa254664b2e2fb77b86778c72198fff26be8b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_869698e173c4c9ae42d47125d268b55e480fadcc32d4e93f392b5d4b6557de18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869698e173c4c9ae42d47125d268b55e480fadcc32d4e93f392b5d4b6557de18->enter($__internal_869698e173c4c9ae42d47125d268b55e480fadcc32d4e93f392b5d4b6557de18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_b70fa6f0dac0d4c413e0be7a6fa254664b2e2fb77b86778c72198fff26be8b9c->leave($__internal_b70fa6f0dac0d4c413e0be7a6fa254664b2e2fb77b86778c72198fff26be8b9c_prof);

        
        $__internal_869698e173c4c9ae42d47125d268b55e480fadcc32d4e93f392b5d4b6557de18->leave($__internal_869698e173c4c9ae42d47125d268b55e480fadcc32d4e93f392b5d4b6557de18_prof);

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
