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

/* ./partials/footer.html.twig */
class __TwigTemplate_2fa7e047fed8bae23faec3fcfe2293b8f416c9ff3dd409dd592a1b68170dd522 extends \Twig\Template
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
        $context["home"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/home"], "method");
        // line 3
        echo "<div data-elementor-type=\"footer\" data-elementor-id=\"27\" class=\"elementor elementor-27 elementor-location-footer\" data-elementor-post-type=\"elementor_library\">
    <section class=\"elementor-section elementor-top-section elementor-element elementor-element-51fc13af elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"51fc13af\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
        <div class=\"elementor-container elementor-column-gap-default\">
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3fc9e62\" data-id=\"3fc9e62\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-50f0f4cb elementor-widget__width-initial elementor-widget elementor-widget-image\" data-id=\"50f0f4cb\" data-element_type=\"widget\" data-settings=\"{&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}\" data-widget_type=\"image.default\">
                        <div class=\"elementor-widget-container\"> <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["home"] ?? null), "url", []), "html", null, true);
        echo "\"> <img style='width: 100px;' alt=\"Urban Landscapes\" class=\"attachment-full size-full wp-image-7 nitro-lazy\" decoding=\"async\" nitro-lazy-empty id=\"NjQ4OjQzNw==-1\" src=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/media/images/logo-transparent.png\" /> </a> </div>
                    </div>
                    <div class=\"elementor-element elementor-element-4fcd47ae elementor-shape-circle e-grid-align-left elementor-widget__width-inherit elementor-grid-0 elementor-invisible elementor-widget elementor-widget-social-icons nitro-lazy\" data-id=\"4fcd47ae\" data-element_type=\"widget\" data-widget_type=\"social-icons.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-social-icons-wrapper elementor-grid\">
                                <span class=\"elementor-grid-item\">
                                    <a class=\"elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-6d8453d\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "instagram_link", []), "html", null, true);
        echo "\" target=\"_blank\">
                                        <span class=\"elementor-screen-only\">Instagram</span> 
                                        <svg class=\"e-font-icon-svg e-fab-instagram\" viewbox=\"0 0 448 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z\"></path>
                                        </svg>
                                    </a>
                                </span>
                                <span class=\"elementor-grid-item\">
                                    <a class=\"elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-9d51d55\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "linkedin_link", []), "html", null, true);
        echo "\" target=\"_blank\">
                                        <span class=\"elementor-screen-only\">Linkedin</span> 
                                        <svg class=\"e-font-icon-svg e-fab-linkedin\" viewbox=\"0 0 448 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z\"></path>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-783a8b7c\" data-id=\"783a8b7c\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-2f94293c elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list nitro-lazy\" data-id=\"2f94293c\" data-element_type=\"widget\" data-settings=\"{&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}\" data-widget_type=\"icon-list.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <ul class=\"elementor-icon-list-items\">
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 41
            echo "                                    <li class=\"elementor-icon-list-item\">
                                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\">
                                            <span class=\"elementor-icon-list-icon\">
                                                <svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-circle-notch\" viewbox=\"0 0 512 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path d=\"M288 39.056v16.659c0 10.804 7.281 20.159 17.686 23.066C383.204 100.434 440 171.518 440 256c0 101.689-82.295 184-184 184-101.689 0-184-82.295-184-184 0-84.47 56.786-155.564 134.312-177.219C216.719 75.874 224 66.517 224 55.712V39.064c0-15.709-14.834-27.153-30.046-23.234C86.603 43.482 7.394 141.206 8.003 257.332c.72 137.052 111.477 246.956 248.531 246.667C393.255 503.711 504 392.788 504 256c0-115.633-79.14-212.779-186.211-240.236C302.678 11.889 288 23.456 288 39.056z\"></path>
                                                </svg>
                                            </span>
                                            <span class=\"elementor-icon-list-text\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "</span> 
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-15ac2db0\" data-id=\"15ac2db0\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-49c974e5 elementor-position-left elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box nitro-lazy\" data-id=\"49c974e5\" data-element_type=\"widget\" data-widget_type=\"icon-box.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-icon-box-wrapper\">
                                <div class=\"elementor-icon-box-icon\">
                                    <span class=\"elementor-icon elementor-animation-\">
                                        <svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-map-marker-alt\" viewbox=\"0 0 384 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z\"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"elementor-icon-box-content\">
                                    <h3 class=\"elementor-icon-box-title\"> <span> Dubai </span> </h3>
                                    <p class=\"elementor-icon-box-description\"> ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "address", []), "html", null, true);
        echo " </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"elementor-element elementor-element-605959d3 elementor-position-left elementor-vertical-align-middle elementor-widget-mobile__width-initial elementor-view-default elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box nitro-lazy\" data-id=\"605959d3\" data-element_type=\"widget\" data-widget_type=\"icon-box.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-icon-box-wrapper\">
                                <div class=\"elementor-icon-box-icon\">
                                    <span class=\"elementor-icon elementor-animation-\">
                                        <svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-mail-bulk\" viewbox=\"0 0 576 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M160 448c-25.6 0-51.2-22.4-64-32-64-44.8-83.2-60.8-96-70.4V480c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32V345.6c-12.8 9.6-32 25.6-96 70.4-12.8 9.6-38.4 32-64 32zm128-192H32c-17.67 0-32 14.33-32 32v16c25.6 19.2 22.4 19.2 115.2 86.4 9.6 6.4 28.8 25.6 44.8 25.6s35.2-19.2 44.8-22.4c92.8-67.2 89.6-67.2 115.2-86.4V288c0-17.67-14.33-32-32-32zm256-96H224c-17.67 0-32 14.33-32 32v32h96c33.21 0 60.59 25.42 63.71 57.82l.29-.22V416h192c17.67 0 32-14.33 32-32V192c0-17.67-14.33-32-32-32zm-32 128h-64v-64h64v64zm-352-96c0-35.29 28.71-64 64-64h224V32c0-17.67-14.33-32-32-32H96C78.33 0 64 14.33 64 32v192h96v-32z\"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"elementor-icon-box-content\">
                                    <h3 class=\"elementor-icon-box-title\"> <span> Send us an email </span> </h3>
                                    <p class=\"elementor-icon-box-description\"> ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "email", []), "html", null, true);
        echo " </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"elementor-element elementor-element-61629556 elementor-position-left elementor-vertical-align-middle elementor-widget-mobile__width-initial elementor-view-default elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box nitro-lazy\" data-id=\"61629556\" data-element_type=\"widget\" data-widget_type=\"icon-box.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-icon-box-wrapper\">
                                <div class=\"elementor-icon-box-icon\">
                                    <span class=\"elementor-icon elementor-animation-\">
                                        <svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-phone-alt\" viewbox=\"0 0 512 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z\"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"elementor-icon-box-content\">
                                    <h3 class=\"elementor-icon-box-title\"> <span> Talk to us </span> </h3>
                                    <p class=\"elementor-icon-box-description\"> ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "phone_number", []), "html", null, true);
        echo " </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "./partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 105,  151 => 88,  131 => 71,  110 => 52,  100 => 48,  91 => 42,  88 => 41,  84 => 40,  64 => 23,  53 => 15,  42 => 9,  34 => 3,  32 => 2,  30 => 1,);
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
{% set home = pages.find(\"/home\")%}
<div data-elementor-type=\"footer\" data-elementor-id=\"27\" class=\"elementor elementor-27 elementor-location-footer\" data-elementor-post-type=\"elementor_library\">
    <section class=\"elementor-section elementor-top-section elementor-element elementor-element-51fc13af elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"51fc13af\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
        <div class=\"elementor-container elementor-column-gap-default\">
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3fc9e62\" data-id=\"3fc9e62\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-50f0f4cb elementor-widget__width-initial elementor-widget elementor-widget-image\" data-id=\"50f0f4cb\" data-element_type=\"widget\" data-settings=\"{&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}\" data-widget_type=\"image.default\">
                        <div class=\"elementor-widget-container\"> <a href=\"{{ home.url }}\"> <img style='width: 100px;' alt=\"Urban Landscapes\" class=\"attachment-full size-full wp-image-7 nitro-lazy\" decoding=\"async\" nitro-lazy-empty id=\"NjQ4OjQzNw==-1\" src=\"{{ theme_url }}/media/images/logo-transparent.png\" /> </a> </div>
                    </div>
                    <div class=\"elementor-element elementor-element-4fcd47ae elementor-shape-circle e-grid-align-left elementor-widget__width-inherit elementor-grid-0 elementor-invisible elementor-widget elementor-widget-social-icons nitro-lazy\" data-id=\"4fcd47ae\" data-element_type=\"widget\" data-widget_type=\"social-icons.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-social-icons-wrapper elementor-grid\">
                                <span class=\"elementor-grid-item\">
                                    <a class=\"elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-6d8453d\" href=\"{{ contact.header.instagram_link }}\" target=\"_blank\">
                                        <span class=\"elementor-screen-only\">Instagram</span> 
                                        <svg class=\"e-font-icon-svg e-fab-instagram\" viewbox=\"0 0 448 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z\"></path>
                                        </svg>
                                    </a>
                                </span>
                                <span class=\"elementor-grid-item\">
                                    <a class=\"elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-9d51d55\" href=\"{{ contact.header.linkedin_link }}\" target=\"_blank\">
                                        <span class=\"elementor-screen-only\">Linkedin</span> 
                                        <svg class=\"e-font-icon-svg e-fab-linkedin\" viewbox=\"0 0 448 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z\"></path>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-783a8b7c\" data-id=\"783a8b7c\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-2f94293c elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list nitro-lazy\" data-id=\"2f94293c\" data-element_type=\"widget\" data-settings=\"{&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}\" data-widget_type=\"icon-list.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <ul class=\"elementor-icon-list-items\">
                                {% for page in pages.children.visible %}
                                    <li class=\"elementor-icon-list-item\">
                                        <a href=\"{{ page.url }}\">
                                            <span class=\"elementor-icon-list-icon\">
                                                <svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-circle-notch\" viewbox=\"0 0 512 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                                    <path d=\"M288 39.056v16.659c0 10.804 7.281 20.159 17.686 23.066C383.204 100.434 440 171.518 440 256c0 101.689-82.295 184-184 184-101.689 0-184-82.295-184-184 0-84.47 56.786-155.564 134.312-177.219C216.719 75.874 224 66.517 224 55.712V39.064c0-15.709-14.834-27.153-30.046-23.234C86.603 43.482 7.394 141.206 8.003 257.332c.72 137.052 111.477 246.956 248.531 246.667C393.255 503.711 504 392.788 504 256c0-115.633-79.14-212.779-186.211-240.236C302.678 11.889 288 23.456 288 39.056z\"></path>
                                                </svg>
                                            </span>
                                            <span class=\"elementor-icon-list-text\">{{ page.menu }}</span> 
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-15ac2db0\" data-id=\"15ac2db0\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-49c974e5 elementor-position-left elementor-vertical-align-middle elementor-view-default elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box nitro-lazy\" data-id=\"49c974e5\" data-element_type=\"widget\" data-widget_type=\"icon-box.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-icon-box-wrapper\">
                                <div class=\"elementor-icon-box-icon\">
                                    <span class=\"elementor-icon elementor-animation-\">
                                        <svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-map-marker-alt\" viewbox=\"0 0 384 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z\"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"elementor-icon-box-content\">
                                    <h3 class=\"elementor-icon-box-title\"> <span> Dubai </span> </h3>
                                    <p class=\"elementor-icon-box-description\"> {{ contact.header.address }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"elementor-element elementor-element-605959d3 elementor-position-left elementor-vertical-align-middle elementor-widget-mobile__width-initial elementor-view-default elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box nitro-lazy\" data-id=\"605959d3\" data-element_type=\"widget\" data-widget_type=\"icon-box.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-icon-box-wrapper\">
                                <div class=\"elementor-icon-box-icon\">
                                    <span class=\"elementor-icon elementor-animation-\">
                                        <svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-mail-bulk\" viewbox=\"0 0 576 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M160 448c-25.6 0-51.2-22.4-64-32-64-44.8-83.2-60.8-96-70.4V480c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32V345.6c-12.8 9.6-32 25.6-96 70.4-12.8 9.6-38.4 32-64 32zm128-192H32c-17.67 0-32 14.33-32 32v16c25.6 19.2 22.4 19.2 115.2 86.4 9.6 6.4 28.8 25.6 44.8 25.6s35.2-19.2 44.8-22.4c92.8-67.2 89.6-67.2 115.2-86.4V288c0-17.67-14.33-32-32-32zm256-96H224c-17.67 0-32 14.33-32 32v32h96c33.21 0 60.59 25.42 63.71 57.82l.29-.22V416h192c17.67 0 32-14.33 32-32V192c0-17.67-14.33-32-32-32zm-32 128h-64v-64h64v64zm-352-96c0-35.29 28.71-64 64-64h224V32c0-17.67-14.33-32-32-32H96C78.33 0 64 14.33 64 32v192h96v-32z\"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"elementor-icon-box-content\">
                                    <h3 class=\"elementor-icon-box-title\"> <span> Send us an email </span> </h3>
                                    <p class=\"elementor-icon-box-description\"> {{ contact.header.email }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"elementor-element elementor-element-61629556 elementor-position-left elementor-vertical-align-middle elementor-widget-mobile__width-initial elementor-view-default elementor-mobile-position-top elementor-invisible elementor-widget elementor-widget-icon-box nitro-lazy\" data-id=\"61629556\" data-element_type=\"widget\" data-widget_type=\"icon-box.default\" nitro-elementor-animation=\"animated fadeIn\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-icon-box-wrapper\">
                                <div class=\"elementor-icon-box-icon\">
                                    <span class=\"elementor-icon elementor-animation-\">
                                        <svg aria-hidden=\"true\" class=\"e-font-icon-svg e-fas-phone-alt\" viewbox=\"0 0 512 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z\"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"elementor-icon-box-content\">
                                    <h3 class=\"elementor-icon-box-title\"> <span> Talk to us </span> </h3>
                                    <p class=\"elementor-icon-box-description\"> {{ contact.header.phone_number }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>", "./partials/footer.html.twig", "C:\\xampp\\htdocs\\Highland\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}
