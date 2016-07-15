<?php

/* /news/default.twig */
class __TwigTemplate_b8bb0b8581426496c9191a29ce2be6a0e4f605f6fc22d54e844ca77e4997a2dd extends Twig_Template
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
        echo "<div class=\"row col-sm-8\" style=\"padding-left: 10px; padding-right: 10px; \">
    ";
        // line 2
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 4
                echo "            <div>
                <div class=\"page-header\">
                    <a href=\"/News/One/id/";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\">
                        <h3> ";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo " </h3>
                    </a>
                </div>
                <p> ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "text", array()), "html", null, true);
                echo " </p>
                ";
                // line 11
                if ($this->getAttribute($context["article"], "user", array())) {
                    // line 12
                    echo "                    <p class=\"text-muted\"> Автор: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", array()), "name", array()), "html", null, true);
                    echo " </p>
                ";
                }
                // line 14
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/news/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  62 => 16,  55 => 14,  49 => 12,  47 => 11,  43 => 10,  37 => 7,  33 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="row col-sm-8" style="padding-left: 10px; padding-right: 10px; ">*/
/*     {% if news %}*/
/*         {% for article in news %}*/
/*             <div>*/
/*                 <div class="page-header">*/
/*                     <a href="/News/One/id/{{ article.id }}">*/
/*                         <h3> {{ article.title }} </h3>*/
/*                     </a>*/
/*                 </div>*/
/*                 <p> {{ article.text }} </p>*/
/*                 {% if article.user %}*/
/*                     <p class="text-muted"> Автор: {{ article.user.name }} </p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </div>*/
/* */
