window.onload=function(){

/*    document.getElementById('firstURL').src = "ObjList-LeftSide.php";
document.getElementById('secondURL').src = "ObjList-RightSide.php";*/

    $("#second").load("/object-right-side");

    var toggler = document.getElementsByClassName("caret");
    var i;
    
    for (i = 0; i < toggler.length; i++) {
      toggler[i].addEventListener("click", function() {
        this.parentElement.querySelector(".nested").classList.toggle("active");
        this.classList.toggle("caret-down");

        var displayStyle = "none";

        if( this.classList.contains("caret-down") ) {
            displayStyle = "block";

            var tables = document.getElementsByClassName("data_table");
            var j = 0;

            for (j = 0; j < tables.length; j++) {
              console.log(tables[j]);
                tables[j].style.display = "none";
            }

        }
        console.log(this.id);
        document.getElementById(this.id + "_table").style.display = displayStyle;
        
    });
  }
  /*function dragElement(element, direction)
  {
        var   md; // remember mouse down info
        const first  = document.getElementById("first");
        const second = document.getElementById("second");
        
        element.onmousedown = onMouseDown;
        
        function onMouseDown(e)
        {
            //console.log("mouse down: " + e.clientX);
            md = {e,
              offsetLeft:  element.offsetLeft,
              offsetTop:   element.offsetTop,
              firstWidth:  first.offsetWidth,
              secondWidth: second.offsetWidth
          };
          
          document.onmousemove = onMouseMove;
          document.onmouseup = () => {
                //console.log("mouse up");
                document.onmousemove = document.onmouseup = null;
            }
        }
        
        function onMouseMove(e)
        {
            //console.log("mouse move: " + e.clientX);
            var delta = {x: e.clientX - md.e.clientX,
               y: e.clientY - md.e.clientY};
               
            if (direction === "H" ) // Horizontal
            {
                // Prevent negative-sized elements
                delta.x = Math.min(Math.max(delta.x, -md.firstWidth),
                 md.secondWidth);
                
                element.style.left = md.offsetLeft + delta.x + "px";
                first.style.width = (md.firstWidth + delta.x) + "px";
                second.style.width = (md.secondWidth - delta.x) + "px";
            }
        }
      }   */
      /*dragElement( document.getElementById("separator"), "H" );*/
    };