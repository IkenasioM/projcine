<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_52497ca8ea33cac5b3474bc173917057f38d76a3dc39c4184808486c2b5c5a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52497ca8ea33cac5b3474bc173917057f38d76a3dc39c4184808486c2b5c5a0d->enter($__internal_52497ca8ea33cac5b3474bc173917057f38d76a3dc39c4184808486c2b5c5a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_164a14a5f14622f11729708f1ef4e7ab11d969701b5ae3100317f5b6254fa38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164a14a5f14622f11729708f1ef4e7ab11d969701b5ae3100317f5b6254fa38b->enter($__internal_164a14a5f14622f11729708f1ef4e7ab11d969701b5ae3100317f5b6254fa38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_52497ca8ea33cac5b3474bc173917057f38d76a3dc39c4184808486c2b5c5a0d->leave($__internal_52497ca8ea33cac5b3474bc173917057f38d76a3dc39c4184808486c2b5c5a0d_prof);

        
        $__internal_164a14a5f14622f11729708f1ef4e7ab11d969701b5ae3100317f5b6254fa38b->leave($__internal_164a14a5f14622f11729708f1ef4e7ab11d969701b5ae3100317f5b6254fa38b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
