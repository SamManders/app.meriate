<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand" href="manage.php"><img src="../assets/img/meriate-logo-white.svg" alt="Meriate Logo"></a>
  <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
  <!-- Navbar Search-->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
      <!--<input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
      <div class="input-group-append">
        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>-->
      </div>
    </div>
  </form>

  <!-- Navbar-->
  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="#">Activity Log</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="account/logout.php">Logout</a>
      </div>
    </li>
  </ul>
</nav>



<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Core</div>
          <a class="nav-link" href="manage.php">
            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
            Dashboard
          </a>
          <a class="nav-link" href="surveys.php">
            <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
            Surveys
          </a>
          <a class="nav-link" href="employees.php">
            <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
            Employees
          </a>


          <div class="sb-sidenav-menu-heading">Extra's</div>
          <a class="nav-link" href="https://meriate.com" target="_blank">
            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
            Documentation
          </a>
          <a class="nav-link" href="components.php">
            <div class="sb-nav-link-icon"><i class="fas fa-toolbox"></i></div>
            Components
          </a>


          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Pages
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                Authentication
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="/account/login.php">Login</a>
                  <a class="nav-link" href="/account/register.php">Register</a>
                  <a class="nav-link" href="/account/password.php">Forgot Password</a>
                </nav>
              </div>
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                Error
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="401.html">401 Page</a>
                  <a class="nav-link" href="404.html">404 Page</a>
                  <a class="nav-link" href="500.html">500 Page</a>
                </nav>
              </div>
            </nav>
          </div>

        </div>
      </div>
      <div class="sb-sidenav-footer">
        <div class="small text-muted">Copyright © Meriate</div>
      </div>
    </nav>
  </div>
