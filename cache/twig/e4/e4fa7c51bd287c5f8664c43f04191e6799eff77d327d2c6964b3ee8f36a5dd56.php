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

/* ./partials/navbar.html.twig */
class __TwigTemplate_ea8dd39c1e6b74176d3af315e38d5c3479dc48cf4bd0c7342b4dc804fb271d4e extends \Twig\Template
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
        echo "<div data-elementor-type=\"header\" data-elementor-id=\"20\" class=\"elementor elementor-20 elementor-location-header\" data-elementor-post-type=\"elementor_library\">
    <section class=\"elementor-section elementor-top-section elementor-element elementor-element-34ccbddf elementor-section-full_width elementor-section-height-default elementor-section-height-default\" data-id=\"34ccbddf\" data-element_type=\"section\" data-settings=\"{&quot;sticky&quot;:&quot;top&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}\">
        <div class=\"elementor-container elementor-column-gap-default nitro-lazy\">
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2c50fe4b\" data-id=\"2c50fe4b\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-2e23811d elementor-invisible elementor-widget elementor-widget-image nitro-lazy\" data-id=\"2e23811d\" data-element_type=\"widget\" data-widget_type=\"image.default\" nitro-elementor-animation=\"animated fadeInLeft\">
                        <div class=\"elementor-widget-container\"> <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["home"] ?? null), "url", []), "html", null, true);
        echo "\" class=\"nitro-lazy\"> <img fetchpriority=\"high\" style=\"width: 250px;\" nitro-lazy-srcset=\"\" nitro-lazy-src=\"\" class=\"attachment-full size-full wp-image-679 nitro-lazy\" decoding=\"async\" nitro-lazy-empty id=\"MTUwOjQ4Ng==-1\" src=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/media/images/logo.png\" /> </a> </div>
                    </div>
                </div>
            </div>
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e48f0c4\" data-id=\"e48f0c4\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated nitro-lazy\">
                    <div class=\"elementor-element elementor-element-bc062ad elementor-nav-menu--stretch elementor-nav-menu__align-end elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu\" data-id=\"bc062ad\" data-element_type=\"widget\" data-settings=\"{&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\\&quot;e-font-icon-svg e-fas-angle-down\\&quot; viewBox=\\&quot;0 0 320 512\\&quot; xmlns=\\&quot;http:\\/\\/www.w3.org\\/2000\\/svg\\&quot;&gt;&lt;path d=\\&quot;M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\\&quot;&gt;&lt;\\/path&gt;&lt;\\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}\" data-widget_type=\"nav-menu.default\">
                        <div class=\"elementor-widget-container\">
                            <nav aria-label=\"Menu\" class=\"elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-text e--animation-none\">
                                <ul id=\"menu-1-bc062ad\" class=\"elementor-nav-menu\">
                                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "                                        ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["page"], "children", [])) > 0)) {
                // line 19
                echo "                                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-176\">
                                                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\" class=\"elementor-item elementor-item-anchor has-submenu\">
                                                    ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "
                                                    <span class=\"sub-arrow\">
                                                        <svg class=\"e-font-icon-svg e-fas-angle-down\" viewbox=\"0 0 320 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <ul class=\"sub-menu elementor-nav-menu--dropdown\">
                                                    ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 30
                    echo "                                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-488\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                    echo "\" class=\"elementor-sub-item\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                    echo "</a></li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                                                </ul>
                                            </li>
                                        ";
            } else {
                // line 35
                echo "                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-405\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\" class=\"elementor-item\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</a></li>
                                        ";
            }
            // line 37
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                </ul>
                            </nav>
                            <div class=\"elementor-menu-toggle\" role=\"button\" tabindex=\"0\" aria-label=\"Menu Toggle\" aria-expanded=\"false\">
                                <svg aria-hidden=\"true\" role=\"presentation\" class=\"elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar\" viewbox=\"0 0 1000 1000\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z\"></path>
                                </svg>
                                <svg aria-hidden=\"true\" role=\"presentation\" class=\"elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close\" viewbox=\"0 0 1000 1000\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z\"></path>
                                </svg>
                            </div>
                            <nav class=\"elementor-nav-menu--dropdown elementor-nav-menu__container\" aria-hidden=\"true\">
                                <ul id=\"menu-2-bc062ad\" class=\"elementor-nav-menu\">
                                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 51
            echo "                                        ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["page"], "children", [])) > 0)) {
                // line 52
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\" class=\"elementor-item elementor-item-anchor has-submenu\">
                                                ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "
                                                <span class=\"sub-arrow\">
                                                    <svg class=\"e-font-icon-svg e-fas-angle-down\" viewbox=\"0 0 320 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul class=\"sub-menu elementor-nav-menu--dropdown\">
                                                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 62
                    echo "                                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-488\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                    echo "\" class=\"elementor-sub-item\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                    echo "</a></li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                                            </ul>   
                                        ";
            } else {
                // line 66
                echo "                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-405\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\" class=\"elementor-item\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</a></li>
                                        ";
            }
            // line 68
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                    
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elementor-section elementor-top-section elementor-element elementor-element-358c99b elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default\" data-id=\"358c99b\" data-element_type=\"section\" id=\"header-2\" data-settings=\"{&quot;sticky&quot;:&quot;top&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky_on&quot;:[&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_effects_offset_mobile&quot;:100,&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}\">
        <div class=\"elementor-container elementor-column-gap-default\">
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c638ef0\" data-id=\"c638ef0\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-2d9175b elementor-invisible elementor-widget elementor-widget-image nitro-lazy\" data-id=\"2d9175b\" data-element_type=\"widget\" data-widget_type=\"image.default\" nitro-elementor-animation=\"animated fadeInLeft\">
                        <div class=\"elementor-widget-container\"> <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["home"] ?? null), "url", []), "html", null, true);
        echo "\"> <img fetchpriority=\"high\" width=\"606\" height=\"606\" alt=\"\" sizes=\"(max-width: 606px) 100vw, 606px\" nitro-lazy-srcset=\"\" nitro-lazy-src=\"\" class=\"attachment-full size-full wp-image-679 nitro-lazy\" decoding=\"async\" nitro-lazy-empty id=\"MjE1OjQ4Ng==-1\" src=\"data:image/svg+xml;nitro-empty-id=MjE1OjQ4Ng==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNjA2IDYwNiIgd2lkdGg9IjYwNiIgaGVpZ2h0PSI2MDYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+\" /> </a> </div>
                    </div>
                </div>
            </div>
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-181757e\" data-id=\"181757e\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-a342af2 elementor-nav-menu--stretch elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu\" data-id=\"a342af2\" data-element_type=\"widget\" data-settings=\"{&quot;layout&quot;:&quot;dropdown&quot;,&quot;full_width&quot;:&quot;stretch&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\\&quot;e-font-icon-svg e-fas-caret-down\\&quot; viewBox=\\&quot;0 0 320 512\\&quot; xmlns=\\&quot;http:\\/\\/www.w3.org\\/2000\\/svg\\&quot;&gt;&lt;path d=\\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\\&quot;&gt;&lt;\\/path&gt;&lt;\\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}\" data-widget_type=\"nav-menu.default\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-menu-toggle\" role=\"button\" tabindex=\"0\" aria-label=\"Menu Toggle\" aria-expanded=\"false\">
                                <svg aria-hidden=\"true\" role=\"presentation\" class=\"elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar\" viewbox=\"0 0 1000 1000\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z\"></path>
                                </svg>
                                <svg aria-hidden=\"true\" role=\"presentation\" class=\"elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close\" viewbox=\"0 0 1000 1000\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z\"></path>
                                </svg>
                            </div>
                            <nav class=\"elementor-nav-menu--dropdown elementor-nav-menu__container\" aria-hidden=\"true\">
                                <ul id=\"menu-2-a342af2\" class=\"elementor-nav-menu\">
                                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 103
            echo "                                        ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["page"], "children", [])) > 0)) {
                // line 104
                echo "                                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-176\">
                                                <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\" class=\"elementor-item elementor-item-anchor\" tabindex=\"-1\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</a> 
                                                <ul class=\"sub-menu elementor-nav-menu--dropdown\">
                                                    ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 108
                    echo "                                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-488\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                    echo "\" class=\"elementor-sub-item\" tabindex=\"-1\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                    echo "</a></li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "                                                </ul>
                                            </li>
                                        ";
            } else {
                // line 113
                echo "                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-174\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\" class=\"elementor-item\" tabindex=\"-1\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</a></li>
                                        ";
            }
            // line 115
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                                </ul>
                            </nav>
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
        return "./partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 116,  265 => 115,  257 => 113,  252 => 110,  241 => 108,  237 => 107,  230 => 105,  227 => 104,  224 => 103,  220 => 102,  199 => 84,  182 => 69,  176 => 68,  168 => 66,  164 => 64,  153 => 62,  149 => 61,  138 => 53,  133 => 52,  130 => 51,  126 => 50,  112 => 38,  106 => 37,  98 => 35,  93 => 32,  82 => 30,  78 => 29,  67 => 21,  63 => 20,  60 => 19,  57 => 18,  53 => 17,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div data-elementor-type=\"header\" data-elementor-id=\"20\" class=\"elementor elementor-20 elementor-location-header\" data-elementor-post-type=\"elementor_library\">
    <section class=\"elementor-section elementor-top-section elementor-element elementor-element-34ccbddf elementor-section-full_width elementor-section-height-default elementor-section-height-default\" data-id=\"34ccbddf\" data-element_type=\"section\" data-settings=\"{&quot;sticky&quot;:&quot;top&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}\">
        <div class=\"elementor-container elementor-column-gap-default nitro-lazy\">
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2c50fe4b\" data-id=\"2c50fe4b\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-2e23811d elementor-invisible elementor-widget elementor-widget-image nitro-lazy\" data-id=\"2e23811d\" data-element_type=\"widget\" data-widget_type=\"image.default\" nitro-elementor-animation=\"animated fadeInLeft\">
                        <div class=\"elementor-widget-container\"> <a href=\"{{ home.url }}\" class=\"nitro-lazy\"> <img fetchpriority=\"high\" style=\"width: 250px;\" nitro-lazy-srcset=\"\" nitro-lazy-src=\"\" class=\"attachment-full size-full wp-image-679 nitro-lazy\" decoding=\"async\" nitro-lazy-empty id=\"MTUwOjQ4Ng==-1\" src=\"{{ theme_url }}/media/images/logo.png\" /> </a> </div>
                    </div>
                </div>
            </div>
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e48f0c4\" data-id=\"e48f0c4\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated nitro-lazy\">
                    <div class=\"elementor-element elementor-element-bc062ad elementor-nav-menu--stretch elementor-nav-menu__align-end elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu\" data-id=\"bc062ad\" data-element_type=\"widget\" data-settings=\"{&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\\&quot;e-font-icon-svg e-fas-angle-down\\&quot; viewBox=\\&quot;0 0 320 512\\&quot; xmlns=\\&quot;http:\\/\\/www.w3.org\\/2000\\/svg\\&quot;&gt;&lt;path d=\\&quot;M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\\&quot;&gt;&lt;\\/path&gt;&lt;\\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}\" data-widget_type=\"nav-menu.default\">
                        <div class=\"elementor-widget-container\">
                            <nav aria-label=\"Menu\" class=\"elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-text e--animation-none\">
                                <ul id=\"menu-1-bc062ad\" class=\"elementor-nav-menu\">
                                    {% for page in pages.children.visible %}
                                        {% if page.children|length > 0 %}
                                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-176\">
                                                <a href=\"{{ page.url }}\" class=\"elementor-item elementor-item-anchor has-submenu\">
                                                    {{ page.menu }}
                                                    <span class=\"sub-arrow\">
                                                        <svg class=\"e-font-icon-svg e-fas-angle-down\" viewbox=\"0 0 320 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                                            <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <ul class=\"sub-menu elementor-nav-menu--dropdown\">
                                                    {% for page in page.children %}
                                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-488\"><a href=\"{{ page.url }}\" class=\"elementor-sub-item\">{{ page.menu }}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </li>
                                        {% else %}
                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-405\"><a href=\"{{ page.url }}\" class=\"elementor-item\">{{ page.menu }}</a></li>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            </nav>
                            <div class=\"elementor-menu-toggle\" role=\"button\" tabindex=\"0\" aria-label=\"Menu Toggle\" aria-expanded=\"false\">
                                <svg aria-hidden=\"true\" role=\"presentation\" class=\"elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar\" viewbox=\"0 0 1000 1000\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z\"></path>
                                </svg>
                                <svg aria-hidden=\"true\" role=\"presentation\" class=\"elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close\" viewbox=\"0 0 1000 1000\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z\"></path>
                                </svg>
                            </div>
                            <nav class=\"elementor-nav-menu--dropdown elementor-nav-menu__container\" aria-hidden=\"true\">
                                <ul id=\"menu-2-bc062ad\" class=\"elementor-nav-menu\">
                                    {% for page in pages.children.visible %}
                                        {% if page.children|length > 0%}
                                            <a href=\"{{ page.url }}\" class=\"elementor-item elementor-item-anchor has-submenu\">
                                                {{ page.menu }}
                                                <span class=\"sub-arrow\">
                                                    <svg class=\"e-font-icon-svg e-fas-angle-down\" viewbox=\"0 0 320 512\" xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path d=\"M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z\"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul class=\"sub-menu elementor-nav-menu--dropdown\">
                                                {% for page in page.children %}
                                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-488\"><a href=\"{{ page.url }}\" class=\"elementor-sub-item\">{{ page.menu }}</a></li>
                                                {% endfor %}
                                            </ul>   
                                        {% else %}
                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-405\"><a href=\"{{ page.url }}\" class=\"elementor-item\">{{ page.menu }}</a></li>
                                        {% endif %}
                                    {% endfor %}
                                    
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elementor-section elementor-top-section elementor-element elementor-element-358c99b elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default\" data-id=\"358c99b\" data-element_type=\"section\" id=\"header-2\" data-settings=\"{&quot;sticky&quot;:&quot;top&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky_on&quot;:[&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_effects_offset_mobile&quot;:100,&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}\">
        <div class=\"elementor-container elementor-column-gap-default\">
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c638ef0\" data-id=\"c638ef0\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-2d9175b elementor-invisible elementor-widget elementor-widget-image nitro-lazy\" data-id=\"2d9175b\" data-element_type=\"widget\" data-widget_type=\"image.default\" nitro-elementor-animation=\"animated fadeInLeft\">
                        <div class=\"elementor-widget-container\"> <a href=\"{{ home.url }}\"> <img fetchpriority=\"high\" width=\"606\" height=\"606\" alt=\"\" sizes=\"(max-width: 606px) 100vw, 606px\" nitro-lazy-srcset=\"\" nitro-lazy-src=\"\" class=\"attachment-full size-full wp-image-679 nitro-lazy\" decoding=\"async\" nitro-lazy-empty id=\"MjE1OjQ4Ng==-1\" src=\"data:image/svg+xml;nitro-empty-id=MjE1OjQ4Ng==-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNjA2IDYwNiIgd2lkdGg9IjYwNiIgaGVpZ2h0PSI2MDYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+\" /> </a> </div>
                    </div>
                </div>
            </div>
            <div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-181757e\" data-id=\"181757e\" data-element_type=\"column\">
                <div class=\"elementor-widget-wrap elementor-element-populated\">
                    <div class=\"elementor-element elementor-element-a342af2 elementor-nav-menu--stretch elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu\" data-id=\"a342af2\" data-element_type=\"widget\" data-settings=\"{&quot;layout&quot;:&quot;dropdown&quot;,&quot;full_width&quot;:&quot;stretch&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\\&quot;e-font-icon-svg e-fas-caret-down\\&quot; viewBox=\\&quot;0 0 320 512\\&quot; xmlns=\\&quot;http:\\/\\/www.w3.org\\/2000\\/svg\\&quot;&gt;&lt;path d=\\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\\&quot;&gt;&lt;\\/path&gt;&lt;\\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}\" data-widget_type=\"nav-menu.default\">
                        <div class=\"elementor-widget-container\">
                            <div class=\"elementor-menu-toggle\" role=\"button\" tabindex=\"0\" aria-label=\"Menu Toggle\" aria-expanded=\"false\">
                                <svg aria-hidden=\"true\" role=\"presentation\" class=\"elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar\" viewbox=\"0 0 1000 1000\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z\"></path>
                                </svg>
                                <svg aria-hidden=\"true\" role=\"presentation\" class=\"elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close\" viewbox=\"0 0 1000 1000\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z\"></path>
                                </svg>
                            </div>
                            <nav class=\"elementor-nav-menu--dropdown elementor-nav-menu__container\" aria-hidden=\"true\">
                                <ul id=\"menu-2-a342af2\" class=\"elementor-nav-menu\">
                                    {% for page in pages.children.visible %}
                                        {% if page.children|length > 0%}
                                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-176\">
                                                <a href=\"{{ page.url }}\" class=\"elementor-item elementor-item-anchor\" tabindex=\"-1\">{{ page.menu }}</a> 
                                                <ul class=\"sub-menu elementor-nav-menu--dropdown\">
                                                    {% for page in page.children%}
                                                        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-488\"><a href=\"{{ page.url }}\" class=\"elementor-sub-item\" tabindex=\"-1\">{{ page.menu }}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </li>
                                        {% else %}
                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-174\"><a href=\"{{ page.url }}\" class=\"elementor-item\" tabindex=\"-1\">{{ page.menu }}</a></li>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>", "./partials/navbar.html.twig", "C:\\xampp\\htdocs\\Highland\\user\\themes\\quark\\templates\\partials\\navbar.html.twig");
    }
}
