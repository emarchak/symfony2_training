<?php

/* SensioTrainingBundle::layout.html.twig */
class __TwigTemplate_8302105e88910e9db99e04e181046779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiotraining/css/layout.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  <h1>My sweet Symfony2 Site</h1>
  ";
        // line 8
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "SensioTrainingBundle::nav.html.twig", array("menu_id" => "top")), "html", null, true);
        echo "
  ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "  ";
        echo twig_escape_filter($this->env, twig_include($this->env, $context, "SensioTrainingBundle::nav.html.twig", array("menu_id" => "bottom")), "html", null, true);
        echo "
  ";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SensioTrainingBundle:Default:getVisitorsOnline"));
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "  ";
    }

    public function getTemplateName()
    {
        return "SensioTrainingBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  67 => 9,  61 => 12,  56 => 11,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  38 => 4,  33 => 3,  30 => 2,);
    }
}
