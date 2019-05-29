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

/* list.html.twig */
class __TwigTemplate_eb1dd845cdacf08816a1d1176e0459e7ee2d031f2fc94edda7f8a38b2fd7756e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_css' => [$this, 'block_head_css'],
            'head_js' => [$this, 'block_head_js'],
            'navbar' => [$this, 'block_navbar'],
            'container' => [$this, 'block_container'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.twig"));

        // line 1
        echo "
";
        // line 3
        $this->displayBlock('head_css', $context, $blocks);
        // line 6
        $this->displayBlock('head_js', $context, $blocks);
        // line 12
        echo "

";
        // line 14
        $this->displayBlock('navbar', $context, $blocks);
        // line 17
        echo "

";
        // line 19
        $this->displayBlock('container', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head_css($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        // line 4
        echo "    <!-- Copy CSS from https://getbootstrap.com/docs/4.1/getting-started/introduction/#css -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_head_js($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_js"));

        // line 7
        echo "    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_navbar($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 15
        echo "    ";
        $this->loadTemplate("navbar.html.twig", "list.html.twig", 15)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_container($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 20
        echo "    <div id=\"page-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\" id=\"main\">
                <div class=\"col-sm-12 col-md-12 well\" id=\"content\">
                    <br>
                    <br>

                    <div class=\"table-responsive\">
                        <table class=\"records_list table table-striped table-bordered\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Language</th>
                                <th>Publisher</th>
                                <th>Summary</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["incidente"]) {
            // line 42
            echo "                                <tr>
                                     <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incidente"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incidente"], "titulo", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incidente"], "descricao", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incidente"], "criticidade", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incidente"], "tipo", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incidente"], "status", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td style=\"text-align: center; vertical-align: middle;\">
                                        <ul style=\"list-style-type: none;\">
                                            <li>
                                                <a class=\"btn btn-default btn-xs\" href=\"show/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incidente"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\">Visualizar</a>
                                            </li>
                                            <li style=\"margin-top: 10px;\">
                                                <a class=\"btn btn-default btn-xs\"  name=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["incidente"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\"  id=\"delete\" >Deletar</a>
                                                <input type=\"hidden\" name=\"id\" id=\"id\">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incidente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 74
        echo "
<script>


    \$(document).on(\"click\",\"#delete\",function (event) {
    event.preventDefault();


    \$.ajax({
    'url': '/incidente/delete',
    'type': 'post',
    'data': this.name,
    success: function (response) {
    alert(response);
    location.reload();
    // you will get response from your php page (what you echo or print)

},
    error: function (jqXHR, textStatus, errorThrown) {
    alert(textStatus, errorThrown);
}

});
});
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 74,  215 => 73,  199 => 62,  186 => 55,  180 => 52,  173 => 48,  169 => 47,  165 => 46,  161 => 45,  157 => 44,  153 => 43,  150 => 42,  146 => 41,  123 => 20,  117 => 19,  109 => 15,  103 => 14,  92 => 7,  86 => 6,  78 => 4,  72 => 3,  65 => 73,  62 => 72,  60 => 19,  56 => 17,  54 => 14,  50 => 12,  48 => 6,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# beware that the blocks in your template may be named different #}
{% block head_css %}
    <!-- Copy CSS from https://getbootstrap.com/docs/4.1/getting-started/introduction/#css -->
{% endblock %}
{% block head_js %}
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->
{% endblock %}


{% block navbar %}
    {% include ('navbar.html.twig') %}
{% endblock %}


{% block container %}
    <div id=\"page-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\" id=\"main\">
                <div class=\"col-sm-12 col-md-12 well\" id=\"content\">
                    <br>
                    <br>

                    <div class=\"table-responsive\">
                        <table class=\"records_list table table-striped table-bordered\">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Language</th>
                                <th>Publisher</th>
                                <th>Summary</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for incidente in data %}
                                <tr>
                                     <td>{{ incidente.id }}</td>
                                    <td>{{ incidente.titulo }}</td>
                                    <td>{{ incidente.descricao }}</td>
                                    <td>{{ incidente.criticidade }}</td>
                                    <td>{{ incidente.tipo }}</td>
                                    <td>{{ incidente.status }}</td>
                                    <td style=\"text-align: center; vertical-align: middle;\">
                                        <ul style=\"list-style-type: none;\">
                                            <li>
                                                <a class=\"btn btn-default btn-xs\" href=\"show/{{ incidente.id }}\">Visualizar</a>
                                            </li>
                                            <li style=\"margin-top: 10px;\">
                                                <a class=\"btn btn-default btn-xs\"  name=\"{{ incidente.id }}\"  id=\"delete\" >Deletar</a>
                                                <input type=\"hidden\" name=\"id\" id=\"id\">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascript %}

<script>


    \$(document).on(\"click\",\"#delete\",function (event) {
    event.preventDefault();


    \$.ajax({
    'url': '/incidente/delete',
    'type': 'post',
    'data': this.name,
    success: function (response) {
    alert(response);
    location.reload();
    // you will get response from your php page (what you echo or print)

},
    error: function (jqXHR, textStatus, errorThrown) {
    alert(textStatus, errorThrown);
}

});
});
</script>

{% endblock %}", "list.html.twig", "/var/www/html/redBelt/templates/list.html.twig");
    }
}
