
$(document).ready(function () {
    $('tr').click(function () {
        if(this.style.background == "" || this.style.background =="white") {
            $(this).css('background', '#81eafc');
        }
        else {
            $(this).css('background', 'white');
        }
    });
});

$(document).ready(function() {
$('#table >tbody > tr').dblclick(function(){
    //make url link for Job Detail Execution Page
    alert("Hello");
      
});
});


$(function() {

    var $contextMenu = $("#contextMenu");

    $("body").on("contextmenu", "table tr", function(e) {
         $contextMenu.css({
              display: "block",
              left: e.pageX,
              top: e.pageY
         });
        debugger;
         return false;
    });

    $('html').click(function() {
         $contextMenu.hide();
    });
  
  $("#contextMenu li a").click(function(e){
    var  f = $(this);
    debugger;
  });

});
