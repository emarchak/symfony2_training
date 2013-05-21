<?php

/* SensioTrainingBundle:Converter:celsius.json.twig */
class __TwigTemplate_207a1067cd1dec9717e56e458da09645 extends Twig_Template
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
        echo "{
  \"celsius\": ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "celsius"), "html", null, true);
        echo ",
  \"fahrenheit\":";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "fahrenheit"), "html", null, true);
        echo "
}";
    }

    public function getTemplateName()
    {
        return "SensioTrainingBundle:Converter:celsius.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
