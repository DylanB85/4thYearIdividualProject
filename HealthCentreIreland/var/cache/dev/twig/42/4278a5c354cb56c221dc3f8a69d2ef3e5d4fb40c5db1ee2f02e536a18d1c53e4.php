<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3d8c6d803b35e750f23506d98777c38adf57c14bd54bc602c590ea4676994e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d8c6d803b35e750f23506d98777c38adf57c14bd54bc602c590ea4676994e9->enter($__internal_e3d8c6d803b35e750f23506d98777c38adf57c14bd54bc602c590ea4676994e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cb664dd6c76e5c15027d0cb891194a6e6c80ea5497320c0a6c83ff70a7113c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb664dd6c76e5c15027d0cb891194a6e6c80ea5497320c0a6c83ff70a7113c62->enter($__internal_cb664dd6c76e5c15027d0cb891194a6e6c80ea5497320c0a6c83ff70a7113c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e3d8c6d803b35e750f23506d98777c38adf57c14bd54bc602c590ea4676994e9->leave($__internal_e3d8c6d803b35e750f23506d98777c38adf57c14bd54bc602c590ea4676994e9_prof);

        
        $__internal_cb664dd6c76e5c15027d0cb891194a6e6c80ea5497320c0a6c83ff70a7113c62->leave($__internal_cb664dd6c76e5c15027d0cb891194a6e6c80ea5497320c0a6c83ff70a7113c62_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6eb2c6f76760aa4b4ccba92d455b142face0f0ac127165441311242375f16019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb2c6f76760aa4b4ccba92d455b142face0f0ac127165441311242375f16019->enter($__internal_6eb2c6f76760aa4b4ccba92d455b142face0f0ac127165441311242375f16019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb3d24513bfa42d60efa3dc5052bee721663208cfc3b4df59dbf353bba341c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3d24513bfa42d60efa3dc5052bee721663208cfc3b4df59dbf353bba341c55->enter($__internal_bb3d24513bfa42d60efa3dc5052bee721663208cfc3b4df59dbf353bba341c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bb3d24513bfa42d60efa3dc5052bee721663208cfc3b4df59dbf353bba341c55->leave($__internal_bb3d24513bfa42d60efa3dc5052bee721663208cfc3b4df59dbf353bba341c55_prof);

        
        $__internal_6eb2c6f76760aa4b4ccba92d455b142face0f0ac127165441311242375f16019->leave($__internal_6eb2c6f76760aa4b4ccba92d455b142face0f0ac127165441311242375f16019_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_038791e021b6f8f8fe448ad7bbe0176f500564266f929884047da89e90b6bb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038791e021b6f8f8fe448ad7bbe0176f500564266f929884047da89e90b6bb4e->enter($__internal_038791e021b6f8f8fe448ad7bbe0176f500564266f929884047da89e90b6bb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c632114282d63726249e01e46c9e85150fa230843f6bf241fc55269686ff8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c632114282d63726249e01e46c9e85150fa230843f6bf241fc55269686ff8ea->enter($__internal_7c632114282d63726249e01e46c9e85150fa230843f6bf241fc55269686ff8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7c632114282d63726249e01e46c9e85150fa230843f6bf241fc55269686ff8ea->leave($__internal_7c632114282d63726249e01e46c9e85150fa230843f6bf241fc55269686ff8ea_prof);

        
        $__internal_038791e021b6f8f8fe448ad7bbe0176f500564266f929884047da89e90b6bb4e->leave($__internal_038791e021b6f8f8fe448ad7bbe0176f500564266f929884047da89e90b6bb4e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c573f20e1f8da80ffdbf126f6895b23ffd0d9f5193c6f202a09ef60f1d1393c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c573f20e1f8da80ffdbf126f6895b23ffd0d9f5193c6f202a09ef60f1d1393c->enter($__internal_7c573f20e1f8da80ffdbf126f6895b23ffd0d9f5193c6f202a09ef60f1d1393c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5a4967b2984c257434274c1af83b51e49499c53d5cc27ce4d1e04db63add01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a4967b2984c257434274c1af83b51e49499c53d5cc27ce4d1e04db63add01e->enter($__internal_f5a4967b2984c257434274c1af83b51e49499c53d5cc27ce4d1e04db63add01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5a4967b2984c257434274c1af83b51e49499c53d5cc27ce4d1e04db63add01e->leave($__internal_f5a4967b2984c257434274c1af83b51e49499c53d5cc27ce4d1e04db63add01e_prof);

        
        $__internal_7c573f20e1f8da80ffdbf126f6895b23ffd0d9f5193c6f202a09ef60f1d1393c->leave($__internal_7c573f20e1f8da80ffdbf126f6895b23ffd0d9f5193c6f202a09ef60f1d1393c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\dylan\\Desktop\\4thYearIndividualProject\\HealthCentreIreland\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
