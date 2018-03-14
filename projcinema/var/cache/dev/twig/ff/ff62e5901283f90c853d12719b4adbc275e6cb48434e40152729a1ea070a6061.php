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
        $__internal_0e02e008a6016b0bdb5cafdd67f6515f862e444c0107b0aa4a736b575f140052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e02e008a6016b0bdb5cafdd67f6515f862e444c0107b0aa4a736b575f140052->enter($__internal_0e02e008a6016b0bdb5cafdd67f6515f862e444c0107b0aa4a736b575f140052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle::layout.html.twig"));

        $__internal_a446dd587a6f86761ae31202ade80b514a4f4225b53fe433b8611bb629324d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a446dd587a6f86761ae31202ade80b514a4f4225b53fe433b8611bb629324d38->enter($__internal_a446dd587a6f86761ae31202ade80b514a4f4225b53fe433b8611bb629324d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle::layout.html.twig"));

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
        
        $__internal_0e02e008a6016b0bdb5cafdd67f6515f862e444c0107b0aa4a736b575f140052->leave($__internal_0e02e008a6016b0bdb5cafdd67f6515f862e444c0107b0aa4a736b575f140052_prof);

        
        $__internal_a446dd587a6f86761ae31202ade80b514a4f4225b53fe433b8611bb629324d38->leave($__internal_a446dd587a6f86761ae31202ade80b514a4f4225b53fe433b8611bb629324d38_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94a5eae4406dec7a12881464343281dfffb62ad1bfa084677a118cacc4119550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a5eae4406dec7a12881464343281dfffb62ad1bfa084677a118cacc4119550->enter($__internal_94a5eae4406dec7a12881464343281dfffb62ad1bfa084677a118cacc4119550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d63996006b28ebc945e698dacb49297f7a6ecc3e6315be1f24c59fe4c41feda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d63996006b28ebc945e698dacb49297f7a6ecc3e6315be1f24c59fe4c41feda->enter($__internal_6d63996006b28ebc945e698dacb49297f7a6ecc3e6315be1f24c59fe4c41feda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cinema!";
        
        $__internal_6d63996006b28ebc945e698dacb49297f7a6ecc3e6315be1f24c59fe4c41feda->leave($__internal_6d63996006b28ebc945e698dacb49297f7a6ecc3e6315be1f24c59fe4c41feda_prof);

        
        $__internal_94a5eae4406dec7a12881464343281dfffb62ad1bfa084677a118cacc4119550->leave($__internal_94a5eae4406dec7a12881464343281dfffb62ad1bfa084677a118cacc4119550_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cdb91d56598ac2f7337870a84cd854561e3bf11ff027bfd37ac92df077af4de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb91d56598ac2f7337870a84cd854561e3bf11ff027bfd37ac92df077af4de2->enter($__internal_cdb91d56598ac2f7337870a84cd854561e3bf11ff027bfd37ac92df077af4de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dca7792e061aba60a16c23d08caab6f1efb400127d0f8b21c30bce7460f21bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca7792e061aba60a16c23d08caab6f1efb400127d0f8b21c30bce7460f21bed->enter($__internal_dca7792e061aba60a16c23d08caab6f1efb400127d0f8b21c30bce7460f21bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dca7792e061aba60a16c23d08caab6f1efb400127d0f8b21c30bce7460f21bed->leave($__internal_dca7792e061aba60a16c23d08caab6f1efb400127d0f8b21c30bce7460f21bed_prof);

        
        $__internal_cdb91d56598ac2f7337870a84cd854561e3bf11ff027bfd37ac92df077af4de2->leave($__internal_cdb91d56598ac2f7337870a84cd854561e3bf11ff027bfd37ac92df077af4de2_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_64e66b5b88c65e576f681e9c127d7a79d0a54c1730d0c604a7f8058bed4212a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e66b5b88c65e576f681e9c127d7a79d0a54c1730d0c604a7f8058bed4212a5->enter($__internal_64e66b5b88c65e576f681e9c127d7a79d0a54c1730d0c604a7f8058bed4212a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87ae5fab625656239979722499430550cd9ebd8b84996782ba117f6cb1f2fdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ae5fab625656239979722499430550cd9ebd8b84996782ba117f6cb1f2fdc7->enter($__internal_87ae5fab625656239979722499430550cd9ebd8b84996782ba117f6cb1f2fdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87ae5fab625656239979722499430550cd9ebd8b84996782ba117f6cb1f2fdc7->leave($__internal_87ae5fab625656239979722499430550cd9ebd8b84996782ba117f6cb1f2fdc7_prof);

        
        $__internal_64e66b5b88c65e576f681e9c127d7a79d0a54c1730d0c604a7f8058bed4212a5->leave($__internal_64e66b5b88c65e576f681e9c127d7a79d0a54c1730d0c604a7f8058bed4212a5_prof);

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
        <title>{% block title %}Cinema!{% endblock %}</title>
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
