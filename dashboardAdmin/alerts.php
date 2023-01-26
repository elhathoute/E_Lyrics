

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
<!-- alert trash of song --> 
<?php if(isset($_SESSION['success_remove'])){ ?>
<div class='alert alert-danger w-75 alert-dismissible fade show mt-3 me-2' role="alert">
    <strong>Hi !...... </strong><?=
     $_SESSION['success_remove'];
    unset( $_SESSION['success_remove']);
     ?>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php } ?>
<!-- alert Update -->
<?php if(isset($_SESSION['success-error-message-update']) && isset($_SESSION['session-etat-update'])){ ?>
<div class='alert alert-<?php if($_SESSION["session-etat-update"]==0)
 { echo "danger";}
 else{echo "warning";}?>' 
 <?='w-75 alert-dismissible fade show mt-3 me-2'?>
  role="alert">
    <strong>Hi !...... </strong><?=
     $_SESSION['success-error-message-update'];
    unset( $_SESSION['success-error-message-update']);
     ?>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php } ?>


