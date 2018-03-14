<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b19e001c1f869eb108a59fbe4576733ab876581284427a92ed847b4e1e61ea71 extends Twig_Template
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
        $__internal_4be7e6c159251c74ecb3973c7cd93e245b6cc076f883badac5d909980409b7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be7e6c159251c74ecb3973c7cd93e245b6cc076f883badac5d909980409b7a4->enter($__internal_4be7e6c159251c74ecb3973c7cd93e245b6cc076f883badac5d909980409b7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b23620adf3e2b794a6aa2036ed19de7f2aa98d9da4b61a4dd574acb6375df11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23620adf3e2b794a6aa2036ed19de7f2aa98d9da4b61a4dd574acb6375df11a->enter($__internal_b23620adf3e2b794a6aa2036ed19de7f2aa98d9da4b61a4dd574acb6375df11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4be7e6c159251c74ecb3973c7cd93e245b6cc076f883badac5d909980409b7a4->leave($__internal_4be7e6c159251c74ecb3973c7cd93e245b6cc076f883badac5d909980409b7a4_prof);

        
        $__internal_b23620adf3e2b794a6aa2036ed19de7f2aa98d9da4b61a4dd574acb6375df11a->leave($__internal_b23620adf3e2b794a6aa2036ed19de7f2aa98d9da4b61a4dd574acb6375df11a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
