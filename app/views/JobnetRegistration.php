<?php
    include_once("./resources/helpers/authorization.php");
    AuthToken::authorizePath();
?>
<!DOCTYPE html>
<html>
<head>   
  <link rel="stylesheet" href="../public/css/jobedit.css">
  <script src="../public/js/jobedit.js"></script> 
  <title>Jobnet Registration Screen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body style="font-family: arial;font-size: 13px;">
  <div class="menu">
    <div style="padding-bottom: 5px;">
      <label>Jobnet id:</label>
      <input type="hidden" id="" name="" value="" size="30" style="margin-left: 20px;">  
      <label style="margin-left: 160px;">Multiple:</label>  
      <label style="margin-left: 200px;">Public:</label>
      <label style="margin-left: 240px;">Update date: </label>
      <input type="hidden" id="" name="" value="" size="30" style="margin-left: 20px;">
    </div>
    <div style="padding-bottom: 5px;">
      <label>Jobnet name:</label>  
      <input type="hidden" id="" name="" value="" size="30" style="margin-left: 20px;">  
      <label style="margin-left: 672px;">User name: </label>
    </div>
    <div style="padding-bottom: 5px;"><label>Description:</label>   
    <input type="hidden" id="" name="" value="" size="30" style="margin-left: 20px;"> 
    </div>
  </div>
  <div class="min_max_bar">
  <div class="cssCircle minusSign" id="minimize">-</div>    
  <div class="range-slider"> 
    <input class="input-range" id="range" type="range" value="0" min="200" max="2000"> 
  </div>
  <div class="cssCircle plusSign" id="maximize">+</div>
</div>
<div class="iconbox">
  <table>
    <tr>
      <td width="80px" height="40px">
        <div class="draggable" style="position: absolute;" >                 
          <svg  width="0" height="0">
              <rect x="0" y="0" rx="10" ry="10" width="80" height="30" style="fill:white;stroke:black;" />
              <text x="25" y="20" fill="black" style="font-size: 12px; font-family: Arial;">JOB</text>
              Job Icon
          </svg>
        </div>
      </td>
      <td width="60px">
      <div class="draggable" style="position: absolute;" >
          <svg height="0" width="0">
              <polygon points="0,15 30,0 60,15 30,30" style="fill:white;stroke:black;" />
              <text x="25" y="20" fill="black" style="font-size: 12px; font-family: Arial;">IF</text>
              If icon
            </svg>
      </div></td>
      <td width="40px">
          <div class="draggable" style="position: absolute;" >
              <svg height="0" width="0">
                  <polygon points="0,15 20,0 40,15 20,30" style="fill:white;stroke:black;" />
                  <text x="17" y="19" fill="black" style="font:icon; font-size: 15px; font-weight:bold">|</text>
                  End if icon
                </svg>
          </div>
      </td>
      <td width="32px">
          <div class="draggable" style="position: absolute;">
              <svg width="0" height="0">
                  <rect x="0" y="0" width="30" height="30" style="fill:white; stroke:black;" />
                  <text x="5" y="45" fill="black" style="font:icon; font-size: 30px;" transform="rotate(90 24,25)">E</text>
                  Parallel Start  
                </svg>
          </div>
      </td>
      <td width="32px">
          <div class="draggable" style="position: absolute;">
              <svg width="0" height="0">
                  <rect x="0" y="0" width="30" height="30" style="fill:white; stroke:black;" />
                  <text x="45" y="35" fill="black" style="font:icon; font-size: 30px;" transform="rotate(270 31,40)">E</text>
                  Parallel End  
                </svg>
          </div>
      </td>
      <td width="80px">
          <div class="draggable" style="position: absolute;" >               
              <svg height="0" width="0">
                  <polygon points="0,30 70,30 80,0 10,0" style="fill:white;stroke:black;" />
                  <text x="10" y="20" fill="black" style="font-size: 12px; font-family: Arial;">VARIABLE</text>
                  Variable Icon
                </svg>
          </div>
      </td>
      <td width="100px">
          <div class="draggable" style="position: absolute;" >                
              <svg height="0" width="0">
                  <polygon points="0,0 100,0 100,30 0,30" style="fill:white;stroke:black;" />
                  <line x1="10" y1="0" x2="10" y2="30" style="stroke:black;" />
                  <line x1="90" y1="0" x2="90" y2="30" style="stroke:black;" />
                  <text x="15" y="20" fill="black" style="font-size: 12px; font-family: Arial;">EXTENSION</text>
                  Extension Icon
                </svg>
          </div>
      </td>
      <td width="70px">
          <div class="draggable" style="position: absolute;">
              <svg width="0" height="0">
                  <rect x="0" y="0" rx="15" ry="15" width="70" height="25" style="fill:white;stroke:black;" />
                  <text x="15" y="18" fill="black" style="font-size: 12px; font-family: Arial;">START</text>
                  Start icon
                </svg>
          </div>
      </td>
      <td width="70px">
          <div class="draggable" style="position: absolute;">
              <svg width="0" height="0">
              <rect x="0" y="0" rx="15" ry="15" width="70" height="25" style="fill:white;stroke:black;" />
              <text x="20" y="18" fill="black" style="font-size: 12px; font-family: Arial;">END</text>
              End icon
          </svg>
          </div>
      </td>
      <td width="70px">
          <div class="draggable" style="position: absolute;" >
              <svg height="0" width="0">
                  <polygon points="0,5 70,5 60,30 10,30" style="fill:white;stroke:black;" />
                  <text x="17" y="20" fill="black" style="font-size: 12px; font-family: Arial;">CALC</text>
                  Calculation icon
                </svg>
          </div>
      </td>
      <td width="32px">
          <div class="draggable" style="position: absolute;" >                
              <svg width="0" height="0">
                  <rect x="0" y="0" width="30" height="30" style="fill:white; stroke:black;" />
                  <text x="10" y="28" fill="black" style="font:icon; font-size: 30px;">L</text>
                  Linkage icon   
                </svg>
          </div>
      </td>
      <td width="75px">
          <div class="draggable" style="position: absolute;" >
              <svg height="0" width="0">
                  <polygon points="0,15 15,0 60,0 75,15 60,30 15,30" style="fill:white;stroke:black;" />
                  <text x="20" y="20" fill="black" style="font-size: 12px; font-family: Arial;">TASK</text>
                  Task Icon
                </svg>
          </div>
      </td>
      <td width="70px">
          <div class="draggable" style="position: absolute;" >
              <svg height="0" width="0">
                  <polygon points="0,10 10,0 70,0 70,30 0,30" style="fill:white;stroke:black;" />
                  <text x="20" y="20" fill="black" style="font-size: 12px; font-family: Arial;">INFO</text>
                  Info Icon
                </svg>
          </div>
      </td>
    </tr>
