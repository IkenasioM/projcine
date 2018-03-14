<?php

/* adminBundle:Default:index.html.twig */
class __TwigTemplate_49929cd8fe16128e8e3858da4c514439292925a3debbae95a45e5dd9b3fa65ac extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["cinemas"] ?? null));
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
        <br>
        <a href=\"/addcinema\" class=\"btn btn-default\">Ajouter un cinema</a>
        
    </div>
</div> 
";
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
        return array (  59 => 17,  50 => 14,  44 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "adminBundle:Default:index.html.twig", "/var/www/html/projcinema/src/adminBundle/Resources/views/Default/index.html.twig");
    }
}
