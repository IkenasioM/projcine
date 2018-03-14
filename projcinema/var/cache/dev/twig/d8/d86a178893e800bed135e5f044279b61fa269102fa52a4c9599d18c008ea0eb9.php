<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_82d94865b8bc774c13f5ebb9ff2abfad6837ed5c949c7dfb9a8d130b8e708058 extends Twig_Template
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
        $__internal_066ff5bf48282378282d9a39bbf72e995eb81cf3368c144cede2f9497254acd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066ff5bf48282378282d9a39bbf72e995eb81cf3368c144cede2f9497254acd6->enter($__internal_066ff5bf48282378282d9a39bbf72e995eb81cf3368c144cede2f9497254acd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b702b9691fb1039bd756fa013c365167d183e4a1d9877a63d900153b2fdc6910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b702b9691fb1039bd756fa013c365167d183e4a1d9877a63d900153b2fdc6910->enter($__internal_b702b9691fb1039bd756fa013c365167d183e4a1d9877a63d900153b2fdc6910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_066ff5bf48282378282d9a39bbf72e995eb81cf3368c144cede2f9497254acd6->leave($__internal_066ff5bf48282378282d9a39bbf72e995eb81cf3368c144cede2f9497254acd6_prof);

        
        $__internal_b702b9691fb1039bd756fa013c365167d183e4a1d9877a63d900153b2fdc6910->leave($__internal_b702b9691fb1039bd756fa013c365167d183e4a1d9877a63d900153b2fdc6910_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
