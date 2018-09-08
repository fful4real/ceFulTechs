<?php

/* ceorder/list.html.twig */
class __TwigTemplate_cdabb6e6dd3de5e476b5bcef7f7a8955efafeef16752acd4b4bb565a3663ceb4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ceorder/list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ceorder/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ceorder/list.html.twig"));

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

        echo "Orders - FulTechs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"slim-mainpanel\">
      <div class=\"container\">
        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">List Mandats</li>
          </ol>
          <h6 class=\"slim-pagetitle\">List Mandats</h6>
        </div><!-- slim-pageheader -->
          ";
        // line 14
        $this->loadTemplate("flash.html.twig", "ceorder/list.html.twig", 14)->display($context);
        // line 15
        echo "          <div class=\"card card-table\">
            <div class=\"table-responsive\">
              <table class=\"table mg-b-0 tx-12\">
                <thead>
                  <tr class=\"tx-10\">
                    <th class=\"pd-y-5\">Ref</th>
                    <th class=\"pd-y-5 tx-cener  valign-middle\">Montant</th>
                    <th class=\"pd-y-5 tx-center valign-left\">Numero</th>
                  </tr>
                </thead>
                <tbody>
                  
                  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["order"]) {
            // line 28
            echo "\t                  <tr class='clickable-row' data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_show", array("id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", array()))), "html", null, true);
            echo "\">
\t                    <td>
\t                      <h6 class=\"slim-card-title tx-dark\"><strong class=\"tx-11 d-block\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "ceOrderref", array()), "html", null, true);
            echo "</strong></h6>
\t                      <span class=\"tx-11 d-block\"><span class=\"square-8 bg-";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["order"], "id", array()), array(), "array"), "html", null, true);
            echo " mg-r-5 rounded-circle\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["order"], "id", array()), array(), "array"), "label", array()), "html", null, true);
            echo "</span>
\t                      <span class=\"tx-11 d-block\"><span class=\"square-8 bg-success mg-r-5\"></span> <strong>Created: </strong>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "ceDatec", array()), "d/m/Y"), "html", null, true);
            echo "</span>
\t                      <span class=\"tx-11 d-block\"><span class=\"square-8 bg-danger mg-r-5\"></span> <strong>Modified: </strong>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "ceTms", array()), "d/m/Y"), "html", null, true);
            echo "</span>
\t                    </td>
\t                    <td class=\"valign-middle\">
\t                      <span class=\"tx-11 d-block\">Montant: ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "ceAmount", array()), "html", null, true);
            echo " FCFA</span>
\t                      <span class=\"tx-11 d-block\">Frais: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "ceOrderCharge", array()), "html", null, true);
            echo " FCFA</span> Total: 
\t                    \t<span class=\"tx-success\">
\t                    \t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "ceOrderTotal", array()), "html", null, true);
            echo " FCFA
\t                    \t</span></td>
\t                    <td class=\"valign-middle tx-left\">
\t                    \t<span class=\"tx-11 d-block\">MTN: ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "ceMobnum", array()), "html", null, true);
            echo "</span>
\t                      \t<span class=\"tx-11 d-block\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new Twig_Error_Runtime('Variable "customers" does not exist.', 43, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["order"], "id", array()), array(), "array"), "firstName", array()), "html", null, true);
            echo "&nbsp ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new Twig_Error_Runtime('Variable "customers" does not exist.', 43, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["order"], "id", array()), array(), "array"), "lastName", array()), "html", null, true);
            echo "</span>
\t                      \t<span class=\"tx-11 d-block\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new Twig_Error_Runtime('Variable "towns" does not exist.', 44, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["order"], "id", array()), array(), "array"), "townName", array()), "html", null, true);
            echo "</span>
\t                    </td>
\t                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
              </table>
            </div><!-- table-responsive -->
            <div class=\"card-footer tx-12 pd-y-15 bg-transparent\">
              <a href=\"\"><i class=\"fa fa-angle-down mg-r-5\"></i>View All Orders</a>
            </div><!-- card-footer -->
          </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ceorder/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 48,  154 => 44,  148 => 43,  144 => 42,  138 => 39,  133 => 37,  129 => 36,  123 => 33,  119 => 32,  113 => 31,  109 => 30,  103 => 28,  99 => 27,  85 => 15,  83 => 14,  72 => 5,  63 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Orders - FulTechs{% endblock %}
{% block body %}
    <div class=\"slim-mainpanel\">
      <div class=\"container\">
        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">List Mandats</li>
          </ol>
          <h6 class=\"slim-pagetitle\">List Mandats</h6>
        </div><!-- slim-pageheader -->
          {% include 'flash.html.twig' %}
          <div class=\"card card-table\">
            <div class=\"table-responsive\">
              <table class=\"table mg-b-0 tx-12\">
                <thead>
                  <tr class=\"tx-10\">
                    <th class=\"pd-y-5\">Ref</th>
                    <th class=\"pd-y-5 tx-cener  valign-middle\">Montant</th>
                    <th class=\"pd-y-5 tx-center valign-left\">Numero</th>
                  </tr>
                </thead>
                <tbody>
                  
                  {% for key, order in orders %}
\t                  <tr class='clickable-row' data-href=\"{{path('ceorder_show',{'id':order.id})}}\">
\t                    <td>
\t                      <h6 class=\"slim-card-title tx-dark\"><strong class=\"tx-11 d-block\">{{ order.ceOrderref}}</strong></h6>
\t                      <span class=\"tx-11 d-block\"><span class=\"square-8 bg-{{colors[order.id]}} mg-r-5 rounded-circle\"></span> {{ status[order.id].label}}</span>
\t                      <span class=\"tx-11 d-block\"><span class=\"square-8 bg-success mg-r-5\"></span> <strong>Created: </strong>{{ order.ceDatec | date('d/m/Y')}}</span>
\t                      <span class=\"tx-11 d-block\"><span class=\"square-8 bg-danger mg-r-5\"></span> <strong>Modified: </strong>{{ order.ceTms | date('d/m/Y')}}</span>
\t                    </td>
\t                    <td class=\"valign-middle\">
\t                      <span class=\"tx-11 d-block\">Montant: {{ order.ceAmount}} FCFA</span>
\t                      <span class=\"tx-11 d-block\">Frais: {{ order.ceOrderCharge}} FCFA</span> Total: 
\t                    \t<span class=\"tx-success\">
\t                    \t\t{{ order.ceOrderTotal}} FCFA
\t                    \t</span></td>
\t                    <td class=\"valign-middle tx-left\">
\t                    \t<span class=\"tx-11 d-block\">MTN: {{ order.ceMobnum}}</span>
\t                      \t<span class=\"tx-11 d-block\">{{customers[order.id].firstName}}&nbsp {{customers[order.id].lastName}}</span>
\t                      \t<span class=\"tx-11 d-block\">{{towns[order.id].townName}}</span>
\t                    </td>
\t                  </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div><!-- table-responsive -->
            <div class=\"card-footer tx-12 pd-y-15 bg-transparent\">
              <a href=\"\"><i class=\"fa fa-angle-down mg-r-5\"></i>View All Orders</a>
            </div><!-- card-footer -->
          </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
{% endblock %}", "ceorder/list.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\ceorder\\list.html.twig");
    }
}
