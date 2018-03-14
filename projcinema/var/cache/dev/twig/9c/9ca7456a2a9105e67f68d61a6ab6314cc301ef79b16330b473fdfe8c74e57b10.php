<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
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
        $__internal_c02410846e9329906d0a5893881a18412a3fbe18426f2c1d778e8be613944ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02410846e9329906d0a5893881a18412a3fbe18426f2c1d778e8be613944ec0->enter($__internal_c02410846e9329906d0a5893881a18412a3fbe18426f2c1d778e8be613944ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9bd746e730a7637382d0364abacae0a972669510ec883c1d7ab14c354b078e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd746e730a7637382d0364abacae0a972669510ec883c1d7ab14c354b078e17->enter($__internal_9bd746e730a7637382d0364abacae0a972669510ec883c1d7ab14c354b078e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c02410846e9329906d0a5893881a18412a3fbe18426f2c1d778e8be613944ec0->leave($__internal_c02410846e9329906d0a5893881a18412a3fbe18426f2c1d778e8be613944ec0_prof);

        
        $__internal_9bd746e730a7637382d0364abacae0a972669510ec883c1d7ab14c354b078e17->leave($__internal_9bd746e730a7637382d0364abacae0a972669510ec883c1d7ab14c354b078e17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
