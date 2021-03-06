<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('index.php/home')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DenunciAê!</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DenunciAê!</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('assets/img/logo.gif')?>" class="user-image" alt="User Image">        

              <span class="hidden-xs">DenunciAê!</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">          
                <img src="<?= base_url('assets/img/logo.gif')?>" class="user-image" alt="User Image">

                <p>
                  DenunciAê!
                  <small><u><b>Administrador</b></u></small>
                  <small>Membro desde 2017</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
      <div class="user-panel">
        <div class="pull-left image">        
          <img src="<?= base_url('assets/img/logo.gif')?>" class="user-image" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>DenunciAê!</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu de Navegação</li>
        <li>
          <a href="<?= base_url('index.php/home')?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>            
          </a>          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-child"></i>
            <span>Solicitações</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">              
            <li><a href="<?= base_url('index.php/children/search')?>"><i class="fa fa-search"></i> Buscar</a></li>            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle"></i>
            <span>Usuários</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">            
            <li><a href="<?= base_url('index.php/user/search')?>"><i class="fa fa-search"></i> Buscar</a></li>            
          </ul>
        </li>

        
        <li>
          <a href="<?= base_url('index.php/apoio')?>">
            <i class="fa fa-info-circle"></i> <span>Apoio</span>            
          </a>          
        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>