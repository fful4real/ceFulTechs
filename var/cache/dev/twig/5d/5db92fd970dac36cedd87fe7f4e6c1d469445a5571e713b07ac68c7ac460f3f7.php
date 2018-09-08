<?php

/* base.html.twig */
class __TwigTemplate_3d32c9fa5b871566cb37e6c9fc1f894a4e442dab43c7edbab0927c81f523fb5a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'activeNav2' => array($this, 'block_activeNav2'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Twitter -->
    <meta name=\"twitter:site\" content=\"@slim\">
    <meta name=\"twitter:creator\" content=\"@slim\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"Slim\">
    <meta name=\"twitter:description\" content=\"Premium Quality and Responsive UI for Dashboard.\">
    <meta name=\"twitter:image\" content=\"http://slim.me/slim/img/slim-social.png\">

    <!-- Facebook -->
    <meta property=\"og:url\" content=\"http://slim.me/slim\">
    <meta property=\"og:title\" content=\"Slim\">
    <meta property=\"og:description\" content=\"Premium Quality and Responsive UI for Dashboard.\">

    <meta property=\"og:image\" content=\"http://slim.me/slim/img/slim-social.png\">
    <meta property=\"og:image:secure_url\" content=\"http://slim.me/slim/img/slim-social.png\">
    <meta property=\"og:image:type\" content=\"image/png\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"600\">

    <!-- Meta -->
    <meta name=\"description\" content=\"Cash Express Application\">
    <meta name=\"author\" content=\"FulTechs\">
\t
\t
\t\t<title>";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- vendor css -->
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/Ionicons/css/ionicons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/rickshaw/css/rickshaw.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Slim CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slim.css"), "html", null, true);
        echo "\">
    ";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "
  </head>
  <body class=\"dashboard-3\">
\t
    <div class=\"slim-header\">
      <div class=\"container\">
        <div class=\"slim-header-left\">
          <h2 class=\"slim-logo\"><a href=\"/\">FulTechs<span>.</span></a></h2>

          <div class=\"search-box\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            <button class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
          </div><!-- search-box -->
        </div><!-- FulTechs-header-left -->
        <div class=\"slim-header-right\">
          <div class=\"dropdown dropdown-a\">
            <a href=\"\" class=\"header-notification\" data-toggle=\"dropdown\">
              <i class=\"icon ion-ios-bolt-outline\"></i>
            </a>
            <div class=\"dropdown-menu\">
              <div class=\"dropdown-menu-header\">
                <h6 class=\"dropdown-menu-title\">Activity Logs</h6>
                <div>
                  <a href=\"\">Filter List</a>
                  <a href=\"\">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class=\"dropdown-activity-list\">
                <div class=\"activity-label\">Today, December 13, 2017</div>
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">10:15am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-success\"></span></div>
                    <div class=\"col-8\">Purchased christmas sale cloud storage</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">9:48am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-danger\"></span></div>
                    <div class=\"col-8\">Login failure</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">7:29am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-warning\"></span></div>
                    <div class=\"col-8\">(D:) Storage almost full</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">3:21am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-success\"></span></div>
                    <div class=\"col-8\">1 item sold <strong>Christmas bundle</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class=\"activity-label\">Yesterday, December 12, 2017</div>
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">6:57am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-success\"></span></div>
                    <div class=\"col-8\">Earn new badge <strong>Elite Author</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              </div><!-- dropdown-activity-list -->
              <div class=\"dropdown-list-footer\">
                <a href=\"page-activity.html\"><i class=\"fa fa-angle-down\"></i> Show All Activities</a>
              </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class=\"dropdown dropdown-b\">
            <a href=\"\" class=\"header-notification\" data-toggle=\"dropdown\">
              <i class=\"icon ion-ios-bell-outline\"></i>
              <span class=\"indicator\"></span>
            </a>
            <div class=\"dropdown-menu\">
              <div class=\"dropdown-menu-header\">
                <h6 class=\"dropdown-menu-title\">Notifications</h6>
                <div>
                  <a href=\"\">Mark All as Read</a>
                  <a href=\"\">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class=\"dropdown-list\">
                <!-- loop starts here -->
                <a href=\"\" class=\"dropdown-link\">
                  <div class=\"media\">
                    <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                    <div class=\"media-body\">
                      <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href=\"\" class=\"dropdown-link\">
                  <div class=\"media\">
                    <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                    <div class=\"media-body\">
                      <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href=\"\" class=\"dropdown-link read\">
                  <div class=\"media\">
                    <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                    <div class=\"media-body\">
                      <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href=\"\" class=\"dropdown-link read\">
                  <div class=\"media\">
                    <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                    <div class=\"media-body\">
                      <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class=\"dropdown-list-footer\">
                  <a href=\"page-notifications.html\"><i class=\"fa fa-angle-down\"></i> Show All Notifications</a>
                </div>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class=\"dropdown dropdown-c\">
            <a href=\"#\" class=\"logged-user\" data-toggle=\"dropdown\">
              <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
              <span>";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 174, $this->source); })()), "user", array()), "ceFirstName", array()), "html", null, true);
        echo "</span>
              <i class=\"fa fa-angle-down\"></i>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <nav class=\"nav\">
                <a href=\"page-profile.html\" class=\"nav-link\"><i class=\"icon ion-person\"></i> View Profile</a>
                <a href=\"page-edit-profile.html\" class=\"nav-link\"><i class=\"icon ion-compose\"></i> Edit Profile</a>
                <a href=\"page-activity.html\" class=\"nav-link\"><i class=\"icon ion-ios-bolt\"></i> Activity Log</a>
                <a href=\"page-settings.html\" class=\"nav-link\"><i class=\"icon ion-ios-gear\"></i> Account Settings</a>
                <a href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cesecurity_signout");
        echo "\" class=\"nav-link\"><i class=\"icon ion-forward\"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class=\"slim-navbar\">
      <div class=\"container\">
        <ul class=\"nav\">
          <li class=\"nav-item with-sub active\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon ion-ios-paper-outline\"></i>
              <span>Mandats</span>
            </a>
            <div class=\"sub-item\">
              <ul>
                <li><a href=\"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_new");
        echo "\">Cree Mandat</a></li>
                <li><a href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceorder_list");
        echo "\">Liste Mandats</a></li>
              </ul>
            </div><!-- sub-item -->
          </li>
          <li class=\"nav-item with-sub ";
        // line 206
        $this->displayBlock('activeNav2', $context, $blocks);
        echo "\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon ion-ios-filing-outline\"></i>
              <span>Comptes</span>
            </a>
            <div class=\"sub-item\">
              <ul>
                <li><a href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_new");
        echo "\">Creer Compte</a></li>
                <li><a href=\"";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ceaccount_list");
        echo "\">Liste de Comptes</a></li>
              </ul>
            </div><!-- sub-item -->
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->
\t";
        // line 221
        $this->displayBlock('body', $context, $blocks);
        // line 224
        echo "
    <div class=\"slim-footer\">
      <div class=\"container\">
        <p>Copyright 2018 &copy; All Rights Reserved. FulTechs CashExpress</p>
        <p>Designed by: <a href=\"fultechs.com\">FulTechs</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/popper.js/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.cookie/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/d3/js/d3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/rickshaw/js/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/Flot/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/Flot/js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/peity/js/jquery.peity.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slim.js"), "html", null, true);
        echo "\"></script>

