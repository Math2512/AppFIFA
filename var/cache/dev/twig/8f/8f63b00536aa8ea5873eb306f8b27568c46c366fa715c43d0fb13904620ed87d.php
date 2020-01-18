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

/* tournament/index.html.twig */
class __TwigTemplate_63d2d96577981709a3ac8def94692a34da12a71eb98d6b4b5ed33adc3d018344 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tournament/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<style>
    .jumbotron {
        background-image: url(\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/deco/fifa.jpg"), "html", null, true);
        echo "\");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
</style>
<div class=\"jumbotron fluid\" style=\"color:#FFF\">
    <center>
        <p style=\"font-size: 4em;font-weight:bold\"><span class=\"badge badge-pill badge-primary\">FIFA IT</span></p>
    </center>
</div>
";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19) != "")) {
            // line 20
            echo "<div class=\"container\">
    <h3>Mes championnats</h3>
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classements"]) || array_key_exists("classements", $context) ? $context["classements"] : (function () { throw new RuntimeError('Variable "classements" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["classement"]) {
                // line 23
                echo "    <table class=\"table table-hover table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">J</th>
                <th scope=\"col\">MJ</th>
                <th scope=\"col\">G</th>
                <th scope=\"col\">N</th>
                <th scope=\"col\">D</th>
                <th scope=\"col\">BP</th>
                <th scope=\"col\">BC</th>
                <th scope=\"col\">DB</th>
                <th scope=\"col\">Pts</th>
                <th scope=\"col\">Détail</th>
            </tr>
        </thead>
        <tbody>
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classement"]);
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 40
                    echo "
            <tr>
                <th>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
                    echo "</th>
                <th>";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "mj", [], "any", false, false, false, 43), "html", null, true);
                    echo "</th>
                <td>";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "g", [], "any", false, false, false, 44), "html", null, true);
                    echo "</td>
                <td>";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "n", [], "any", false, false, false, 45), "html", null, true);
                    echo "</td>
                <td>";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "d", [], "any", false, false, false, 46), "html", null, true);
                    echo "</td>
                <td>";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "bp", [], "any", false, false, false, 47), "html", null, true);
                    echo "</td>
                <td>";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "bc", [], "any", false, false, false, 48), "html", null, true);
                    echo "</td>
                <td>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "db", [], "any", false, false, false, 49), "html", null, true);
                    echo "</td>
                <td>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "pts", [], "any", false, false, false, 50), "html", null, true);
                    echo "</td>
                <td><a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("championnat", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "championnat", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
                    echo "\"><i class=\"fa fa-eye\"
                            aria-hidden=\"true\"></i>
                    </a></td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </tbody>
    </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "</div>
";
        } else {
            // line 61
            echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <center><a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\" class=\"btn btn-info\">Inscription</a></center>
        <center><a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-success\">Connexion</a></center>
    </div>
</div>
";
        }
        // line 68
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tournament/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 68,  190 => 64,  186 => 63,  182 => 61,  178 => 59,  170 => 56,  159 => 51,  155 => 50,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  123 => 42,  119 => 40,  115 => 39,  97 => 23,  93 => 22,  89 => 20,  87 => 19,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
<style>
    .jumbotron {
        background-image: url(\"{{ asset('images/deco/fifa.jpg') }}\");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
</style>
<div class=\"jumbotron fluid\" style=\"color:#FFF\">
    <center>
        <p style=\"font-size: 4em;font-weight:bold\"><span class=\"badge badge-pill badge-primary\">FIFA IT</span></p>
    </center>
</div>
{% if app.user != '' %}
<div class=\"container\">
    <h3>Mes championnats</h3>
    {% for classement in classements %}
    <table class=\"table table-hover table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">J</th>
                <th scope=\"col\">MJ</th>
                <th scope=\"col\">G</th>
                <th scope=\"col\">N</th>
                <th scope=\"col\">D</th>
                <th scope=\"col\">BP</th>
                <th scope=\"col\">BC</th>
                <th scope=\"col\">DB</th>
                <th scope=\"col\">Pts</th>
                <th scope=\"col\">Détail</th>
            </tr>
        </thead>
        <tbody>
            {% for data in classement %}

            <tr>
                <th>{{ data.user.username }}</th>
                <th>{{ data.mj }}</th>
                <td>{{ data.g }}</td>
                <td>{{ data.n }}</td>
                <td>{{ data.d }}</td>
                <td>{{ data.bp }}</td>
                <td>{{ data.bc }}</td>
                <td>{{ data.db }}</td>
                <td>{{ data.pts }}</td>
                <td><a href=\"{{path('championnat', {'id' : data.championnat.id} )}}\"><i class=\"fa fa-eye\"
                            aria-hidden=\"true\"></i>
                    </a></td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    {% endfor %}
</div>
{% else %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <center><a href=\"{{path('inscription')}}\" class=\"btn btn-info\">Inscription</a></center>
        <center><a href=\"{{path('security_login')}}\" class=\"btn btn-success\">Connexion</a></center>
    </div>
</div>
{% endif %}

{% endblock %}", "tournament/index.html.twig", "C:\\wamp64\\www\\symfony\\fifa\\templates\\tournament\\index.html.twig");
    }
}
