<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/commom.css">  
    <link rel="stylesheet" href="../public/css/jobedit.css">
    <script src="../public/js/common.js"></script>
    <script src="../public/js/jobedit.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>  
    <link rel="stylesheet" href="../public/css/jquery.contextMenu.min.css">
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/jquery.contextMenu.min.js"></script>
    <script src="../public/js/jquery-ui.min.js"></script>

    <title>Job edit screen - mysql-odbc</title>
</head>
<body>
  <div class="navigation">
    <ul>
      <li>
        <a href="#">File(F)</a>
        <ul class="filewidth">
          <li><a href="#" class="bottom" onclick="setURL('/job-edit', 'Job edit screen - mysql-odbc')">New(N)</a></li>
          <li><a href="#" class="open_modal">Import(I)</a></li>
          <li><a href="#" class="bottom open_modal_exp">Export All(E)</a></li>
          <li><a href="#">Exit(X)</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Edit(E)</a>
        <ul class="editwidth">
          <li><a href="#">Delete(D)</a></li>
        </ul>
      </li>
      <li>
        <a href="#">View(V)</a>
        <ul class="viewwidth">
          <li><input type="checkbox"><a href="#">List of operative situation jobnets(O)</a></li>
          <li><input type="checkbox"><a href="#">List of error jobnets(T)</a></li>
          <li><input type="checkbox"><a href="#">List of jobnets duration the practice(R)</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Run(S)</a>
        <ul class="runwidth">
          <li><a href="#">Immediate Run(R)</a></li>
          <li><a href="#">Immediate Run & Hold(W)</a></li>
          <li><a href="#">Test Run(T)</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Help(H)</a>
        <ul class="helpwidth">
          <li><a href="#" class="open_modal_ver">Version(A)</a></li>
        </ul>
      </li>
    </ul>
  </div>
  
  <div class="blank"></div>
  <div class="blank1">
    <a href="#" class="jamlink">Job Arranger 5.0.0</a>
    <p class="username">User name: Admin</p>
  </div>
  <div style="height: 80%; width: 100%; background-color: #100607;">
    <div id="includedContent" style="height: 70%;"></div>
    <div style="height: 30%;">
      <div class="tab">
        <button class="tablinks" onclick="setURL('/object/list', 'Object List Screen - mysql-odbc')">Object management</button>
        <button class="tablinks" onclick="setURL('second.php', 'Second')" >Object execution management</button>
        <button class="tablinks" >Object execution result</button>
        <button class="tablinks"  onclick="setURL('/general/setting', 'Settings general screen - mysql-odbc')" >General settings</button>
      </div>
    </div>
  </div>
  </div>
