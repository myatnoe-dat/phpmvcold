window.onload=function(){
    $(function () {
        var range = $('.input-range'),
            value = $('.range-value');
        var min = 200;
        var max = 2000;
        $("#range").val(max);
        value.php(range.attr('value') + ' %');
    
        range.on('mouseup', function () {
            console.log(this.value); 
            $("#drag").width(this.value+"px").height(this.value+"px");                             
        });
    
         $("#minimize").click( function() {             	
             $("#range").val(min);
            $("#drag").width(min+"px").height(min+"px"); 
         });
          $("#maximize").click( function() {             	
             $("#range").val(max);
            $("#drag").width(max+"px").height(max+"px"); 
         });
    });

    var dropped = false;
    $( ".draggable" ).draggable();
    
    $( "body" ).on( ".draggable dragstart", 
        function( event, ui ) {
            dropped = false;
            console.log('1');
            if(!ui.helper.hasClass('context-menu-one')){
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
                ui.helper.addClass('context-menu-one');
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

    $(function() {
        $.contextMenu({
            selector: '.context-menu-one', 
            callback: function(key, options) {
                var m = "clicked: " + key;
                window.console && console.log(m) || alert(m); 
                if(key == "delete")
                    this.remove();
            },
            items: {
                "linearflow": {name: "Linear Flow(L)",disabled: true},
                "curveflow": {name: "Curve Flow(C)",disabled: true},
                sep1: "---------",
               "true": {name: "TRUE setting(T)",disabled: true},
                "false": {name: "FALSE setting(F)",disabled: true},
                sep2: "---------",
                "deleteflow": {name: "Delete flow(O)",disabled: false},
                sep3: "---------",
                "delete": {name: "Delete(D)",disabled: false},
                "setting": {name: "Setting(S)",disabled: false},
                sep4: "---------",
                "jobrun": {name: "Job run(J)",disabled: true},
                sep5: "---------",
               "hold": {name: "Hold(W)",disabled: false},
                "unhold": {name: "Un hold(U)",disabled: false},
                sep6: "---------",
                "skip": {name: "Skip(K)",disabled: false},
                "unskip": {name: "Unskip(R)",disabled: false}
            }
        });
    
        $('.context-menu-one').on('click', function(e){
            console.log('clicked', this);
        })    
    });
};