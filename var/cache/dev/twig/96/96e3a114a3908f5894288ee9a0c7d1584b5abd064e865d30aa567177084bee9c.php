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

/* edit.html.twig */
class __TwigTemplate_e57bfe4fe7a291b8a1246e3bf38a82f273f74b23c6ee12b8ce5a912d6cef7363 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit.html.twig"));

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
        // line 18
        $this->displayBlock('container', $context, $blocks);
        // line 109
        echo "



";
        // line 113
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
        $this->loadTemplate("navbar.html.twig", "edit.html.twig", 15)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_container($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 19
        echo "    <br>
    <div id=\"page-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\" id=\"main\">
                <div class=\"col-sm-12 col-md-12 well\" id=\"content\">

                    <form class=\"form-horizontal\" id=\"form\" action=\"/incidente\" method=\"PUT\">
                        <fieldset>
                            <input type=\"hidden\" name='id' value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inf"]) || array_key_exists("inf", $context) ? $context["inf"] : (function () { throw new RuntimeError('Variable "inf" does not exist.', 27, $this->source); })()), "id", [], "array", false, false, false, 27), "html", null, true);
        echo "\">
                            <!-- Form Name -->
                            <legend><h1>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inf"]) || array_key_exists("inf", $context) ? $context["inf"] : (function () { throw new RuntimeError('Variable "inf" does not exist.', 29, $this->source); })()), "legenda", [], "array", false, false, false, 29), "titulo_page", [], "array", false, false, false, 29), "html", null, true);
        echo "</h1></legend>

                            <!-- Text input-->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\"
                                       for=\"nombre\">Titulo</label>
                                <div class=\"col-md-4\">
                                    <input id=\"titulo\" name=\"titulo\" type=\"text\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inf"]) || array_key_exists("inf", $context) ? $context["inf"] : (function () { throw new RuntimeError('Variable "inf" does not exist.', 36, $this->source); })()), "titulo", [], "array", false, false, false, 36), "html", null, true);
        echo "\"
                                           placeholder=\"Informe um título\"
                                           class=\"form-control input-md\" required=\"\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"tipo\" class=\"col-md-4 control-label\">Tipo</label>
                                <div class=\"col-md-4\">
                                    <select name=\"tipo\" id=\"\" class=\" form-control\">
                                        <option value=\"1\">Ataque Brute Force</option>
                                        <option value=\"2\">Credencias vazadas</option>
                                        <option value=\"3\">Ataque de DDoS</option>
                                        <option value=\"4\">Atividades anormais de usuários</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\"
                                       for=\"descricao\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inf"]) || array_key_exists("inf", $context) ? $context["inf"] : (function () { throw new RuntimeError('Variable "inf" does not exist.', 57, $this->source); })()), "legenda", [], "array", false, false, false, 57), "descricao", [], "array", false, false, false, 57), "html", null, true);
        echo "</label>
                                <div class=\"col-md-4\">
            <textarea id=\"descricao\" name=\"descricao\" type=\"text\" placeholder=\"Descrição\"
                      class=\"form-control input-md\" required=\"required\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["inf"]) || array_key_exists("inf", $context) ? $context["inf"] : (function () { throw new RuntimeError('Variable "inf" does not exist.', 60, $this->source); })()), "descricao", [], "array", false, false, false, 60), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"criticidade\"
                                       class=\"col-md-4 control-label\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inf"]) || array_key_exists("inf", $context) ? $context["inf"] : (function () { throw new RuntimeError('Variable "inf" does not exist.', 66, $this->source); })()), "legenda", [], "array", false, false, false, 66), "criticidade", [], "array", false, false, false, 66), "html", null, true);
        echo "</label>
                                <div class=\"col-md-4\">
                                    <select name=\"criticidade\" id=\"\" class=\"col-md-4 form-control\">
                                        <option value=\"1\">Alta</option>
                                        <option value=\"2\">Média</option>
                                        <option value=\"3\">Baixa</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"status\"
                                       class=\"col-md-4 control-label\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inf"]) || array_key_exists("inf", $context) ? $context["inf"] : (function () { throw new RuntimeError('Variable "inf" does not exist.', 78, $this->source); })()), "legenda", [], "array", false, false, false, 78), "status", [], "array", false, false, false, 78), "html", null, true);
        echo "</label>
                                <div class=\"col-md-4\">
                                    <select name=\"status\" id=\"\" class=\"col-md-4 form-control\">
                                        <option value=\"1\">Aberto</option>
                                        <option value=\"2\">Fechado</option>

                                    </select>
                                </div>
                            </div>

                            <!-- Button (Double) -->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"submit\"></label>
                                <div class=\"col-md-6\">
                                    <button type=\"submit\" formmethod=\"post\" id=\"submit\" name=\"submit\"
                                            class=\"btn btn-primary\">
                                        Editar
                                    </button>
                                 </div>
                            </div>

                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 114
        echo "
