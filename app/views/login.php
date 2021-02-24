<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login screen</title>
    <style>
        tr.spaceUnder>td {
  padding-bottom: 0.5em;
}
        .btn{
          width: 80px;
          height: 25px; 
          background: white; 
          border-width: thin;
          border-color: black;
        }
</style>
</head>
<body>
<form method="POST" action="/">
<div style="margin-top: 15%; margin-left: 35%">
    <p>Welcome to a job manager.</p>
    <p>To log in to the job controller, press the login button the controller <br>
        to enter the job name, user name, and password.</p>
        <table>
            <tr class="spaceUnder">
                <td><label>user:</label></td>
                <td><input type="text" id="user" name="username" size="28" style="border-radius:3px; border-color: #C6C8C0; border-width: thin;"></td>
            </tr>
            <tr class="spaceUnder">
                <td><label>password:</label></td>
                <td><input type="password" id="password" name="password" size="29" style="border-radius:3px; border-color: #C6C8C0; border-width: thin;"></td>
            </tr>
            <input type="hidden" name="csrf" value="<?php echo $token ?>">
        </table>
    <div style="padding-top: 5%; padding-left: 35%">
        <input type="submit" class="btn" value="Login"/>
        <input type="reset"  class="btn" value="Cancel"/>
    </div>
</div>
</form>
</body>
</html>