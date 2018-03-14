<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b033fdbbbb4dab97b1aa6b45ce8db198a6e04fcc0fcd7d7cdcea29c33ae4d1ac extends Twig_Template
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
        $__internal_477b81db133219f2cad61647ea97e9941a646e004954ed3cd244b1180070253e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477b81db133219f2cad61647ea97e9941a646e004954ed3cd244b1180070253e->enter($__internal_477b81db133219f2cad61647ea97e9941a646e004954ed3cd244b1180070253e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_be61d36dffc57fa15d4c299265b609c092621433d28e352353f54527e0ef9d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be61d36dffc57fa15d4c299265b609c092621433d28e352353f54527e0ef9d81->enter($__internal_be61d36dffc57fa15d4c299265b609c092621433d28e352353f54527e0ef9d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_477b81db133219f2cad61647ea97e9941a646e004954ed3cd244b1180070253e->leave($__internal_477b81db133219f2cad61647ea97e9941a646e004954ed3cd244b1180070253e_prof);

        
        $__internal_be61d36dffc57fa15d4c299265b609c092621433d28e352353f54527e0ef9d81->leave($__internal_be61d36dffc57fa15d4c299265b609c092621433d28e352353f54527e0ef9d81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
