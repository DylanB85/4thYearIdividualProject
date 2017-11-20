<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3611b4142846333f639c52c689fab4b10a925484d87596bdb799e082a3fae7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3611b4142846333f639c52c689fab4b10a925484d87596bdb799e082a3fae7b1->enter($__internal_3611b4142846333f639c52c689fab4b10a925484d87596bdb799e082a3fae7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_349537905650d0123aa73f438e7f58136d8eb1435f694bd116f8e126e21c0922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349537905650d0123aa73f438e7f58136d8eb1435f694bd116f8e126e21c0922->enter($__internal_349537905650d0123aa73f438e7f58136d8eb1435f694bd116f8e126e21c0922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\"
              integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\"/>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_3611b4142846333f639c52c689fab4b10a925484d87596bdb799e082a3fae7b1->leave($__internal_3611b4142846333f639c52c689fab4b10a925484d87596bdb799e082a3fae7b1_prof);

        
        $__internal_349537905650d0123aa73f438e7f58136d8eb1435f694bd116f8e126e21c0922->leave($__internal_349537905650d0123aa73f438e7f58136d8eb1435f694bd116f8e126e21c0922_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b2d4d65044d4ece589ab1001947fdfec19a0d84cd2090a89d6fbd34ad53b877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2d4d65044d4ece589ab1001947fdfec19a0d84cd2090a89d6fbd34ad53b877->enter($__internal_6b2d4d65044d4ece589ab1001947fdfec19a0d84cd2090a89d6fbd34ad53b877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3188a13239f6969e1259ebd97c895bbfd285fc2b4a2d3eead5ffee175406ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3188a13239f6969e1259ebd97c895bbfd285fc2b4a2d3eead5ffee175406ebe->enter($__internal_d3188a13239f6969e1259ebd97c895bbfd285fc2b4a2d3eead5ffee175406ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d3188a13239f6969e1259ebd97c895bbfd285fc2b4a2d3eead5ffee175406ebe->leave($__internal_d3188a13239f6969e1259ebd97c895bbfd285fc2b4a2d3eead5ffee175406ebe_prof);

        
        $__internal_6b2d4d65044d4ece589ab1001947fdfec19a0d84cd2090a89d6fbd34ad53b877->leave($__internal_6b2d4d65044d4ece589ab1001947fdfec19a0d84cd2090a89d6fbd34ad53b877_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e10f9158d9ce12b4039b6452acd85d19a37fdd68baf3e449eb2d26a91dbcc53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10f9158d9ce12b4039b6452acd85d19a37fdd68baf3e449eb2d26a91dbcc53e->enter($__internal_e10f9158d9ce12b4039b6452acd85d19a37fdd68baf3e449eb2d26a91dbcc53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_943aba61e7d752874c662fd0d6346e689a4f39a8b7b840f1328f0346961b5a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943aba61e7d752874c662fd0d6346e689a4f39a8b7b840f1328f0346961b5a08->enter($__internal_943aba61e7d752874c662fd0d6346e689a4f39a8b7b840f1328f0346961b5a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_943aba61e7d752874c662fd0d6346e689a4f39a8b7b840f1328f0346961b5a08->leave($__internal_943aba61e7d752874c662fd0d6346e689a4f39a8b7b840f1328f0346961b5a08_prof);

        
        $__internal_e10f9158d9ce12b4039b6452acd85d19a37fdd68baf3e449eb2d26a91dbcc53e->leave($__internal_e10f9158d9ce12b4039b6452acd85d19a37fdd68baf3e449eb2d26a91dbcc53e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_9650be9a0d8da63945cbd80526056180a199f67e9ec044561823543412a88798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9650be9a0d8da63945cbd80526056180a199f67e9ec044561823543412a88798->enter($__internal_9650be9a0d8da63945cbd80526056180a199f67e9ec044561823543412a88798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d30ddfedda59822f0e732ae0297a1e9d186ed1e4610246a0cea8be31e783fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d30ddfedda59822f0e732ae0297a1e9d186ed1e4610246a0cea8be31e783fad->enter($__internal_0d30ddfedda59822f0e732ae0297a1e9d186ed1e4610246a0cea8be31e783fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d30ddfedda59822f0e732ae0297a1e9d186ed1e4610246a0cea8be31e783fad->leave($__internal_0d30ddfedda59822f0e732ae0297a1e9d186ed1e4610246a0cea8be31e783fad_prof);

        
        $__internal_9650be9a0d8da63945cbd80526056180a199f67e9ec044561823543412a88798->leave($__internal_9650be9a0d8da63945cbd80526056180a199f67e9ec044561823543412a88798_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4441a39ddc72cbec9bd46a987927c3c0c975ff4b5c92b7a86aeaa8a4ab6f081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4441a39ddc72cbec9bd46a987927c3c0c975ff4b5c92b7a86aeaa8a4ab6f081->enter($__internal_b4441a39ddc72cbec9bd46a987927c3c0c975ff4b5c92b7a86aeaa8a4ab6f081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f3b62a2cbb5292f64a24a89859c55b637953f51802cf0896d099f7673b929b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b62a2cbb5292f64a24a89859c55b637953f51802cf0896d099f7673b929b7d->enter($__internal_f3b62a2cbb5292f64a24a89859c55b637953f51802cf0896d099f7673b929b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f3b62a2cbb5292f64a24a89859c55b637953f51802cf0896d099f7673b929b7d->leave($__internal_f3b62a2cbb5292f64a24a89859c55b637953f51802cf0896d099f7673b929b7d_prof);

        
        $__internal_b4441a39ddc72cbec9bd46a987927c3c0c975ff4b5c92b7a86aeaa8a4ab6f081->leave($__internal_b4441a39ddc72cbec9bd46a987927c3c0c975ff4b5c92b7a86aeaa8a4ab6f081_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 14,  106 => 13,  89 => 9,  71 => 5,  59 => 15,  56 => 14,  54 => 13,  47 => 10,  45 => 9,  41 => 8,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\"
              integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\"/>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\dylan\\Desktop\\4thYearIndividualProject\\HealthCentreIreland\\app\\Resources\\views\\base.html.twig");
    }
}
