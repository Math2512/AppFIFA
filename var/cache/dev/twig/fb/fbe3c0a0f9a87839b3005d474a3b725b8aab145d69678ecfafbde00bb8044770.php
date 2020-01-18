<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/index.html.twig */
class __TwigTemplate_dcdb471dca59a7555389a129eb0369a53aac5350db3ac43c09914d23466356fe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <center><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_champ");
        echo "\" class=\"btn btn-info\">Créer un Championnat</a></center>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4>Mes Championnats :</h4>
            <div class=\"list-group\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter((isset($context["championnats"]) || array_key_exists("championnats", $context) ? $context["championnats"] : (function () { throw new RuntimeError('Variable "championnats" does not exist.', 14, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["championnat"]) {
            // line 15
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["championnat"], "close", [], "any", false, false, false, 15) == 1)) {
                // line 16
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("championnat", ["id" => twig_get_attribute($this->env, $this->source, $context["championnat"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\"
                    class=\"list-group-item list-group-item-action list-group-item-info\">
                    Championnat ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["championnat"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo " <i class=\" far fa-check-square\"></i>
                </a>
                ";
            } else {
                // line 21
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("championnat", ["id" => twig_get_attribute($this->env, $this->source, $context["championnat"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\"
                    class=\"list-group-item list-group-item-action\">
                    Championnat ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["championnat"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "
                </a>
                ";
            }
            // line 26
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['championnat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  114 => 26,  108 => 23,  102 => 21,  96 => 18,  90 => 16,  87 => 15,  83 => 14,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <center><a href=\"{{path('create_champ')}}\" class=\"btn btn-info\">Créer un Championnat</a></center>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4>Mes Championnats :</h4>
            <div class=\"list-group\">
                {% for championnat in championnats|sort|reverse %}
                {% if championnat.close == 1 %}
                <a href=\"{{path('championnat', {'id' : championnat.id} )}}\"
                    class=\"list-group-item list-group-item-action list-group-item-info\">
                    Championnat {{championnat.id}} <i class=\" far fa-check-square\"></i>
                </a>
                {% else %}
                <a href=\"{{path('championnat', {'id' : championnat.id} )}}\"
                    class=\"list-group-item list-group-item-action\">
                    Championnat {{championnat.id}}
                </a>
                {% endif %}
                {% endfor %}
            </div>
        </div>
    </div>
</div>

{% endblock %}", "admin/index.html.twig", "C:\\wamp64\\www\\symfony\\fifa\\templates\\admin\\index.html.twig");
    }
}
