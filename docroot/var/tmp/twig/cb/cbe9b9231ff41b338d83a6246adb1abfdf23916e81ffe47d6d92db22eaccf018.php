<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* :blank:base.html.twig */
class __TwigTemplate_b8683c5c3ced6212756ac11fe1fd65db724f28184654ff84c1d8262ac51720b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 5
        if (array_key_exists("page", $context)) {
            // line 6
            echo "        <title>{pagetitle}</title>
            <meta name=\"description\" content=\"{pagemetadescription}\">
            ";
        }
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "            ";
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        echo "
    </head>
    <body>
        ";
        // line 13
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        echo "
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "        ";
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        echo "
    </body>
</html>";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return ":blank:base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  82 => 14,  76 => 9,  68 => 15,  66 => 14,  62 => 13,  55 => 10,  52 => 9,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":blank:base.html.twig", "/home/minhhieu2k3.click/public_html/docroot/themes/blank/html/base.html.twig");
    }
}
