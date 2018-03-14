<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1b0e9c4b22c46743b968e7f0fadebeaacf90d92c6a7ce1c217e3b85c4e748aae extends Twig_Template
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
        $__internal_aa82a21734aaf0d7c84e1891ad23f1f69c356ec57916fb7f9119c374b5f929bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa82a21734aaf0d7c84e1891ad23f1f69c356ec57916fb7f9119c374b5f929bd->enter($__internal_aa82a21734aaf0d7c84e1891ad23f1f69c356ec57916fb7f9119c374b5f929bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_51c7d4c679856fa3b961820d4af026c343a6c907575ded53acd72b6c60446e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c7d4c679856fa3b961820d4af026c343a6c907575ded53acd72b6c60446e02->enter($__internal_51c7d4c679856fa3b961820d4af026c343a6c907575ded53acd72b6c60446e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aa82a21734aaf0d7c84e1891ad23f1f69c356ec57916fb7f9119c374b5f929bd->leave($__internal_aa82a21734aaf0d7c84e1891ad23f1f69c356ec57916fb7f9119c374b5f929bd_prof);

        
        $__internal_51c7d4c679856fa3b961820d4af026c343a6c907575ded53acd72b6c60446e02->leave($__internal_51c7d4c679856fa3b961820d4af026c343a6c907575ded53acd72b6c60446e02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
