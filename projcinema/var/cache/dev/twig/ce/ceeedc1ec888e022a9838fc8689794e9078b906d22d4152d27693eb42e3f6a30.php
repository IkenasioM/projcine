<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d594441b1dcb60682f1726b7c2e883c4096dab329026bdda73fa109f8de9463f extends Twig_Template
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
        $__internal_73bbf8fc76683688bf5a89087e1b039509bea3af58bb4153c629d9818a8d60b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bbf8fc76683688bf5a89087e1b039509bea3af58bb4153c629d9818a8d60b6->enter($__internal_73bbf8fc76683688bf5a89087e1b039509bea3af58bb4153c629d9818a8d60b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_fa02f0ae7a50cb258359c502726b35657b7a5274086cbc3a58534ee1fc8216a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa02f0ae7a50cb258359c502726b35657b7a5274086cbc3a58534ee1fc8216a9->enter($__internal_fa02f0ae7a50cb258359c502726b35657b7a5274086cbc3a58534ee1fc8216a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_73bbf8fc76683688bf5a89087e1b039509bea3af58bb4153c629d9818a8d60b6->leave($__internal_73bbf8fc76683688bf5a89087e1b039509bea3af58bb4153c629d9818a8d60b6_prof);

        
        $__internal_fa02f0ae7a50cb258359c502726b35657b7a5274086cbc3a58534ee1fc8216a9->leave($__internal_fa02f0ae7a50cb258359c502726b35657b7a5274086cbc3a58534ee1fc8216a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
