<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_21dc2c4119ca1ede32fb227c2649a09bbc275880f154be6171cb54f2e28a426b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21dc2c4119ca1ede32fb227c2649a09bbc275880f154be6171cb54f2e28a426b->enter($__internal_21dc2c4119ca1ede32fb227c2649a09bbc275880f154be6171cb54f2e28a426b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_94357e5160c80b2144ce90a63ce8478375d5989fb562d88effce5b6466e1bccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94357e5160c80b2144ce90a63ce8478375d5989fb562d88effce5b6466e1bccb->enter($__internal_94357e5160c80b2144ce90a63ce8478375d5989fb562d88effce5b6466e1bccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_21dc2c4119ca1ede32fb227c2649a09bbc275880f154be6171cb54f2e28a426b->leave($__internal_21dc2c4119ca1ede32fb227c2649a09bbc275880f154be6171cb54f2e28a426b_prof);

        
        $__internal_94357e5160c80b2144ce90a63ce8478375d5989fb562d88effce5b6466e1bccb->leave($__internal_94357e5160c80b2144ce90a63ce8478375d5989fb562d88effce5b6466e1bccb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
