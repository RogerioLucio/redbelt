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

/* navbar.html.twig */
class __TwigTemplate_c2d2bee3c20517987813a03a079baa909a289522504b010ace5473b3f917d0cb extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<div id=\"throbber\" style=\"display:none; min-height:120px;\"></div>
<div id=\"noty-holder\"></div>
<div id=\"wrapper\">
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

        </div>
        <!-- Top Menu Items -->
        <ul class=\"nav navbar-right top-nav\">
            <li><a href=\"#\" data-placement=\"bottom\" data-toggle=\"tooltip\" href=\"#\" data-original-title=\"Stats\"><i
                            class=\"fa fa-bar-chart-o\"></i>
                </a>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav side-nav\">
                <li>
                    <a href=\"/\"><i class=\"fa fa-fw fa-paper-plane-o\"></i> Cadastrar</a>
                </li>
                <li>
                    <a href=\"/incidente/list\"><i class=\"fa fa-fw fa-user-plus\"></i> Incidentes</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"throbber\" style=\"display:none; min-height:120px;\"></div>
<div id=\"noty-holder\"></div>
<div id=\"wrapper\">
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

        </div>
        <!-- Top Menu Items -->
        <ul class=\"nav navbar-right top-nav\">
            <li><a href=\"#\" data-placement=\"bottom\" data-toggle=\"tooltip\" href=\"#\" data-original-title=\"Stats\"><i
                            class=\"fa fa-bar-chart-o\"></i>
                </a>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav side-nav\">
                <li>
                    <a href=\"/\"><i class=\"fa fa-fw fa-paper-plane-o\"></i> Cadastrar</a>
                </li>
                <li>
                    <a href=\"/incidente/list\"><i class=\"fa fa-fw fa-user-plus\"></i> Incidentes</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->", "navbar.html.twig", "/var/www/html/redBelt/templates/navbar.html.twig");
    }
}
