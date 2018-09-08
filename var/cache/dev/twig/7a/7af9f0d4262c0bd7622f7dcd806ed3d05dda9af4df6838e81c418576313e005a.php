<?php

/* dashboard/index.html.twig */
class __TwigTemplate_b8f0143b183ab8222d19bf34181fc497fb98de604b3ce001d7d0addf86610a6f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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
        echo "    <div class=\"slim-mainpanel\">
      <div class=\"container\">
        <div class=\"slim-pageheader\">
          <ol class=\"breadcrumb slim-breadcrumb\">
            <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"#\">Home</a></li>
          </ol>
          <h6 class=\"slim-pagetitle\">Welcome ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array()), "ceFirstName", array()), "html", null, true);
        echo "</h6>
        </div><!-- slim-pageheader -->
        ";
        // line 14
        $this->loadTemplate("flash.html.twig", "dashboard/index.html.twig", 14)->display($context);
        // line 15
        echo "        
        <div class=\"row row-xs\">
          <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card card-status\">
              <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorders_new");
        echo "\" class=\"\">
                <div class=\"media\">
                  <i class=\"icon ion-ios-cart-outline tx-purple\"></i>
                  <div class=\"media-body\">
                    <h1>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["orderCount"]) || array_key_exists("orderCount", $context) ? $context["orderCount"] : (function () { throw new Twig_Error_Runtime('Variable "orderCount" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</h1>
                    <p>Nouveau Mandats</p>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class=\"col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0\">
            <div class=\"card card-status\">
              <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_new");
        echo "\">
               <div class=\"media\">
                  <i class=\"icon ion-ios-copy-outline tx-primary\"></i>
                  <div class=\"media-body\">
                    <h1>Mandat +</h1>
                    <p>Cree Nouveau Mandat</p>
                  </div><!-- media-body -->
                </div><!-- media -->
               </a>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class=\"col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0\">
            <div class=\"card card-status\">
              <div class=\"media\">
                <i class=\"icon ion-ios-analytics-outline tx-pink\"></i>
                <div class=\"media-body\">
                  <h1>";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new Twig_Error_Runtime('Variable "balance" does not exist.', 48, $this->source); })()), 0, ".", ","), "html", null, true);
        echo "</h1>
                  <p>Solde Globale</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class=\"col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0\">
            <div class=\"card card-status\">
              <div class=\"media\">
                <i class=\"icon ion-ios-analytics-outline tx-pink\"></i>
                <div class=\"media-body\">
                  <h1>2,942</h1>
                  <p>Total analytics</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div>

        <div class=\"row row-xs mg-t-10\">
          <div class=\"col-lg-8 col-xl-9\">
            <div class=\"row row-xs\">
              <div class=\"col-md-5 col-lg-6 col-xl-5\">

                <div class=\"card\">
                  <div class=\"card-body\">
                    <h6 class=\"slim-card-title mg-b-20 tx-purple\">Solde des Comptes</h6>
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) || array_key_exists("accounts", $context) ? $context["accounts"] : (function () { throw new Twig_Error_Runtime('Variable "accounts" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["account"]) {
            // line 76
            echo "
                      <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_show", array("id" => twig_get_attribute($this->env, $this->source, $context["account"], "id", array()))), "html", null, true);
            echo "\">
                        <label class=\"mg-b-5 tx-gray-600\">";
            // line 78
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "ceAccountBalance", array()), 0, ".", ","), "html", null, true);
            echo " Compte - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["account"], "ceAccountCode", array()), "html", null, true);
            echo "</label>
                        <div class=\"progress mg-b-15\">
                              <div class=\"progress-bar bg-";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 80, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["account"], "ceAccountCode", array()), array(), "array"), "html", null, true);
            echo " progress-bar-xs\" style=\"width: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 80, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["account"], "ceAccountNumber", array()), array(), "array"), "html", null, true);
            echo "%\" role=\"progressbar\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 80, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["account"], "ceAccountNumber", array()), array(), "array"), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div><!-- progress -->
                     </a>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                  </div><!-- card-body -->
                </div>
              </div><!-- col-5 -->
              <div class=\"col-md-7 col-lg-6 col-xl-7 mg-t-10 mg-md-t-0\">
                <div class=\"card\">
                  <div class=\"card-body card-sales\">
                    <h6 class=\"slim-card-title mg-b-20 tx-success\">Disponibilite Compte</h6>
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                      ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acUsage"]) || array_key_exists("acUsage", $context) ? $context["acUsage"] : (function () { throw new Twig_Error_Runtime('Variable "acUsage" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["acu"]) {
            // line 93
            echo "                        <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 94
            if (($context["key"] == 0)) {
                echo "active show";
            }
            echo "\" href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acu"], "accountCode", array()), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acu"], "accountCode", array()), "html", null, true);
            echo "</a>
                      </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['acu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    </ul>

                    <!-- Tab panes -->
                    <div class=\"tab-content mg-t-10\">
                        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acUsage"]) || array_key_exists("acUsage", $context) ? $context["acUsage"] : (function () { throw new Twig_Error_Runtime('Variable "acUsage" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["acu"]) {
            // line 102
            echo "                      <div role=\"tabpanel\" class=\"tab-pane fade in  ";
            if (($context["key"] == 0)) {
                echo "active show";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acu"], "accountCode", array()), "html", null, true);
            echo "\">
                        <div class=\"row\">
                          <div class=\"col\">
                            <label class=\"tx-12\">Today</label>
                            <p>";
            // line 106
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acu"], "sumToday", array()), 0, ".", ","), "html", null, true);
            echo "</p>
                          </div><!-- col -->
                          <div class=\"col\">
                            <label class=\"tx-12\">This Week</label>
                            <p>";
            // line 110
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acu"], "sumWeek", array()), 0, ".", ","), "html", null, true);
            echo "</p>
                          </div><!-- col -->
                          <div class=\"col\">
                            <label class=\"tx-12\">This Month</label>
                            <p>";
            // line 114
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["acu"], "sumMonth", array()), 0, ".", ","), "html", null, true);
            echo "</p>
                          </div><!-- col -->
                        </div>
                        <div class=\"progress mg-b-5\">
                          ";
            // line 118
            $context["percentage"] = (abs(twig_get_attribute($this->env, $this->source, $context["acu"], "sumMonth", array())) / 50000);
            // line 119
            echo "                          <div class=\"progress-bar bg-primary wd-50p\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
            echo twig_escape_filter($this->env, twig_round((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new Twig_Error_Runtime('Variable "percentage" does not exist.', 119, $this->source); })()), 1, "floor"), "html", null, true);
            echo "% \"> ";
            echo twig_escape_filter($this->env, twig_round((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new Twig_Error_Runtime('Variable "percentage" does not exist.', 119, $this->source); })()), 1, "floor"), "html", null, true);
            echo "%</div>
                        </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['acu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                    </div>
                  </div><!-- card body -->
                </div>
              </div><!-- col-7 -->
            </div><!-- row -->
          </div><!-- col-9 -->
          <div class=\"col-lg-4 col-xl-3 mg-t-10 mg-lg-t-0\">
            <div class=\"card card-people-list pd-20\">
              <div class=\"slim-card-title\">People you may know</div>
              <div class=\"media-list\">
                <div class=\"media\">
                  <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                  <div class=\"media-body\">
                    <a href=\"\">Amber Heard</a>
                    <p class=\"tx-12\">Software Engineer</p>
                  </div><!-- media-body -->
                  <a href=\"\"><i class=\"icon ion-person-add tx-20\"></i></a>
                </div><!-- media -->
                <div class=\"media\">
                  <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                  <div class=\"media-body\">
                    <a href=\"\">Richard Salomon</a>
                    <p class=\"tx-12\">Architect</p>
                  </div><!-- media-body -->
                  <a href=\"\"><i class=\"icon ion-person-add tx-20\"></i></a>
                </div><!-- media -->
                <div class=\"media\">
                  <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                  <div class=\"media-body\">
                    <a href=\"\">Charlene Plateros</a>
                    <p class=\"tx-12\">Sales Representative</p>
                  </div><!-- media-body -->
                  <a href=\"\"><i class=\"icon ion-person-add tx-20\"></i></a>
                </div><!-- media -->
              </div><!-- media-list -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div>

      </div><!-- container -->
    </div><!-- slim-mainpanel --> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 123,  270 => 119,  268 => 118,  261 => 114,  254 => 110,  247 => 106,  235 => 102,  231 => 101,  225 => 97,  210 => 94,  207 => 93,  203 => 92,  193 => 84,  179 => 80,  172 => 78,  168 => 77,  165 => 76,  161 => 75,  131 => 48,  112 => 32,  100 => 23,  93 => 19,  87 => 15,  85 => 14,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
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
            <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"#\">Home</a></li>
          </ol>
          <h6 class=\"slim-pagetitle\">Welcome {{ app.user.ceFirstName }}</h6>
        </div><!-- slim-pageheader -->
        {% include 'flash.html.twig' %}
        
        <div class=\"row row-xs\">
          <div class=\"col-sm-6 col-lg-3\">
            <div class=\"card card-status\">
              <a href=\"{{path('ceorders_new')}}\" class=\"\">
                <div class=\"media\">
                  <i class=\"icon ion-ios-cart-outline tx-purple\"></i>
                  <div class=\"media-body\">
                    <h1>{{orderCount}}</h1>
                    <p>Nouveau Mandats</p>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class=\"col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0\">
            <div class=\"card card-status\">
              <a href=\"{{path('ceorder_new')}}\">
               <div class=\"media\">
                  <i class=\"icon ion-ios-copy-outline tx-primary\"></i>
                  <div class=\"media-body\">
                    <h1>Mandat +</h1>
                    <p>Cree Nouveau Mandat</p>
                  </div><!-- media-body -->
                </div><!-- media -->
               </a>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class=\"col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0\">
            <div class=\"card card-status\">
              <div class=\"media\">
                <i class=\"icon ion-ios-analytics-outline tx-pink\"></i>
                <div class=\"media-body\">
                  <h1>{{balance  | number_format(0, '.', ',')}}</h1>
                  <p>Solde Globale</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class=\"col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0\">
            <div class=\"card card-status\">
              <div class=\"media\">
                <i class=\"icon ion-ios-analytics-outline tx-pink\"></i>
                <div class=\"media-body\">
                  <h1>2,942</h1>
                  <p>Total analytics</p>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div>

        <div class=\"row row-xs mg-t-10\">
          <div class=\"col-lg-8 col-xl-9\">
            <div class=\"row row-xs\">
              <div class=\"col-md-5 col-lg-6 col-xl-5\">

                <div class=\"card\">
                  <div class=\"card-body\">
                    <h6 class=\"slim-card-title mg-b-20 tx-purple\">Solde des Comptes</h6>
                    {% for key, account in accounts %}

                      <a href=\"{{path('ceaccount_show',{'id':account.id})}}\">
                        <label class=\"mg-b-5 tx-gray-600\">{{ account.ceAccountBalance | number_format(0,'.',',')}} Compte - {{ account.ceAccountCode}}</label>
                        <div class=\"progress mg-b-15\">
                              <div class=\"progress-bar bg-{{colors[account.ceAccountCode]}} progress-bar-xs\" style=\"width: {{colors[account.ceAccountNumber]}}%\" role=\"progressbar\" aria-valuenow=\"{{colors[account.ceAccountNumber]}}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div><!-- progress -->
                     </a>
                      {% endfor %}
                  </div><!-- card-body -->
                </div>
              </div><!-- col-5 -->
              <div class=\"col-md-7 col-lg-6 col-xl-7 mg-t-10 mg-md-t-0\">
                <div class=\"card\">
                  <div class=\"card-body card-sales\">
                    <h6 class=\"slim-card-title mg-b-20 tx-success\">Disponibilite Compte</h6>
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                      {% for key, acu in acUsage %}
                        <li class=\"nav-item\">
                        <a class=\"nav-link {% if key == 0%}active show{%endif%}\" href=\"#{{acu.accountCode}}\" role=\"tab\" data-toggle=\"tab\">{{acu.accountCode}}</a>
                      </li>
                        {% endfor %}
                    </ul>

                    <!-- Tab panes -->
                    <div class=\"tab-content mg-t-10\">
                        {% for key, acu in acUsage %}
                      <div role=\"tabpanel\" class=\"tab-pane fade in  {% if key == 0%}active show{%endif%}\" id=\"{{acu.accountCode}}\">
                        <div class=\"row\">
                          <div class=\"col\">
                            <label class=\"tx-12\">Today</label>
                            <p>{{acu.sumToday | number_format(0, '.', ',')}}</p>
                          </div><!-- col -->
                          <div class=\"col\">
                            <label class=\"tx-12\">This Week</label>
                            <p>{{acu.sumWeek | number_format(0, '.', ',')}}</p>
                          </div><!-- col -->
                          <div class=\"col\">
                            <label class=\"tx-12\">This Month</label>
                            <p>{{acu.sumMonth | number_format(0, '.', ',')}}</p>
                          </div><!-- col -->
                        </div>
                        <div class=\"progress mg-b-5\">
                          {% set percentage = acu.sumMonth|abs / 50000 %}
                          <div class=\"progress-bar bg-primary wd-50p\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:{{(percentage|round(1, 'floor'))}}% \"> {{(percentage|round(1, 'floor'))}}%</div>
                        </div>
                      </div>
                      {% endfor %}
                    </div>
                  </div><!-- card body -->
                </div>
              </div><!-- col-7 -->
            </div><!-- row -->
          </div><!-- col-9 -->
          <div class=\"col-lg-4 col-xl-3 mg-t-10 mg-lg-t-0\">
            <div class=\"card card-people-list pd-20\">
              <div class=\"slim-card-title\">People you may know</div>
              <div class=\"media-list\">
                <div class=\"media\">
                  <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                  <div class=\"media-body\">
                    <a href=\"\">Amber Heard</a>
                    <p class=\"tx-12\">Software Engineer</p>
                  </div><!-- media-body -->
                  <a href=\"\"><i class=\"icon ion-person-add tx-20\"></i></a>
                </div><!-- media -->
                <div class=\"media\">
                  <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                  <div class=\"media-body\">
                    <a href=\"\">Richard Salomon</a>
                    <p class=\"tx-12\">Architect</p>
                  </div><!-- media-body -->
                  <a href=\"\"><i class=\"icon ion-person-add tx-20\"></i></a>
                </div><!-- media -->
                <div class=\"media\">
                  <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                  <div class=\"media-body\">
                    <a href=\"\">Charlene Plateros</a>
                    <p class=\"tx-12\">Sales Representative</p>
                  </div><!-- media-body -->
                  <a href=\"\"><i class=\"icon ion-person-add tx-20\"></i></a>
                </div><!-- media -->
              </div><!-- media-list -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div>

      </div><!-- container -->
    </div><!-- slim-mainpanel --> 

{% endblock %}
", "dashboard/index.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\dashboard\\index.html.twig");
    }
}
