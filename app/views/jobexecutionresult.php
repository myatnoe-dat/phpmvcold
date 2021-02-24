<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../public/css/jobexecutionmanagement.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Job Execution Result</title>
</head>
<body>

 <div>
  <form action="/*" class="jobresultform" method="POST">

  <label for="sterm">Search Term </label>
  
  <input type="text" id="from_year" name="fname" size="4" value="2021">
  <label for="fname">Year</label>

  <select id="from_month"></select>
  <label for="fname">Month</label>

  <select id="from_day"></select>
  <label for="fname">Day</label>

  <select id="from_hour"></select>
  <label for="fname">Hour</label>

  <select id="from_minute"></select>
  <label for="fname">Min ~ </label>

 <input type="text" id="to_year" name="tname" size="4" value="2021">
  <label for="tname">Year</label>

  <select id="to_month"></select>
  <label for="tname">Month</label>

  <select id="to_day"></select>
  <label for="tname">Day</label>

  <select id="to_hour"></select>
  <label for="tname">Hour</label>

  <select id="to_minute"></select>
  <label for="tname">Min ~ </label>
  &nbsp;&nbsp;
  <input type="submit" value="Search">
   &nbsp;&nbsp;
  <input type="button" value="CSV"></a></input>
</form>

 <form action="/*" class="jobresultform">

  <label for="sterm">Jobnet id : </label>
  <input type="text" id="result_jobnetid" name="fname" size="35">
  <label for="lname">Job id : </label> &nbsp;&nbsp;
  <input type="text" id="result_jobid" name="lname" size="35">
  <label for="lname">Manage id : </label> &nbsp;&nbsp;
  <input type="text" id="result_manageid" name="lname" size="20">
  <label for="lname">User name :</label> 
  <select id="select_username" width="20px"></select>
 
</form>

 <iframe src="/job-result" style="border: none; width: 100%; height: 850px;" id="pageURL">
  </iframe>

 </div>
</body>
<script src="../public/js/jobresult.js"></script>


</html>

  