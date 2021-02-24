<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/commom.css">
    <link rel="stylesheet" href="../public/css/generalsettings.css">
    <script src="../public/js/generalsettings.js"></script>
    <script src="../public/js/common.js"></script>
</head>
<body>
    <div id="general" class="tabcontent" style="height: 100%;">
        <div class="system">
            <form method="POST">
                <fieldset>
                    <legend>System settings:</legend>
                    <table cellspacing="5" cellpadding style="border-spacing: 15px;">
                        <tr>
                            <td>
                                <label for="view" style="padding-right: 130px;">Jobnet view span(minute):</label>
                            </td>
                            <td>
                                <input type="text" id="view" name="view" size="7">
                            </td>
                            <td>
                                <label for="time" style="padding-left: 470px;">Job Arranger standard time</label>
                            </td>
                            <td>
                                <select id="standard" style="background-color:#E5E7E9">
                                    <option value="local">Local time</option>
                                    <option value="server">Server time</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="load">Jobnet load span(minute):&nbsp;</label>
                            </td>
                            <td>
                                <input type="text" id="load" name="load" size="7">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="keep">Jobnet keep span(minute):</label>
                            </td>
                            <td>
                                <input type="text" id="keep" name="keep" size="7">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="log">Joblog keep span(minute):</label>
                            </td>
                            <td>
                                <input type="text" id="log" name="log" size="7">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>  
        </div>
        <div class="zabbix">
            <form>
                <fieldset>
                    <legend>Zabbix Notification settings:</legend>
                    <table cellspacing="5" cellpadding style="border-spacing: 15px;">
                        <tr>
                            <td>
                                <label style="padding-right: 170px;">Zabbix Notification:</label>
                            </td>
                            <td>
                                <select id="notification" style="background-color:#E5E7E9">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Zabbix server IP address</label>
                            </td>
                            <td>
                                <input type="text" id="ipaddress" name="ipaddress" size="12">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Zabbix Server Port Number:</label>
                            </td>
                            <td>
                                <input type="text" id="port" name="port" size="12">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Zabbix  sender command (full path):</label>
                            </td>
                            <td>
                                <input type="text" id="sender" name="sender" size="135">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Message destination server:</label>
                            </td>
                            <td>
                                <input type="text" id="destination" name="destination" size="135">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Message destination item key:</label>
                            </td>
                            <td>
                                <input type="text" id="key" name="key" size="135">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Retry:</label>
                            </td>
                            <td>
                                <select id="retry" style="background-color:#E5E7E9">
                                    <option value="no-retry">no-retry</option>
                                    <option value="retry">retry</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Retry count:</label>
                            </td>
                            <td>
                                <input type="text" id="interval" name="interval" size="7">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Retry interval(second):</label>
                            </td>
                            <td>
                                <input type="text" id="interval" name="interval" size="7">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>  
        </div> 
        <p class="remark">*1 The value that you changed becomes effective after the reboot of the Job Server.</p>
        <p class="remark">*2 Jobnet view span becomes effective after relogin Job Manager</p>

        <div class="btnGroup">
            <button class="btnGeneral">redisplay</button>&nbsp;
            <button id="myBtn" class="btnGeneral">Update</button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <p>Editing Registration Confirmation</p>
                    </div>
                    <div class="modal-body">
                        <p>I register data editing. Are you all right?</p>
                    </div>
                    <div class="modal-footer">
                        <div class="btnGroupPopup">
                          <button class="btnpopup">Yes</button>&nbsp;&nbsp;&nbsp;
                          <button class="btnpopup">No</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
