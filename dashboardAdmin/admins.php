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
                </span>Admins
              </h3>
            
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class=" d-flex justify-content-between align-items-center">
                    <h4 class="card-title text-primary">Management-Admins</h4>

                    
                  <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                      <input type="text" class="form-control bg-transparent border-2 border-primary rounded-pill h-50 mt-2" placeholder="Search ">
                    </div>
                  </form>
                </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th> FullName </th>
                            <th> Email </th>
                            <th> Photo </th>
                            <th> Status </th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php for($i=1;$i<5;$i++){?>
                                <td><?= $i ?></td>
                            <td> Full name </td>
                            <td> name@gmail.com</td>

                            <td>
                              <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                            </td>
                            <td>
                             <?php if($i==1){?>
                              <label class="badge badge-gradient-success">Login</label>
                              <?php }?>
                              <?php if($i!=1){?>
                              <label class="badge badge-gradient-danger">Logout</label>
                              <?php }?>


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