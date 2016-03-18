/*jslint browser: true*/
/*global $, jQuery*/

function slideOpenH(el){
        var elem = document.getElementById(el);
        elem.style.transition = "height .3s, ease-in-out .8s";
        elem.style.height = "50px";
    }
    function slideClosedH(el){
        var elem = document.getElementById(el);
        elem.style.transition = "height .3s, ease-in-out .8s";
        elem.style.height = "0px";
    }
$('#hiddenText').hide();
       

$("#email").blur(function(){
   var email = $("#email").val();
    var index = email.indexOf("@");
    var indexofdot = email.indexOf(".");
   if(email==""){
    slideClosedH('incorrect-email');
    $('#hiddenText').hide();
   }
    else if(index==-1||indexofdot==-1)
   {
       slideOpenH('incorrect-email');
       $('#hiddenText').show();
       
   }else{
        slideClosedH('incorrect-email');
       $('#hiddenText').hide();
       
   }
    
});