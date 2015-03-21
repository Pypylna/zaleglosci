<?php

/* first/calendar.html.twig */
class __TwigTemplate_bb718ca2cbe1a3b34ecddfead26f85f9c0546044adb7c901796a7156f73adbd1 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["M"]) ? $context["M"] : $this->getContext($context, "M")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "first/calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
