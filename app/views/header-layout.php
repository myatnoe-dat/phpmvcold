<!DOCTYPE html>
<html> 
<head> 
  <link rel="stylesheet" href="../public/css/ObjectList.css">
  <link rel="stylesheet" href="../public/css/commom.css">
  <link rel="stylesheet" href="../public/css/import-export.css">
  <link rel="stylesheet" href="../public/css/version-information.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="../public/js/import-export-version.js"></script>
</head> 

<body> 
 <div class="navigation">
  <ul>
    <li>
      <a href="#">File(F)</a>
      <ul class="filewidth">
        <li><a href="#" class="bottom">New(N)</a></li>
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
  <img src="../public/image/JobArranger_logo.png" style="width: 50px; height: 20px; margin-top: 5px;" />
  <p class="username">User name: Admin</p>
  <input type="button" class="btn" onclick="window.location.href = '/'" value="Logout" 
         style="float: right; margin: 10px -190px;" />
</div>
<div class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <p>Import Screen</p>
      <span class="modal-close">&times;</span>
    </div>
    <div class="modal-body">
      <p>Please enter the export file to import</p><br>
      <div>
        <input type="text" id="file-chosen">
        <input type="file" id="actual-btn" class="modal-file" hidden/>
        <label for="actual-btn" class="modal-file-selcet ref-label">Reference</label>
      </div><br>
      <div>
        <input type="checkbox" name="group" id="group1" value="1" title="overwrite" />
        <label for="group1">Overwrite is permitted:</label>
      </div>
    </div>
    <div class="modal-footer">
      <div>
        <button class="modal-ok">OK</button>
        <button class="modal-close">Cancel</button>
      </div>
    </div>
  </div>
</div>
<div class="modal-exp">
  <div class="modal-content">
    <div class="modal-header">
      <p>Export Screen</p>
      <span class="modal-close">&times;</span>
    </div>
    <div class="modal-body">
      <p>Please input the output place of an export file.</p><br>
      <div>
        <input type="text" id="file-chosen-exp">
        <input type="file" id="actual-btn-exp" class="modal-file" hidden/>
        <label for="actual-btn-exp" class="modal-file-selcet ref-label">Reference</label>
      </div>
    </div>
    <div class="modal-footer">
      <div>
        <button class="modal-ok-exp">OK</button>
        <button class="modal-close-exp">Cancel</button>
      </div>
    </div>
  </div>
</div>
<div class="error-box">
  <div class="error-content">
    <div class="error-header">
      <p>Error</p>
      <span class="error-ok">&times;</span>
    </div>
    <div class="error-body">
      <p>Please Input the file name.</p>
    </div>
    <div class="error-footer">
      <div>
        <button class="error-ok">OK</button>
      </div>
    </div>
  </div>
</div>
<div class="modal-ver">
  <div class="modal-content">
    <div class="modal-header">
      <p>Version Information</p>
      <span class="modal-close">&times;</span>
    </div>
    <div class="modal-body">
      <p>Job Arranger for Zabbix</p><br>
      <p>Job Manager Version 5.0.0 (Rev:7532)</p>
    </div>
    <div class="paragraph-body">
      <p>Copyright(C) 2012-2013 FitechForce, Inc. All Rights Reserved.</p>
      <p>Copyrght(C) 2013-2020 Daiwa Institute of Research Business Innovation Ltd. All Rights Reserved.</p><br>
    </div>
    <div class="modal-footer">
      <div>
        <button class="modal-close">OK</button>
      </div>
    </div>
  </div>
</div>
</body> 
</html>