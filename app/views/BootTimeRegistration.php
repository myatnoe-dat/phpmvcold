<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Javascripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
          integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
          crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
          integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
          crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../public/css/BootTimeRegistration.css">
  <link rel="stylesheet" href="../public/css/scheduleEdit.css">
  <!-- Project Files -->
  <link rel="stylesheet" href="../public/css/jquery.bootstrap.year.calendar.css">
  <script src="../public/js/jquery.bootstrap.year.calendar.js"></script>
  <title>Boot Time Registration Screen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    .arrow {
      border: solid black;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
    }
    .right {
      transform: rotate(-45deg);
      -webkit-transform: rotate(-45deg);
    }
    .left {
      transform: rotate(135deg);
      -webkit-transform: rotate(135deg);
    }
  </style>
</head>
<body style="font-family: arial;font-size: 13px;">
  <div class="menu" style="margin-bottom: 10px;">
    <div>
      <label>Object id:</label>
      <input type="hidden" id="" name="" value="" size="30" style="margin-left: 20px;">    
      <label style="margin-left: 320px;">Public:</label>
      <label style="margin-left: 250px;">Update date: </label>
      <input type="hidden" id="" name="" value="" size="30" style="margin-left: 20px;">
    </div>
    <div>
      <label>Object name:</label>  
      <input type="hidden" id="" name="" value="" size="30" style="margin-left: 20px;">  
      <label style="margin-left: 590px;">User name: Admin</label>
    </div>
    <div><label>Description:</label>   
    <input type="hidden" id="" name="" value="" size="30" style="margin-left: 20px;"> 
    </div>
  </div>
  <div style="background-color: cynavbar;margin-top: 10px;">
    <label> Date:</label>
    <i class="arrow left"></i>
    <input type="text" name="" value="2021" size="5">
    <!-- <script>new Date().getFullYear()>document.write(new Date().getFullYear());</script> -->
    <i class="arrow right"></i>
    <input type="radio" id="time" name="time" checked="checked"  style="margin-left: 50px;"/>
    <label for="time:">Time:</label><input type="text" id="" name="" value="" size="5">
    <input type="radio" id="" name="" style="margin-left: 50px;"><label for="cycle">cycle</label>
    <input type="text" id="" name="" value="" size="5"> ~
    <input type="text" id="" name="" value="" size="5">
    <input type="text" id="" name="" value="" size="3"><label>  minutes</label>
    <label  style="margin-left: 50px;">Last Day:</label> 
    <input type="hidden" id="" name="" value="" size="30" style="margin-left: 20px;">
  </div>
  <div style="width: 100%;height: 80%; border: 2px solid black;margin-top: 10px;">
    <div class="container">
      <div class="calendar"></div>
    </div>
    <script>
        $('.calendar').calendar({
            startFromSunday: true,
        });
    </script>
  </div>
  <div style="background-color: powderblue;height: 50px;">
    <div class="buttonbox">
      <button onclick="">Save</button>
      <button onclick="">Cancel</button>
    </div>
  </div>  
</body>
</html>
