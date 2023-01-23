<?php
session_start();

//si on refresh la page session destroy
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
          
            <!-- css -->
    <link rel="stylesheet" href="dist/css/main.css">
    
    
    <title>Song-management</title>
</head>
<body>

    <!-- fin navigation bar -->

    <!-- login -->
    <div class="container-fluid" >
        <div class="row">
      
      <div class="row">

      <div class="" id="close-nav">
    
    <div class="vh-100 d-flex justify-content-center align-items-center">
        
       
      <div class="col-md-6  p-5 shadow-sm border bg-white rounded-4 ">
          <!-- alert -->
          <?php  if(isset($_SESSION['error-login'])){?>
            <div class="alert text-center alert-danger" id="alert-danger" role="alert">
              
                  <?= $_SESSION['error-login']; ?>
                  </div>
                 
             
              <?php } ?>
             
         

          <div  class="d-flex align-items-center justify-content-around mb-4 text-primary">
            <?php for ($i = 1; $i <5; $i++){?>
            <img id="img-login-<?= $i ?>"  class="rounded-pill" src="dashboardAdmin/assets/images/faces/face<?= $i;?>.jpg" alt="">
            <?php }?>
        </div>
          <form action="verifyLogin.php" method="POST"> 
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-secondary " id="email">Email address <i class="fa fa-envelope px-1"></i></label>
                  <input type="text" name="email" class="form-control login border bg-dark black-bg is-invalid" id="email-login" aria-describedby="emailHelp" placeholder="david@gmail.com" minlength="4" 
                  >
                  <div class="valid-feedback">
                    Looks good 
                    </div>
                    <div  class="invalid-feedback">
                        Please entrer a valid email! 
                        </div>
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label text-secondary " id="password">Password <i class="fa fa-lock px-1"></i></label>
                  <input type="password" name="password" class="form-control login border bg-dark black-bg is-invalid" id="password-login" placeholder="§hhjGZAGDY32423" minlength="4" >
                  <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div  class="invalid-feedback">
                        Please entrer a valid password! 
                        </div>
              </div>

              <div class="d-grid">
                  <button class="btn btn-primary" id="btn-login" disabled type="submit">Login</button>
              </div>
            
          </form>
         
      </div>
  </div>
</div>
    
</div>
</div>
    
</body>
<script src="main.js"></script>
</html>