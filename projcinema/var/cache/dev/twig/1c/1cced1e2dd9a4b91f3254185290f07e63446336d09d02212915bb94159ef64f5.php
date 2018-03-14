<?php

/* adminBundle:Default:index.html.twig */
class __TwigTemplate_f638fc9a6e81ecba9f6219d5f956c7cdf7aeae34a209d108a16cd686e9ba11fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminBundle::layout.html.twig", "adminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe679b3d44547768bd4821058d1695b5cfc2e45a0ab2dc731a00a4471aeb5544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe679b3d44547768bd4821058d1695b5cfc2e45a0ab2dc731a00a4471aeb5544->enter($__internal_fe679b3d44547768bd4821058d1695b5cfc2e45a0ab2dc731a00a4471aeb5544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:Default:index.html.twig"));

        $__internal_fdffa0a88292d521a0921bac64895bc82cb25d49f7b99492b783c6ffcf74a02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdffa0a88292d521a0921bac64895bc82cb25d49f7b99492b783c6ffcf74a02f->enter($__internal_fdffa0a88292d521a0921bac64895bc82cb25d49f7b99492b783c6ffcf74a02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe679b3d44547768bd4821058d1695b5cfc2e45a0ab2dc731a00a4471aeb5544->leave($__internal_fe679b3d44547768bd4821058d1695b5cfc2e45a0ab2dc731a00a4471aeb5544_prof);

        
        $__internal_fdffa0a88292d521a0921bac64895bc82cb25d49f7b99492b783c6ffcf74a02f->leave($__internal_fdffa0a88292d521a0921bac64895bc82cb25d49f7b99492b783c6ffcf74a02f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b2911fe35bda82887eedf38eb202481ad51a3bee6435e7de6e1473970c67b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2911fe35bda82887eedf38eb202481ad51a3bee6435e7de6e1473970c67b97->enter($__internal_7b2911fe35bda82887eedf38eb202481ad51a3bee6435e7de6e1473970c67b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e14066309f419ceb288493a6a4e4a9915c10a876af913d24b0b03ac5b847a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e14066309f419ceb288493a6a4e4a9915c10a876af913d24b0b03ac5b847a49->enter($__internal_6e14066309f419ceb288493a6a4e4a9915c10a876af913d24b0b03ac5b847a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Espace administration</h1>

<div class=\"container\">
    <div class=\"container-fluid\">
        <h2>Cinéma</h2>
        <br>
        <div class=\"row\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cinemas"] ?? $this->getContext($context, "cinemas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cine"]) {
            // line 12
            echo "            <div class=\"col-md-8\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cine"], "nom", array()), "html", null, true);
            echo "</div>
            <div class=\"col-md-4\">
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailcinema", array("id" => $this->getAttribute($context["cine"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">Détail</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>
        
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addcinema");
        echo "\" class=\"btn btn-success\">Ajouter un cinema</a>
        
    </div>
</div> 
";
        
        $__internal_6e14066309f419ceb288493a6a4e4a9915c10a876af913d24b0b03ac5b847a49->leave($__internal_6e14066309f419ceb288493a6a4e4a9915c10a876af913d24b0b03ac5b847a49_prof);

        
        $__internal_7b2911fe35bda82887eedf38eb202481ad51a3bee6435e7de6e1473970c67b97->leave($__internal_7b2911fe35bda82887eedf38eb202481ad51a3bee6435e7de6e1473970c67b97_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  77 => 17,  68 => 14,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
<h1>Espace administration</h1>

<div class=\"container\">
    <div class=\"container-fluid\">
        <h2>Cinéma</h2>
        <br>
        <div class=\"row\">
        {% for cine in cinemas %}
            <div class=\"col-md-8\">{{ cine.nom }}</div>
            <div class=\"col-md-4\">
                <a href=\"{{ path('detailcinema', {'id': cine.id}) }}\" class=\"btn btn-success\">Détail</a>
            </div>
        {% endfor %}
        </div>
        
        <a href=\"{{ path('addcinema') }}\" class=\"btn btn-success\">Ajouter un cinema</a>
        
    </div>
</div> 
{% endblock %}", "adminBundle:Default:index.html.twig", "/var/www/html/projcinema/src/adminBundle/Resources/views/Default/index.html.twig");
    }
}
