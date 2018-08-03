<!DOCTYPE html>

<html>
  
  @include('layouts.head')
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ URL::to('/inicio') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>IOT</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sistema IOT</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Usuario</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      Software
                      <small>MI pagina web</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/usuario') }}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Calendario</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Hardware</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Ubicacion</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dispositivos</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Sensores</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Actuadores</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Datos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{ URL::to('/mediciones/rpt_temperatura') }}"><i class="fa fa-circle-o"></i> Reportes</a>
                </li>
                <li>
                  <a href="{{ URL::to('/mediciones/rpt_temperatura_live') }}"><i class="fa fa-circle-o"></i> Reporte Live</a>
                </li>
              </ul>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>      

      @yield('contenido')

    </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.0
      </div>
      <strong>Copyright &copy; 2018-2020 <a href="http://peru.chapters.comsoc.org/">ComsocPERU</a>.</strong> All rights reserved.
    </footer> 

  </body>

  </html>