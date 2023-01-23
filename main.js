$(document).ready(function(){
  for(let j=1;j<5;j++){ 
  for(let i=1;i<5;i++){ 
    setTimeout(function(){
      $("#img-login-"+j).fadeOut(2000*j*i);
   },2000);
   setTimeout(function(){
    $("#img-login-"+j).fadeIn(2000*j*i);
 },2000);
  
}
}

if($('#alert-danger').is(':visible')==true){
  {
    $('#alert-danger').fadeOut(5000);
  }
  
}
if($('#alert-success').is(':visible')==true){
  {
    $('#alert-success').fadeOut(5000);
  }
  
}
 $('#btn-login').hover(function(e){
  e.preventDefault();
  setTimeout(function(){
    $('#btn-login').click();
   

    },3000);
    $(this).html('<i class="fas fa-spinner fa-spin"></i>&nbsp; wait');
  
});


      $('#email-login,#password-login').on('keyup click blur focus select ',function(){
        $(this).removeClass('bg-dark');
          $(this).addClass('bg-white');
        var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
       
        if(
          $('#email-login').val()!='' && 
          $('#password-login').val()!=''&&
          (($(this).val()).length) >= 4 &&
          (pattern.test( $('#email-login').val()))==true
        ){
          $('#email-login,#password-login').removeClass('is-invalid');
          $('#email-login,#password-login').addClass('is-valid');
          $('#btn-login').prop('disabled',false);
          $('#btn-login').removeClass('btn-primary');
          $('#btn-login').addClass('btn-success');
         
        }else{
          $('#email-login,#password-login').addClass('is-invalid');
          $('#email-login,#password-login').removeClass('is-valid');
          $('#btn-login').prop('disabled',true);
          $('#btn-login').addClass('btn-primary');
          $('#btn-login').removeClass('btn-success');
        }
      })
  

});