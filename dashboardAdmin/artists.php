<?php
session_start();
require_once('../artistController.php');

$artists = new ArtistController();
$resultArtists = $artists->getAllArtists();


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
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-supervisor menu-icon"></i>


                </span>Artists
              </h3>
             
            
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class=" d-flex justify-content-center pt-2 border-3 rounded-pill bg-secondary align-items-center">
                    <h4 class="card-title text-white">Management-Artists</h4>

                </div>
             
                    </div>
                    <div class="table-responsive">
                      <table id="table-admin" class="table">
                        <thead>
                         
                        <tr class="bg-dark text-white">
                            <th>Id</th>
                            <th> FullName </th>
                            <th> Image </th>
                           
                           
                          </tr>
                        </thead>
                        <tbody class="bg-secondary text-white">
                          <tr>
                          <?php foreach($resultArtists as $artists){?>
                                <td><?= $artists['id']; ?></td>
                            <td> <?=$artists['full_name']; ?></td>
                            <td>
                              <img src="assets/images/faces/<?= $artists['photo']?>" class="me-2" alt="image"> 
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- footer -->
            <?php require_once('footer.php');?>
            <!-- end wrapper -->
            </div>
            <!-- endmin-panel -->
            </div>
            </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  <?php require_once('scriptsPlugins.php');?>
  </body>
  
</html>