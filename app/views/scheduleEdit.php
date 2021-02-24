<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href="../public/css/scheduleEdit.css">
    <title>Schedule edit screen - mysql-odbc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="font-family: arial; font-size: 13px;">   
<div class="menu" style="margin-bottom: 10px;">  
  <table>
    <tr>
      <td><label>Schedule id:</label></td>
      <td><input type="text" id="jobnetid" size="30"></td>              
      <td> <label>Public:</label>
          <input type="checkbox" id="public"></td>
      <td><label>Authority: Can update</label></td>
      <td><label>Update date: </label></td>
    </tr>
    <tr>
      <td><label>Schedule name:</label></td>
      <td colspan="4"><input type="text" id="jobnetname" size="70"></td>
      <td><label>User name: Admin</label></td>
    </tr>
    <tr>
      <td><label>Description:</label></td>
      <td colspan="5"><input type="text" id="jobnetname" size="90"></td>              
    </tr>
  </table>
</div>
<div>
  <div style="width: 100%">
    <div style="width: 50%;float: left;">Boot Time:</div>
    <div style="float: right;width: 50%;">Jobnet:</div> 
  </div>
  <div >
    <table class="tbl1">
      <tr>
        <th class="row-1 obj-id">Object ID</th>
        <th class="row-2 obj-name">Object Name</th>
        <th class="row-3 boottime">Boot Time</th>
      </tr>
      <tr>
        <td>calendar_13_business_day</td>
        <td>calendar_13_business_day</td>
        <td>13:00</td>
      </tr>
    </table>    
  </div>
  <div >
    <table class="tbl2">
      <tr>
        <th class="row-1 job-id">Jobnet ID</th>
        <th class="row-2 job-name">Jobnet Name</th>
      </tr>
      <tr>
        <td>CentOS_Host</td>
        <td>CentOS_Test</td>
      </tr>     
    </table>
  </div>
  <div style="margin-top: 10px;width: 100%;">
    <div style="float: left;width: 50%;">
      <button onclick="" style="width: 80px;height: 30px;">Delete</button>
      <button onclick="" style="width: 80px;height: 30px;">Add</button>
    </div>
    <div style="width: 50%;float: right;">
      <button onclick="" style="width: 80px;height: 30px;">Delete</button>
      <button onclick="" style="width: 80px;height: 30px;">Add</button>
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