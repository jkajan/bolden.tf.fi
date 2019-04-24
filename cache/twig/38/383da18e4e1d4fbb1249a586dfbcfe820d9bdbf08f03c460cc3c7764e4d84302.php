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

/* partials/navigation.html.twig */
class __TwigTemplate_2860bc37663f9f1f6a53bae603237fd4d7cc94afe7388506c9a547ac1263a879 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<nav>
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "style", []), "inlineNavbar", [])) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 4
                echo "        <a href=\"";
                echo $this->getAttribute($context["child"], "url", []);
                echo "\"";
                echo ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? (" class=\"current\"") : (""));
                echo ">";
                echo $this->getAttribute($context["child"], "menu", []);
                echo "</a>
        ";
                // line 5
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo " | ";
                }
                // line 6
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "menuItems", []));
            foreach ($context['_seq'] as $context["name"] => $context["url"]) {
                // line 9
                echo "        | <a href=\"";
                echo $context["url"];
                echo "\" target=\"_blank\">";
                echo $context["name"];
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        
        ";
            // line 12
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
                // line 13
                echo "            [";
                $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 13)->display($context);
                echo "]
        ";
            }
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    <ul>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 18
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["child"], "url", []);
                echo "\"";
                echo ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? (" class=\"current\"") : (""));
                echo ">";
                echo $this->getAttribute($context["child"], "menu", []);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "menuItems", []));
            foreach ($context['_seq'] as $context["name"] => $context["url"]) {
                // line 22
                echo "        <li><a href=\"";
                echo $context["url"];
                echo "\" target=\"_blank\">";
                echo $context["name"];
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
        ";
            // line 25
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
                // line 26
                echo "            <li>[";
                $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 26)->display($context);
                echo "]</li>
        ";
            }
            // line 28
            echo "    </ul>
    ";
        }
        // line 30
        echo "
    <hr/>
    
    ";
        // line 34
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 35
            echo "    ";
            $context["crumbs"] = $this->getAttribute(($context["breadcrumbs"] ?? null), "get", [], "method");
            // line 36
            echo "
    ";
            // line 37
            if ((twig_length_filter($this->env, ($context["crumbs"] ?? null)) > 1)) {
                // line 38
                echo "    <span>
        ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                    // line 40
                    echo "        <a href=\"";
                    echo $this->getAttribute($context["crumb"], "url", []);
                    echo "\">";
                    echo $this->getAttribute($context["crumb"], "menu", []);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo " &raquo; ";
                    }
                    // line 41
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "    </span>
    ";
            }
            // line 44
            echo "
";
        }
        // line 46
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 46,  228 => 44,  224 => 42,  210 => 41,  201 => 40,  184 => 39,  181 => 38,  179 => 37,  176 => 36,  173 => 35,  170 => 34,  165 => 30,  161 => 28,  155 => 26,  153 => 25,  150 => 24,  139 => 22,  135 => 21,  132 => 20,  119 => 18,  115 => 17,  112 => 16,  109 => 15,  103 => 13,  101 => 12,  98 => 11,  87 => 9,  83 => 8,  80 => 7,  66 => 6,  62 => 5,  53 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav>
    {% if config.themes.hypertext.style.inlineNavbar %}
        {% for child in pages.children.visible %}
        <a href=\"{{ child.url }}\"{{ (child.active or child.activeChild) ? ' class=\"current\"' :'' }}>{{ child.menu }}</a>
        {% if not loop.last %} | {% endif %}
        {% endfor %}

        {% for name, url in config.themes.hypertext.menuItems %}
        | <a href=\"{{ url }}\" target=\"_blank\">{{ name }}</a>
        {% endfor %}
        
        {% if config.plugins.login.enabled and grav.user.username %}
            [{% include 'partials/login-status.html.twig' %}]
        {% endif %}
    {% else %}
    <ul>
        {% for child in pages.children.visible %}
        <li><a href=\"{{ child.url }}\"{{ (child.active or child.activeChild) ? ' class=\"current\"' :'' }}>{{ child.menu }}</a></li>
        {% endfor %}

        {% for name, url in config.themes.hypertext.menuItems %}
        <li><a href=\"{{ url }}\" target=\"_blank\">{{ name }}</a></li>
        {% endfor %}

        {% if config.plugins.login.enabled and grav.user.username %}
            <li>[{% include 'partials/login-status.html.twig' %}]</li>
        {% endif %}
    </ul>
    {% endif %}

    <hr/>
    
    {# Breadcrumbs #}
    {% if config.plugins.breadcrumbs.enabled %}
    {% set crumbs = breadcrumbs.get() %}

    {% if crumbs|length > 1 %}
    <span>
        {% for crumb in crumbs %}
        <a href=\"{{ crumb.url }}\">{{ crumb.menu }}</a>{% if not loop.last %} &raquo; {% endif %}
        {% endfor %}
    </span>
    {% endif %}

{% endif %}
</nav>", "partials/navigation.html.twig", "/http/bolden.tf.fi/user/themes/hypertext/templates/partials/navigation.html.twig");
    }
}
