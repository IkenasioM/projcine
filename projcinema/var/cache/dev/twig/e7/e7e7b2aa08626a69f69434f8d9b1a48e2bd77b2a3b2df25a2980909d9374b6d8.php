<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f64a4724956a2caf00c03cb76209f1b2b2d3a075757fb12e13f10d9667d15295 extends Twig_Template
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
        $__internal_b29a39c9ad22821d3e676eb2dd468cfb76e3a6c88a091bcebd39c90f32260f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29a39c9ad22821d3e676eb2dd468cfb76e3a6c88a091bcebd39c90f32260f4a->enter($__internal_b29a39c9ad22821d3e676eb2dd468cfb76e3a6c88a091bcebd39c90f32260f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_84a1666cd65d747e8b237d1220820ad423b70b564178131afd1548170008bb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a1666cd65d747e8b237d1220820ad423b70b564178131afd1548170008bb7f->enter($__internal_84a1666cd65d747e8b237d1220820ad423b70b564178131afd1548170008bb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b29a39c9ad22821d3e676eb2dd468cfb76e3a6c88a091bcebd39c90f32260f4a->leave($__internal_b29a39c9ad22821d3e676eb2dd468cfb76e3a6c88a091bcebd39c90f32260f4a_prof);

        
        $__internal_84a1666cd65d747e8b237d1220820ad423b70b564178131afd1548170008bb7f->leave($__internal_84a1666cd65d747e8b237d1220820ad423b70b564178131afd1548170008bb7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
