<?php
session_start();

require_once('../adminController.php');
require_once('../songController.php');
require_once('../albumController.php');
require_once('../typeController.php');
require_once('../artistController.php');
// count Admin
$admin = new AdminController();
$adminCount = $admin->CountAdmin();
// Count Song
$song = new SongController();
$songCount = $song->CountSong();
// count Album
$album = new AlbumController();
$albumCount = $album->CountAlbum();
// artists
$artist = new ArtistController();
$artistCount = $artist->CountArtist();
// types
$type = new TypeController();
$typeCount = $type->CountType();

?>
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
          <div class="">
             
              <!-- alert -->
          <?php  if(isset($_SESSION['success-login-message'])){?>
            <div class="alert text-center alert-success" id="alert-success" role="alert">
              
                 <?=  $_SESSION['success-login-message'];?> , <span class="font-weight-bold fs-6 text-capitalize"><?=
                   ( $_SESSION['success-login'][0]['full_name']);
                 unset($_SESSION['success-login-message']);
                   ?></span> 
                  </div>
                 
             
              <?php } ?>
            </div>

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
                    <h2 data-admin="<?= $adminCount; ?>" id="admin-count" class="mb-5">  <a class="text-decoration-none fs-1" href="admins.php">
                      <!-- <?= $adminCount; ?> -->
                      </a></h2>
                    <script>
                // admin Count
                let adminCount=0;
                 setInterval(() => {
                  if(adminCount<$('#admin-count').attr('data-admin')){
                    adminCount++;
                  }
               $('#admin-count').html(adminCount);
                      }, 1000);
                      // Album Count
                      let albumCount=0;
                 setInterval(() => {
                  if(albumCount<$('#album-count').attr('data-album')){
                    albumCount++;
                  }
               $('#album-count').html(albumCount);
                      }, 1000);
                    // Artist Count
                    let artistCount=0;
                 setInterval(() => {
                  if(artistCount<$('#artist-count').attr('data-artist')){
                    artistCount++;
                  }
               $('#artist-count').html(artistCount);
                      }, 1000);
                  // type Count
                  let typeCount=0;
                 setInterval(() => {
                  if(typeCount<$('#type-count').attr('data-type')){
                    typeCount++;
                  }
               $('#type-count').html(typeCount);
                      }, 1000);
                      // song
                      let songCount=0;
                 setInterval(() => {
                  if(songCount<$('#song-count').attr('data-song')){
                    songCount++;
                  }
               $('#song-count').html(songCount);
                      }, 1000);
                  
                      
                    </script>
                    
                   
                  </div>
                </div>
              
              </div>
              
              <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                   
                    <h4 class="font-weight-normal mb-3">Albums </span> <i class="mdi mdi-album menu-icon"></i>
                    </h4>
                    <h2 data-album="<?= $albumCount;?>" id="album-count" class="mb-5"><a class="text-decoration-none fs-1" href="albums.php">
                      <!-- <?= $albumCount;?> -->
                    </a></h2>
                   
                  </div>
                </div>
              </div>
              <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Artists <span> <i class="mdi mdi-account-supervisor menu-icon"></i></span>
                    </h4>
                    <h2 data-artist="<?= $artistCount;?>" id="artist-count" class="mb-5"><a class="text-decoration-none fs-1" href="artists.php">
                      <!-- <?= $artistCount;?> -->
                    </a></h2>
                   
                  </div>
                </div>
              </div>

              <div class="col-md-6 stretch-card grid-margin ">
                <div class="card bg-gradient-secondary   text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Categories <span> <i class="mdi mdi-format-list-bulleted-type menu-icon"></i></span>
                    </h4>
                    <h2 data-type="<?= $typeCount;?>" id="type-count" class="mb-5"><a class="text-decoration-none fs-1" href="categories.php">
                      <!-- <?= $typeCount;?> -->
                    </a></h2>
                   
                  </div>
                </div>
              </div>

              <div class="col-md-6 stretch-card grid-margin ">
                <div class="card bg-gradient-dark   text-white">
                  <div class="card-body">
                    <h4 class="font-weight-normal mb-3">Songs <span> <i class="mdi mdi-playlist-music-outline menu-icon"></i></span>
                    </h4>
                    <h2 data-song="<?= $songCount; ?>" id="song-count" class="mb-5"><a class="text-decoration-none fs-1" href="songs.php">
                      <!-- <?= $songCount ?> -->

                    </a></h2>
                   
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

  <?php require_once('scriptsPlugins.php');?>
  </body>
</html>