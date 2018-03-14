<?php

/* adminBundle:Cinema:detailcinema.html.twig */
class __TwigTemplate_3bd9d63e5b29b25c6e4a6d8481cd4c86d40669086eba1fcf0443558a0067d6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminBundle::layout.html.twig", "adminBundle:Cinema:detailcinema.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80738968eed719f2c962e4a1d273d71dc80edfa3e95116486828cf9fcee2c75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80738968eed719f2c962e4a1d273d71dc80edfa3e95116486828cf9fcee2c75d->enter($__internal_80738968eed719f2c962e4a1d273d71dc80edfa3e95116486828cf9fcee2c75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:Cinema:detailcinema.html.twig"));

        $__internal_17d69c61f5f409d3043b88b04306fe146f3127857d11dfb43bf92bae7162d629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d69c61f5f409d3043b88b04306fe146f3127857d11dfb43bf92bae7162d629->enter($__internal_17d69c61f5f409d3043b88b04306fe146f3127857d11dfb43bf92bae7162d629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:Cinema:detailcinema.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80738968eed719f2c962e4a1d273d71dc80edfa3e95116486828cf9fcee2c75d->leave($__internal_80738968eed719f2c962e4a1d273d71dc80edfa3e95116486828cf9fcee2c75d_prof);

        
        $__internal_17d69c61f5f409d3043b88b04306fe146f3127857d11dfb43bf92bae7162d629->leave($__internal_17d69c61f5f409d3043b88b04306fe146f3127857d11dfb43bf92bae7162d629_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_871ca23393a5e018ef0ff309c5a72e8419ae29ff232029bf192211f64ee89f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871ca23393a5e018ef0ff309c5a72e8419ae29ff232029bf192211f64ee89f8e->enter($__internal_871ca23393a5e018ef0ff309c5a72e8419ae29ff232029bf192211f64ee89f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c4f530e11d36d9b2886c1cafd1034f63f5244f5ad410218416467b4086c49d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4f530e11d36d9b2886c1cafd1034f63f5244f5ad410218416467b4086c49d1->enter($__internal_9c4f530e11d36d9b2886c1cafd1034f63f5244f5ad410218416467b4086c49d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "adminBundle:Cinema:detailcinema";
        
        $__internal_9c4f530e11d36d9b2886c1cafd1034f63f5244f5ad410218416467b4086c49d1->leave($__internal_9c4f530e11d36d9b2886c1cafd1034f63f5244f5ad410218416467b4086c49d1_prof);

        
        $__internal_871ca23393a5e018ef0ff309c5a72e8419ae29ff232029bf192211f64ee89f8e->leave($__internal_871ca23393a5e018ef0ff309c5a72e8419ae29ff232029bf192211f64ee89f8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_455ae08a86418639d24e017ab461679eabd0de0a1de7984570cbb6decb59b16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455ae08a86418639d24e017ab461679eabd0de0a1de7984570cbb6decb59b16b->enter($__internal_455ae08a86418639d24e017ab461679eabd0de0a1de7984570cbb6decb59b16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7cae415f58677f98cb24fd80995b2560c27f829dc57f7585a6b47e8c77b8962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cae415f58677f98cb24fd80995b2560c27f829dc57f7585a6b47e8c77b8962->enter($__internal_b7cae415f58677f98cb24fd80995b2560c27f829dc57f7585a6b47e8c77b8962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Cinema:detailcinema page</h1>
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cinema"] ?? $this->getContext($context, "cinema")), "nom", array()), "html", null, true);
        echo "
    <ul>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["salle"] ?? $this->getContext($context, "salle")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneSalle"]) {
            // line 10
            echo "            <li>
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneSalle"], "id", array()), "html", null, true);
            echo "
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["uneSalle"], "nomsalle", array()), "html", null, true);
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneSalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>

    <ul>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cinema"] ?? $this->getContext($context, "cinema")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFilm"]) {
            // line 19
            echo "            <li>
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFilm"], "titre", array()), "html", null, true);
            echo "
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFilm"], "resume", array()), "html", null, true);
            echo "
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["unFilm"], "duree", array()), "html", null, true);
            echo " min
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFilm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
        
        $__internal_b7cae415f58677f98cb24fd80995b2560c27f829dc57f7585a6b47e8c77b8962->leave($__internal_b7cae415f58677f98cb24fd80995b2560c27f829dc57f7585a6b47e8c77b8962_prof);

        
        $__internal_455ae08a86418639d24e017ab461679eabd0de0a1de7984570cbb6decb59b16b->leave($__internal_455ae08a86418639d24e017ab461679eabd0de0a1de7984570cbb6decb59b16b_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:Cinema:detailcinema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  116 => 22,  112 => 21,  108 => 20,  105 => 19,  101 => 18,  96 => 15,  87 => 12,  83 => 11,  80 => 10,  76 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"adminBundle::layout.html.twig\" %}

{% block title %}adminBundle:Cinema:detailcinema{% endblock %}

{% block body %}
<h1>Welcome to the Cinema:detailcinema page</h1>
{{ cinema.nom }}
    <ul>
        {% for uneSalle in salle %}
            <li>
                {{ uneSalle.id }}
                {{ uneSalle.nomsalle }}
            </li>
        {% endfor %}
    </ul>

    <ul>
        {% for unFilm in cinema %}
            <li>
                {{ unFilm.titre }}
                {{ unFilm.resume }}
                {{ unFilm.duree }} min
            </li>
        {% endfor %}
    </ul>

{% endblock %}
", "adminBundle:Cinema:detailcinema.html.twig", "/var/www/html/projcinema/src/adminBundle/Resources/views/Cinema/detailcinema.html.twig");
    }
}
