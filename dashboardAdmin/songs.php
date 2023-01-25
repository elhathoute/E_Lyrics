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
   <style>
    input:invalid {
  border: 2px dashed red;
}

input:invalid:required {
  background-color: orange;
  color:white;
}

input:valid {
  border: 3px solid green;
  border-radius:3px;
}


    </style>
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
                <i class="mdi mdi-playlist-music-outline menu-icon"></i>
                </span>
                Songs
              </h3>
            <!-- alert danger alert Success --> 
            <?php if(isset($_SESSION['success-error-message']) && isset($_SESSION['session-etat'])){ ?>
            <div class='alert alert-<?php if($_SESSION["session-etat"]==0)
             { echo "danger";}
             else{echo "success";}?>' 
             <?='w-75 alert-dismissible fade show mt-3 me-2'?>
              role="alert">
                <strong>Hi !...... </strong><?=
                 $_SESSION['success-error-message'];
                unset( $_SESSION['success-error-message']);
                 ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>
            
            
           
        

              <div class="">
                <button class="btn btn-block btn-lg btn-gradient-success px-3"  data-bs-toggle="modal" data-bs-target="#add-song">
                <i class="mdi mdi-plus-circle-outline"></i> Add Song

                </button>
              </div>
            
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
                         
                          <tr class="table-dark text-white">
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
                          <tr class="bg-secondary text-white">
                      
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
                            <a title="supprimer" class="btn btn-danger p-2 me-1" 
                            href="supprimerSong.php?id=<?= $songs['id'];?> "
                            onclick= " return confirm('Are you sure to delete?');"><i class="fa fa-trash"></i></a>
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
                   
                    <form class="form-sample bg-white" method="POST" action="addSongController.php">
                    <div class="row">
                    <div class="col-md-4">
                    <button title="show/hide" type="button" class="btn btn-warning mx-1 mb-2 mt-1" id="toggle-icon-default"><i class='fa fa-chevron-up' id="fawsome-default"></i></button>
                    </div>
                    </div>
                  <div class="row" id="new-add-form-default">
                    
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class=" col-form-label">Song No:</label>
                            <div class="col-sm-12">
                         <input type="text" class="form-control song-number" name="song-number[]" id="song-number" value="1" readonly="">

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class=" col-form-label">Date : <span class="text-danger">(*)</span> </label>
                            <div class="col-sm-12">
                              <input type="date" name="date[]" id="date" class="form-control  form-control-validate" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-form-label">Titre : <span class="text-danger">(*)</span></label>
                            <div class="col-sm-12">
                              <input type="text" name="titre[]" id="titre" class="form-control  form-control-validate"  required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class=" col-form-label">Parole_ar : (Optional) </label>
                            <div class="col-sm-12">
                            <div class="form-group">
                                   
                                    <textarea class="form-control bg-dark text-white form-control-validate" id="parole-ar" name="parole-ar[]" readonly rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class=" col-form-label">Parole_fr : (Optional) </label>
                            <div class="col-sm-12">
                            <div class="form-group">
                                   
                                    <textarea class="form-control bg-secondary text-white form-control-validate" id="parole-fr" name="parole-fr[]" rows="10" ></textarea>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class=" col-form-label">Parole_eng : (Optional)</label>
                            <div class="col-sm-12">
                            <div class="form-group">
                                   
                                    <textarea class="form-control bg-dark text-white form-control-validate" id="parole-eng" name="parole-eng[]" readonly rows="10"></textarea>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                  
                        <div class="col-md-6">
                        
                          <div class="form-group row">
                            <label class="col-form-label">Admin : <span class="text-danger">(*)</span> </label>
                            <div class="col-sm-12">
                              <select class="form-control " name="admin[]" id="admin">
                                <option selected  id="admin-option" value="<?= $_SESSION['success-login'][0]['id'];?>"><?= $_SESSION['success-login'][0]['full_name'];?></option>
                             
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class=" col-form-label">Album : <span class="text-secondary">(Optional)</span> </label>
                            <div class="col-sm-12">
                              <select class="form-control " name="album[]" id="album">
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
                            <label class=" col-form-label">Artist : <span class="text-danger">(*)</span></label>
                            <div class="col-sm-12">
                              <select class="form-control bg-warning text-white form-control-validate" name="artist[]" id="artist-form" >
                                <option value="NULL"  selected>Select Artist</option>{?>
                                <?php foreach($resultArtist as $artist){?>
                                <option value="<?= $artist['id'];?>"><?= $artist['full_name'];?></option>
                               
                                <?php } ?>
                              </select>
                              <div class="invalid-feedback">Please select Artist</div>
                              </div>
                            
                          </div>

                          <div class="form-group row">
                            <label class="col-form-label">Type : <span class="text-danger">(*)</span></label>
                            <div class="col-sm-12">
                              <select class="form-control bg-warning text-white form-control-validate" name="type[]" id="type-form">
                                <option value="NULL" selected>Select Type</option>
                                <?php foreach($resultType as $type){?>
                                <option value="<?= $type['id'];?>"><?= $type['full_name'];?></option>
                               
                                <?php } ?>
                              </select>
                              <div class="invalid-feedback">Please select Type</div>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      </div>
                      <!-- next div -->
                      <div id="next"></div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <button  title="submit-form"  type="submit" name="submit" class=" btn btn-gradient-primary me-2" id="btn-submit">Submit</button>
                        <button type="button" name="addrow" id="addrow" class="btn btn-success pull-right">Add New Row</button>
                        </form>
                        <!-- <button title="reset-form" type="button" class="btn btn-gradient-danger btn-fw" id="reset-form"><i class="mdi mdi-reload"></i></button> -->

                        </div>
                    </div>
                    
                    <!-- <hr class="hr"/> -->
                  
                    
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

<div class="modal fade" id="show-more"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <div class="font-weight-bold text-secondary" id="parole-ar-more"></div>
                     <hr>
                     <div class="text-decoration-underline mb-3 badge bg-dark">Lyrics_FR:</div>
                      <div class="font-weight-bold text-secondary" id="parole-fr-more"></div>
                     <hr>
                     <div class="text-decoration-underline mb-3 badge bg-dark">Lyrics_EN:</div>
                      <div class="font-weight-bold text-secondary" id="parole-eng-more"></div>
                     <hr>
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="badge bg-secondary" id="admin-more"></div>
                        <div class="badge bg-info" id="album-more"></div>
                        <div class="badge bg-success" id="artist-more"></div>
                        <div class="badge bg-warning" id="type-more"></div>
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
    
    $('#parole-ar-more').text($('#btn-show-more-'+i).parent().parent().children()[3].title);
    $('#parole-fr-more').text($('#btn-show-more-'+i).parent().parent().children()[4].title);
    $('#parole-eng-more').text($('#btn-show-more-'+i).parent().parent().children()[5].title);
    // 

    $('#admin-more').text($('#data-attr-'+i).attr('data-admin'));
    $('#album-more').text($('#data-attr-'+i).attr('data-album'));
    $('#artist-more').text($('#data-attr-'+i).attr('data-artist'));
    $('#type-more').text($('#data-attr-'+i).attr('data-type'));
    
  }

  $(document).ready(function(){
    $('#addrow').click(function(){
      // disabled btn submit 
  // $('#btn-submit').prop("disabled", true);

//get lenght of forms
      var length_form = $('.song-number').length;
      // increase forms by adding 1
      var i = (length_form)+parseInt(1);
      console.log(i)

       var new_form = $('#next').append(`
       <div class="row">
      <div class="col-md-4">
       <button title="show/hide" type="button" class="btn btn-warning mx-1 mb-2" id="toggle-icon`+i+`"><i class='fa fa-chevron-up' id="fawsome`+i+`"></i></button>
       </div>
       </div>
 <div class="row" id="new-add-form`+i+`">
<div class="row">
<div class="col-md-4">
  <div class="form-group row">
    <label class=" col-form-label">Song No:</label>
    <div class="col-sm-12">
 <input type="text" class="form-control song-number" name="song-number[]" id="song-number" value="`+i+`" readonly="">

    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group row">
    <label class=" col-form-label">Date</label>
    <div class="col-sm-12">
      <input type="date" name="date[]" id="date`+i+`" class="form-control  form-control-validate"  required>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group row">
    <label class="col-form-label">Titre</label>
    <div class="col-sm-12">
      <input type="text" name="titre[]" id="titre`+i+`" class="form-control  form-control-validate" required>
    

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
           
            <textarea class="form-control bg-dark text-white form-control-validate" id="parole-ar`+i+`" name="parole-ar[]" rows="10" readonly></textarea>
        </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group row">
    <label class=" col-form-label">Parole_fr</label>
    <div class="col-sm-12">
    <div class="form-group">
           
            <textarea class="form-control bg-secondary text-white  form-control-validate" id="parole-fr`+i+`" name="parole-fr[]" rows="10" ></textarea>
        </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group row">
    <label class=" col-form-label">Parole_eng</label>
    <div class="col-sm-12">
    <div class="form-group">
           
            <textarea class="form-control  bg-dark text-white  form-control-validate" id="parole-eng`+i+`" name="parole-eng[]" rows="10" readonly></textarea>
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
      <select class="form-control " name="admin[]" id="admin`+i+`">
        <option selected  id="admin-option" value="<?= $_SESSION['success-login'][0]['id'];?>"><?= $_SESSION['success-login'][0]['full_name'];?></option>
     
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class=" col-form-label">Album : <span class="text-secondary">(Optional)</span> </label>
    <div class="col-sm-12">
      <select class="form-control " name="album[]" id="album`+i+`">
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
      <select class="form-control bg-warning text-white  form-control-validate" name="artist[]" id="artist-form`+i+`">
        <option value="NULL" selected>Select Artist</option>{?>
        <?php foreach($resultArtist as $artist){?>
        <option value="<?= $artist['id'];?>"><?= $artist['full_name'];?></option>
       
        <?php } ?>
      </select>
      <div class="invalid-feedback">Please select Artist</div>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-form-label">Type</label>
    <div class="col-sm-12">
      <select class="form-control bg-warning text-white form-control-validate" name="type[]" id="type-form`+i+`">
        <option value="NULL" selected>Select Type</option>
        <?php foreach($resultType as $type){?>
        <option value="<?= $type['id'];?>"><?= $type['full_name'];?></option>
       
        <?php } ?>
      </select>
      <div class="invalid-feedback">Please select Type</div>

    </div>
  </div>
</div>
</div>
<input type="button" class="btnRemove`+i+`  btn btn-gradient-danger mb-3 mx-4 w-25" value="Remove"/>

</div>
`);
// Removing form
$('body').on('click','.btnRemove'+i,function() {
       $(this).closest('div').remove();
       $('#toggle-icon'+i).remove();
 
  });
  // translate new form
  $('#parole-fr'+i).keyup(function() {

// get value of input of text area french

    let parole_fr =  $(this).val();
// translate from fr to arabic

   let url_fr_ar  = `https://api.mymemory.translated.net/get?q=${parole_fr}&langpair=fr|ar`;

    fetch(url_fr_ar).then(res =>res.json()).then(
      data=>{
        $('#parole-ar'+i).val(data.responseData.translatedText);
        // console.log(data.responseData.translatedText);
      }
    );
// translate from fr to english
   let url_fr_eng  = `https://api.mymemory.translated.net/get?q=${parole_fr}&langpair=fr|en`;

   fetch(url_fr_eng).then(res =>res.json()).then(
      data=>{
        $('#parole-eng'+i).val(data.responseData.translatedText);
        // console.log(data.responseData.translatedText);
      }
    );

   	
   
  });
   // validate form
   $("form").submit(function(){
      
      if(
        $('#artist-form'+i).val()!='NULL' &&
        $('#type-form'+i).val()!='NULL'
      ){
        return true;
        // alert('active modal');

      }else{
        alert('Attention Some inputs Are required!');
        $('#artist-form'+i).addClass('is-invalid');
        $('#type-form'+i).addClass('is-invalid');
        return false;  
      }
    });


  // validate form

// $('.form-control-validate').on('keyup change click dblclick blur focus',function(){
  
// // if($('#btn-submit').attr('disabled')=='disabled'){
// //   $('#btn-submit').prop("disabled", false);

// // }
// // if($('#btn-submit').attr('disabled')!='disabled'){
// //   $('#btn-submit').prop("disabled", true);

// // }


// if(
//   (($(this).val())!='') && (($(this).val())!='NULL')
  
// ) {
//  $(this).removeClass('is-invalid');
//  $(this).addClass('is-valid');

// }else{
  
//   $(this).addClass('is-invalid');
//   $(this).removeClass('is-valid');
// }
// });

// New FOrm slide toggle
$('#toggle-icon'+i).click(function(){
  
  $('#new-add-form'+i).slideToggle(2000);

if($('#fawsome'+i).prop('class')=='fa fa-chevron-up'){
  $('#fawsome'+i).removeClass('fa fa-chevron-up');
  $('#fawsome'+i).addClass('fa fa-chevron-down');
}
else if($('#fawsome'+i).prop('class')=='fa fa-chevron-down'){
  $('#fawsome'+i).removeClass('fa fa-chevron-down');
  $('#fawsome'+i).addClass('fa fa-chevron-up');
}
})




    });
// validate form
    $("form").submit(function(){
      
      if(
        $('#artist-form').val()!='NULL' &&
        $('#type-form').val()!='NULL'
      ){
        
        return true;
        // alert('active modal');

      }else{
        alert('Attention Some inputs Are required!');
        $('#artist-form').addClass('is-invalid');
        $('#type-form').addClass('is-invalid');
        return false;

        
      }
    });	
// default FOrm slide toggle

$('#toggle-icon-default').click(function(){

  $('#new-add-form-default').slideToggle(2000);

if($('#fawsome-default').prop('class')=='fa fa-chevron-up'){
  $('#fawsome-default').removeClass('fa fa-chevron-up');
  $('#fawsome-default').addClass('fa fa-chevron-down');
}else if($('#fawsome-default').prop('class')=='fa fa-chevron-down'){
  $('#fawsome-default').removeClass('fa fa-chevron-down');
  $('#fawsome-default').addClass('fa fa-chevron-up');
}


});
// default translate
$('#parole-fr').keyup(function() {

// get value of input of text area french

    let parole_fr =  $(this).val();
// translate from fr to arabic

   let url_fr_ar  = `https://api.mymemory.translated.net/get?q=${parole_fr}&langpair=fr|ar`;

    fetch(url_fr_ar).then(res =>res.json()).then(
      data=>{
        $('#parole-ar').val(data.responseData.translatedText);
        // console.log(data.responseData.translatedText);
      }
    );
// translate from fr to english
   let url_fr_eng  = `https://api.mymemory.translated.net/get?q=${parole_fr}&langpair=fr|en`;

   fetch(url_fr_eng).then(res =>res.json()).then(
      data=>{
        $('#parole-eng').val(data.responseData.translatedText);
        // console.log(data.responseData.translatedText);
      }
    );
   
  });






//   //  btn reset
//   $('#reset-form').click(function(){
//     $('form').trigger("reset");

//   })
   
//     // btn click
//   $('#btn-submit').click(function(e){
 
//   setTimeout(function(){

//     $('#btn-submit').prop('disabled',false);
   
//        $('form').trigger("reset");
      
//        $('#btn-submit').html('Submit');


//     },8000);
//     $('form').submit();
//     $('#btn-submit').prop('disabled',true);
//     $('#btn-submit').html('<i class="fas fa-spinner fa-spin"></i>&nbsp; wait');

  
// });


// validate form
// $('.form-control-validate').on('keyup change click dblclick blur focus',function(){

//   $('#btn-submit').prop("disabled", true);
//   if(
//     $('#date').val()!=''&&
//     $('#titre').val()!='' &&
//     $('#artist-form').val()!='NULL' &&
//     $('#type-form').val()!='NULL' 
//   ){
//   $('#btn-submit').prop("disabled", false);
//   }
   
//   if(
//     (($(this).val())!='') && (($(this).val())!='NULL')
    
//   ) {
//    $(this).removeClass('is-invalid');
//    $(this).addClass('is-valid');
 
//   }else{
//     $(this).addClass('is-invalid');
//     $(this).removeClass('is-valid');
//   }
// });



});
  </script>
</html>