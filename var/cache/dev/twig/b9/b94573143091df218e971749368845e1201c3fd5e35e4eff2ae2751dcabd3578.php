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

/* tournament/championnat/show.html.twig */
class __TwigTemplate_0147126781f6f5faeae7e37f5b3604d1df3984344eed1a8521338c860a6b6a18 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/championnat/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/championnat/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tournament/championnat/show.html.twig", 1);
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

    <center>
        <h2>CHAMPIONNAT ID : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["championnat"]) || array_key_exists("championnat", $context) ? $context["championnat"] : (function () { throw new RuntimeError('Variable "championnat" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo " <small>Journée
                ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["journee"] ?? null), 0, [], "any", false, true, false, 8), "journee", [], "any", true, true, false, 8)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["journee"]) || array_key_exists("journee", $context) ? $context["journee"] : (function () { throw new RuntimeError('Variable "journee" does not exist.', 8, $this->source); })()), 0, [], "any", false, false, false, 8), "journee", [], "any", false, false, false, 8), "html", null, true);
        } else {
            echo "0";
        }
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["championnat"]) || array_key_exists("championnat", $context) ? $context["championnat"] : (function () { throw new RuntimeError('Variable "championnat" does not exist.', 8, $this->source); })()), "nbrjours", [], "any", false, false, false, 8), "html", null, true);
        echo "</small>
        </h2>
    </center>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"alert alert-dismissible alert-danger\">
                <i class=\"fas fa-exclamation-triangle\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["championnat"]) || array_key_exists("championnat", $context) ? $context["championnat"] : (function () { throw new RuntimeError('Variable "championnat" does not exist.', 23, $this->source); })()), "close", [], "any", false, false, false, 23) != 1)) {
            // line 24
            echo "    <a class=\"btn btn-success btn btn-block col-md-2 offset-md-10\" role=\"button\" aria-disabled=\"true\" tabindex=\"-1\"
        href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("closeChampionnat", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["championnat"]) || array_key_exists("championnat", $context) ? $context["championnat"] : (function () { throw new RuntimeError('Variable "championnat" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">
        Terminer championnat
    </a>
    ";
        } else {
            // line 29
            echo "    <h4 class=\"text-info\" style=\"text-align: center;\">Championnat Fini</h4>
    ";
        }
        // line 31
        echo "

    <hr>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <h5>Joueurs :</h5>
        </div>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "
        <div class=\"col-md-2\">
            <div class=\"card\" style=\"height: 12rem;\">
                <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["user"], "imageFile"), "medium"), "html", null, true);
            echo "\" alt=\"\"
                    class=\"card-img-top\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" style=\"text-align: center;\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 46), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\" style=\"text-align: center;\">
                        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "victory", [], "any", false, false, false, 48) != null)) {
                // line 49
                echo "                        ";
                $context["val"] = (twig_get_attribute($this->env, $this->source, $context["user"], "victory", [], "any", false, false, false, 49) - 1);
                // line 50
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["val"]) || array_key_exists("val", $context) ? $context["val"] : (function () { throw new RuntimeError('Variable "val" does not exist.', 50, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 51
                    echo "                        <i style=\"color:gold\" class=\"fas fa-star\"></i>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                        ";
            }
            // line 54
            echo "                        <!-- <i class=\"fas fa-star-of-david\"></i> -->
                    </p>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </div>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h5>Match joués :</h5>
            ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["championnat"]) || array_key_exists("championnat", $context) ? $context["championnat"] : (function () { throw new RuntimeError('Variable "championnat" does not exist.', 65, $this->source); })()), "close", [], "any", false, false, false, 65) != 1)) {
            // line 66
            echo "            <a class=\"btn btn-warning btn-lg btn-block col-md-12\" role=\"button\" aria-disabled=\"true\" tabindex=\"-1\"
                href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editMatch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["championnat"]) || array_key_exists("championnat", $context) ? $context["championnat"] : (function () { throw new RuntimeError('Variable "championnat" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Ajouter un match</a>
            ";
        }
        // line 69
        echo "            <table class=\"table table-hover table-striped table-bordered table-sm col-md-12\" style=\"text-align:center\">
                <thead>
                    <tr>
                        <th>
                            Journée
                        </th>
                        <th>
                            J1
                        </th>
                        <th>
                            Résultat J1
                        </th>
                        <th>
                            Résultat J2
                        </th>
                        <th>
                            J2
                        </th>
                        <th>
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) || array_key_exists("matchs", $context) ? $context["matchs"] : (function () { throw new RuntimeError('Variable "matchs" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 94
            echo "                    <tr>
                        <td>
                            ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "journee", [], "any", false, false, false, 96), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "joueurs1", [], "any", false, false, false, 99), "username", [], "any", false, false, false, 99), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, $context["match"], "resultatj1", [], "any", false, false, false, 102) > twig_get_attribute($this->env, $this->source, $context["match"], "resultatj2", [], "any", false, false, false, 102))) {
                // line 103
                echo "                            ";
                $context["color"] = "green";
                // line 104
                echo "                            ";
            } else {
                // line 105
                echo "                            ";
                $context["color"] = "red";
                // line 106
                echo "                            ";
            }
            // line 107
            echo "                            <span style=\"color:";
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 107, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "resultatj1", [], "any", false, false, false, 107), "html", null, true);
            echo "</span>
                        </td>
                        <td>
                            ";
            // line 110
            if ((twig_get_attribute($this->env, $this->source, $context["match"], "resultatj1", [], "any", false, false, false, 110) < twig_get_attribute($this->env, $this->source, $context["match"], "resultatj2", [], "any", false, false, false, 110))) {
                // line 111
                echo "                            ";
                $context["color"] = "green";
                // line 112
                echo "                            ";
            } else {
                // line 113
                echo "                            ";
                $context["color"] = "red";
                // line 114
                echo "                            ";
            }
            // line 115
            echo "                            <span style=\"color:";
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 115, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "resultatj2", [], "any", false, false, false, 115), "html", null, true);
            echo "</span>
                        </td>
                        <td>
                            ";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "joueurs2", [], "any", false, false, false, 118), "username", [], "any", false, false, false, 118), "html", null, true);
            echo "
                        </td>
                        <td>
                            <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteMatch", ["id" => twig_get_attribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "\" class=\"href\"><i
                                    class=\"far fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                </tbody>
            </table>
        </div>
        <div class=\"col-md-6\">
            <div class=\"col-md-12\">
                <h5>Classement :</h5>
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
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classement"]) || array_key_exists("classement", $context) ? $context["classement"] : (function () { throw new RuntimeError('Variable "classement" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 148
            echo "                        <tr>
                            <th>";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "user", [], "any", false, false, false, 149), "username", [], "any", false, false, false, 149), "html", null, true);
            echo "</th>
                            <th>";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "mj", [], "any", false, false, false, 150), "html", null, true);
            echo "</th>
                            <td>";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "g", [], "any", false, false, false, 151), "html", null, true);
            echo "</td>
                            <td>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "n", [], "any", false, false, false, 152), "html", null, true);
            echo "</td>
                            <td>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "d", [], "any", false, false, false, 153), "html", null, true);
            echo "</td>
                            <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "bp", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
                            <td>";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "bc", [], "any", false, false, false, 155), "html", null, true);
            echo "</td>
                            <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "db", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
                            <td>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "pts", [], "any", false, false, false, 157), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 169
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 174
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js\"></script>
<script>
    \$(document).ready(function () {
        \$('select').select2();

    });

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tournament/championnat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 174,  426 => 173,  415 => 169,  405 => 168,  389 => 160,  380 => 157,  376 => 156,  372 => 155,  368 => 154,  364 => 153,  360 => 152,  356 => 151,  352 => 150,  348 => 149,  345 => 148,  341 => 147,  318 => 126,  307 => 121,  301 => 118,  292 => 115,  289 => 114,  286 => 113,  283 => 112,  280 => 111,  278 => 110,  269 => 107,  266 => 106,  263 => 105,  260 => 104,  257 => 103,  255 => 102,  249 => 99,  243 => 96,  239 => 94,  235 => 93,  209 => 69,  204 => 67,  201 => 66,  199 => 65,  192 => 60,  181 => 54,  178 => 53,  171 => 51,  166 => 50,  163 => 49,  161 => 48,  156 => 46,  150 => 43,  145 => 40,  141 => 39,  131 => 31,  127 => 29,  120 => 25,  117 => 24,  114 => 23,  100 => 15,  95 => 12,  91 => 11,  79 => 8,  75 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">

    <center>
        <h2>CHAMPIONNAT ID : {{championnat.id}} <small>Journée
                {% if journee.0.journee is defined %}{{journee.0.journee}}{% else %}0{% endif %}/{{championnat.nbrjours}}</small>
        </h2>
    </center>
    {% for message in app.flashes('error') %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"alert alert-dismissible alert-danger\">
                <i class=\"fas fa-exclamation-triangle\"></i> {{ message }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        </div>
    </div>
    {% endfor %}
    {% if championnat.close != 1 %}
    <a class=\"btn btn-success btn btn-block col-md-2 offset-md-10\" role=\"button\" aria-disabled=\"true\" tabindex=\"-1\"
        href=\"{{ path('closeChampionnat', {'id' : championnat.id} )}}\">
        Terminer championnat
    </a>
    {% else %}
    <h4 class=\"text-info\" style=\"text-align: center;\">Championnat Fini</h4>
    {% endif %}


    <hr>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <h5>Joueurs :</h5>
        </div>
        {% for user in users %}

        <div class=\"col-md-2\">
            <div class=\"card\" style=\"height: 12rem;\">
                <img src=\"{{vich_uploader_asset(user, 'imageFile') | imagine_filter('medium')}}\" alt=\"\"
                    class=\"card-img-top\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" style=\"text-align: center;\">{{user.username}}</h5>
                    <p class=\"card-text\" style=\"text-align: center;\">
                        {% if user.victory != null %}
                        {% set val = user.victory - 1 %}
                        {% for i in 0..val  %}
                        <i style=\"color:gold\" class=\"fas fa-star\"></i>
                        {% endfor %}
                        {% endif %}
                        <!-- <i class=\"fas fa-star-of-david\"></i> -->
                    </p>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h5>Match joués :</h5>
            {% if championnat.close != 1 %}
            <a class=\"btn btn-warning btn-lg btn-block col-md-12\" role=\"button\" aria-disabled=\"true\" tabindex=\"-1\"
                href=\"{{ path('editMatch', {'id' : championnat.id} )}}\">Ajouter un match</a>
            {% endif %}
            <table class=\"table table-hover table-striped table-bordered table-sm col-md-12\" style=\"text-align:center\">
                <thead>
                    <tr>
                        <th>
                            Journée
                        </th>
                        <th>
                            J1
                        </th>
                        <th>
                            Résultat J1
                        </th>
                        <th>
                            Résultat J2
                        </th>
                        <th>
                            J2
                        </th>
                        <th>
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {% for match in matchs %}
                    <tr>
                        <td>
                            {{match.journee}}
                        </td>
                        <td>
                            {{match.joueurs1.username}}
                        </td>
                        <td>
                            {% if match.resultatj1 > match.resultatj2 %}
                            {% set color =\"green\" %}
                            {% else %}
                            {% set color =\"red\" %}
                            {% endif %}
                            <span style=\"color:{{ color}}\">{{match.resultatj1}}</span>
                        </td>
                        <td>
                            {% if match.resultatj1 < match.resultatj2 %}
                            {% set color =\"green\" %}
                            {% else %}
                            {% set color =\"red\" %}
                            {% endif %}
                            <span style=\"color:{{ color}}\">{{match.resultatj2}}</span>
                        </td>
                        <td>
                            {{match.joueurs2.username}}
                        </td>
                        <td>
                            <a href=\"{{path('deleteMatch', {'id' : match.id} )}}\" class=\"href\"><i
                                    class=\"far fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"col-md-6\">
            <div class=\"col-md-12\">
                <h5>Classement :</h5>
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
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css\">
{% endblock %}


{% block javascripts %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js\"></script>
<script>
    \$(document).ready(function () {
        \$('select').select2();

    });

</script>
{% endblock %}", "tournament/championnat/show.html.twig", "C:\\wamp64\\www\\symfony\\fifa\\templates\\tournament\\championnat\\show.html.twig");
    }
}
