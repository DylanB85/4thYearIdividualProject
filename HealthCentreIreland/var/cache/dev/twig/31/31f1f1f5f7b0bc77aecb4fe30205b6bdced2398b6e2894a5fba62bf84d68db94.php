<?php

/* default/index.html.twig */
class __TwigTemplate_c2ac62140443d763b5eeaadac6da4e58bd2b22f00ba0e1eab06c53bf7c520b3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6619bcfedeb316fe99e4f20e7b7d374fa5350380e0bbd71abd246edd8f2442c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6619bcfedeb316fe99e4f20e7b7d374fa5350380e0bbd71abd246edd8f2442c1->enter($__internal_6619bcfedeb316fe99e4f20e7b7d374fa5350380e0bbd71abd246edd8f2442c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_42c366f2716fe5e1954a954c5dea5c936b4750340d731c068647cda5a706154f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c366f2716fe5e1954a954c5dea5c936b4750340d731c068647cda5a706154f->enter($__internal_42c366f2716fe5e1954a954c5dea5c936b4750340d731c068647cda5a706154f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6619bcfedeb316fe99e4f20e7b7d374fa5350380e0bbd71abd246edd8f2442c1->leave($__internal_6619bcfedeb316fe99e4f20e7b7d374fa5350380e0bbd71abd246edd8f2442c1_prof);

        
        $__internal_42c366f2716fe5e1954a954c5dea5c936b4750340d731c068647cda5a706154f->leave($__internal_42c366f2716fe5e1954a954c5dea5c936b4750340d731c068647cda5a706154f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bafb4634525fe189b66216bbc0399ebc9a01d87a7bffb61ecbcd2edf3a5469a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bafb4634525fe189b66216bbc0399ebc9a01d87a7bffb61ecbcd2edf3a5469a->enter($__internal_0bafb4634525fe189b66216bbc0399ebc9a01d87a7bffb61ecbcd2edf3a5469a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8387bc89bc3a28bed2e9b1d536a693c9d6d8b4886f323f8fea5ac2e932cf7baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8387bc89bc3a28bed2e9b1d536a693c9d6d8b4886f323f8fea5ac2e932cf7baa->enter($__internal_8387bc89bc3a28bed2e9b1d536a693c9d6d8b4886f323f8fea5ac2e932cf7baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"container\">
            hello World
        </div>
    </div>
";
        
        $__internal_8387bc89bc3a28bed2e9b1d536a693c9d6d8b4886f323f8fea5ac2e932cf7baa->leave($__internal_8387bc89bc3a28bed2e9b1d536a693c9d6d8b4886f323f8fea5ac2e932cf7baa_prof);

        
        $__internal_0bafb4634525fe189b66216bbc0399ebc9a01d87a7bffb61ecbcd2edf3a5469a->leave($__internal_0bafb4634525fe189b66216bbc0399ebc9a01d87a7bffb61ecbcd2edf3a5469a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div class=\"container\">
            hello World
        </div>
    </div>
{% endblock %}
", "default/index.html.twig", "C:\\Users\\dylan\\Desktop\\4thYearIndividualProject\\HealthCentreIreland\\app\\Resources\\views\\default\\index.html.twig");
    }
}
