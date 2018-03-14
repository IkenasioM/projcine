<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9dbd3650e5810d07e7a0ab64e3ec70f30bbb18239e8009425860cf6d178bd99 extends Twig_Template
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
        $__internal_b2dca56ff73bd62faffef92da4802bc166858b4495432563aaf1d2c9c188150c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2dca56ff73bd62faffef92da4802bc166858b4495432563aaf1d2c9c188150c->enter($__internal_b2dca56ff73bd62faffef92da4802bc166858b4495432563aaf1d2c9c188150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0e24f32b7ce817d9f5746c21390b3f126fbbd7adee4a7455a75d181990d4e1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e24f32b7ce817d9f5746c21390b3f126fbbd7adee4a7455a75d181990d4e1d8->enter($__internal_0e24f32b7ce817d9f5746c21390b3f126fbbd7adee4a7455a75d181990d4e1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b2dca56ff73bd62faffef92da4802bc166858b4495432563aaf1d2c9c188150c->leave($__internal_b2dca56ff73bd62faffef92da4802bc166858b4495432563aaf1d2c9c188150c_prof);

        
        $__internal_0e24f32b7ce817d9f5746c21390b3f126fbbd7adee4a7455a75d181990d4e1d8->leave($__internal_0e24f32b7ce817d9f5746c21390b3f126fbbd7adee4a7455a75d181990d4e1d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
