<!DOCTYPE html>
<html lang="en">
  <head>
   <?php require_once('links.php'); ?>
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- navbar -->
       <?php require_once('navbar.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <?php require_once('sidebar.php');?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
            
            </div>
            <div class="row">
              <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                   
                    <h4 class="font-weight-normal mb-3"><span class="mr-4">Admins</span> <i class="mdi mdi-account-supervisor-circle menu-icon"></i>
                    </h4>
                    <h2 class="mb-5">15</h2>
                   
                  </div>
                </div>
              </div>
              <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                   
                    <h4 class="font-weight-normal mb-3">Albums </span> <i class="mdi mdi-album menu-icon"></i>
                    </h4>
                    <h2 class="mb-5">45</h2>
                   
                  </div>
                </div>
              </div>
              <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Artists <span> <i class="mdi mdi-account-supervisor menu-icon"></i></span>
                    </h4>
                    <h2 class="mb-5">95</h2>
                   
                  </div>
                </div>
              </div>

              <div class="col-md-6 stretch-card grid-margin ">
                <div class="card bg-gradient-secondary   text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Categories <span> <i class="mdi mdi-format-list-bulleted-type menu-icon"></i></span>
                    </h4>
                    <h2 class="mb-5">10</h2>
                   
                  </div>
                </div>
              </div>

              <div class="col-md-6 stretch-card grid-margin ">
                <div class="card bg-gradient-dark   text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Songs <span> <i class="mdi mdi-playlist-music-outline menu-icon"></i></span>
                    </h4>
                    <h2 class="mb-5">16</h2>
                   
                  </div>
                </div>
              </div>

            </div>
           
            
              
           
       
            </div>
              <!-- partial:partials/_footer.html -->
         <?php require_once('footer.php');?>
          </div>
          <!-- content-wrapper ends -->
        
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  <?php require_once('scriptsPlugins.php');?>
  </body>
</html>