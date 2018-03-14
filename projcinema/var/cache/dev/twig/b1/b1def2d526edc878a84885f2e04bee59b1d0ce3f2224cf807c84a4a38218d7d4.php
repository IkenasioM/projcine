<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_92d09a900be8462e5dc42f917e0534283c8e46401f961a7f9ef3b44326e9cbb1 extends Twig_Template
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
        $__internal_d2c3074c9091336df58310284bf421f663091384f8567c1cf30f08aeafb96cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c3074c9091336df58310284bf421f663091384f8567c1cf30f08aeafb96cc1->enter($__internal_d2c3074c9091336df58310284bf421f663091384f8567c1cf30f08aeafb96cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_84a419be653bfeac6dcf593d235782b6a4f8dcc45f2e507a902123d5fbdbee93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a419be653bfeac6dcf593d235782b6a4f8dcc45f2e507a902123d5fbdbee93->enter($__internal_84a419be653bfeac6dcf593d235782b6a4f8dcc45f2e507a902123d5fbdbee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d2c3074c9091336df58310284bf421f663091384f8567c1cf30f08aeafb96cc1->leave($__internal_d2c3074c9091336df58310284bf421f663091384f8567c1cf30f08aeafb96cc1_prof);

        
        $__internal_84a419be653bfeac6dcf593d235782b6a4f8dcc45f2e507a902123d5fbdbee93->leave($__internal_84a419be653bfeac6dcf593d235782b6a4f8dcc45f2e507a902123d5fbdbee93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
