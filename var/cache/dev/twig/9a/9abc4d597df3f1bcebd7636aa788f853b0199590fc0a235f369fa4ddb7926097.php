<?php

/* account/show.html.twig */
class __TwigTemplate_bbd948261ac6d40349145aa0fc5c86428d36763e5c8fa23847d680772f69db32 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/show.html.twig"));

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

        echo "Order - FulTechs";
        
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
        echo "
    <div class=\"slim-mainpanel\">
      <div class=\"container\">
        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_list");
        echo "\">Comptes</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Compte</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Compte</h6>
        </div><!-- slim-pageheader -->

        ";
        // line 18
        $this->loadTemplate("flash.html.twig", "account/show.html.twig", 18)->display($context);
        // line 19
        echo "        <div class=\"row row-sm\">
          <div class=\"col-lg-8\">
          ";
        // line 21
        $this->loadTemplate("flash.html.twig", "account/show.html.twig", 21)->display($context);
        // line 22
        echo "            <div class=\"card-deck card-deck-sm mg-x-0\">
              <div class=\"card card-body pd-25\">
                <h6 class=\"slim-card-title mg-b-10\">Compte: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 24, $this->source); })()), "ceAccountCode", array()), "html", null, true);
        echo "  - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 24, $this->source); })()), "ceAccountName", array()), "html", null, true);
        echo "</h6>
                <h6 class=\"slim-card-title mg-b-10\">Numero: <span class=\"tx-info\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 25, $this->source); })()), "ceAccountNumber", array()), "html", null, true);
        echo "</span></h6>
                <div>
                  <h3 class=\"tx-info\"> <span class=\"tx-gray-600\">Solde: </span>";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 27, $this->source); })()), "ceAccountBalance", array()), 0, ".", ","), "html", null, true);
        echo " FCFA</h3>
                </div>
              </div>
            </div>
            <ul class=\"nav nav-activity-profile mg-t-20 mg-b-20\">
            ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 32, $this->source); })()), "isMobileMoney", array())) {
            // line 33
            echo "              <li class=\"nav-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_transfer", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 33, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"nav-link\"><i class=\"icon ion-ios-undo tx-pink\"></i> Nouveau Transfert</a></li>
              <li class=\"nav-item\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_receive", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 34, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"nav-link\"><i class=\"icon ion-ios-redo tx-success\"></i> Nouvelle Reception</a></li>
            ";
        }
        // line 36
        echo "
            ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 37, $this->source); })()), "isCommercial", array())) {
            // line 38
            echo "              <li class=\"nav-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_buy", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 38, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"nav-link\"><i class=\"icon ion-ios-download-outline tx-purple\"></i> Nouveau Achat</a></li>
              <li class=\"nav-item\"><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_deposit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 39, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"nav-link\"><i class=\"icon ion-ios-download-outline tx-teal\"></i> Nouveau Depot</a></li>
            ";
        }
        // line 41
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 41, $this->source); })()), "isBankAccount", array())) {
            // line 42
            echo "            <li class=\"nav-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_deposit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 42, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"nav-link\"><i class=\"icon ion-ios-download-outline tx-teal\"></i> Nouveau Depot</a></li>
            ";
        }
        // line 44
        echo "            </ul><!-- nav -->
          </div><!-- col-8 -->

          <div class=\"col-lg-4 mg-lg-t-0\">

            <div class=\"card-deck card-deck-sm mg-x-0\">
              <div class=\"card card-body pd-25\">
                <div class=\"pd-10\">
                  <span class=\"peity-donut\" data-peity=\"{ &quot;fill&quot;: [&quot;#663090&quot;,&quot;#EC1778&quot;,&quot;#25B1DE&quot;], &quot;height&quot;: 70, &quot;width&quot;: 200 }\" style=\"display: none;\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["totalEntry"]) || array_key_exists("totalEntry", $context) ? $context["totalEntry"] : (function () { throw new Twig_Error_Runtime('Variable "totalEntry" does not exist.', 52, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["totalOut"]) || array_key_exists("totalOut", $context) ? $context["totalOut"] : (function () { throw new Twig_Error_Runtime('Variable "totalOut" does not exist.', 52, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 52, $this->source); })()), "ceAccountBalance", array()), "html", null, true);
        echo "</span><svg class=\"peity\" height=\"70\" width=\"200\"><path d=\"M 100 0 A 35 35 0 1 1 88.0292949836016 67.8892417275068 L 94.0146474918008 51.4446208637534 A 17.5 17.5 0 1 0 100 17.5\" data-value=\"10\" fill=\"#663090\"></path><path d=\"M 88.0292949836016 67.8892417275068 A 35 35 0 0 1 65.53172864457272 28.92231378165745 L 82.76586432228636 31.961156890828725 A 17.5 17.5 0 0 0 94.0146474918008 51.4446208637534\" data-value=\"4\" fill=\"#EC1778\"></path><path d=\"M 65.53172864457272 28.92231378165745 A 35 35 0 0 1 100 0 L 100 17.5 A 17.5 17.5 0 0 0 82.76586432228636 31.961156890828725\" data-value=\"4\" fill=\"#25B1DE\"></path></svg>
                </div>
                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_credits", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 54, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">
                <div class=\"d-flex align-items-center\">
                  <span class=\"square-10 bg-purple rounded-circle\"></span>
                  <span class=\"mg-l-10  tx-gray-600\">Total Entree: </span>
                  <span class=\"mg-l-auto tx-gray-600 tx-right\">";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalEntry"]) || array_key_exists("totalEntry", $context) ? $context["totalEntry"] : (function () { throw new Twig_Error_Runtime('Variable "totalEntry" does not exist.', 58, $this->source); })()), 0, ".", ","), "html", null, true);
        echo "</span>
                </div>
                  
                </a>
                <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_debits", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 62, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">
                                <div class=\"d-flex align-items-center mg-t-5\">
                                  <span class=\"square-10 bg-pink rounded-circle\"></span>
                                  <span class=\"mg-l-10\">Total Sortie: </span>
                                  <span class=\"mg-l-auto tx-lato tx-right\">";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalOut"]) || array_key_exists("totalOut", $context) ? $context["totalOut"] : (function () { throw new Twig_Error_Runtime('Variable "totalOut" does not exist.', 66, $this->source); })()), 0, ".", ","), "html", null, true);
        echo "</span>
                                </div>
                </a>
                <div class=\"d-flex align-items-center mg-t-5\">
                  <span class=\"square-10 bg-info rounded-circle\"></span>
                  <span class=\"mg-l-10\">Solde: </span>
                  <span class=\"mg-l-auto tx-lato tx-right\">";
        // line 72
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 72, $this->source); })()), "ceAccountBalance", array()), 0, ".", ","), "html", null, true);
        echo "</span>
                </div>
                <div class=\"form-layout-footer mg-t-10\">
                  <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 75, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning bd-0\">Modifier</a>
                  <a href=\"\" class=\"btn btn-danger bd-0\">Supprimer</a>
                </div>
              </div>
            </div>
          </div><!-- col-4 -->
        </div>


      </div><!-- container -->
    </div><!-- slim-mainpanel -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 75,  205 => 72,  196 => 66,  189 => 62,  182 => 58,  175 => 54,  166 => 52,  156 => 44,  150 => 42,  147 => 41,  142 => 39,  137 => 38,  135 => 37,  132 => 36,  127 => 34,  122 => 33,  120 => 32,  112 => 27,  107 => 25,  101 => 24,  97 => 22,  95 => 21,  91 => 19,  89 => 18,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Order - FulTechs{% endblock %}

