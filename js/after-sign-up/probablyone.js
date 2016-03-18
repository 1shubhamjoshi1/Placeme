$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if(scroll>=0&&scroll<=145.55){
      $('#a').css({
        position:'absolute',
        marginTop:'0px'
      });
    }
    else if(scroll>=145.55&&scroll<=571){
      $('#a').css({
        position:'fixed',
        
        marginTop:'-145px'
        
      });
      
    }
    else if(scroll>=571&&scroll<=697.5454)
      {
        $('#a').css({
          position:'absolute',
          marginTop:'425px'
        });
        $('#b').css({
          position:'absolute',
          marginTop:'0px'
        });
      }else if(scroll>=697.5454&&scroll<=1133){
        $('#b').css({
          position:'fixed',
          marginTop:'-705px'
          
        });
      }else if(scroll>=1133&&scroll<=1234){
        $('#b').css({
          position:'absolute',
          marginTop:'425px'
        });
         $('#c').css({
          position:'absolute',
          marginTop:'0px'
        });
        
      }else if(scroll>=1234&&scroll<=1676){
        $('#c').css({
          position:'fixed',
          marginTop:'-1245px'
        });
      }else if(scroll>=1676&&scroll<=1789){
        $('#c').css({
          position:'absolute',
          marginTop:'425px'
        });
        $('#d').css({
          position:'absolute',
          marginTop:'0px'
        });
      }else if(scroll>=1789&&scroll<=2224)
        {
          $('#d').css({
            position:'fixed',
            marginTop:'-1795px'
          });
        }else if(scroll>=2224)
          {
            $('#d').css({
              position:'absolute',
              marginTop:'425px'
            });
          }
 
   
    //console.log(scroll);
});