</table>
<table>
    <tr>
        <td width="80px" height="30px">
            <div class="draggable" style="position: absolute;" >               
                <svg height="0" width="0">
                    <polygon points="0,0 80,0 80,25 0,30" style="fill:white;stroke:black;" />
                    <text x="3" y="18" fill="black" style="font-size: 12px; font-family: Arial;">F-TRANSFER</text>
                    <text x="58" y="30" style="font-size: 25px; font-family: Arial;">&#8680;</text>      
                    File Transfer Icon
                  </svg>
            </div>
        </td>
        <td width="80px">
            <div class="draggable" style="position: absolute;" >               
                <svg height="0" width="0">
                    <polygon points="0,0 80,0 80,25 0,30" style="fill:white;stroke:black;" />
                    <text x="20" y="18" fill="black" style="font-size: 12px; font-family: Arial;">F-WAIT</text>
                    <text x="65" y="24" fill="black" style="font-size: 14px; font-family: Arial;">&#9711;</text>
                    <text x="68" y="24" fill="black" style="font-size: 10px; font-family: Arial;">W</text>
                    File Wait Icon
                </svg>
            </div>
        </td>
        <td width="80px">
            <div class="draggable" style="position: absolute;" >               
                <svg width="0" height="0">
                    <rect x="0" y="0" rx="10" ry="10" width="77" height="27" style="fill:white;stroke:black;" />
                    <text x="15" y="18" fill="black" style="font-size: 12px; font-family: Arial;">REBOOT</text>
                    <text x="44" y="80" style="font:icon; font-size: 15px;" transform="rotate(270 31,40)">C</text>
                    <text x="63" y="21" style="font:icon; font-size: 10px; font-weight:bold">|</text>
                    Reboot Icon
                  </svg>
            </div>
        </td>
        <td width="75px">
            <div class="draggable" style="position: absolute;" >               
                <svg height="0" width="0">
                    <polygon points="0,0 65,0 75,10 75,28 10,28 0,20" style="fill:white;stroke:black;" />
                    <text x="8" y="18" fill="black" style="font-size: 12px; font-family: Arial;">RELEASE</text>
                    <text x="62" y="28" fill="black" style="font-size: 15px; font-family: Arial;">&reg;</text>
                    Release Icon
                  </svg>
            </div>
        </td>
        <td width="80px">
            <div class="draggable" style="position: absolute;" >               
                <svg height="0" width="0">
                    <polygon points="0,0 80,0 80,28 0,28" style="fill:white;stroke:black;" />
                    <text x="18" y="18" fill="black" style="font-size: 12px; font-family: Arial;">ZABBIX</text>
                    Zabbix Icon
                  </svg>
            </div>
        </td>
        <td width="80px">
            <div class="draggable" style="position: absolute;" >               
                <svg width="0" height="0">
                    <rect x="0" y="0" rx="10" ry="10" width="77" height="27" style="fill:white;stroke:black;" />
                    <text x="5" y="18" fill="black" style="font-size: 12px; font-family: Arial;">AGENTLESS</text>
                    <text x="60" y="27" fill="black" style="font-size: 14px; font-family: Arial;">&#9711;</text>
                    <text x="65" y="27" fill="black" style="font-size: 11px; font-family: Arial;">L</text>
                    Agentless Icon
                  </svg>
            </div>
        </td>
    </tr>
</table>
</div>
<div id="droppable" class="jobnetbox">
  
</div>
  <!-- <div style="width: 100%;height: 80%; border: 1px solid black;margin-top: 10px;">
    
  </div> -->
  <div style="background-color: powderblue;height: 50px;">
    <div class="buttonbox">
      <button onclick="">Save</button>
      <button onclick="">Cancel</button>
    </div>
  </div>  
</body>
</html>

