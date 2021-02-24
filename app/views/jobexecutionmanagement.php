<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag and drop</title>
    <link rel="stylesheet" href="../public/css/drag.css">
     <link rel="stylesheet" href="../public/css/commom.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/jobexecutionmanagement.css">
    <script src="../public/js/drag.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>  
    <script src="../public/js/jquery-ui.min.js"></script>
     <script src="../public/js/jobexecutionmanagement.js"></script>

</head>
<body>

<p id="P_001"> Operation Information Jobnet </p>
   <iframe src="/operation-information-jobnet" class="IFrame_001" id="pageURL">
   </iframe>


<div class="row">

  <div class="column left">
    <p id="P_002">Operation Information Error Job Net</p> 
  </div>
  <div class="column right">
    <p>
    Selected [*]
    <button id="myBtn" onclick="myForward()">
    <i class="fa fa-toggle-right"></i></button>
    <button id="myBtn" onclick="myBack()">
    <i class="fa fa-toggle-left"></i></button>
  </p>
  </div>
</div>


   <iframe src="/operation-information-error-jobnet" class="IFrame_001" id="pageURL">
   </iframe>



<p id="P_003">Job Net Operation Information During Execution</p>
   <iframe src="/operation-information-during-execution" class="IFrame_001" id="pageURL">
   </iframe>
    
</body>
</html>