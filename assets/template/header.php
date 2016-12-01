<!-- Navigation Bar-->
<header id="topnav">
  <div class="topbar-main">
    <div class="container">

      <!-- LOGO -->
      <div class="topbar-left">
        <a href="index.html" class="logo"><span>N o r t h <span> L i f e</span></span></a>
      </div>
      <!-- End Logo container-->
      <div class="menu-extras">
        <div class="menu-item">
          <!-- Mobile menu toggle-->
          <a class="navbar-toggle">
            <div class="lines">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </a>
          <!-- End mobile menu toggle-->
        </div>
      </div>

    </div>
  </div>

  <div class="navbar-custom">
    <div class="container">
      <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
          <li class="active">
            <a href="index.html" class="active"><i class="zmdi zmdi-view-dashboard"></i> <span><?php if ($connected == true) { echo 'Dashboard';} else { echo 'Login'; } ?></span> </a>
          </li>
          <li class="has-submenu"><a <?php if ($connected == true) { echo 'href="index.php"';} else { echo 'href="get_access.php"'; } ?>><i class="zmdi zmdi-layers"></i><span><?php if ($connected == true) { echo 'Logout';} else { echo 'Get access'; } ?></span> </a></li>
              </ul>
              <!-- End navigation menu  -->
            </div>
          </div>
        </div>
      </header>
      <!-- End Navigation Bar-->
