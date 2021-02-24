<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../public/css/ObjectList.css">
  <link rel="stylesheet" href="../public/css/commom.css">
  <link rel="stylesheet" href="../public/css/jobexecutionmanagement.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <!-- <script src="../public/js/jquery.min.js"></script> --> 
  <script src="../public/js/common.js"></script>
  <script src="../public/js/header-layout.js"></script>
  <script src="../public/js/jobexecutionmanagement.js"></script>

  <title>Object List Screen - mysql-odbc</title>
</head>
<body>
 
 <table width="100%" id="table">
  <tr class='tablehead'>
   <td>Management id</td>
    <td>Jobnet id</td>
    <td>Status</td>
    <td>Jobnet Name</td>
    <td>Job Name</td>
    <td>Schedule Start Time</td>
    <td>Start Time</td>
    <td>End Time</td>
  </tr>

<tbody>
  <tr class='tablecell'>
    <td>10000000000000012</td>
    <td>JOBNET_21</td>
    <td style="background: red">Running</td>
    <td>JOBNET_21</td>
    <td>JOBNET_21/JOB_1</td>
    <td>&nbsp;</td>
    <td>2021/01/18 16:02:00</td>
    <td>&nbsp;</td>

  </tr>

  <tr class='tablecell'>
    <td>10000000000000012</td>
    <td>JOBNET_21</td>
    <td style="background: #5fedd3">Done</td>
    <td>JOBNET_21</td>
    <td>JOBNET_21/JOB_1</td>
    <td>&nbsp;</td>
    <td>2021/01/18 16:02:00</td>
    <td>&nbsp;</td>

  </tr>
</tbody>
</table>

  <div id="contextMenu" class="dropdown clearfix">
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
       <li><a tabindex="-1" href="#">Hide(H)</a>
      </li>
      <li><a tabindex="-1" href="#">Stop(S)</a>
      </li>
      <li><a tabindex="-1" href="#">Delayed start err start</a>
      </li>
    </ul>
  </div>
  
</div>

</body>
</html>
