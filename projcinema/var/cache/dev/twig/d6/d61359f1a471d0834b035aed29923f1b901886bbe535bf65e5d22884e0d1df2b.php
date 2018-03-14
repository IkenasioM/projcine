<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_54c523397b0d09a3cd9cd4c331ef388b18b7d3d688f7888478f44574ac72b912 extends Twig_Template
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
        $__internal_7005cf9152d227edfb146f7f6e652e1ffc85417842b804cb4698c8f75a71360c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7005cf9152d227edfb146f7f6e652e1ffc85417842b804cb4698c8f75a71360c->enter($__internal_7005cf9152d227edfb146f7f6e652e1ffc85417842b804cb4698c8f75a71360c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_51fe892895e5aea5bcc44cdd77ab333b815f01d9dfaed86fcd9eb2b319154725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fe892895e5aea5bcc44cdd77ab333b815f01d9dfaed86fcd9eb2b319154725->enter($__internal_51fe892895e5aea5bcc44cdd77ab333b815f01d9dfaed86fcd9eb2b319154725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7005cf9152d227edfb146f7f6e652e1ffc85417842b804cb4698c8f75a71360c->leave($__internal_7005cf9152d227edfb146f7f6e652e1ffc85417842b804cb4698c8f75a71360c_prof);

        
        $__internal_51fe892895e5aea5bcc44cdd77ab333b815f01d9dfaed86fcd9eb2b319154725->leave($__internal_51fe892895e5aea5bcc44cdd77ab333b815f01d9dfaed86fcd9eb2b319154725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
