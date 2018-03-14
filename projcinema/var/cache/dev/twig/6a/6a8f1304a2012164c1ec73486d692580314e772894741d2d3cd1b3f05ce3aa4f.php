<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d51d7bd2d000387a4f379bfbe98f408cb3698f0c5647124d935918a37b033b98 extends Twig_Template
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
        $__internal_80576acb91c207a35ad289acb425eaaa179d04bb9c3a182b0001d951cf3a452e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80576acb91c207a35ad289acb425eaaa179d04bb9c3a182b0001d951cf3a452e->enter($__internal_80576acb91c207a35ad289acb425eaaa179d04bb9c3a182b0001d951cf3a452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_e89b9a66f1f904377fa54f82c548c8661897d5b871a079a5e41e9a6f1920e360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89b9a66f1f904377fa54f82c548c8661897d5b871a079a5e41e9a6f1920e360->enter($__internal_e89b9a66f1f904377fa54f82c548c8661897d5b871a079a5e41e9a6f1920e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_80576acb91c207a35ad289acb425eaaa179d04bb9c3a182b0001d951cf3a452e->leave($__internal_80576acb91c207a35ad289acb425eaaa179d04bb9c3a182b0001d951cf3a452e_prof);

        
        $__internal_e89b9a66f1f904377fa54f82c548c8661897d5b871a079a5e41e9a6f1920e360->leave($__internal_e89b9a66f1f904377fa54f82c548c8661897d5b871a079a5e41e9a6f1920e360_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
