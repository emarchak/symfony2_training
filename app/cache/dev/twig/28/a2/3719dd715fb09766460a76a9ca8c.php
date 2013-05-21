<?php

/* SensioTrainingBundle::nav.html.twig */
class __TwigTemplate_28a23719dd715fb09766460a76a9ca8c extends Twig_Template
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
        echo "<nav id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "menu_id"), "html", null, true);
        echo "\"><ul>
<li><a href=\"#\">Home</a></li>
<li><a href=\"#\">Cheese</a></li>
<li><a href=\"#\">Candy</a></li>
</nav>";
    }

    public function getTemplateName()
    {
        return "SensioTrainingBundle::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  66 => 10,  63 => 9,  56 => 11,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,);
    }
}
