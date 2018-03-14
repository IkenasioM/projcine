<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_fe26bc961d9bb157df178cbdaf0eec488501bf3aea8c2791dfec1ba391fc3e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe26bc961d9bb157df178cbdaf0eec488501bf3aea8c2791dfec1ba391fc3e5c->enter($__internal_fe26bc961d9bb157df178cbdaf0eec488501bf3aea8c2791dfec1ba391fc3e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_787d31a2a5e94583b3ecf9f835f5b3af3d425ee100b71e08f7d442eabcb4d884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787d31a2a5e94583b3ecf9f835f5b3af3d425ee100b71e08f7d442eabcb4d884->enter($__internal_787d31a2a5e94583b3ecf9f835f5b3af3d425ee100b71e08f7d442eabcb4d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_fe26bc961d9bb157df178cbdaf0eec488501bf3aea8c2791dfec1ba391fc3e5c->leave($__internal_fe26bc961d9bb157df178cbdaf0eec488501bf3aea8c2791dfec1ba391fc3e5c_prof);

        
        $__internal_787d31a2a5e94583b3ecf9f835f5b3af3d425ee100b71e08f7d442eabcb4d884->leave($__internal_787d31a2a5e94583b3ecf9f835f5b3af3d425ee100b71e08f7d442eabcb4d884_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
