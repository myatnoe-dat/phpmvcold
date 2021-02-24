
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/ObjectList.css">
    <link rel="stylesheet" href="../public/css/commom.css">  
    <script src="http://code.jquery.com/jquery-latest.js"></script>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="../public/js/common.js"></script>
    <script src="../public/js/objectlist.js"></script>
</head>
<body>

  <div id="objectMang" class="content tabcontent"  style="font-size: small;">
  <div class="splitter">
    <div id="first" class="">

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
    <div id="second" class=""></div>
  </div>
</div>
</body>
</html>
