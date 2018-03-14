<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84497e8a69ff7fbb165cc284cedb74d7ede2775e45353184c450a0469bda60db extends Twig_Template
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
        $__internal_a823f619650753d9859963cd9e35d19228f03e627b6938c19e4d1b91c23424a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a823f619650753d9859963cd9e35d19228f03e627b6938c19e4d1b91c23424a0->enter($__internal_a823f619650753d9859963cd9e35d19228f03e627b6938c19e4d1b91c23424a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5a7e8d9018e83dee71b32970c183a60bd21fe3c06534838bbf54cfa781775a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7e8d9018e83dee71b32970c183a60bd21fe3c06534838bbf54cfa781775a89->enter($__internal_5a7e8d9018e83dee71b32970c183a60bd21fe3c06534838bbf54cfa781775a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a823f619650753d9859963cd9e35d19228f03e627b6938c19e4d1b91c23424a0->leave($__internal_a823f619650753d9859963cd9e35d19228f03e627b6938c19e4d1b91c23424a0_prof);

        
        $__internal_5a7e8d9018e83dee71b32970c183a60bd21fe3c06534838bbf54cfa781775a89->leave($__internal_5a7e8d9018e83dee71b32970c183a60bd21fe3c06534838bbf54cfa781775a89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
