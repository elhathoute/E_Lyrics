$(document).ready(function(){
       //hide navbar if user click in any place of body =>exact in div with id=quiz
    $("body").click(function(e){
   //closest=>selects the first ancestor of the given selector.
     if($(e.target).closest("#close-nav").length>0){
        $('#nav-toggle').removeClass('active');
       $('nav ul').hide();
     }

    });
    
    $('#nav-toggle').on('click',function() {
        $('nav ul').slideToggle();
       
      });
  
    //event of click 
      $('#nav-toggle').on('click', function() {
        this.classList.toggle('active')
      
      });
  
    //navbar par defaut black
      $(".navigation ").css('background-color','black');
     $("ul>li>a").css('background-color','black');
     $("ul>li>.search").css('background-color','black');
     $("ul>li>a").css('color','white');
      $("#svg-icon-brand").css('background-color','white');
  //display none of icon mode black
  $("#toggle-icon-mode-black").css('display','none');
  //click in  icon white mode
  $("#toggle-icon-mode-white").click(function(){
     $("body").css("background-color","black");
     $("#toggle-icon-mode-black").css('display', 'block');
     $(this).css('display', 'none');
  
     $(".white-bg").css('background','white');
  //active white mode
     $(".navigation ").css('background-color','white');
     $("ul>li>a").css('background-color','white');
     $("ul>li>.search").css('background-color','white');
     $("ul>li>a").css('color','black');
    $("#svg-icon-brand").css('background-color','white');
    $('.fa-search').css('background-color','white');
  
  });
  //click in icon dark mode
     $("#toggle-icon-mode-black").click(function(){
     $("body").css("background-color","white");
     $("#toggle-icon-mode-white").css('display', 'block');
     $(this).css('display', 'none');
   //return a dark mode
     $(".navigation ").css('background-color','black');
     $("ul>li>a").css('background-color','black');
     $("ul>li>.search").css('background-color','black');
     $("ul>li>a").css('color','white');
      $("#svg-icon-brand").css('background-color','white');
  });
  

});