<?php

/* adminBundle:Cinema:detailcinema.html.twig */
class __TwigTemplate_630390125b9a029b6cedf9a0e922a613aa99f7c04f03f05c25b13613aa117724 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "adminBundle:Cinema:detailcinema";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Cinema:detailcinema page</h1>
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cinema"] ?? null), "nom", array()), "html", null, true);
        echo "
    <ul>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["salle"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["cinema"] ?? null));
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
        return array (  95 => 25,  86 => 22,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  66 => 15,  57 => 12,  53 => 11,  50 => 10,  46 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "adminBundle:Cinema:detailcinema.html.twig", "/var/www/html/projcinema/src/adminBundle/Resources/views/Cinema/detailcinema.html.twig");
    }
}
