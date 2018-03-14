<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_de50a482b02d7c6b701b22af2d87758494ff77f259f860bf47b2008e06c6546d extends Twig_Template
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
        $__internal_25a8e29ed4856225ec800984e00ce95da1d8361cd4c74219aa46a2d1555c50e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a8e29ed4856225ec800984e00ce95da1d8361cd4c74219aa46a2d1555c50e8->enter($__internal_25a8e29ed4856225ec800984e00ce95da1d8361cd4c74219aa46a2d1555c50e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bf1464e7e11c6e61414a49a36089b74a188b7c2a7371f32c8f72a54b04fbebae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1464e7e11c6e61414a49a36089b74a188b7c2a7371f32c8f72a54b04fbebae->enter($__internal_bf1464e7e11c6e61414a49a36089b74a188b7c2a7371f32c8f72a54b04fbebae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_25a8e29ed4856225ec800984e00ce95da1d8361cd4c74219aa46a2d1555c50e8->leave($__internal_25a8e29ed4856225ec800984e00ce95da1d8361cd4c74219aa46a2d1555c50e8_prof);

        
        $__internal_bf1464e7e11c6e61414a49a36089b74a188b7c2a7371f32c8f72a54b04fbebae->leave($__internal_bf1464e7e11c6e61414a49a36089b74a188b7c2a7371f32c8f72a54b04fbebae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
