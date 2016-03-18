/*jslint browser: true*/
/*global $, jQuery*/
var x = 0;
var result=0;
var scroll_flag_status=true;
function minimizingAnimation(el){
    var elem = document.getElementById(el);
    var elem = document.getElementById(el);
    
    $('#expand').hide();
    $('fieldset').show();

   $('#footer').css('margin-top','547px');
    document.getElementById('know-more').innerHTML="What is Placeme ?";
    
   
    
}



$('#placeme_small_logo').hide();
$('#expand').hide();

$('#sign-up-button').mousedown(function(event){

	event.preventDefault();
		$('#wrong-username').hide();
			$('#wrong-password').hide();
			$('#wrong-confirm').hide();
			$('#username-exist').hide();
 
	if($('#username').val().length < 3){  
			slideOpenH('username-result');
			$('#wrong-username').show();

	}
	else{
			var username = $('#username').val();  
 			$.post("usercheck.php", { username: username },  
            function(result){  
	   			if(result >0){  
					slideOpenH('username-result');
					$('#username-exist').show();

	 			}
				
				else{  
						if($('#password').val().length < 8){  
								slideOpenH('username-result');
								$('#wrong-password').show();
								$('#wrong-username').hide();

	  					}
		
						else{
							
							if ($('#confirm_password').val()!=$("#password").val() ){
		  							 								slideClosedH('username-result');
								$('#wrong-password').hide();

									slideOpenH('username-result');
									$('#wrong-confirm').show();
							}
							else{ 
									$('fieldset').hide(); 
    								$('#expand').show(); 
    								$('#placeme_small_logo').show();
    								$('#footer').css('margin-top','230px');
    								scroll_flag_status=false;
                                 
    								$('#base-area-content').hide();
									document.getElementById('know-more').innerHTML="Lets get you started !";
          					}  
		  			  }
		        }
			
			});
	
		
	}
	
    //to-do disable scrolling disable touching of footer enable cross feature
    
    $('#cancel-image').click(function(){
        minimizingAnimation('expand');
       // console.log('clikded');
        //alert("first");
  });
    
});

