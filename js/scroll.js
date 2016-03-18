/*jslint browser: true*/
/*global $, jQuery*/

    function slideOpen(el) {
        var elem = document.getElementById(el);
        elem.style.transition = "height .2s, ease-in-out .8s";
        elem.style.height = "665px";
        
    }
    function slideClosed(el) {
        var elem = document.getElementById(el);
        elem.style.transition = "height .2s, ease-in-out .8s";
        elem.style.height = "0px";
    }

   
 var position = 0;
    $(document).ready(function () {
        "use strict";
     
        $('#btn1').hide();
        $('#btn2').hide();
        $('#btn3').hide();
         $('#btn4').hide();
        $('#btn5').hide();
        $('#btn6').hide();
        $('#btn7').hide();
        $('#MayBe-the-last').hide();
        $('#content-intro').hide();
        
        $('#sub-sign-up').click(function(){
            if(scroll_flag_status){
             position=0;
              slideClosed('intro');
              slideOpen('first-title');  
              $('#bird-image').show();
              $('#first-text').show();
              $('#sign-up-form').show();
              $('#footer').show();
              $('#btn2').hide();
              $('#login').show();
              $('#btn1').hide();
              $('#btn3').hide();
              $('#btn4').hide();
              $('#btn5').hide();
              $('#btn6').hide();
                
              $('#btn7').hide();
              $('#sub-sign-up').css("-webkit-transform", "translateY(-30px)");
              $('#sub-sign-up').css("opacity", "0");
              $('#MayBe-the-last').hide();
            $('#content-intro').hide();
            }
        });
       $("#know-more").click(function() {
           if(scroll_flag_status)
           {
                        position=1;
                        slideClosed('first-title');  
                        slideOpen('intro');
                        $('#bird-image').hide();
                        $('#first-text').hide();
                        $('#sign-up-form').hide();
                        $('#footer').hide();
                        $('#btn3').show();
                        $('#login').hide();
                        $('#btn1').show();
                        $('#btn2').show();
                        $('#login').hide();
                        $('#btn4').show();
                        $('#btn5').show();
                        $('#btn6').show(); 
                        $('#btn7').show(); 
                        $('#sub-sign-up').css("-webkit-transform", "translateY(30px)");
                        $('#sub-sign-up').css("opacity", "1");
                        $('#MayBe-the-last').show();
                      //  $('#content-intro').show();
                        setTimeout(function(){
                            $('#content-intro').show();
                        },800);
                         
           }
        });
      


      $('body').mousewheel(function(event) {
       console.log(event.deltaX, event.deltaY, event.deltaFactor);
         
        
          if(event.deltaY<0&&scroll_flag_status==true) //Up Scrooling
          {
              
              switch(position)
              {
                  case 0:
                       position=1;
                        slideClosed('first-title');  
                        slideOpen('intro');
                        $('#bird-image').hide();
                        $('#first-text').hide();
                        $('#sign-up-form').hide();
                        $('#footer').hide();
                        $('#btn2').show();
                        $('#login').hide();
                        $('#btn3').show();
                        $('#btn1').show();
                        $('#btn4').show();
                        $('#btn5').show();
                        $('#btn6').show();
                        $('#btn7').show();
                        $('#MayBe-the-last').show();
                      // $('#content-intro').show();
                      $('#sub-sign-up').css("-webkit-transform", "translateY(30px)");
                        $('#sub-sign-up').css("opacity", "1");
                        setTimeout(function(){
                            $('#content-intro').show();
                        },800);
                         
                      break;
                                  
              }
             
          }else if(event.deltaY > 0&&scroll_flag_status==true){
             switch(position)
             {
                case 1:    
              position=0;
              slideClosed('intro');
              slideOpen('first-title');  
              $('#bird-image').show();
              $('#first-text').show();
              $('#sign-up-form').show();
              $('#footer').show();
              $('#btn2').hide();
              $('#login').show();
              $('#btn1').hide();
              $('#btn3').hide();
              $('#btn4').hide();
              $('#btn5').hide();
              $('#btn6').hide();
                
              $('#btn7').hide();
              $('#sub-sign-up').css("-webkit-transform", "translateY(-30px)");
              $('#sub-sign-up').css("opacity", "0");
              $('#MayBe-the-last').hide();
            $('#content-intro').hide();
              break;
                
             }
          }
        //  console.log(count);
         
    });
        
        
        
    });
