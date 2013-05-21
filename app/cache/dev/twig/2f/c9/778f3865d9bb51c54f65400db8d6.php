<?php

/* SensioTrainingBundle:Converter:celsius.xml.twig */
class __TwigTemplate_2fc9778f3865d9bb51c54f65400db8d6 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<converter>
<celsius>";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "celsius"), "html", null, true);
        echo "</celsius>
<fahrenheit>";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "fahrenheit"), "html", null, true);
        echo "</fahrenheit>
</converter>";
    }

    public function getTemplateName()
    {
        return "SensioTrainingBundle:Converter:celsius.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
