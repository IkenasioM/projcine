<?php

/* adminBundle:Cinema:addcinema.html.twig */
class __TwigTemplate_3698cf63954d63f83eb00e8efb3b8a0d307d2570267439622460f4fed511f443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminBundle::layout.html.twig", "adminBundle:Cinema:addcinema.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Application Cinema";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    <div class=\"container-fluid\">
        <h2>Ajouter un cinéma</h2>
        <form>
            <br>
            <div class=\"form-group\">
                <label for=\"\">Nom :</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez le nom du cinema\">
            </div>
            <br>
            <div class=\"form-group\">
                <label for=\"\">Adresse :</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez l'adresse du cinema\">
            </div>
            <br>
            <div class=\"form-group\">
                <label for=\"\">Accessibiltée :</label>
                <input type=\"checkbox\" class=\"form-check-input\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
        </form>
    </div>
</div> 
";
    }

    public function getTemplateName()
    {
        return "adminBundle:Cinema:addcinema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "adminBundle:Cinema:addcinema.html.twig", "/var/www/html/projcinema/src/adminBundle/Resources/views/Cinema/addcinema.html.twig");
    }
}
