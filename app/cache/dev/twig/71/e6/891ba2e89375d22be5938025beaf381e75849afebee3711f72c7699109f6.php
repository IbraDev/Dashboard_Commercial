<?php

/* SuiviVenteBundle:categorie:list.html.twig */
class __TwigTemplate_71e6891ba2e89375d22be5938025beaf381e75849afebee3711f72c7699109f6 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>Suivi Vente | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Morris chart -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- jvectormap -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Daterange picker -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t   <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body class=\"skin-blue\">
    <div class=\"wrapper\">
      
      <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("suivi_vente_admin");
        echo "\" class=\"logo\"><b>Suivi</b>Vente</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <!-- Messages: style can be found in dropdown.less-->
             
             
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/admin.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                  <span class=\"hidden-xs\">Admin</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/admin.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                    <p>
                      Admin
                      <small>Direction Ben Arous</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    
                    <div class=\"pull-right\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Déconnexion</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/img/admin.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
              <p>Admin</p>

              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> en ligne</a>
            </div>
          </div>
          <!-- search form -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
              <span class=\"input-group-btn\">
                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">Menu Principale</li>
            
            
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-edit\"></i>
                <span>Gestion Catégories</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("suivi_vente_categ");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter</a></li>
                <li><a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("suivi_vente_list_categ");
        echo "\"><i class=\"fa fa-circle-o\"></i> Lister</a></li>
               
              </ul>
            </li>
            
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-edit\"></i> <span>Gestion Offres</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Ajouter </a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Lister</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Paramétrages</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-edit\"></i> <span>Gestion Utilisateurs</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Ajouter</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Lister</a></li>
              </ul>
            </li>
            <li>
              <a href=\"#\">
                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li>
          
            
           
          
            <li class=\"header\">Option</li>
            
           
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-info\"></i> Information</a></li>
\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o text-danger\"></i>Déconnexion</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
          Gestion Catégories
            
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
            <li class=\"active\">Gestion Catégories</li>
            <li class=\"active\">Lister</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <!-- left column -->
            <div class=\"col-md-6\">
              <!-- general form elements -->
              <div class=\"box box-primary\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Liste Catégories</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <p></p>
                <form role=\"form\" method=\"Post\" action=\"\">
                  <div class=\"box-body\">
                    <div class=\"form-group\">
                      <label for=\"nom\">Nom catégorie</label>
                      
                     
                    </div>
                    <div class=\"form-group\">
                      <label for=\"description\">Description</label>
                  
                      
                    </div>
                    <div class=\"form-group\">
                      <label for=\"date\">Date création</label>
                     
                    
                    </div>
                   
                  </div><!-- /.box-body -->

                  <div class=\"box-footer\">
                     
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                  </div>
                </form>
              </div><!-- /.box -->

\t</section>
 </div>\t\t  
            
              
 <footer class=\"main-footer\">
     <div class=\"pull-right hidden-xs\">
          <b>Dashboard Commercial</b> 
        </div>\t  
            
              

        <strong>Copyright &copy; 2015 <a href=\"http://www.tunisietelecom.tn/\">Tunisie Télécom</a>.</strong>
      </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- ChartJS 1.0.1 -->
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/js/pages/dashboard2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminTemplate/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SuiviVenteBundle:categorie:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 266,  364 => 263,  358 => 260,  353 => 258,  348 => 256,  343 => 254,  338 => 252,  333 => 250,  329 => 249,  324 => 247,  319 => 245,  314 => 243,  309 => 241,  304 => 239,  184 => 122,  180 => 121,  147 => 91,  116 => 63,  107 => 57,  86 => 39,  69 => 25,  65 => 24,  59 => 21,  54 => 19,  49 => 17,  44 => 15,  39 => 13,  34 => 11,  29 => 9,  19 => 1,);
    }
}
