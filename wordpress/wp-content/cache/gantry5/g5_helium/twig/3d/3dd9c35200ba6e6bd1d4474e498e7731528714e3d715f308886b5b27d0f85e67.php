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

/* page-plugin.html.twig */
class __TwigTemplate_559e1750dd77c1acbcfbb744ef9eead0b8e3df717ca1174f50f9a80772d4bba0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["twigTemplate"] = "page-plugin.html.twig";
        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "page-plugin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "
    <div class=\"platform-content\">
        <div class=\"plugin-content\">
            ";
        // line 8
        echo ($context["content"] ?? null);
        echo "
        </div> <!-- /content-wrapper -->
    </div>

";
    }

    public function getTemplateName()
    {
        return "page-plugin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  45 => 5,  42 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "page-plugin.html.twig", "C:\\xampp\\htdocs\\drugiProjekatEP\\wordpress\\wp-content\\themes\\g5_helium\\views\\page-plugin.html.twig");
    }
}
