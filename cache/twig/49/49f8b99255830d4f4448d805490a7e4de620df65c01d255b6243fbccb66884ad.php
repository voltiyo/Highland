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

/* ./partials/whatsapp.html.twig */
class __TwigTemplate_5fe31f809dc8ecb1f0ae8d717f26033f618a330a0b832acd6df87e96e72854bc extends \Twig\Template
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
        $context["contact"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/contact-us"], "method");
        // line 2
        echo "<div id=\"qlwapp\" class=\"qlwapp qlwapp-free qlwapp-bubble qlwapp-bottom-right qlwapp-all qlwapp-rounded\">
    <div class=\"qlwapp-container\">
        <a class=\"qlwapp-toggle\" data-action=\"open\" data-phone=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "whatsapp_number", []), [" " => "", "+" => ""]), "html", null, true);
        echo "\" data-message=\"\" role=\"button\" tabindex=\"0\" target=\"_blank\">
            <i class=\"qlwapp-icon qlwapp-whatsapp-icon\"></i>
            <i class=\"qlwapp-close\" data-action=\"close\">&times;</i>
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "./partials/whatsapp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set contact = pages.find(\"/contact-us\")%}
<div id=\"qlwapp\" class=\"qlwapp qlwapp-free qlwapp-bubble qlwapp-bottom-right qlwapp-all qlwapp-rounded\">
    <div class=\"qlwapp-container\">
        <a class=\"qlwapp-toggle\" data-action=\"open\" data-phone=\"{{ contact.header.whatsapp_number|replace({' ': '', '+' : ''}) }}\" data-message=\"\" role=\"button\" tabindex=\"0\" target=\"_blank\">
            <i class=\"qlwapp-icon qlwapp-whatsapp-icon\"></i>
            <i class=\"qlwapp-close\" data-action=\"close\">&times;</i>
        </a>
    </div>
</div>", "./partials/whatsapp.html.twig", "C:\\xampp\\htdocs\\Highland\\user\\themes\\quark\\templates\\partials\\whatsapp.html.twig");
    }
}
