<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag and drop</title>
    <link rel="stylesheet" href="../public/css/drag.css">
    <script src="../public/js/drag.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>  
    <script src="../public/js/jquery-ui.min.js"></script>

</head>
<body>
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
                            <text x="60" y="28" fill="black" style="font-size: 20px; font-family: Arial;">⇨</text>      
                            File Transfer Icon
                          </svg>
                    </div>
                </td>
                <td width="80px">
                    <div class="draggable" style="position: absolute;" >               
                        <svg height="0" width="0">
                            <polygon points="0,0 80,0 80,25 0,30" style="fill:white;stroke:black;" />
                            <text x="20" y="18" fill="black" style="font-size: 12px; font-family: Arial;">F-WAIT</text>
                            <text x="65" y="24" fill="black" style="font-size: 13px; font-family: Arial;">◯</text>
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
                            <text x="60" y="27" fill="black" style="font-size: 14px; font-family: Arial;">◯</text>
                            <text x="65" y="27" fill="black" style="font-size: 11px; font-family: Arial;">L</text>
                            Agentless Icon
                          </svg>
                    </div>
                </td>
            </tr>
        </table>
       
    </div>
    <div id="droppable" class="jobnetbox">
        <p>Drop here</p>
    </div>
    
    
</body>
</html>