<?php
session_start();
require_once('../songController.php');

$songs = new SongController();
$resultSong = $songs->getAllSong();




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
                  <i class="mdi mdi-account-supervisor-circle"></i>
                </span>
                Songs
              </h3>
              <div class="">
                <button class="btn btn-block btn-lg btn-gradient-success px-3">
                + Add Song

                </button></div>
            
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class=" d-flex justify-content-center pt-2 border-3 rounded-pill bg-secondary align-items-center">
                    <h4 class="card-title text-white">Management-Songs</h4>

                </div>
             
                    </div>
                    <div class="table-responsive">
                      <table id="table-song" class="table table-bordered">
                        <thead>
                         
                          <tr class="table-secondary ">
                            <th>Id</th>
                            <th> date_created </th>
                            <th> titre </th>
                            <th> parole_ar </th>
                            <th> parole_fr </th>
                            <th> parole_eng</th>
                            <th hidden>Autres</th>
                            <th > Action</th>

                           
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach($resultSong as $songs){?>
                          <tr class="bg-dark text-white">
                      
                            <td><?= $songs['id'] ?></td>
                            <td
                            id="data-attr-date-<?= $songs['id'] ?>"
                            data-date="<?= $songs['date_created'] ?>"
                            ><?= $songs['date_created'] ?></td>
                            <td><?= $songs['titre'] ?></td>
                            
                            <td title="<?= $songs['parole_ar']; ?>"><?= substr($songs['parole_ar'], 0, 10); ?></td>
                            <td title="<?= $songs['parole_fr']; ?>"><?= substr($songs['parole_fr'], 0, 10);?></td>
                            <td title="<?= $songs['parole_eng']; ?>"><?= substr($songs['parole_eng'], 0, 10); ?></td>
                              
                            <td 
                            id="data-attr-<?= $songs['id'] ?>"
                            data-admin="<?=$songs['admin']?>"
                            data-album="<?=$songs['album']?>"
                            data-artist="<?=$songs['artist']?>"
                            data-type="<?=$songs['type']?>"
                             hidden></td>
                          
                            <td class="d-flex align-items-center justify-content-center">
                            <a title="supprimer" class="btn btn-danger p-2 me-1" href="#"><i class="fa fa-trash"></i></a>
                            <a title="edit" class="btn btn-success p-2 me-1" href="#"><i class="fa fa-edit"></i></a>
                            <button title="show More" 
                            type="button"  data-bs-toggle="modal" data-bs-target="#show-more"
                            class="btn btn-info p-2" id="btn-show-more-<?= $songs['id'];?>" onclick="showMore(<?= $songs['id'];?>)"><i class="fa fa-plus"></i>
                        </button>
                          
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
<!-- modal show more option -->

<div class="modal fade" id="show-more" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Song Details</h5>
        <button type="button" class="close bg-secondary rounded-pill"  data-bs-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card">
                  <div class="card-body">
                 
                    <div class="template-demo">
                        <div class="text-center rounded bg-gradient-primary p-3 mb-3" id="date-created"></div>
                        <div class="text-decoration-underline mb-3 badge bg-dark">Lyrics_AR:</div>
                      <div class="font-weight-bold text-secondary" id="parole-arabe"></div>
                     <hr>
                     <div class="text-decoration-underline mb-3 badge bg-dark">Lyrics_FR:</div>
                      <div class="font-weight-bold text-secondary" id="parole-fr"></div>
                     <hr>
                     <div class="text-decoration-underline mb-3 badge bg-dark">Lyrics_EN:</div>
                      <div class="font-weight-bold text-secondary" id="parole-eng"></div>
                     <hr>
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="badge bg-secondary" id="admin"></div>
                        <div class="badge bg-info" id="album"></div>
                        <div class="badge bg-success" id="artist"></div>
                        <div class="badge bg-warning" id="type"></div>
                     </div>
                    </div>
                  </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    <!-- container-scroller -->
  <?php require_once('scriptsPlugins.php');?>
  </body>
  <script>
   
    function showMore(i){
    
    $('#date-created').text($('#data-attr-date-'+i).attr('data-date'));
    
    $('#parole-arabe').text($('#btn-show-more-'+i).parent().parent().children()[3].title);
    $('#parole-fr').text($('#btn-show-more-'+i).parent().parent().children()[4].title);
    $('#parole-eng').text($('#btn-show-more-'+i).parent().parent().children()[5].title);
    // 

    $('#admin').text($('#data-attr-'+i).attr('data-admin'));
    $('#album').text($('#data-attr-'+i).attr('data-album'));
    $('#artist').text($('#data-attr-'+i).attr('data-artist'));
    $('#type').text($('#data-attr-'+i).attr('data-type'));
    }
  </script>
</html>