{% block body%}

    <div class=\"slim-mainpanel\">
      <div class=\"container\">
        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{path('ceaccount_list')}}\">Comptes</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Compte</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Compte</h6>
        </div><!-- slim-pageheader -->

        {% include 'flash.html.twig' %}
        <div class=\"row row-sm\">
          <div class=\"col-lg-8\">
          {% include 'flash.html.twig' %}
            <div class=\"card-deck card-deck-sm mg-x-0\">
              <div class=\"card card-body pd-25\">
                <h6 class=\"slim-card-title mg-b-10\">Compte: {{account.ceAccountCode}}  - {{account.ceAccountName}}</h6>
                <h6 class=\"slim-card-title mg-b-10\">Numero: <span class=\"tx-info\">{{account.ceAccountNumber}}</span></h6>
                <div>
                  <h3 class=\"tx-info\"> <span class=\"tx-gray-600\">Solde: </span>{{account.ceAccountBalance | number_format(0, '.', ',')}} FCFA</h3>
                </div>
              </div>
            </div>
            <ul class=\"nav nav-activity-profile mg-t-20 mg-b-20\">
            {% if account.isMobileMoney%}
              <li class=\"nav-item\"><a href=\"{{path('ceaccount_transfer',{'id':account.id})}}\" class=\"nav-link\"><i class=\"icon ion-ios-undo tx-pink\"></i> Nouveau Transfert</a></li>
              <li class=\"nav-item\"><a href=\"{{path('ceaccount_receive',{'id':account.id})}}\" class=\"nav-link\"><i class=\"icon ion-ios-redo tx-success\"></i> Nouvelle Reception</a></li>
            {% endif%}

            {% if account.isCommercial%}
              <li class=\"nav-item\"><a href=\"{{path('ceaccount_buy',{'id':account.id})}}\" class=\"nav-link\"><i class=\"icon ion-ios-download-outline tx-purple\"></i> Nouveau Achat</a></li>
              <li class=\"nav-item\"><a href=\"{{path('ceaccount_deposit',{'id':account.id})}}\" class=\"nav-link\"><i class=\"icon ion-ios-download-outline tx-teal\"></i> Nouveau Depot</a></li>
            {% endif %}
            {% if account.isBankAccount%}
            <li class=\"nav-item\"><a href=\"{{path('ceaccount_deposit',{'id':account.id})}}\" class=\"nav-link\"><i class=\"icon ion-ios-download-outline tx-teal\"></i> Nouveau Depot</a></li>
            {% endif %}
            </ul><!-- nav -->
          </div><!-- col-8 -->

          <div class=\"col-lg-4 mg-lg-t-0\">

            <div class=\"card-deck card-deck-sm mg-x-0\">
              <div class=\"card card-body pd-25\">
                <div class=\"pd-10\">
                  <span class=\"peity-donut\" data-peity=\"{ &quot;fill&quot;: [&quot;#663090&quot;,&quot;#EC1778&quot;,&quot;#25B1DE&quot;], &quot;height&quot;: 70, &quot;width&quot;: 200 }\" style=\"display: none;\">{{totalEntry}},{{totalOut}},{{account.ceAccountBalance}}</span><svg class=\"peity\" height=\"70\" width=\"200\"><path d=\"M 100 0 A 35 35 0 1 1 88.0292949836016 67.8892417275068 L 94.0146474918008 51.4446208637534 A 17.5 17.5 0 1 0 100 17.5\" data-value=\"10\" fill=\"#663090\"></path><path d=\"M 88.0292949836016 67.8892417275068 A 35 35 0 0 1 65.53172864457272 28.92231378165745 L 82.76586432228636 31.961156890828725 A 17.5 17.5 0 0 0 94.0146474918008 51.4446208637534\" data-value=\"4\" fill=\"#EC1778\"></path><path d=\"M 65.53172864457272 28.92231378165745 A 35 35 0 0 1 100 0 L 100 17.5 A 17.5 17.5 0 0 0 82.76586432228636 31.961156890828725\" data-value=\"4\" fill=\"#25B1DE\"></path></svg>
                </div>
                <a href=\"{{path('ceaccount_credits',{'id':account.id})}}\">
                <div class=\"d-flex align-items-center\">
                  <span class=\"square-10 bg-purple rounded-circle\"></span>
                  <span class=\"mg-l-10  tx-gray-600\">Total Entree: </span>
                  <span class=\"mg-l-auto tx-gray-600 tx-right\">{{totalEntry | number_format(0, '.', ',')}}</span>
                </div>
                  
                </a>
                <a href=\"{{path('ceaccount_debits',{'id':account.id})}}\">
                                <div class=\"d-flex align-items-center mg-t-5\">
                                  <span class=\"square-10 bg-pink rounded-circle\"></span>
                                  <span class=\"mg-l-10\">Total Sortie: </span>
                                  <span class=\"mg-l-auto tx-lato tx-right\">{{totalOut | number_format(0, '.', ',')}}</span>
                                </div>
                </a>
                <div class=\"d-flex align-items-center mg-t-5\">
                  <span class=\"square-10 bg-info rounded-circle\"></span>
                  <span class=\"mg-l-10\">Solde: </span>
                  <span class=\"mg-l-auto tx-lato tx-right\">{{account.ceAccountBalance | number_format(0, '.', ',')}}</span>
                </div>
                <div class=\"form-layout-footer mg-t-10\">
                  <a href=\"{{path('ceaccount_edit',{'id':account.id})}}\" class=\"btn btn-warning bd-0\">Modifier</a>
                  <a href=\"\" class=\"btn btn-danger bd-0\">Supprimer</a>
                </div>
              </div>
            </div>
          </div><!-- col-4 -->
        </div>


      </div><!-- container -->
    </div><!-- slim-mainpanel -->

{% endblock %}
", "account/show.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\account\\show.html.twig");
    }
}
