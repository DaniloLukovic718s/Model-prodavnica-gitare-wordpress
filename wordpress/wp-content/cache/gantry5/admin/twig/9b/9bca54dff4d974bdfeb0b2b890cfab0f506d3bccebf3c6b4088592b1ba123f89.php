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

/* @gantry-admin/modals/widget-picker.html.twig */
class __TwigTemplate_0c5b8193ef6a73d8d8a0722203cade7f73030ed2d1da7a400403e210fa06b996 extends \Twig\Template
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
        // line 5
        echo "<div data-mm-particle-stepone=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => (((isset($context["next"]) || array_key_exists("next", $context))) ? (_twig_default_filter(($context["next"] ?? null), "widget")) : ("widget"))], "method"), "html", null, true);
        echo "\" class=\"menu-editor-extras\">
    <div class=\"card settings-block\">
        <h4>
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PICK_A_WIDGET"), "html", null, true);
        echo "
        </h4>
        <div class=\"inner-params\">
            <div class=\"g5-mm-modules-picker menu-editor-modules\">
                <div class=\"search settings-block\">
                    <input type=\"text\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SEARCH_ELI"), "html", null, true);
        echo "\" />
                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"modules-wrapper\">
                    <ul>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "listWidgets", []));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 19
            echo "                        ";
            if (!twig_in_filter($this->getAttribute($context["widget"], "id", []), [0 => "particle_widget", 1 => "roksprocket_options", 2 => "rokgallery_options"])) {
                // line 20
                echo "                        <li data-lm-nodrag
                            data-mm-type=\"widget\"
                            data-lm-subtype=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "id", []), "html", null, true);
                echo "\"
                            data-lm-blocktype=\"position\"
                            data-mm-filter=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", []), "html", null, true);
                echo "\">
                            <span title=\"";
                // line 25
                echo $this->getAttribute($context["widget"], "description", []);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", []), "html", null, true);
                echo "</span>
                        </li>
                        ";
            }
            // line 28
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"g-modal-actions\">
        <button class=\"button button-primary\" type=\"submit\" data-mm-select=\"\" disabled=\"disabled\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SELECT"), "html", null, true);
        echo " <i class=\"fa fa-fw fa-chevron-right\" aria-hidden=\"true\"></i></button>
        <button class=\"button g5-dialog-close\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/modals/widget-picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  95 => 35,  87 => 29,  81 => 28,  73 => 25,  69 => 24,  64 => 22,  60 => 20,  57 => 19,  53 => 18,  45 => 13,  37 => 8,  30 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/modals/widget-picker.html.twig", "C:\\xampp\\htdocs\\drugiProjekatEP\\wordpress\\wp-content\\plugins\\gantry5\\admin\\templates\\modals\\widget-picker.html.twig");
    }
}
