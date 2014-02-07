<?php
require_once __DIR__ . '/../lib.inc.php';

WebLib::AuthSession();
WebLib::Html5Header('Departments');
WebLib::IncludeCSS();
WebLib::JQueryInclude();
//WebLib::IncludeJS('mpr/js/forms.js');
WebLib::IncludeJS('mpr/js/mpr.js');
WebLib::IncludeCSS('mpr/css/forms.css');
WebLib::IncludeCSS('css/chosen.css');
WebLib::IncludeJS('js/chosen.jquery.min.js');
?>
</head>
<body>
  <div class="TopPanel">
    <div class="LeftPanelSide"></div>
    <div class="RightPanelSide"></div>
    <h1><?php echo AppTitle; ?></h1>
  </div>
  <div class="Header"></div>
  <?php
  WebLib::ShowMenuBar('MPR');
  ?>
  <div class="content">
    <span class="Message" id="Msg" style="float: right;">
      <b>Loading please wait...</b>
    </span>
    <div class="formWrapper">
      <form method="post" action="<?php
      echo WebLib::GetVal($_SERVER, 'PHP_SELF');
      ?>" id="frmDepartment" ><?php
            include __DIR__ . '/DataMPR.php';
            //WebLib::ShowMsg();
            ?>
        <fieldset>
          <legend> Sector</legend>

          <div class="FieldGroup">
            <label for="SectorName"><span id="myfont">Name of Sector</span>
              <input type="text" id="SectorName" name="SectorName"
                     placeholder="Name of Sector"/>
            </label>
          </div>
          <div style="clear: both;"></div>
          <hr/>
          <div class="formControl">
            <input type="submit" name="CmdSubmit" value="Create Sector" id="CmdSaveUpdate">
            <input type="hidden" id="TxtAction" name="CmdSubmit" value="" />
            <input type="hidden" name="FormToken"
                   value="<?php
                   echo WebLib::GetVal($_SESSION, 'FormToken')
                   ?>" />
          </div>

      </form>
    </div>
  </div>
  <div class="pageinfo">
    <?php WebLib::PageInfo(); ?>
  </div>
  <div class="footer">
    <?php WebLib::FooterInfo(); ?>
  </div>
</body>
</html>

