  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar bg-secondary sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Elhathout A.</span>
                  <span class="text-white text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <!-- dashboard -->
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <hr class="hr" />
            <!-- Albums -->
            <li class="nav-item">
              <a class="nav-link" href="albums.php">
                <span class="menu-title">Albums</span>
                <i class="mdi mdi-album menu-icon"></i>
              </a>
            </li>
            <hr class="hr" />

            <!-- Artists -->

            <li class="nav-item">
              <a class="nav-link" href="artists.php">
                <span class="menu-title">Artists</span>
                <i class="mdi mdi-account-supervisor menu-icon"></i>
              </a>
            </li>
            <hr class="hr" />

            <!-- Types(categories) -->
            <li class="nav-item">
              <a class="nav-link" href="categories.php">
                <span class="menu-title">Categories</span>
                <i class="mdi mdi-format-list-bulleted-type menu-icon"></i>
              </a>
            </li>
            <hr class="hr" />

            <!-- Admins -->
            <li class="nav-item">
              <a class="nav-link" href="admins.php">
                <span class="menu-title">Admins</span>
                <i class="mdi mdi-account-supervisor-circle menu-icon"></i>
              </a>
            </li>
            <hr class="hr" />

            <!-- Songs -->
            <li class="nav-item">
              <a class="nav-link" href="songs.php">
                <span class="menu-title">Songs</span>
                <i class="mdi mdi-playlist-music-outline menu-icon"></i>
              </a>
            </li>
            <hr class="hr" />
            <hr class="hr" />

            <!--  -->
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
           
          </ul>
        </nav>
        <!-- partial -->