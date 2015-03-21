<?php

/* series1/show.html.twig */
class __TwigTemplate_618d0dbe7a673f9fe1b1767a05038779541ab4b91c8518eb06bda6eee9bc8d49 extends Twig_Template
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
        echo "<h2><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serial"]) ? $context["serial"] : $this->getContext($context, "serial")), "link", array()), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serial"]) ? $context["serial"] : $this->getContext($context, "serial")), "tytul", array()), "html", null, true);
        echo " </a></h2>
Gtunek: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serial"]) ? $context["serial"] : $this->getContext($context, "serial")), "getSkrotGatunku", array(0 => $this->getAttribute((isset($context["serial"]) ? $context["serial"] : $this->getContext($context, "serial")), "gatunek", array())), "method"), "html", null, true);
        echo "<br>
Nasza ocena:
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["serial"]) ? $context["serial"] : $this->getContext($context, "serial")), "ocena", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "    *
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(($this->getAttribute((isset($context["serial"]) ? $context["serial"] : $this->getContext($context, "serial")), "ocena", array()) + 1), 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "    o
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "<br>";
    }

    public function getTemplateName()
    {
        return "series1/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  46 => 8,  42 => 7,  35 => 5,  31 => 4,  26 => 2,  19 => 1,);
    }
}
