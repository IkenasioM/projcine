<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca22c6ed7129b14750fa99a4627e4d14f1a188f5721b3fd8e0738d0dc1cc6940 extends Twig_Template
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
        $__internal_e890ec8bb95f5def3c5c5a230b9cbc8c0689996cc2fd477b391a8400e951cc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e890ec8bb95f5def3c5c5a230b9cbc8c0689996cc2fd477b391a8400e951cc98->enter($__internal_e890ec8bb95f5def3c5c5a230b9cbc8c0689996cc2fd477b391a8400e951cc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5f5dc77e6ca7c3d990e5b0f574870773cd3e8f920866db672c65071e75dface6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5dc77e6ca7c3d990e5b0f574870773cd3e8f920866db672c65071e75dface6->enter($__internal_5f5dc77e6ca7c3d990e5b0f574870773cd3e8f920866db672c65071e75dface6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e890ec8bb95f5def3c5c5a230b9cbc8c0689996cc2fd477b391a8400e951cc98->leave($__internal_e890ec8bb95f5def3c5c5a230b9cbc8c0689996cc2fd477b391a8400e951cc98_prof);

        
        $__internal_5f5dc77e6ca7c3d990e5b0f574870773cd3e8f920866db672c65071e75dface6->leave($__internal_5f5dc77e6ca7c3d990e5b0f574870773cd3e8f920866db672c65071e75dface6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