<script>
      \$(function(){
        'use strict'

        var multibar = new Rickshaw.Graph({
          element: document.querySelector('#chartMultiBar1'),
          renderer: 'bar',
          stack: false,
          max: 60,
          series: [{
            data: [
              { x: 0, y: 20 },
              { x: 1, y: 25 },
              { x: 2, y: 10 },
              { x: 3, y: 15 },
              { x: 4, y: 20 },
              { x: 5, y: 40 },
              { x: 6, y: 15 },
              { x: 7, y: 40 },
              { x: 8, y: 25 }
            ],
            color: '#065381'
          },
          {
            data: [
              { x: 0, y: 10 },
              { x: 1, y: 30 },
              { x: 2, y: 45 },
              { x: 3, y: 30 },
              { x: 4, y: 42 },
              { x: 5, y: 20 },
              { x: 6, y: 30 },
              { x: 7, y: 15 },
              { x: 8, y: 20 }
            ],
            color: '#34B2E4'
          }]
        });

        multibar.render();

        // Responsive Mode
        new ResizeSensor(\$('.slim-mainpanel'), function(){
          multibar.configure({
            width: \$('#chartMultiBar1').width(),
            height: \$('#chartMultiBar1').height()
          });
          multibar.render();
        });

      });
    </script>
    ";
        // line 295
        $this->displayBlock('javascripts', $context, $blocks);
        // line 296
        echo "  </body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_activeNav2($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "activeNav2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "activeNav2"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 221
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 222
        echo "    
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 295
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  486 => 295,  475 => 222,  466 => 221,  449 => 206,  432 => 41,  415 => 32,  402 => 296,  400 => 295,  343 => 241,  339 => 240,  335 => 239,  331 => 238,  327 => 237,  323 => 236,  319 => 235,  315 => 234,  311 => 233,  307 => 232,  297 => 224,  295 => 221,  285 => 214,  281 => 213,  271 => 206,  264 => 202,  260 => 201,  239 => 183,  227 => 174,  93 => 42,  91 => 41,  87 => 40,  81 => 37,  77 => 36,  73 => 35,  67 => 32,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Twitter -->
    <meta name=\"twitter:site\" content=\"@slim\">
    <meta name=\"twitter:creator\" content=\"@slim\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"Slim\">
    <meta name=\"twitter:description\" content=\"Premium Quality and Responsive UI for Dashboard.\">
    <meta name=\"twitter:image\" content=\"http://slim.me/slim/img/slim-social.png\">

    <!-- Facebook -->
    <meta property=\"og:url\" content=\"http://slim.me/slim\">
    <meta property=\"og:title\" content=\"Slim\">
    <meta property=\"og:description\" content=\"Premium Quality and Responsive UI for Dashboard.\">

    <meta property=\"og:image\" content=\"http://slim.me/slim/img/slim-social.png\">
    <meta property=\"og:image:secure_url\" content=\"http://slim.me/slim/img/slim-social.png\">
    <meta property=\"og:image:type\" content=\"image/png\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"600\">

    <!-- Meta -->
    <meta name=\"description\" content=\"Cash Express Application\">
    <meta name=\"author\" content=\"FulTechs\">
