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

/* partials/login-logo.html.twig */
class __TwigTemplate_a6a95fade1fc7d114884e7fcdfcce265f1bb8888bd7626451948a109027a3398 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "logo_text", [])) {
            // line 2
            echo "    <h1 class=\"text-logo\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "logo_text", []), "html", null, true);
            echo "
    </h1>
";
        } else {
            // line 6
            echo "    <h1 class=\"";
            echo ((($context["custom_login_logo"] ?? null)) ? ("custom-logo") : ("default-logo"));
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
            echo "/images/favicon.png\" title=\"Login\" />
    </h1>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/login-logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 7,  41 => 6,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if config.plugins.admin.logo_text %}
    <h1 class=\"text-logo\">
        {{ config.plugins.admin.logo_text }}
    </h1>
{% else %}
    <h1 class=\"{{ custom_login_logo ? 'custom-logo' : 'default-logo' }}\">
        {{ title }}
        <img src=\"{{ base_url_absolute }}/{{ theme_url }}/images/favicon.png\" title=\"Login\" />
    </h1>
{% endif %}
", "partials/login-logo.html.twig", "C:\\xampp\\htdocs\\Highland\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-logo.html.twig");
    }
}
