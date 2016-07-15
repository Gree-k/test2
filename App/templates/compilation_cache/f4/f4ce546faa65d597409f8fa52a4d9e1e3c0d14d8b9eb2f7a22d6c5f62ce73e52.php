<?php

/* /adminPanel.twig */
class __TwigTemplate_4254439e0c8fae5879d0b5c6d056f09431e2c28ff8d67b4f921547409dc5f277 extends Twig_Template
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
        $this->loadTemplate("links.html", "/adminPanel.twig", 6)->display($context);
        // line 7
        echo "
</head>
<body>
<div class=\"container\">
    <h2>Админ панель</h2>

    ";
        // line 13
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "errors", array())) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                echo "            <div class=\"alert alert-danger\">
                ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "getMessage", array(), "method"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        $this->loadTemplate((isset($context["temp"]) ? $context["temp"] : null), "/adminPanel.twig", 21)->display($context);
        // line 22
        echo "
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/adminPanel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  61 => 21,  58 => 20,  55 => 19,  46 => 16,  43 => 15,  38 => 14,  36 => 13,  28 => 7,  26 => 6,  19 => 1,);
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
/* <div class="container">*/
/*     <h2>Админ панель</h2>*/
/* */
/*     {% if session.errors %}*/
/*         {% for error in session.errors %}*/
/*             <div class="alert alert-danger">*/
/*                 {{ error.getMessage() }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     {% include temp %}*/
/* */
/* </div>*/
/* </body>*/
/* </html>*/
