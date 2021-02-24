window.onload=function(){
var dropped = false;
$( ".draggable" ).draggable();

$( "body" ).on( ".draggable dragstart", 
    function( event, ui ) {
        dropped = false;
        console.log('1');
        if(!ui.helper.hasClass('hi')){
            ui.helper.before(ui.helper.clone().draggable());
        }else{
            ui.helper.before(ui.helper.draggable());
        }
    } 
);

$( "body" ).on( ".drggable dragstop", 
    function( event, ui ) {
        if(dropped){
           // ui.helper.draggable('destroy');
            ui.helper.addClass('hi');
        }
        else
            ui.helper.remove(); 
    } 
);

$('#droppable').droppable({
    accept: '.draggable',
    drop: function(event, ui ) {
        dropped = true;  
    }
});
};