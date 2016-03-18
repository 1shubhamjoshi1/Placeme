$(document).ready(function () {
    var a=1;
    $("#newButton").click(function (e) {
        
        e.preventDefault();
        if (a==1) {
            
            a=0;
        } else {
            
            $('#sign-up-form').submit();
        }
    });
});