\t
\t
\t\t<title>{% block title %}{% endblock %}</title>

    <!-- vendor css -->
    <link href=\"{{asset('lib/font-awesome/css/font-awesome.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('lib/Ionicons/css/ionicons.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('lib/rickshaw/css/rickshaw.min.css')}}\" rel=\"stylesheet\">

    <!-- Slim CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('css/slim.css')}}\">
    {% block stylesheets %}{% endblock %}

  </head>
  <body class=\"dashboard-3\">
\t
    <div class=\"slim-header\">
      <div class=\"container\">
        <div class=\"slim-header-left\">
          <h2 class=\"slim-logo\"><a href=\"/\">FulTechs<span>.</span></a></h2>

          <div class=\"search-box\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            <button class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
          </div><!-- search-box -->
        </div><!-- FulTechs-header-left -->
        <div class=\"slim-header-right\">
          <div class=\"dropdown dropdown-a\">
            <a href=\"\" class=\"header-notification\" data-toggle=\"dropdown\">
              <i class=\"icon ion-ios-bolt-outline\"></i>
            </a>
            <div class=\"dropdown-menu\">
              <div class=\"dropdown-menu-header\">
                <h6 class=\"dropdown-menu-title\">Activity Logs</h6>
                <div>
                  <a href=\"\">Filter List</a>
                  <a href=\"\">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class=\"dropdown-activity-list\">
                <div class=\"activity-label\">Today, December 13, 2017</div>
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">10:15am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-success\"></span></div>
                    <div class=\"col-8\">Purchased christmas sale cloud storage</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">9:48am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-danger\"></span></div>
                    <div class=\"col-8\">Login failure</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">7:29am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-warning\"></span></div>
                    <div class=\"col-8\">(D:) Storage almost full</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">3:21am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-success\"></span></div>
                    <div class=\"col-8\">1 item sold <strong>Christmas bundle</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class=\"activity-label\">Yesterday, December 12, 2017</div>
                <div class=\"activity-item\">
                  <div class=\"row no-gutters\">
                    <div class=\"col-2 tx-right\">6:57am</div>
                    <div class=\"col-2 tx-center\"><span class=\"square-10 bg-success\"></span></div>
                    <div class=\"col-8\">Earn new badge <strong>Elite Author</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              </div><!-- dropdown-activity-list -->
              <div class=\"dropdown-list-footer\">
                <a href=\"page-activity.html\"><i class=\"fa fa-angle-down\"></i> Show All Activities</a>
              </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class=\"dropdown dropdown-b\">
            <a href=\"\" class=\"header-notification\" data-toggle=\"dropdown\">
              <i class=\"icon ion-ios-bell-outline\"></i>
              <span class=\"indicator\"></span>
            </a>
            <div class=\"dropdown-menu\">
              <div class=\"dropdown-menu-header\">
                <h6 class=\"dropdown-menu-title\">Notifications</h6>
                <div>
                  <a href=\"\">Mark All as Read</a>
                  <a href=\"\">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class=\"dropdown-list\">
                <!-- loop starts here -->
                <a href=\"\" class=\"dropdown-link\">
                  <div class=\"media\">
                    <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                    <div class=\"media-body\">
                      <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href=\"\" class=\"dropdown-link\">
                  <div class=\"media\">
                    <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                    <div class=\"media-body\">
                      <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href=\"\" class=\"dropdown-link read\">
                  <div class=\"media\">
                    <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                    <div class=\"media-body\">
                      <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href=\"\" class=\"dropdown-link read\">
                  <div class=\"media\">
                    <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                    <div class=\"media-body\">
                      <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class=\"dropdown-list-footer\">
                  <a href=\"page-notifications.html\"><i class=\"fa fa-angle-down\"></i> Show All Notifications</a>
                </div>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class=\"dropdown dropdown-c\">
            <a href=\"#\" class=\"logged-user\" data-toggle=\"dropdown\">
              <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
              <span>{{ app.user.ceFirstName }}</span>
              <i class=\"fa fa-angle-down\"></i>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <nav class=\"nav\">
                <a href=\"page-profile.html\" class=\"nav-link\"><i class=\"icon ion-person\"></i> View Profile</a>
                <a href=\"page-edit-profile.html\" class=\"nav-link\"><i class=\"icon ion-compose\"></i> Edit Profile</a>
                <a href=\"page-activity.html\" class=\"nav-link\"><i class=\"icon ion-ios-bolt\"></i> Activity Log</a>
                <a href=\"page-settings.html\" class=\"nav-link\"><i class=\"icon ion-ios-gear\"></i> Account Settings</a>
                <a href=\"{{path('cesecurity_signout')}}\" class=\"nav-link\"><i class=\"icon ion-forward\"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class=\"slim-navbar\">
      <div class=\"container\">
        <ul class=\"nav\">
          <li class=\"nav-item with-sub active\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon ion-ios-paper-outline\"></i>
              <span>Mandats</span>
            </a>
            <div class=\"sub-item\">
              <ul>
                <li><a href=\"{{path('ceorder_new')}}\">Cree Mandat</a></li>
                <li><a href=\"{{path('ceorder_list')}}\">Liste Mandats</a></li>
              </ul>
            </div><!-- sub-item -->
          </li>
          <li class=\"nav-item with-sub {% block activeNav2 %}{% endblock %}\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon ion-ios-filing-outline\"></i>
              <span>Comptes</span>
            </a>
            <div class=\"sub-item\">
              <ul>
                <li><a href=\"{{path('ceaccount_new')}}\">Creer Compte</a></li>
                <li><a href=\"{{path('ceaccount_list')}}\">Liste de Comptes</a></li>
              </ul>
            </div><!-- sub-item -->
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->
\t{% block body %}
    
  {% endblock %}

    <div class=\"slim-footer\">
      <div class=\"container\">
        <p>Copyright 2018 &copy; All Rights Reserved. FulTechs CashExpress</p>
        <p>Designed by: <a href=\"fultechs.com\">FulTechs</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src=\"{{asset('lib/jquery/js/jquery.js')}}\"></script>
    <script src=\"{{asset('lib/popper.js/js/popper.js')}}\"></script>
    <script src=\"{{asset('lib/bootstrap/js/bootstrap.js')}}\"></script>
    <script src=\"{{asset('lib/jquery.cookie/js/jquery.cookie.js')}}\"></script>
    <script src=\"{{asset('lib/d3/js/d3.js')}}\"></script>
    <script src=\"{{asset('lib/rickshaw/js/rickshaw.min.js')}}\"></script>
    <script src=\"{{asset('lib/Flot/js/jquery.flot.js')}}\"></script>
    <script src=\"{{asset('lib/Flot/js/jquery.flot.resize.js')}}\"></script>
    <script src=\"{{asset('lib/peity/js/jquery.peity.js')}}\"></script>
    <script src=\"{{asset('js/slim.js')}}\"></script>

