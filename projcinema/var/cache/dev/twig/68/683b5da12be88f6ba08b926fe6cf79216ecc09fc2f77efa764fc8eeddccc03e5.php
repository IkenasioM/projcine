<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4599f3ba6c6fa4e8c3dc357717f7e76ac0261e000440ef63937334e17c46b88c extends Twig_Template
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
        $__internal_a2842b7887d43106c8c57c78f900b725c49d62c1bd009ee296486e969e7e85dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2842b7887d43106c8c57c78f900b725c49d62c1bd009ee296486e969e7e85dd->enter($__internal_a2842b7887d43106c8c57c78f900b725c49d62c1bd009ee296486e969e7e85dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a35598176cec1c4d6d501d0ab80bb7c96fe22cb4978c667b256b17a7dc2b7545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35598176cec1c4d6d501d0ab80bb7c96fe22cb4978c667b256b17a7dc2b7545->enter($__internal_a35598176cec1c4d6d501d0ab80bb7c96fe22cb4978c667b256b17a7dc2b7545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a2842b7887d43106c8c57c78f900b725c49d62c1bd009ee296486e969e7e85dd->leave($__internal_a2842b7887d43106c8c57c78f900b725c49d62c1bd009ee296486e969e7e85dd_prof);

        
        $__internal_a35598176cec1c4d6d501d0ab80bb7c96fe22cb4978c667b256b17a7dc2b7545->leave($__internal_a35598176cec1c4d6d501d0ab80bb7c96fe22cb4978c667b256b17a7dc2b7545_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
