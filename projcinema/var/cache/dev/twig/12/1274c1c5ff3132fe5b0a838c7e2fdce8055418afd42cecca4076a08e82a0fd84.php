<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_a20db32968d62b84fb5505c4fadce256174b9f1046bc82a7d47bac27bcba86eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20db32968d62b84fb5505c4fadce256174b9f1046bc82a7d47bac27bcba86eb->enter($__internal_a20db32968d62b84fb5505c4fadce256174b9f1046bc82a7d47bac27bcba86eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_497480a4c20a8d22294489988c7dde342af2ee41c289f42314ee9294577163db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497480a4c20a8d22294489988c7dde342af2ee41c289f42314ee9294577163db->enter($__internal_497480a4c20a8d22294489988c7dde342af2ee41c289f42314ee9294577163db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a20db32968d62b84fb5505c4fadce256174b9f1046bc82a7d47bac27bcba86eb->leave($__internal_a20db32968d62b84fb5505c4fadce256174b9f1046bc82a7d47bac27bcba86eb_prof);

        
        $__internal_497480a4c20a8d22294489988c7dde342af2ee41c289f42314ee9294577163db->leave($__internal_497480a4c20a8d22294489988c7dde342af2ee41c289f42314ee9294577163db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
