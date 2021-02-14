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

/* searchform.html.twig */
class __TwigTemplate_e3800a5cf5785c45e3d1f5a0593bf31f636a1cd98ebb60ca3b1706736bf42453 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'searchform' => [$this, 'block_searchform'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["twigTemplate"] = "searchform.html.twig";
        // line 2
        $context["scope"] = "searchform";
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('searchform', $context, $blocks);
    }

    public function block_searchform($context, array $blocks = [])
    {
        // line 5
        echo "
    <form role=\"search\" method=\"get\" class=\"search-form form\" action=\"";
        // line 6
        echo $this->getAttribute(($context["site"] ?? null), "url", []);
        echo "/\">
        <label>
            <span class=\"screen-reader-text\">";
        // line 8
        echo __("Search for:", "g5_helium");
        echo "</span>
            <input type=\"search\" class=\"search-field\" placeholder=\"";
        // line 9
        echo __("Search …", "g5_helium");
        echo "\" value=\"\" name=\"s\" title=\"";
        echo __("Search for:", "g5_helium");
        echo "\" />
        </label>
        <input type=\"submit\" class=\"search-submit button button-small\" value=\"Search\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "searchform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  52 => 8,  47 => 6,  44 => 5,  38 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "searchform.html.twig", "C:\\xampp\\htdocs\\drugiProjekatEP\\wordpress\\wp-content\\themes\\g5_helium\\views\\searchform.html.twig");
    }
}
