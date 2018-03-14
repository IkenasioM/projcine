<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2bec3815133dbdfb9c8ea78f45a953f0df37b976cb9668c04d9908bab093f9af extends Twig_Template
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
        $__internal_5efd373f48aeef254e737cf57fe844aae52602d411f1c4b3001a647cb883d25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efd373f48aeef254e737cf57fe844aae52602d411f1c4b3001a647cb883d25e->enter($__internal_5efd373f48aeef254e737cf57fe844aae52602d411f1c4b3001a647cb883d25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_542020b1ebf98badd3726caeac7ff96a1c67a5c8c5d8f4a9dc6c18cfb6d52140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542020b1ebf98badd3726caeac7ff96a1c67a5c8c5d8f4a9dc6c18cfb6d52140->enter($__internal_542020b1ebf98badd3726caeac7ff96a1c67a5c8c5d8f4a9dc6c18cfb6d52140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5efd373f48aeef254e737cf57fe844aae52602d411f1c4b3001a647cb883d25e->leave($__internal_5efd373f48aeef254e737cf57fe844aae52602d411f1c4b3001a647cb883d25e_prof);

        
        $__internal_542020b1ebf98badd3726caeac7ff96a1c67a5c8c5d8f4a9dc6c18cfb6d52140->leave($__internal_542020b1ebf98badd3726caeac7ff96a1c67a5c8c5d8f4a9dc6c18cfb6d52140_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
