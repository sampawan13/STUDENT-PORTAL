<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");

require_once(LIBRARY_PATH . "/templateFunctions.php");
?>



<div class="row">
  <div class="col-xs-1"></div>
  <div class="col-sm-10 page thin">
    <div class="page-header">
      <h2><small>About US </small></h2>
    </div>
      <div class="col-sm-8 page thin">
      <div class="page-header">
        <h2><small>Pawan Shukla </small></h2>
      </div>
      <div class="col-xs-3">
        <img src="img/918420611718.jpg" width="100%">
      </div>
      <div>
        <h4>Passionate Front End Designer</h4>
        <p>
          Phone: 918420611718<br>
          Email: pawan.shukla@gmail.com
        </p>
        </div>
      </div>


      <div class="col-sm-8 page thin">
      <div class="page-header">
        <h2><small>Tipu Ali </small></h2>
      </div>
      <div class="col-xs-3">
        <img src="img/917863983733.jpg" width="100%">
      </div>
      <div>
        <h4>Enthusiast Web Developer</h4>
        <p>
          Phone: 917863983733<br>
          Email: tipu.ali@gmail.com
        </p>
        </div>
      </div>


      <div class="col-sm-8 page thin">
      <div class="page-header">
        <h2><small>Abhijeet Padhy </small></h2>
      </div>
      <div class="col-xs-3">
        <img src="img/919083688180.jpg" width="100%">
      </div>
      <div>
        <h4>Fanatic Back End Developer</h4>
        <p>
          Phone: 8158844689<br>
          Email: abhijeet.padhy@gmail.com
        </p>
        </div>
      </div>


  </div>


    <div class="col-xs-1"></div>
  </div>
<br /><br />

  <?php
  require_once(TEMPLATES_PATH . "/footer.php");
  ?>
