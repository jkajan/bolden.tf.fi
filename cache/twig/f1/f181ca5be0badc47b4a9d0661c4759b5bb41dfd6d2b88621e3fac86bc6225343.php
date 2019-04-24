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

/* partials/footer.html.twig */
class __TwigTemplate_d0d2b638dc06d870b66ab15a17cb9356e9e0456a945ca65b328122df1042cbe3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<hr/>
<p>Kom ihåg att städa.</p>
";
        // line 3
        $this->displayBlock('bottom', $context, $blocks);
    }

    public function block_bottom($context, array $blocks = [])
    {
        // line 4
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "allowJS", []) == "enabled") || (($this->getAttribute($this->getAttribute(        // line 5
($context["page"] ?? null), "header", []), "allowJS", []) == "default") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "allowJS", []) == "1")))) {
            // line 6
            echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "allowCSS", []) == "enabled") || (($this->getAttribute($this->getAttribute(        // line 10
($context["page"] ?? null), "header", []), "allowCSS", []) == "default") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "allowCSS", []) == "1")))) {
            // line 11
            echo $this->getAttribute(($context["assets"] ?? null), "css", [0 => "bottom"], "method");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  53 => 10,  52 => 9,  49 => 8,  44 => 6,  42 => 5,  41 => 4,  35 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<hr/>
<p>Kom ihåg att städa.</p>
{% block bottom %}
{% if page.header.allowJS == 'enabled' or 
         (page.header.allowJS == 'default' and config.themes.hypertext.allowJS == '1') %}
{{ assets.js('bottom')|raw }}
{% endif %}

{% if page.header.allowCSS == 'enabled' or 
         (page.header.allowCSS == 'default' and config.themes.hypertext.allowCSS == '1') %}
{{ assets.css('bottom')|raw }}
{% endif %}
{% endblock %}
", "partials/footer.html.twig", "/http/bolden.tf.fi/user/themes/hypertext/templates/partials/footer.html.twig");
    }
}
