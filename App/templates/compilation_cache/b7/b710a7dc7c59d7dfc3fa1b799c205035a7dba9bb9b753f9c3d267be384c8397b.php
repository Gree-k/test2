<?php

/* /news/one.twig */
class __TwigTemplate_34d86c2daa94cb1e7ddbc24fccb7ac4976ee58ff282d2249870cd7ae2400b037 extends Twig_Template
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
        if ((isset($context["article"]) ? $context["article"] : null)) {
            // line 2
            echo "    <div class=\"page-header\">
        <h1> ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo " </h1>
    </div>
        <p class=\"lead\"> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "text", array()), "html", null, true);
            echo " </p>
        ";
            // line 6
            if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "user", array())) {
                // line 7
                echo "            <p> Автор: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "user", array()), "name", array()), "html", null, true);
                echo " </p>
        ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/news/one.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if article %}*/
/*     <div class="page-header">*/
/*         <h1> {{ article.title }} </h1>*/
/*     </div>*/
/*         <p class="lead"> {{ article.text }} </p>*/
/*         {% if article.user %}*/
/*             <p> Автор: {{ article.user.name }} </p>*/
/*         {% endif %}*/
/* {% endif %}*/
/* */
