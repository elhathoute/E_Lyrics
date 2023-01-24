<?php
session_start();
require_once('../songController.php');
require_once('../artistController.php');
require_once('../albumController.php');
require_once('../typeController.php');

$songs = new SongController();
$resultSong = $songs->getAllSong();

// artists
$artists = new ArtistController();
$resultArtist = $artists->getAllArtists();
// albums
$albums = new AlbumController();
$resultAlbum = $albums->getAllAlbums();
// types
$types = new TypeController();
$resultType = $types->getAllTypes();
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
                <button class="btn btn-block btn-lg btn-gradient-success px-3"  data-bs-toggle="modal" data-bs-target="#add-song">
                <i class="mdi mdi-plus-circle-outline"></i> Add Song

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
                            class="btn btn-info p-2" 
                            id="btn-show-more-<?= $songs['id'];?>" 
                            onclick="showMore(<?= $songs['id'];?>)"><i class="fa fa-plus"></i>
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
            <!-- modal add song -->
            
<div class="modal fade " id="add-song" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Song </h5>
        <button type="button" class="close bg-secondary rounded-pill"  data-bs-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card">
      <div class="card-body">
                   
                    <form class="form-sample" method="POST" action="">
                          <div class="row">
                            <div class="col-md-12 alert alert-success"  role="alert" id="response-add-song">
                              
                            </div>
                          </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class=" col-form-label">Date</label>
                            <div class="col-sm-12">
                              <input type="date" name="date" id="date" class="form-control is-invalid form-control-validate">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-form-label">Titre</label>
                            <div class="col-sm-12">
                              <input type="text" name="titre" id="titre" class="form-control is-invalid form-control-validate">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class=" col-form-label">Parole_ar</label>
                            <div class="col-sm-12">
                            <div class="form-group">
                                   
                                    <textarea class="form-control is-invalid form-control-validate" id="parole-ar" name="parole-ar" rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class=" col-form-label">Parole_fr</label>
                            <div class="col-sm-12">
                            <div class="form-group">
                                   
                                    <textarea class="form-control is-invalid form-control-validate" id="parole-fr" name="parole-fr" rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class=" col-form-label">Parole_eng</label>
                            <div class="col-sm-12">
                            <div class="form-group">
                                   
                                    <textarea class="form-control is-invalid form-control-validate" id="parole-eng" name="parole-eng" rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                  
                        <div class="col-md-6">
                        
                          <div class="form-group row">
                            <label class="col-form-label">Admin</label>
                            <div class="col-sm-12">
                              <select class="form-control " name="admin">
                                <option selected  id="admin-option" value="<?= $_SESSION['success-login'][0]['id'];?>"><?= $_SESSION['success-login'][0]['full_name'];?></option>
                             
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class=" col-form-label">Album : <span class="text-secondary">(Optional)</span> </label>
                            <div class="col-sm-12">
                              <select class="form-control " name="album">
                                <option value="NULL" selected>Select Album</option>
                                <?php foreach($resultAlbum as $album){?>
                                <option value="<?= $album['id'];?>"><?= $album['full_name'];?></option>
                               
                                <?php } ?>
                              </select>
                            </div>
                          </div>

                          


                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label class=" col-form-label">Artist</label>
                            <div class="col-sm-12">
                              <select class="form-control is-invalid form-control-validate" name="artist" id="artist-form">
                                <option value="NULL" selected>Select Artist</option>{?>
                                <?php foreach($resultArtist as $artist){?>
                                <option value="<?= $artist['id'];?>"><?= $artist['full_name'];?></option>
                               
                                <?php } ?>
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-form-label">Type</label>
                            <div class="col-sm-12">
                              <select class="form-control is-invalid form-control-validate" name="type" id="type-form">
                                <option value="NULL" selected>Select Type</option>
                                <?php foreach($resultType as $type){?>
                                <option value="<?= $type['id'];?>"><?= $type['full_name'];?></option>
                               
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <button disabled title="submit-form"  type="submit" class=" btn btn-gradient-primary me-2" id="btn-submit">Submit</button>
                        <button title="reset-form" type="button" class="btn btn-gradient-danger btn-fw" id="reset-form"><i class="mdi mdi-reload"></i></button>

                        </div>
                    </div>
                   
                    <hr class="hr"/>
                  
                    </form>
                  </div>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
        
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
   
//    modal show more information
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
  $(document).ready(function(){
  //  btn reset
  $('#reset-form').click(function(){
    $('form').trigger("reset");

  })
   
    // btn click
  $('#btn-submit').click(function(e){
 
  setTimeout(function(){

    $('#btn-submit').prop('disabled',false);
   
       $('form').trigger("reset");
      
       $('#btn-submit').html('Submit');


    },8000);
    $('form').submit();
    $('#btn-submit').prop('disabled',true);
    $('#btn-submit').html('<i class="fas fa-spinner fa-spin"></i>&nbsp; wait');

  
});


// validate form
$('.form-control-validate').on('keyup change click dblclick blur focus',function(){
// console.log($('#type').val());
// enable btn
  $('#btn-submit').prop("disabled", true);
  if(
    $('#date').val()!=''&&
    $('#titre').val()!='' &&
    $('#artist-form').val()!='NULL' &&
    $('#type-form').val()!='NULL' 
  ){
  $('#btn-submit').prop("disabled", false);
  }
   
  if(
    (($(this).val())!='') && (($(this).val())!='NULL')
    
  ) {
   $(this).removeClass('is-invalid');
   $(this).addClass('is-valid');
 
  }else{
    $('#btn-submit').hover(function(e){
    
   })
   $(this).addClass('is-invalid');
    $(this).removeClass('is-valid');
  }
})

//    send data to the server
    $('form').submit(function(e) {
    e.preventDefault(); 
    var form_data = $(this).serialize(); 
    $.ajax({
      type: 'POST',
      url: 'addSongController.php', 
      data: form_data,
      success: function(reponse_success) {
        $('#response-add-song').text(reponse_success);
      },
      error: function(error) {
        console.log('Error submitting form: ' +error);
      }
    });
  });

});
  </script>
</html>