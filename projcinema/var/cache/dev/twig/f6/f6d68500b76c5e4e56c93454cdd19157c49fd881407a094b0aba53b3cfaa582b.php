<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_93bcbd5ac05f6797bb022beebea0b7855bd4b3c81d3be4158dcb2fe9bbe6976e extends Twig_Template
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
        $__internal_eeffc04fe5be4ac421b83473a6e103075d3cdbffb32a8a576a547d8fb38213b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeffc04fe5be4ac421b83473a6e103075d3cdbffb32a8a576a547d8fb38213b4->enter($__internal_eeffc04fe5be4ac421b83473a6e103075d3cdbffb32a8a576a547d8fb38213b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c27b042179d04f5826280638924ec02a8aaf1c5511d4a89c1a811e42e471ad6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27b042179d04f5826280638924ec02a8aaf1c5511d4a89c1a811e42e471ad6f->enter($__internal_c27b042179d04f5826280638924ec02a8aaf1c5511d4a89c1a811e42e471ad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_eeffc04fe5be4ac421b83473a6e103075d3cdbffb32a8a576a547d8fb38213b4->leave($__internal_eeffc04fe5be4ac421b83473a6e103075d3cdbffb32a8a576a547d8fb38213b4_prof);

        
        $__internal_c27b042179d04f5826280638924ec02a8aaf1c5511d4a89c1a811e42e471ad6f->leave($__internal_c27b042179d04f5826280638924ec02a8aaf1c5511d4a89c1a811e42e471ad6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
