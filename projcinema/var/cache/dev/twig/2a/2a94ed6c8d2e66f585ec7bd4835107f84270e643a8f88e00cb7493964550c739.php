<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6bfdf1da10bfc6da47af2a12b918c6600c3c0ae99d970f8551ebd614328a4013 extends Twig_Template
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
        $__internal_e65166cb014886d3acbb50eb0ec430a622ea3fa50228502e0fc427da0e87b923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65166cb014886d3acbb50eb0ec430a622ea3fa50228502e0fc427da0e87b923->enter($__internal_e65166cb014886d3acbb50eb0ec430a622ea3fa50228502e0fc427da0e87b923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_bbdb1856b88586d9d43d4422ab3d171d9f34a56f351c4fcdcb47f2e76b72a42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdb1856b88586d9d43d4422ab3d171d9f34a56f351c4fcdcb47f2e76b72a42b->enter($__internal_bbdb1856b88586d9d43d4422ab3d171d9f34a56f351c4fcdcb47f2e76b72a42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e65166cb014886d3acbb50eb0ec430a622ea3fa50228502e0fc427da0e87b923->leave($__internal_e65166cb014886d3acbb50eb0ec430a622ea3fa50228502e0fc427da0e87b923_prof);

        
        $__internal_bbdb1856b88586d9d43d4422ab3d171d9f34a56f351c4fcdcb47f2e76b72a42b->leave($__internal_bbdb1856b88586d9d43d4422ab3d171d9f34a56f351c4fcdcb47f2e76b72a42b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
