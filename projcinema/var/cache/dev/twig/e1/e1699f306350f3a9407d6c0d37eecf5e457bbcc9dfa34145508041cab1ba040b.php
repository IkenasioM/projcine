<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_0533f5d048381b10150d6165fb5ad38e449bdf6152cc97173b3822b8721fcc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0533f5d048381b10150d6165fb5ad38e449bdf6152cc97173b3822b8721fcc53->enter($__internal_0533f5d048381b10150d6165fb5ad38e449bdf6152cc97173b3822b8721fcc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9e0817d8d4a60159daf78f4f4eb13a60d653e712db777d15d71eb15a852f3eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0817d8d4a60159daf78f4f4eb13a60d653e712db777d15d71eb15a852f3eb8->enter($__internal_9e0817d8d4a60159daf78f4f4eb13a60d653e712db777d15d71eb15a852f3eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0533f5d048381b10150d6165fb5ad38e449bdf6152cc97173b3822b8721fcc53->leave($__internal_0533f5d048381b10150d6165fb5ad38e449bdf6152cc97173b3822b8721fcc53_prof);

        
        $__internal_9e0817d8d4a60159daf78f4f4eb13a60d653e712db777d15d71eb15a852f3eb8->leave($__internal_9e0817d8d4a60159daf78f4f4eb13a60d653e712db777d15d71eb15a852f3eb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
