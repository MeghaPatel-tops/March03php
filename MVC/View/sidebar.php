 <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="View/dist/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Ecommerce</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false">
              <li class="nav-item menu-open">
                <a href="<?php echo $GLOBALS['baseurl']?>" class="nav-link active">
                 
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                
              </li>
              <li class="nav-item menu-open">
                <a href="<?php echo $GLOBALS['baseurl']?>users" class="nav-link active">
                 
                  <p>
                    Users
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                
              </li>
              <li class="nav-item menu-open">
                <a href="<?php echo $GLOBALS['baseurl']?>product" class="nav-link active">
                 
                  <p>
                    Product
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                
              </li>
              <li class="nav-item menu-open">
                <a href="<?php echo $GLOBALS['baseurl']?>category" class="nav-link active">
                 
                  <p>
                    Category
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                
              </li>
              
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>