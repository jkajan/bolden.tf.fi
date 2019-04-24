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

/* partials/js-css.html.twig */
class __TwigTemplate_2b1f07d45222312dc67b8bd85ced38c4b34b52d8d550a4f87b1e06ce814e17cf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylehseets' => [$this, 'block_stylehseets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["layout"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "layout", []);
        // line 2
        $context["colors"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "colors", []);
        // line 3
        $context["style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "style", []);
        // line 4
        $context["beautify"] = $this->getAttribute(($context["style"] ?? null), "beautifyText", []);
        // line 5
        $context["allowCSS"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "allowCSS", []) == "enabled") || (((($this->getAttribute($this->getAttribute(        // line 6
($context["page"] ?? null), "header", [], "any", false, true), "allowCSS", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "allowCSS", []), "default")) : ("default")) == "default") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
($context["config"] ?? null), "themes", []), "hypertext", []), "allowCSS", []) == "1")));
        // line 8
        $context["allowJS"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "allowJS", []) == "enabled") || (((($this->getAttribute($this->getAttribute(        // line 9
($context["page"] ?? null), "header", [], "any", false, true), "allowJS", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "allowJS", []), "default")) : ("default")) == "default") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 10
($context["config"] ?? null), "themes", []), "hypertext", []), "allowJS", []) == "1")));
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('stylehseets', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo " 
";
    }

    // line 12
    public function block_stylehseets($context, array $blocks = [])
    {
        // line 13
        echo "<style>
body {
";
        // line 15
        echo (($this->getAttribute(($context["layout"] ?? null), "width", [])) ? ((("max-width: " . $this->getAttribute(($context["layout"] ?? null), "width", [])) . "px;")) : (""));
        echo "
";
        // line 16
        echo (($this->getAttribute(($context["layout"] ?? null), "configuration", [])) ? ("margin: 40px auto;") : (""));
        echo "
";
        // line 17
        echo ((($this->getAttribute(($context["colors"] ?? null), "background", []) != "#FFFFFF")) ? ((("background: " . $this->getAttribute(($context["colors"] ?? null), "background", [])) . ";")) : (""));
        echo "
";
        // line 18
        echo ((($this->getAttribute(($context["colors"] ?? null), "text", []) != "#000000")) ? ((("color: " . $this->getAttribute(($context["colors"] ?? null), "text", [])) . ";")) : (""));
        echo "

";
        // line 20
        if (($context["beautify"] ?? null)) {
            // line 21
            echo "font-size:large;
padding:0 10px;
";
        }
        // line 24
        echo "}

";
        // line 26
        if (($context["beautify"] ?? null)) {
            // line 27
            echo "img { max-width: 80%; }
h1, h2, h3 { font-family: sans-serif; }
p { line-height:1.5; }
";
        }
        // line 31
        echo "
";
        // line 32
        echo ((($this->getAttribute(($context["colors"] ?? null), "link", []) != "#0000EE")) ? ((("a { color: " . $this->getAttribute(($context["colors"] ?? null), "link", [])) . "; }")) : (""));
        echo "
";
        // line 33
        echo ((($this->getAttribute(($context["colors"] ?? null), "visitedLink", []) != "#551A8B")) ? ((("a:visited { color: " . $this->getAttribute(($context["colors"] ?? null), "visitedLink", [])) . "; }")) : (""));
        echo "
";
        // line 34
        echo ((($this->getAttribute(($context["colors"] ?? null), "activeLink", []) != "#EE0000")) ? ((("a:active { color: " . $this->getAttribute(($context["colors"] ?? null), "activeLink", [])) . "; }")) : (""));
        echo "

";
        // line 36
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "customCSS", []);
        echo "
</style>

    ";
        // line 39
        if (($context["allowCSS"] ?? null)) {
            // line 40
            echo "    ";
            echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
            echo "
    ";
        }
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        // line 45
        echo "    ";
        if (($context["allowJS"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/js-css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 46,  141 => 45,  138 => 44,  130 => 40,  128 => 39,  122 => 36,  117 => 34,  113 => 33,  109 => 32,  106 => 31,  100 => 27,  98 => 26,  94 => 24,  89 => 21,  87 => 20,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 13,  63 => 12,  58 => 48,  56 => 44,  53 => 43,  51 => 12,  48 => 11,  46 => 10,  45 => 9,  44 => 8,  42 => 7,  41 => 6,  40 => 5,  38 => 4,  36 => 3,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set layout = config.themes.hypertext.layout %}
{% set colors = config.themes.hypertext.colors %}
{% set style = config.themes.hypertext.style %}
{% set beautify = style.beautifyText %}
{% set allowCSS = page.header.allowCSS == 'enabled' or
                    (page.header.allowCSS|default('default') == 'default' and 
                     config.themes.hypertext.allowCSS == '1') %}
{% set allowJS  = page.header.allowJS  == 'enabled' or
                    (page.header.allowJS|default('default') == 'default' and 
                     config.themes.hypertext.allowJS == '1') %}

{% block stylehseets %}
<style>
body {
{{ layout.width ? \"max-width: #{layout.width}px;\" : \"\"}}
{{ layout.configuration ? \"margin: 40px auto;\" : \"\"}}
{{ colors.background != \"#FFFFFF\" ? \"background: #{colors.background};\" : \"\"}}
{{ colors.text != \"#000000\" ? \"color: #{colors.text};\" : \"\" }}

{% if beautify %}
font-size:large;
padding:0 10px;
{% endif %}
}

{% if beautify %}
img { max-width: 80%; }
h1, h2, h3 { font-family: sans-serif; }
p { line-height:1.5; }
{% endif %}

{{ colors.link != \"#0000EE\" ? \"a { color: #{colors.link}; }\" : \"\" }}
{{ colors.visitedLink != \"#551A8B\" ? \"a:visited { color: #{colors.visitedLink}; }\" : \"\" }}
{{ colors.activeLink != \"#EE0000\" ? \"a:active { color: #{colors.activeLink}; }\" : \"\" }}

{{ config.themes.hypertext.customCSS }}
</style>

    {% if allowCSS %}
    {{ assets.css()|raw }}
    {% endif %}
{% endblock %}

{% block javascripts %}
    {% if allowJS %}
    {{ assets.js()|raw }}
    {% endif %}
{% endblock %} 
", "partials/js-css.html.twig", "/http/bolden.tf.fi/user/themes/hypertext/templates/partials/js-css.html.twig");
    }
}
