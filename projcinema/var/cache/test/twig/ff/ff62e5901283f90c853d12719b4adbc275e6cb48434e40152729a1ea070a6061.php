<?php

/* adminBundle::layout.html.twig */
class __TwigTemplate_73f3f20c7b49f93e3d965332be64d7d6c1ae54526aead736b0b27fb00472f759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_835260b99e815ea76bf85272181b3b0f3d676c824b18c9aba814b6b31053852b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835260b99e815ea76bf85272181b3b0f3d676c824b18c9aba814b6b31053852b->enter($__internal_835260b99e815ea76bf85272181b3b0f3d676c824b18c9aba814b6b31053852b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle::layout.html.twig"));

        $__internal_17447ba8ec36ff63c63ab55b6b6cd46b696a1b34cf60fa71614d790286b63c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17447ba8ec36ff63c63ab55b6b6cd46b696a1b34cf60fa71614d790286b63c98->enter($__internal_17447ba8ec36ff63c63ab55b6b6cd46b696a1b34cf60fa71614d790286b63c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
    <ul class=\"nav nav-pills\">
        <li role=\"presentation\" class=\"active\"><a href=\"#\">Home</a></li>
        <li role=\"presentation\"><a href=\"#\">Profile</a></li>
        <li role=\"presentation\"><a href=\"#\">Messages</a></li>
    </ul>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
    </body>
</html>
";
        
        $__internal_835260b99e815ea76bf85272181b3b0f3d676c824b18c9aba814b6b31053852b->leave($__internal_835260b99e815ea76bf85272181b3b0f3d676c824b18c9aba814b6b31053852b_prof);

        
        $__internal_17447ba8ec36ff63c63ab55b6b6cd46b696a1b34cf60fa71614d790286b63c98->leave($__internal_17447ba8ec36ff63c63ab55b6b6cd46b696a1b34cf60fa71614d790286b63c98_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f541a0ad6ddddb333be651e9da8aa14604653c5421918a2b38e0677d3c56112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f541a0ad6ddddb333be651e9da8aa14604653c5421918a2b38e0677d3c56112->enter($__internal_0f541a0ad6ddddb333be651e9da8aa14604653c5421918a2b38e0677d3c56112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_baec20783b6237ddca49e4e0fe083670a3330a47ba961841d87956f5d2a380de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baec20783b6237ddca49e4e0fe083670a3330a47ba961841d87956f5d2a380de->enter($__internal_baec20783b6237ddca49e4e0fe083670a3330a47ba961841d87956f5d2a380de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_baec20783b6237ddca49e4e0fe083670a3330a47ba961841d87956f5d2a380de->leave($__internal_baec20783b6237ddca49e4e0fe083670a3330a47ba961841d87956f5d2a380de_prof);

        
        $__internal_0f541a0ad6ddddb333be651e9da8aa14604653c5421918a2b38e0677d3c56112->leave($__internal_0f541a0ad6ddddb333be651e9da8aa14604653c5421918a2b38e0677d3c56112_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf0220f06d6015cf0c8b112e871c9bc2e8d4ab1a66e473979692a61136098b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0220f06d6015cf0c8b112e871c9bc2e8d4ab1a66e473979692a61136098b90->enter($__internal_bf0220f06d6015cf0c8b112e871c9bc2e8d4ab1a66e473979692a61136098b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4371e97e1d737561ad6072a667d76a8387e75de387aa41ac11b4c8054cdb3695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4371e97e1d737561ad6072a667d76a8387e75de387aa41ac11b4c8054cdb3695->enter($__internal_4371e97e1d737561ad6072a667d76a8387e75de387aa41ac11b4c8054cdb3695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4371e97e1d737561ad6072a667d76a8387e75de387aa41ac11b4c8054cdb3695->leave($__internal_4371e97e1d737561ad6072a667d76a8387e75de387aa41ac11b4c8054cdb3695_prof);

        
        $__internal_bf0220f06d6015cf0c8b112e871c9bc2e8d4ab1a66e473979692a61136098b90->leave($__internal_bf0220f06d6015cf0c8b112e871c9bc2e8d4ab1a66e473979692a61136098b90_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_29d20e462a40f4b71696687020951c81aa0cf10179f1b2533b6db46de4c7c118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d20e462a40f4b71696687020951c81aa0cf10179f1b2533b6db46de4c7c118->enter($__internal_29d20e462a40f4b71696687020951c81aa0cf10179f1b2533b6db46de4c7c118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25a32092893ed35a834e7e6a1f17892414764363347dbf5040091eab8fb971a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a32092893ed35a834e7e6a1f17892414764363347dbf5040091eab8fb971a9->enter($__internal_25a32092893ed35a834e7e6a1f17892414764363347dbf5040091eab8fb971a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_25a32092893ed35a834e7e6a1f17892414764363347dbf5040091eab8fb971a9->leave($__internal_25a32092893ed35a834e7e6a1f17892414764363347dbf5040091eab8fb971a9_prof);

        
        $__internal_29d20e462a40f4b71696687020951c81aa0cf10179f1b2533b6db46de4c7c118->leave($__internal_29d20e462a40f4b71696687020951c81aa0cf10179f1b2533b6db46de4c7c118_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 21,  91 => 6,  73 => 5,  60 => 22,  58 => 21,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
    <ul class=\"nav nav-pills\">
        <li role=\"presentation\" class=\"active\"><a href=\"#\">Home</a></li>
        <li role=\"presentation\"><a href=\"#\">Profile</a></li>
        <li role=\"presentation\"><a href=\"#\">Messages</a></li>
    </ul>
        {% block body %}{% endblock %}

    </body>
</html>
", "adminBundle::layout.html.twig", "/var/www/html/projcinema/src/adminBundle/Resources/views/layout.html.twig");
    }
}
