<?php

/* account/accountdebits.html.twig */
class __TwigTemplate_0cbefb082ef8addc179be7036b28dadec39eca7c54f78a79a97141f5795d6d9e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/accountdebits.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/accountdebits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/accountdebits.html.twig"));

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
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_list");
        echo "\">Comptes</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_show", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 13, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Compte</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Receptions</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Sortis Compte ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new Twig_Error_Runtime('Variable "account" does not exist.', 16, $this->source); })()), "ceAccountCode", array()), "html", null, true);
        echo "</h6>
        </div><!-- slim-pageheader -->
        <div class=\"section-wrapper\">
          ";
        // line 19
        $this->loadTemplate("flash.html.twig", "account/accountdebits.html.twig", 19)->display($context);
        // line 20
        echo "          <div class=\"row\">
            <div class=\"col-md-6 col-lg-12 mg-md-t-0-force\">
              <ul class=\"list-group list-group-striped\">
              \t<label class=\"section-title\">List des Sorties</label>
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accountEntries"]) || array_key_exists("accountEntries", $context) ? $context["accountEntries"] : (function () { throw new Twig_Error_Runtime('Variable "accountEntries" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["accountEntry"]) {
            // line 25
            echo "              \t";
            if ((twig_get_attribute($this->env, $this->source, $context["accountEntry"], "isDebit", array()) == 1)) {
                // line 26
                echo "                <li class=\"list-group-item\">
                  <p class=\"mg-b-0\">
                  <i class=\"fa fa-arrow-circle-up tx-danger mg-r-8\"></i><strong class=\"tx-inverse tx-medium\">";
                // line 28
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accountEntry"], "ceAmount", array()), "0", ".", ","), "html", null, true);
                echo " FCFA</strong> 
                  <span class=\"text-muted\">Sortie le ";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accountEntry"], "datec", array()), "d-M-Y"), "html", null, true);
                echo "
                  ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["accountEntry"], "ceFromAccount", array())) {
                    echo " du Compte ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["accountEntry"], "ceFromAccount", array()), "ceAccountCode", array()), "html", null, true);
                    echo "
                  ";
                }
                // line 32
                echo "
                  ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["accountEntry"], "fkCeCustomer", array())) {
                    echo " du Client <strong class=\"tx-inverse tx-medium\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["accountEntry"], "fkCeCustomer", array()), "mobNum", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["accountEntry"], "fkCeCustomer", array()), "firstName", array()), "html", null, true);
                    echo "</strong> 
                  ";
                }
                // line 35
                echo "                  </span>
                  </p>
                </li>
                ";
            }
            // line 39
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accountEntry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </ul>
            </div><!-- col-4 -->
          </div><!-- row -->

        </div>

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/accountdebits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 40,  148 => 39,  142 => 35,  133 => 33,  130 => 32,  123 => 30,  119 => 29,  115 => 28,  111 => 26,  108 => 25,  104 => 24,  98 => 20,  96 => 19,  90 => 16,  84 => 13,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
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
            <li class=\"breadcrumb-item\"><a href=\"{{path('ceaccount_list')}}\">Comptes</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{path('ceaccount_show',{'id':account.id})}}\">Compte</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Receptions</li>
          </ol>
          <h6 class=\"slim-pagetitle\">Sortis Compte {{account.ceAccountCode}}</h6>
        </div><!-- slim-pageheader -->
        <div class=\"section-wrapper\">
          {% include 'flash.html.twig' %}
          <div class=\"row\">
            <div class=\"col-md-6 col-lg-12 mg-md-t-0-force\">
              <ul class=\"list-group list-group-striped\">
              \t<label class=\"section-title\">List des Sorties</label>
              {% for accountEntry in accountEntries %}
              \t{% if accountEntry.isDebit == 1%}
                <li class=\"list-group-item\">
                  <p class=\"mg-b-0\">
                  <i class=\"fa fa-arrow-circle-up tx-danger mg-r-8\"></i><strong class=\"tx-inverse tx-medium\">{{accountEntry.ceAmount | number_format('0','.',',')}} FCFA</strong> 
                  <span class=\"text-muted\">Sortie le {{accountEntry.datec | date('d-M-Y')}}
                  {% if accountEntry.ceFromAccount %} du Compte {{accountEntry.ceFromAccount.ceAccountCode}}
                  {% endif %}

                  {% if accountEntry.fkCeCustomer %} du Client <strong class=\"tx-inverse tx-medium\">{{accountEntry.fkCeCustomer.mobNum}} {{accountEntry.fkCeCustomer.firstName}}</strong> 
                  {% endif %}
                  </span>
                  </p>
                </li>
                {% endif %}
              {% endfor %}
              </ul>
            </div><!-- col-4 -->
          </div><!-- row -->

        </div>

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

{% endblock %}", "account/accountdebits.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\account\\accountdebits.html.twig");
    }
}
