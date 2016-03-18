$(document).ready(function(e){
  
  $("#search").keyup(function(){
    $("#search-to").show();
    $("#user-box").show();
    var x = $(this).val();
    $.ajax(
    {
      type:'GET',
      url:'fetch.php',
      data:'q='+x,
      success:function(data){
        $("#search-to").html(data);
      },
    }
    );
    
     $.ajax(
    {
      type:'GET',
      url:'fetch_user.php',
      data:'q='+x,
      success:function(data){
        $("#user-box").html(data);
      },
    }
    );
    
    
  });
});