<script>

    \$(\"#form\").submit(function (event) {
    event.preventDefault();

    \$.ajax({
    'url': '/incidente',
    'type': 'POST',
    'data': \$('#form').serialize(),
    success: function (response) {
    alert(response);
    // you will get response from your php page (what you echo or print)

},
    error: function (jqXHR, textStatus, errorThrown) {
    console.log(textStatus, errorThrown);
}

});
});
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  248 => 114,  242 => 113,  204 => 78,  189 => 66,  180 => 60,  174 => 57,  150 => 36,  140 => 29,  135 => 27,  125 => 19,  119 => 18,  111 => 15,  105 => 14,  94 => 7,  88 => 6,  80 => 4,  74 => 3,  67 => 113,  61 => 109,  59 => 18,  56 => 17,  54 => 14,  50 => 12,  48 => 6,  46 => 3,  43 => 1,);
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
    <br>
    <div id=\"page-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\" id=\"main\">
                <div class=\"col-sm-12 col-md-12 well\" id=\"content\">

                    <form class=\"form-horizontal\" id=\"form\" action=\"/incidente\" method=\"PUT\">
                        <fieldset>
                            <input type=\"hidden\" name='id' value=\"{{ inf['id'] }}\">
                            <!-- Form Name -->
                            <legend><h1>{{ inf['legenda']['titulo_page'] }}</h1></legend>

                            <!-- Text input-->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\"
                                       for=\"nombre\">Titulo</label>
                                <div class=\"col-md-4\">
                                    <input id=\"titulo\" name=\"titulo\" type=\"text\" value=\"{{ inf['titulo'] }}\"
                                           placeholder=\"Informe um título\"
                                           class=\"form-control input-md\" required=\"\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"tipo\" class=\"col-md-4 control-label\">Tipo</label>
                                <div class=\"col-md-4\">
                                    <select name=\"tipo\" id=\"\" class=\" form-control\">
                                        <option value=\"1\">Ataque Brute Force</option>
                                        <option value=\"2\">Credencias vazadas</option>
                                        <option value=\"3\">Ataque de DDoS</option>
                                        <option value=\"4\">Atividades anormais de usuários</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\"
                                       for=\"descricao\">{{ inf['legenda']['descricao'] }}</label>
                                <div class=\"col-md-4\">
            <textarea id=\"descricao\" name=\"descricao\" type=\"text\" placeholder=\"Descrição\"
                      class=\"form-control input-md\" required=\"required\">{{ inf['descricao'] }}</textarea>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"criticidade\"
                                       class=\"col-md-4 control-label\">{{ inf['legenda']['criticidade'] }}</label>
                                <div class=\"col-md-4\">
                                    <select name=\"criticidade\" id=\"\" class=\"col-md-4 form-control\">
                                        <option value=\"1\">Alta</option>
                                        <option value=\"2\">Média</option>
                                        <option value=\"3\">Baixa</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"status\"
                                       class=\"col-md-4 control-label\">{{ inf['legenda']['status'] }}</label>
                                <div class=\"col-md-4\">
                                    <select name=\"status\" id=\"\" class=\"col-md-4 form-control\">
                                        <option value=\"1\">Aberto</option>
                                        <option value=\"2\">Fechado</option>

                                    </select>
                                </div>
                            </div>

                            <!-- Button (Double) -->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"submit\"></label>
                                <div class=\"col-md-6\">
                                    <button type=\"submit\" formmethod=\"post\" id=\"submit\" name=\"submit\"
                                            class=\"btn btn-primary\">
                                        Editar
                                    </button>
                                 </div>
                            </div>

                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

{% endblock %}




{% block javascript %}

<script>

    \$(\"#form\").submit(function (event) {
    event.preventDefault();

    \$.ajax({
    'url': '/incidente',
    'type': 'POST',
    'data': \$('#form').serialize(),
    success: function (response) {
    alert(response);
    // you will get response from your php page (what you echo or print)

},
    error: function (jqXHR, textStatus, errorThrown) {
    console.log(textStatus, errorThrown);
}

});
});
</script>

{% endblock %}", "edit.html.twig", "/var/www/html/redBelt/templates/edit.html.twig");
    }
}
