$(document).ready(function(){
			$('#wrong-username').hide();
			$('#wrong-password').hide();
			$('#wrong-confirm').hide();
			$('#username-exist').hide();


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
	var min_chars = 3;  
	 var characters_error = 'Minimum amount of chars is 3';  	var checking_html = 'Checking...';  
	$( "#username" ).blur(function(  ) { 
		if($('#username').val().length < min_chars){  
			
		 	slideOpenH('username-result');
			$('#wrong-username').show();
			$('#username-exist').hide();


	  	}
		else{  
			
			
			 

               		check_availability();  
		}
	});
});


function check_availability(){
	 var username = $('#username').val();  
 	$.post("usercheck.php", { username: username },  
            function(result){
	   if(result >0){  
		slideOpenH('username-result');
		$('#username-exist').show();
		$('#wrong-username').hide();



             }
else{
		slideClosedH('username-result');
		$('#username-exist').hide();
		$('#wrong-username').hide();

}

   });


}



	