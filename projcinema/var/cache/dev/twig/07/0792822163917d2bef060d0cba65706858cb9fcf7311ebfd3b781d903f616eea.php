<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_85e75da4dc723614c2afe6ba7c4d2ddc1c5f36b7c1a3abd2ecf3c965d4900028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e75da4dc723614c2afe6ba7c4d2ddc1c5f36b7c1a3abd2ecf3c965d4900028->enter($__internal_85e75da4dc723614c2afe6ba7c4d2ddc1c5f36b7c1a3abd2ecf3c965d4900028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_22f4fdb7eec44c04a6e307e31a596da2945e9807ecf775aa6a3cc467ca02d84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f4fdb7eec44c04a6e307e31a596da2945e9807ecf775aa6a3cc467ca02d84a->enter($__internal_22f4fdb7eec44c04a6e307e31a596da2945e9807ecf775aa6a3cc467ca02d84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_85e75da4dc723614c2afe6ba7c4d2ddc1c5f36b7c1a3abd2ecf3c965d4900028->leave($__internal_85e75da4dc723614c2afe6ba7c4d2ddc1c5f36b7c1a3abd2ecf3c965d4900028_prof);

        
        $__internal_22f4fdb7eec44c04a6e307e31a596da2945e9807ecf775aa6a3cc467ca02d84a->leave($__internal_22f4fdb7eec44c04a6e307e31a596da2945e9807ecf775aa6a3cc467ca02d84a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
