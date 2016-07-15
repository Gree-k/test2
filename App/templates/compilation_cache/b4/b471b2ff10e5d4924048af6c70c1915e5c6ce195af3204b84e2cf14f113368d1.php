<?php

/* /default.twig */
class __TwigTemplate_22eee84646fe5d8c47276eec79865c8328aa8ce817c2cea873c4062a95cb6dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Новости</title>
    ";
        // line 6
        $this->loadTemplate("links.html", "/default.twig", 6)->display($context);
        // line 7
        echo "
</head>
<body>
";
        // line 10
        $this->loadTemplate("/navbar.html", "/default.twig", 10)->display($context);
        // line 11
        echo "
<div class=\"container\">
    ";
        // line 13
        $this->loadTemplate((isset($context["temp"]) ? $context["temp"] : null), "/default.twig", 13)->display($context);
        // line 14
        echo "</div>

";
        // line 16
        $this->loadTemplate("/footer.html", "/default.twig", 16)->display($context);
        // line 17
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  45 => 16,  41 => 14,  39 => 13,  35 => 11,  33 => 10,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Новости</title>*/
/*     {% include 'links.html' %}*/
/* */
/* </head>*/
/* <body>*/
/* {% include '/navbar.html' %}*/
/* */
/* <div class="container">*/
/*     {% include temp %}*/
/* </div>*/
/* */
/* {% include '/footer.html' %}*/
/* */
/* </body>*/
/* </html>*/
