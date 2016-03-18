$('#graph-layout').hide();
$('#hovered').hide();
$('#graph-layout-t').hide();
var opened=0;
$('#graphs').click(function(){
  
   $('#chart-area').show();
var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPolarArea = new Chart(ctx).PolarArea(polarData, {
					responsive:true,
                      scaleGridLineColor : "rgba(0,0,0,.05)",
                   segmentStrokeColor : "rgba(0,0,0,.5)",
                  scaleLineWidth: 1
				});
  $('#graph-layout').show();
  $('#graph-layout-t').show();

  opened = 1;

});

$(document).mouseup(function (e)
{
    var container = $('#graph-layout');
      
    if (!container.is(e.target) 
        && container.has(e.target).length === 0) 
    {
        container.hide();
      
      $('#chart-area').hide();
      $('#graph-layout-t').hide();
        
    }
});
var over = false;
$('#user').hover(function() {
  over = true;
  $('#hovered').show();
},
function () {
  over = false;
  $('#hovered').hide();
});
