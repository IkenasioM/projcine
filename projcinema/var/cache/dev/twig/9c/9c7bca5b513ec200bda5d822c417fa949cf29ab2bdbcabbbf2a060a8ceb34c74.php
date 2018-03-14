<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa3a378efa63daa82e750bbe166d9e2ce6fbfc6ac94cd6cee4bbf94d94d43f67 extends Twig_Template
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
        $__internal_aa84bbf2dd6275829b5c9160b4762065da16a86f1eca276c093dd3cfbf516b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa84bbf2dd6275829b5c9160b4762065da16a86f1eca276c093dd3cfbf516b42->enter($__internal_aa84bbf2dd6275829b5c9160b4762065da16a86f1eca276c093dd3cfbf516b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ffebecbd47597b6282ff74ff6964cbb01e818ca47ec35b225a986af0fd72f71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffebecbd47597b6282ff74ff6964cbb01e818ca47ec35b225a986af0fd72f71c->enter($__internal_ffebecbd47597b6282ff74ff6964cbb01e818ca47ec35b225a986af0fd72f71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aa84bbf2dd6275829b5c9160b4762065da16a86f1eca276c093dd3cfbf516b42->leave($__internal_aa84bbf2dd6275829b5c9160b4762065da16a86f1eca276c093dd3cfbf516b42_prof);

        
        $__internal_ffebecbd47597b6282ff74ff6964cbb01e818ca47ec35b225a986af0fd72f71c->leave($__internal_ffebecbd47597b6282ff74ff6964cbb01e818ca47ec35b225a986af0fd72f71c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
