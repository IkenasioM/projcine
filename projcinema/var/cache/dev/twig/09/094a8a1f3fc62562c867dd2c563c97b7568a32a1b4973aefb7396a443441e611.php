<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2c0a50a619372b98dc5ec5c8378e81c3aebfa8516c3277e0dc074be8aff9bc04 extends Twig_Template
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
        $__internal_b6aa00d94a2e1fe45ed3754b385a012d10660a4b9dfd85ca3f9a6fd134ca4229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6aa00d94a2e1fe45ed3754b385a012d10660a4b9dfd85ca3f9a6fd134ca4229->enter($__internal_b6aa00d94a2e1fe45ed3754b385a012d10660a4b9dfd85ca3f9a6fd134ca4229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e422b2049def27ac180ec3d08f40d88afd346445951e7e610d3e567b8a525a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e422b2049def27ac180ec3d08f40d88afd346445951e7e610d3e567b8a525a6c->enter($__internal_e422b2049def27ac180ec3d08f40d88afd346445951e7e610d3e567b8a525a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b6aa00d94a2e1fe45ed3754b385a012d10660a4b9dfd85ca3f9a6fd134ca4229->leave($__internal_b6aa00d94a2e1fe45ed3754b385a012d10660a4b9dfd85ca3f9a6fd134ca4229_prof);

        
        $__internal_e422b2049def27ac180ec3d08f40d88afd346445951e7e610d3e567b8a525a6c->leave($__internal_e422b2049def27ac180ec3d08f40d88afd346445951e7e610d3e567b8a525a6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
