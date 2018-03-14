<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5d13d56eb6f972064b5c85b863193c5e423e2c3076eff9ce31bae3c8d131b35d extends Twig_Template
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
        $__internal_ef2610efe2b0646cffd46de334d9c458800b358721cb39291c47388ffd3f775b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2610efe2b0646cffd46de334d9c458800b358721cb39291c47388ffd3f775b->enter($__internal_ef2610efe2b0646cffd46de334d9c458800b358721cb39291c47388ffd3f775b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_19e2cc7a0b1408e817d68a1c7473b467bd8de1be9a698aa7929ed47cd0a740f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e2cc7a0b1408e817d68a1c7473b467bd8de1be9a698aa7929ed47cd0a740f4->enter($__internal_19e2cc7a0b1408e817d68a1c7473b467bd8de1be9a698aa7929ed47cd0a740f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ef2610efe2b0646cffd46de334d9c458800b358721cb39291c47388ffd3f775b->leave($__internal_ef2610efe2b0646cffd46de334d9c458800b358721cb39291c47388ffd3f775b_prof);

        
        $__internal_19e2cc7a0b1408e817d68a1c7473b467bd8de1be9a698aa7929ed47cd0a740f4->leave($__internal_19e2cc7a0b1408e817d68a1c7473b467bd8de1be9a698aa7929ed47cd0a740f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
