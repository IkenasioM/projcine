<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_aca02a72903984aec2e7ff64e190e025f8d2b5123b467aee59f2db0399523e32 extends Twig_Template
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
        $__internal_852b0c08ce58f82c43bcfa6d0afae08e90040b874f024020606f53995a2858ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852b0c08ce58f82c43bcfa6d0afae08e90040b874f024020606f53995a2858ad->enter($__internal_852b0c08ce58f82c43bcfa6d0afae08e90040b874f024020606f53995a2858ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $__internal_b66ff37264aec0f214d813713f23ca355c87b270637c30b8f0dcb03d96d8b455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66ff37264aec0f214d813713f23ca355c87b270637c30b8f0dcb03d96d8b455->enter($__internal_b66ff37264aec0f214d813713f23ca355c87b270637c30b8f0dcb03d96d8b455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "<body>
Hello World!
</body>
";
        
        $__internal_852b0c08ce58f82c43bcfa6d0afae08e90040b874f024020606f53995a2858ad->leave($__internal_852b0c08ce58f82c43bcfa6d0afae08e90040b874f024020606f53995a2858ad_prof);

        
        $__internal_b66ff37264aec0f214d813713f23ca355c87b270637c30b8f0dcb03d96d8b455->leave($__internal_b66ff37264aec0f214d813713f23ca355c87b270637c30b8f0dcb03d96d8b455_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
Hello World!
</body>
", "FrontBundle:Default:index.html.twig", "/var/www/html/projcinema/src/FrontBundle/Resources/views/Default/index.html.twig");
    }
}
