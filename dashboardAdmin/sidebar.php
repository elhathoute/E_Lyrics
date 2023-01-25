  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar bg-info sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                <img src="assets/images/faces/<?= $_SESSION['success-login'][0]['photo'];?>" alt="image">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?= $_SESSION['success-login'][0]['full_name'];?></span>
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
      
           
          </ul>
        </nav>
        <!-- partial -->