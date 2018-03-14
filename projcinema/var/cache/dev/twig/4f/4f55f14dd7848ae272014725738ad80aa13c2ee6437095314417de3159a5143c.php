<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_9312d3fefda1de21e677aff6e3e77d10d4854d086770aeedd96f98587aa28399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9312d3fefda1de21e677aff6e3e77d10d4854d086770aeedd96f98587aa28399->enter($__internal_9312d3fefda1de21e677aff6e3e77d10d4854d086770aeedd96f98587aa28399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_dbe327bee6841373b32d65efa76c8aa4bc5275a1cc8e0fe27354b1975f813f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe327bee6841373b32d65efa76c8aa4bc5275a1cc8e0fe27354b1975f813f03->enter($__internal_dbe327bee6841373b32d65efa76c8aa4bc5275a1cc8e0fe27354b1975f813f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9312d3fefda1de21e677aff6e3e77d10d4854d086770aeedd96f98587aa28399->leave($__internal_9312d3fefda1de21e677aff6e3e77d10d4854d086770aeedd96f98587aa28399_prof);

        
        $__internal_dbe327bee6841373b32d65efa76c8aa4bc5275a1cc8e0fe27354b1975f813f03->leave($__internal_dbe327bee6841373b32d65efa76c8aa4bc5275a1cc8e0fe27354b1975f813f03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
