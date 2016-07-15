<?php

/* /navbar.html */
class __TwigTemplate_16dac1d335b09280ac251a18300c2510ccd5a59db54a4bf7aaae9a4d54ed38dd extends Twig_Template
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
        echo "<div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Тест</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"/News\">Новости</a></li>
                <li><a href=\"/Gallery\">Галлерея</a></li>
                <li><a href=\"/Contact\">Contact</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li class=\"dropdown-header\">Nav header</li>
                        <li><a href=\"#\">Separated link</a></li>
                        <li><a href=\"#\">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/navbar.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">Тест</a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="/News">Новости</a></li>*/
/*                 <li><a href="/Gallery">Галлерея</a></li>*/
/*                 <li><a href="/Contact">Contact</a></li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li class="dropdown-header">Nav header</li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                         <li><a href="#">One more separated link</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
