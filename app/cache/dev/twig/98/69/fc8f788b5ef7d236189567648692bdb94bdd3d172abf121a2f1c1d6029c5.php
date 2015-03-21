<?php

/* first/array.html.twig */
class __TwigTemplate_9869fc8f788b5ef7d236189567648692bdb94bdd3d172abf121a2f1c1d6029c5 extends Twig_Template
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
        $context["i"] = 1;
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["T"]) ? $context["T"] : $this->getContext($context, "T")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " -> ";
            echo twig_escape_filter($this->env, $context["t"], "html", null, true);
            echo "<br>
    ";
            // line 4
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 5
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "first/array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  32 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
