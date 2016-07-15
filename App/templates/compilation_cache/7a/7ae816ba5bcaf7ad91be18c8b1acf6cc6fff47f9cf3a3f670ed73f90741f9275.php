<?php

/* /news/form.twig */
class __TwigTemplate_73724a27fa83bbdc3591670a3b9fea5a9891c90d8cfbfdcaa737215f24b58c09 extends Twig_Template
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
        echo "
<form action=\"/Admin/SaveNews\" method=\"post\">
    ";
        // line 3
        if ((isset($context["article"]) ? $context["article"] : null)) {
            // line 4
            echo "        <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 6
        echo "    Заголовок статьи:<br>
    <input type=\"text\" name=\"title\" value=\"";
        // line 7
        if ((isset($context["article"]) ? $context["article"] : null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo " ";
        }
        echo "\"><br>
    Содержание:<br>
    <textarea name=\"text\" rows=\"10\">";
        // line 9
        if ((isset($context["article"]) ? $context["article"] : null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "text", array()), "html", null, true);
            echo " ";
        }
        echo "</textarea><br>
    <input type=\"submit\" value=\"Добавить\">
</form>
";
    }

    public function getTemplateName()
    {
        return "/news/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  34 => 7,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* <form action="/Admin/SaveNews" method="post">*/
/*     {% if article %}*/
/*         <input type="hidden" name="id" value="{{ article.id }}">*/
/*     {% endif %}*/
/*     Заголовок статьи:<br>*/
/*     <input type="text" name="title" value="{% if article %} {{ article.title }} {% endif %}"><br>*/
/*     Содержание:<br>*/
/*     <textarea name="text" rows="10">{% if article %} {{ article.text }} {% endif %}</textarea><br>*/
/*     <input type="submit" value="Добавить">*/
/* </form>*/
/* */
