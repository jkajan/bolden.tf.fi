<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_34f99107897d0650d40c53ce15d6ee7afbe02fbf416e8dbf5d504f1b844bed0a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bodyClasses", []);
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "</head>

<body class=\"";
        // line 22
        echo $this->getAttribute(($context["page"] ?? null), "template", []);
        echo ((($context["body_classes"] ?? null)) ? (" {{ body_classes }}") : (""));
        echo "\">
    ";
        // line 23
        if ( !$this->getAttribute(($context["uri"] ?? null), "query", [0 => "headless"], "method")) {
            // line 24
            echo "    <header>
    ";
            // line 25
            $this->displayBlock('header', $context, $blocks);
            // line 36
            echo "    </header>
    ";
        }
        // line 38
        echo "    
    <section id=\"content\">
        ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "    </section>

    ";
        // line 44
        if ( !$this->getAttribute(($context["uri"] ?? null), "query", [0 => "headless"], "method")) {
            // line 45
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 50
            echo "    ";
        }
        // line 51
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <link rel=\"canonical\" href=\"";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
    <title>";
        // line 12
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
    
    ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "style", []), "usefavicon", []) &&  !$this->getAttribute(($context["uri"] ?? null), "query", [0 => "headless"], "method"))) {
            // line 15
            echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
            echo "\" />
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("partials/js-css.html.twig", "partials/base.html.twig", 18)->display($context);
    }

    // line 25
    public function block_header($context, array $blocks = [])
    {
        // line 26
        echo "        <h1><a href=\"";
        echo ($context["home_url"] ?? null);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</a></h1>
        ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", [])) {
            echo " <aside>";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []);
            echo "</aside> ";
        }
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 32
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
            // line 33
            echo "            ";
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 33)->display($context);
            // line 34
            echo "        ";
        }
        // line 35
        echo "    ";
    }

    // line 29
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 30
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 30)->display($context);
        // line 31
        echo "        ";
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        // line 41
        echo "        ";
    }

    // line 45
    public function block_footer($context, array $blocks = [])
    {
        // line 46
        echo "    <footer>
        ";
        // line 47
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "    </footer>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 48,  189 => 47,  186 => 46,  183 => 45,  179 => 41,  176 => 40,  172 => 31,  169 => 30,  166 => 29,  162 => 35,  159 => 34,  156 => 33,  153 => 32,  151 => 29,  148 => 28,  142 => 27,  135 => 26,  132 => 25,  128 => 18,  125 => 17,  119 => 15,  117 => 14,  108 => 12,  105 => 11,  103 => 10,  98 => 8,  95 => 7,  92 => 6,  86 => 51,  83 => 50,  80 => 45,  78 => 44,  74 => 42,  72 => 40,  68 => 38,  64 => 36,  62 => 25,  59 => 24,  57 => 23,  52 => 22,  48 => 20,  46 => 6,  41 => 4,  37 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = page.header.bodyClasses %}

<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    
    {% if config.themes.hypertext.style.usefavicon and not uri.query('headless') %}
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    {% endif %}

    {% include 'partials/js-css.html.twig' %}
{% endblock head %}
</head>

<body class=\"{{ page.template }}{{ body_classes ? ' {{ body_classes }}' : ''}}\">
    {% if not uri.query('headless') %}
    <header>
    {% block header %}
        <h1><a href=\"{{ home_url }}\">{{ site.title|e('html') }}</a></h1>
        {% if site.metadata.description %} <aside>{{ site.metadata.description }}</aside> {% endif %}

        {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}
        {% if grav.messages.all %}
            {% include 'partials/messages.html.twig' %}
        {% endif %}
    {% endblock %}
    </header>
    {% endif %}
    
    <section id=\"content\">
        {% block content %}
        {% endblock %}
    </section>

    {% if not uri.query('headless') %}
    {% block footer %}
    <footer>
        {% include 'partials/footer.html.twig' %}
    </footer>
    {% endblock %}
    {% endif %}
</body>
</html>
", "partials/base.html.twig", "/http/bolden.tf.fi/user/themes/hypertext/templates/partials/base.html.twig");
    }
}
