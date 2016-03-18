$("#hidden1").hide();
$("#onea").on({
    mouseenter: function () {
        //stuff to do on mouse enter
      $("#hidden1").show();
    },
    mouseleave: function () {
        //stuff to do on mouse leave
      $("#hidden1").hide();
    }
});

$(".hidden2").hide();

$("#oneb").on({
    mouseenter: function () {
        //stuff to do on mouse enter
      $(".hidden2").show();
    },
    mouseleave: function () {
        //stuff to do on mouse leave
      $(".hidden2").hide();
    }
});

$(".hidden3").hide();
$("#onec").on({
    mouseenter: function () {
        //stuff to do on mouse enter
      $(".hidden3").show();
    },
    mouseleave: function () {
        //stuff to do on mouse leave
      $(".hidden3").hide();
    }
});

$("#user").click(function(){
  $("up").addClass('sjfade');
});

$("#user").click(function(){
  $("#hovered-section").css("opacity","1");
  $("#hovered-section").addClass("slideDown");
});

$