<div class="splitter">
    <div id="first" class="leftBox">

      <ul class="treeview" id="myUL">
        <li><span class="caret">Calendar</span>
          <ul class="nested">
            <li><span class="caret" id="public_calendar">Public calendar</span>
              <ul class="nested">
                <li>CALENDAR_16_Business_Day</li>
                <li>CALENDAR_17_Private_To_Public</li>
              </ul>
            </li>  
            <li><span class="caret" id="private_calendar">Private calendar</span>
              <ul class="nested">
                  <li>Business_Day_201019</li>
                  <li>Test_Calender_2</li>
              </ul>
            </li>
            <li><span class="caret" id="public_filter">Public filter</span>
              <ul class="nested">
                  <li>FILTER_18</li>
                  <li>FILTER_1_Enable_Disable</li>
              </ul>
            </li>
            <li><span class="caret" id="private_filter">Private filter</span>
              <ul class="nested">
                  <li>FILTER_Beginning_Of_Month</li>
                  <li>FILTER_End_Of_Month</li>
              </ul>
            </li>
          </ul>
        </li>
      
        <li><span class="caret">Schedule</span>
          <ul class="nested">
            <li><span class="caret" id="public_schedule">Public Schedule</span>
              <ul class="nested">
                <li>SCHEDULE_1_Enable_Disable</li>
                <li>SCHEDULE_MONITOR</li>
              </ul>
            </li>  
            <li><span class="caret" id="private_schedule">Private Schedule</span>
              <ul class="nested">
                <li>SCHEDULE_27</li>
                <li>SCH_1_Private_Create_31</li>
              </ul>
            </li>
          </ul>
        </li>
      
        <li><span class="caret">Jobnet</span>
          <ul class="nested">
            <li><span class="caret" id="public_jobnet">Public Jobnet</span>
              <ul class="nested">
                <li>JOBNET_1_Enable_Disable</li>
                <li>JOBNET_1_Public_Create_24</li>
              </ul>
            </li>  
            <li><span class="caret" id="private_jobnet">Private Jobnet</span>
              <ul class="nested">
                <li>JN_01_00_SimpleJob_LinWin</li>
                <li>JN_2_SmallJobnet</li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="separator"></div>
    <div id="second" class="right" style="border: none;">
      <div class="menu">
        <table class="menutbl">
          <tr>
              <td><label>Jobnet id:</label></td>
              <td><input type="text" id="jobnetid" size="30"></td>
              <td><label>multiple:</label></td>
              <td><select id="multiple" style="background-color:#E5E7E9">
                  <option value="yes">Yes</option>
                  <option value="skip">Skip</option>
                  <option value="waiting">Waiting</option>
              </select></td>
              <td> <label>Public:</label>
                  <input type="checkbox" id="public"></td>
              <td><label>Authority: Can update</label></td>
              <td><label>User name: </label></td>
              <td><label>Admin</label></td>
          </tr>
          <tr>
              <td><label>Jobnet name:</label></td>
              <td colspan="4"><input type="text" id="jobnetname" size="75"></td>
              <td><label>Update date:</label></td>
          </tr>
          <tr>
              <td><label>Description:</label></td>
              <td colspan="4"><input type="text" id="jobnetname" size="80"></td>
              <td><label>Timeout warning(minute):</label></td>
              <td><input type="text" id="timeout" size="5"></td>
              <td><select id="timeout" style="background-color:#E5E7E9">
                  <option value="warning">Warning</option>
                  <option value="jobnet stop">Jobnet stop</option>
              </select></td>
          </tr>
        </table>
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
                        <svg  width="0" height="0" >
                            <rect x="0" y="0" rx="10" ry="10" width="80" height="30" style="stroke:black;" />
                            <text x="25" y="20" fill="black" style="font-size: 12px; font-family: Arial;">JOB</text>
                            Job Icon
                          </svg>
                    </div>
                </td>
                <td width="60px">
                <div class="draggable" style="position: absolute;" >
                    <svg height="0" width="0">
                        <polygon points="0,15 30,0 60,15 30,30" style="stroke:black;" />
                        <text x="25" y="20" fill="black" style="font-size: 12px; font-family: Arial;">IF</text>
                        If icon
                      </svg>
                </div></td>
                <td width="40px">
                    <div class="draggable" style="position: absolute;" >
                        <svg height="0" width="0">
                            <polygon points="0,15 20,0 40,15 20,30" style="stroke:black;" />
                            <text x="17" y="19" fill="black" style="font:icon; font-size: 15px; font-weight:bold">|</text>
                            End if icon
                          </svg>
                    </div>
                </td>
                <td width="32px">
                    <div class="draggable" style="position: absolute;">
                        <svg width="0" height="0">
                            <rect x="0" y="0" width="30" height="30" style=" stroke:black;" />
                            <text x="5" y="45" fill="black" style="font:icon; font-size: 30px;" transform="rotate(90 24,25)">E</text>
                            Parallel Start  
                          </svg>
                    </div>
                </td>
                <td width="32px">
                    <div class="draggable" style="position: absolute;">
                        <svg width="0" height="0">
                            <rect x="0" y="0" width="30" height="30" style=" stroke:black;" />
                            <text x="45" y="35" fill="black" style="font:icon; font-size: 30px;" transform="rotate(270 31,40)">E</text>
                            Parallel End  
                          </svg>
                    </div>
                </td>
                <td width="80px">
                    <div class="draggable" style="position: absolute;" >               
                        <svg height="0" width="0">
                            <polygon points="0,30 70,30 80,0 10,0" style="stroke:black;" />
                            <text x="10" y="20" fill="black" style="font-size: 12px; font-family: Arial;">VARIABLE</text>
                            Variable Icon
                          </svg>
                    </div>
                </td>
                <td width="100px">
                    <div class="draggable" style="position: absolute;" >                
                        <svg height="0" width="0">
                            <polygon points="0,0 100,0 100,30 0,30" style="stroke:black;" />
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
                            <rect x="0" y="0" rx="15" ry="15" width="70" height="25" style="stroke:black;" />
                            <text x="15" y="18" fill="black" style="font-size: 12px; font-family: Arial;">START</text>
                            Start icon
                          </svg>
                    </div>
                </td>
                <td width="70px">
                    <div class="draggable" style="position: absolute;">
                        <svg width="0" height="0">
                        <rect x="0" y="0" rx="15" ry="15" width="70" height="25" style="stroke:black;" />
                        <text x="20" y="18" fill="black" style="font-size: 12px; font-family: Arial;">END</text>
                        End icon
                    </svg>
                    </div>
                </td>
                <td width="70px">
                    <div class="draggable" style="position: absolute;" >
                        <svg height="0" width="0">
                            <polygon points="0,5 70,5 60,30 10,30" style="stroke:black;" />
                            <text x="17" y="20" fill="black" style="font-size: 12px; font-family: Arial;">CALC</text>
                            Calculation icon
                          </svg>
                    </div>
                </td>
                <td width="32px">
                    <div class="draggable" style="position: absolute;" >                
                        <svg width="0" height="0">
                            <rect x="0" y="0" width="30" height="30" style=" stroke:black;" />
                            <text x="10" y="28" fill="black" style="font:icon; font-size: 30px;">L</text>
                            Linkage icon   
                          </svg>
                    </div>
                </td>
                <td width="75px">
                    <div class="draggable" style="position: absolute;" >
                        <svg height="0" width="0">
                            <polygon points="0,15 15,0 60,0 75,15 60,30 15,30" style="stroke:black;" />
                            <text x="20" y="20" fill="black" style="font-size: 12px; font-family: Arial;">TASK</text>
                            Task Icon
                          </svg>
                    </div>
                </td>
                <td width="70px">
                    <div class="draggable" style="position: absolute;" >
                        <svg height="0" width="0">
                            <polygon points="0,10 10,0 70,0 70,30 0,30" style="stroke:black;" />
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
                        <polygon points="0,0 80,0 80,25 0,30" style="stroke:black;" />
                        <text x="3" y="18" fill="black" style="font-size: 12px; font-family: Arial;">F-TRANSFER</text>
                        <text x="58" y="30" fill="black" style="font-size: 25px; font-family: Arial; color:black;">&#8680;</text>      
                        File Transfer Icon
                      </svg>
                    </div>
                </td>
                <td width="80px">
                    <div class="draggable" style="position: absolute;" >               
                      <svg height="0" width="0">
                        <polygon points="0,0 80,0 80,25 0,30" style="stroke:black;" />
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
                            <rect x="0" y="0" rx="10" ry="10" width="77" height="27" style="stroke:black;" />
                            <text x="15" y="18" fill="black" style="font-size: 12px; font-family: Arial;">REBOOT</text>
                            <text x="44" y="80" fill="black" style="font:icon; font-size: 15px;" transform="rotate(270 31,40)">C</text>
                            <text x="64" y="21" fill="black" style="font:icon; font-size: 10px; font-weight:bold">|</text>
                            Reboot Icon
                          </svg>
                    </div>
                </td>
                <td width="75px">
                    <div class="draggable" style="position: absolute;" >               
                      <svg height="0" width="0">
                        <polygon points="0,0 65,0 75,10 75,28 10,28 0,20" style="stroke:black;" />
                        <text x="8" y="18" fill="black" style="font-size: 12px; font-family: Arial;">RELEASE</text>
                        <text x="62" y="28" fill="black" style="font-size: 15px; font-family: Arial;">&reg;</text>
                        Release Icon
                      </svg>
                    </div>
                </td>
                <td width="80px">
                    <div class="draggable" style="position: absolute;" >               
                        <svg height="0" width="0">
                            <polygon points="0,0 80,0 80,28 0,28" style="stroke:black;" />
                            <text x="18" y="18" fill="black" style="font-size: 12px; font-family: Arial;">ZABBIX</text>
                            Zabbix Icon
                          </svg>
                    </div>
                </td>
                <td width="80px">
                    <div class="draggable" style="position: absolute;" >               
                      <svg width="0" height="0">
                        <rect x="0" y="0" rx="10" ry="10" width="77" height="27" style="stroke:black;" />
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
        <div class="jobnetdrag" id="drag" >       
          <canvas class="dragcanvas"></canvas> 
      </div>
</div>
        
    <div class="jobnetfooter">
      <div class="buttonbox">
        <button onclick="">Save</button>
        <button onclick="">Cancel</button>
      </div>
    </div>
</div>
      
</body>
</html>