<script>
      \$(function(){
        'use strict'

        var multibar = new Rickshaw.Graph({
          element: document.querySelector('#chartMultiBar1'),
          renderer: 'bar',
          stack: false,
          max: 60,
          series: [{
            data: [
              { x: 0, y: 20 },
              { x: 1, y: 25 },
              { x: 2, y: 10 },
              { x: 3, y: 15 },
              { x: 4, y: 20 },
              { x: 5, y: 40 },
              { x: 6, y: 15 },
              { x: 7, y: 40 },
              { x: 8, y: 25 }
            ],
            color: '#065381'
          },
          {
            data: [
              { x: 0, y: 10 },
              { x: 1, y: 30 },
              { x: 2, y: 45 },
              { x: 3, y: 30 },
              { x: 4, y: 42 },
              { x: 5, y: 20 },
              { x: 6, y: 30 },
              { x: 7, y: 15 },
              { x: 8, y: 20 }
            ],
            color: '#34B2E4'
          }]
        });

        multibar.render();

        // Responsive Mode
        new ResizeSensor(\$('.slim-mainpanel'), function(){
          multibar.configure({
            width: \$('#chartMultiBar1').width(),
            height: \$('#chartMultiBar1').height()
          });
          multibar.render();
        });

      });
    </script>
    {% block javascripts %}{% endblock %}
  </body>
</html>

", "base.html.twig", "C:\\wamp64\\www\\cashExpress\\templates\\base.html.twig");
    }
}
