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
$('#no-match').hide();
$('#empty-field').hide();
$("#login-button").click(function(){
var username=$('#login-username').val();
var password=$('#login-password').val();

if((username!='')&&(password!='')){

$.post("logincheck.php", { 
			username: username ,
			password:password

},  
            function(result){  
		if(result==1){
				slideClosedH('login-result');

			alert("UNDER CONSTRUCTION");

}

else {
	$('#empty-field').hide();

	slideOpenH('login-result');
	$('#no-match').show();
}
});
}

else{

slideOpenH('login-result');
$('#empty-field').show();
$('#no-match').hide();


}
});