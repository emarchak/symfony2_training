<?php

/* SensioTrainingBundle:Default:count.html.twig */
class __TwigTemplate_f889c290eac1ff6e66a291b7b91e2853 extends Twig_Template
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
        echo "<aside>
 There are ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "count"), "html", null, true);
        echo " visitors online.
</aside>";
    }

    public function getTemplateName()
    {
        return "SensioTrainingBundle:Default:count.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,  70 => 10,  67 => 9,  61 => 12,  56 => 11,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,);
    }
}
