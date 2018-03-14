<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee758940e1ff08cc157b40831dc04ec26fdd3e7c5d073283d3f19a4ddca6a7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee758940e1ff08cc157b40831dc04ec26fdd3e7c5d073283d3f19a4ddca6a7ea->enter($__internal_ee758940e1ff08cc157b40831dc04ec26fdd3e7c5d073283d3f19a4ddca6a7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3f1ef316088bf520f22e852aac4e2b10b1250a6ba4c25327f9788afe7db1906c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1ef316088bf520f22e852aac4e2b10b1250a6ba4c25327f9788afe7db1906c->enter($__internal_3f1ef316088bf520f22e852aac4e2b10b1250a6ba4c25327f9788afe7db1906c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ee758940e1ff08cc157b40831dc04ec26fdd3e7c5d073283d3f19a4ddca6a7ea->leave($__internal_ee758940e1ff08cc157b40831dc04ec26fdd3e7c5d073283d3f19a4ddca6a7ea_prof);

        
        $__internal_3f1ef316088bf520f22e852aac4e2b10b1250a6ba4c25327f9788afe7db1906c->leave($__internal_3f1ef316088bf520f22e852aac4e2b10b1250a6ba4c25327f9788afe7db1906c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7406a6d58133522ea10008996e79125c40815452fdd82af92e91f27e8e8105a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7406a6d58133522ea10008996e79125c40815452fdd82af92e91f27e8e8105a8->enter($__internal_7406a6d58133522ea10008996e79125c40815452fdd82af92e91f27e8e8105a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4989527d5e50dacc0975d53ce182259026a71b854604d9ffa942ce1c50489ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4989527d5e50dacc0975d53ce182259026a71b854604d9ffa942ce1c50489ab3->enter($__internal_4989527d5e50dacc0975d53ce182259026a71b854604d9ffa942ce1c50489ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4989527d5e50dacc0975d53ce182259026a71b854604d9ffa942ce1c50489ab3->leave($__internal_4989527d5e50dacc0975d53ce182259026a71b854604d9ffa942ce1c50489ab3_prof);

        
        $__internal_7406a6d58133522ea10008996e79125c40815452fdd82af92e91f27e8e8105a8->leave($__internal_7406a6d58133522ea10008996e79125c40815452fdd82af92e91f27e8e8105a8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b19c0e7b924f24ef0ba8ad86c08aef827a6779ddc9e16761028050d8741eaf95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19c0e7b924f24ef0ba8ad86c08aef827a6779ddc9e16761028050d8741eaf95->enter($__internal_b19c0e7b924f24ef0ba8ad86c08aef827a6779ddc9e16761028050d8741eaf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84b1b4bb860c25d900c51cbfe4e9820d3c5b05d850cbc9f2564b7449e5991d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b1b4bb860c25d900c51cbfe4e9820d3c5b05d850cbc9f2564b7449e5991d09->enter($__internal_84b1b4bb860c25d900c51cbfe4e9820d3c5b05d850cbc9f2564b7449e5991d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_84b1b4bb860c25d900c51cbfe4e9820d3c5b05d850cbc9f2564b7449e5991d09->leave($__internal_84b1b4bb860c25d900c51cbfe4e9820d3c5b05d850cbc9f2564b7449e5991d09_prof);

        
        $__internal_b19c0e7b924f24ef0ba8ad86c08aef827a6779ddc9e16761028050d8741eaf95->leave($__internal_b19c0e7b924f24ef0ba8ad86c08aef827a6779ddc9e16761028050d8741eaf95_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4cfabe83d77513ec2baf6fffbb3b0d7603d274e6df1e048bceec1b3bf08606e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cfabe83d77513ec2baf6fffbb3b0d7603d274e6df1e048bceec1b3bf08606e->enter($__internal_e4cfabe83d77513ec2baf6fffbb3b0d7603d274e6df1e048bceec1b3bf08606e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_491c2513a780fd8e6d0b98936a4e928395fba7cfdc9d52b3d7e5c62ce094cafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491c2513a780fd8e6d0b98936a4e928395fba7cfdc9d52b3d7e5c62ce094cafa->enter($__internal_491c2513a780fd8e6d0b98936a4e928395fba7cfdc9d52b3d7e5c62ce094cafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_491c2513a780fd8e6d0b98936a4e928395fba7cfdc9d52b3d7e5c62ce094cafa->leave($__internal_491c2513a780fd8e6d0b98936a4e928395fba7cfdc9d52b3d7e5c62ce094cafa_prof);

        
        $__internal_e4cfabe83d77513ec2baf6fffbb3b0d7603d274e6df1e048bceec1b3bf08606e->leave($__internal_e4cfabe83d77513ec2baf6fffbb3b0d7603d274e6df1e048bceec1b3bf08606e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/projcinema/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
