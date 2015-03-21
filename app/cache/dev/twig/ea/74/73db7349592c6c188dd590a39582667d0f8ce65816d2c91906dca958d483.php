<?php

/* first/cutter.html.twig */
class __TwigTemplate_ea7473db7349592c6c188dd590a39582667d0f8ce65816d2c91906dca958d483 extends Twig_Template
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
        // line 2
        echo twig_escape_filter($this->env, (isset($context["wynik"]) ? $context["wynik"] : $this->getContext($context, "wynik")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "first/cutter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }
}
