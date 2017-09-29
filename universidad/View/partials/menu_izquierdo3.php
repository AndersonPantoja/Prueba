<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile">
        <div class="profile_pic">
          <img src="images/user.png" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Bienvenido a tu</span>
          <h2>Universidad</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li>
            <li>
              <a href="index.php">
              <i class="fa fa-home"></i>Inicio<span class="fa child_menu"></span></a>
            </li>
            <li>
              <a href="index.php?modulo=Curso&controlador=curso&funcion=inscripcion">
              <i class="fa fa-check-square-o"></i>Inscripcion<span class="fa child_menu"></span></a>
            </li>
            <li>
              <a href="index.php?modulo=Curso&controlador=curso&funcion=listar_mce">
              <i class="fa fa-book"></i>Mis cursos<span class="fa child_menu"></span></a>
            </li>
          </ul>
        </div>
        <div class="menu_section">
          <h3>Live On</h3>
          <ul class="nav side-menu">
          </ul>
        </div>
        </div>
        </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      
      <!-- /menu footer buttons -->
  </div>
  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="images/user.png" alt=""><?php echo  $_SESSION['nombre'];  ?>
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a href="index.php?modulo=Usuario&controlador=usuario&funcion=cerrarSesion"><i class="fa fa-sign-out pull-right"></i>Salir</a></li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </div>
  
        <!-- /top navigation -->