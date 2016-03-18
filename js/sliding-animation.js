
$("#upload").hide();
$('#newButton').click(function(){
var x=$('#newButton').val();
if(x=="Get started !"){
   $("#sub-form").css("-webkit-transform", "translateX(400px)");
    $("#profile-image").css("-webkit-transform","translateX(-15px)");
    $("#upload").show();
   $("#newButton").attr('value', 'Skip');
}
	else{
	var batch = $('#batch').val();
	var username=$('#username').val();
	var password=$('#password').val();
	var lastname=$('#lastname').val();
	var name=$('#name').val();
$.post("signinfo.php", { 
			username: username,
			password: password,
			name: name,
			lastname: lastname,
			batch: batch
			 },
	function(result){
	
	});


}
});

