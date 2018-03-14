<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20604180161d0c253980ff4ca6c65c93f43d676d7815de689377ff771ff1960e extends Twig_Template
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
        $__internal_d8f27ce480796b3ac1b94b2da79dfabe814aea602c9136774386adc8365f541c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f27ce480796b3ac1b94b2da79dfabe814aea602c9136774386adc8365f541c->enter($__internal_d8f27ce480796b3ac1b94b2da79dfabe814aea602c9136774386adc8365f541c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6832ba7748782c7d10170c2142cb86ddcd61242474ba97437a2789507d9c594d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6832ba7748782c7d10170c2142cb86ddcd61242474ba97437a2789507d9c594d->enter($__internal_6832ba7748782c7d10170c2142cb86ddcd61242474ba97437a2789507d9c594d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d8f27ce480796b3ac1b94b2da79dfabe814aea602c9136774386adc8365f541c->leave($__internal_d8f27ce480796b3ac1b94b2da79dfabe814aea602c9136774386adc8365f541c_prof);

        
        $__internal_6832ba7748782c7d10170c2142cb86ddcd61242474ba97437a2789507d9c594d->leave($__internal_6832ba7748782c7d10170c2142cb86ddcd61242474ba97437a2789507d9c594d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
