<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_ef1eda9101490b9441313c1fa40b0648467b6e6cf4c5baeba436b83834eb5e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1eda9101490b9441313c1fa40b0648467b6e6cf4c5baeba436b83834eb5e3f->enter($__internal_ef1eda9101490b9441313c1fa40b0648467b6e6cf4c5baeba436b83834eb5e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ba04f0c58b9a137ee73426b89c27331e5c57931610103dcc960dd1b94c764ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba04f0c58b9a137ee73426b89c27331e5c57931610103dcc960dd1b94c764ddf->enter($__internal_ba04f0c58b9a137ee73426b89c27331e5c57931610103dcc960dd1b94c764ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ef1eda9101490b9441313c1fa40b0648467b6e6cf4c5baeba436b83834eb5e3f->leave($__internal_ef1eda9101490b9441313c1fa40b0648467b6e6cf4c5baeba436b83834eb5e3f_prof);

        
        $__internal_ba04f0c58b9a137ee73426b89c27331e5c57931610103dcc960dd1b94c764ddf->leave($__internal_ba04f0c58b9a137ee73426b89c27331e5c57931610103dcc960dd1b94c764ddf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
