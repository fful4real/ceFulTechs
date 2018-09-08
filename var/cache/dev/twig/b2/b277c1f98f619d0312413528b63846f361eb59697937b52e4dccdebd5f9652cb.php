<?php

/* account/list.html.twig */
class __TwigTemplate_f45f32a72a675195871ff28e99ffacec9794579a47f58a6be2d9ea48c6008e8f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Order-FulTechs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"slim-mainpanel\">
      <div class=\"container\">

        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Accounts</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Liste Compte</h6>
        </div><!-- slim-pageheader -->

\t\t<div class=\"row row-xs\">
    ";
        // line 18
        $this->loadTemplate("flash.html.twig", "account/list.html.twig", 18)->display($context);
        // line 19
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new Twig_Error_Runtime('Variable "accounts" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["account"]) {
            // line 20
            echo "
          <div class=\"col-sm-6 col-lg-3 mg-b-10\">
            <div class=\"card card-status\">
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_show", array("id" => twig_get_attribute($this->env, $this->source, $context["account"], "id", array()))), "html", null, true);
            echo "\" class=\"\">
              <div class=\"media\">
                <i class=\"icon ion-ios-bookmarks-outline tx-purple\"></i>
                <div class=\"media-body\">
                  <h1>";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "ceAccountBalance", array()), 0, ".", ","), "html", null, true);
            echo "</h1>
                  <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "ceAccountCode", array()), "html", null, true);
            echo "  : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "ceAccountName", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "ceAccountNumber", array()), "html", null, true);
            echo " </p>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            </div><!-- card -->
          </div><!-- col-3 -->
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  109 => 28,  105 => 27,  98 => 23,  93 => 20,  88 => 19,  86 => 18,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}New Order-FulTechs{% endblock %}

{% block body %}
    <div class=\"slim-mainpanel\">
      <div class=\"container\">

        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Accounts</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Liste Compte</h6>
        </div><!-- slim-pageheader -->

\t\t<div class=\"row row-xs\">
    {% include 'flash.html.twig' %}
\t{% for key, account in accounts %}

          <div class=\"col-sm-6 col-lg-3 mg-b-10\">
            <div class=\"card card-status\">
            <a href=\"{{path('ceaccount_show',{'id':account.id})}}\" class=\"\">
              <div class=\"media\">
                <i class=\"icon ion-ios-bookmarks-outline tx-purple\"></i>
                <div class=\"media-body\">
                  <h1>{{account.ceAccountBalance | number_format(0, '.', ',')}}</h1>
                  <p>{{account.ceAccountCode}}  : {{account.ceAccountName}}<br>{{account.ceAccountNumber}} </p>
                </div><!-- media-body -->
              </div><!-- media -->
            </a>
            </div><!-- card -->
          </div><!-- col-3 -->
\t{% endfor %}
        </div>

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

{% endblock %}", "account/list.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\account\\list.html.twig");
    }
}
