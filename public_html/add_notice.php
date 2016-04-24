<?php
// load up your config file
require_once("../resources/config.php");
require_once("../resources/library/templateFunctions.php");
if(isset($type) && $type == "admin")
;
else
redirect_to("index.php");
require_once(TEMPLATES_PATH . "/header.php");
?>



<div class="row">
  <div class="col-xs-1"></div>
  <div class="col-xs-10 page">
    <div class="page-header">
      <h1>Add Notices <small>...</small></h1>
    </div>
    <form method="POST" action="notice_upload.php" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group">
        <label class="col-sm-2 control-label">Title </label>
        <div class="col-sm-10">
          <input type="text" placeholder="Title" name="title">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Type </label>
        <div class="col-sm-10">
          <select name="type">
            <option value="general" selected>General Notice</option>
            <option value="student">Student Notice</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputFile" class="col-sm-2 control-label">Upload File</label>
        <div class="col-sm-10">
          <input type="file" id="exampleInputFile" name="fileToUpload">
          <p class="help-block col-sm-10">Upload Notice in PDF format</p>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="admin">&nbsp&nbspAre your sure?
            </label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" value="Confirm Submission">
        </div>
      </div>
    </form>
  </div>

  <div class="col-xs-1"></div>
</div>
<br />
<br />
<?php
require_once(TEMPLATES_PATH . "/footer.php");

?>
