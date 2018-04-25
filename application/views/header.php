<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="header" id="head">
  <div class="container">
    <div class="logo">
      <img src="<?php echo base_url();?>/assests/images/logo.png" alt="logo">
    </div>
    <div class="menu">
      <div class="info">
        <h2>CS WEB Team</h2>
        <p>Yogesh Raj</p>
      </div>
      <div class="point">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
      <div class="drop-down">
        <ul class="drop">
          <li><a href="">Profile</a></li>
          <li><a href="">Profile</a></li>
          <li><a href="">Profile</a></li>
          <li><a href="">Profile</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="banner">
  <img src="<?php echo base_url();?>/assests/images/banner.jpg" alt="banner" width="100%">
  <div class="sun_rise"><img src="<?php echo base_url();?>/assests/images/sun_rise.svg" alt="sun rise"><p><?php echo date('h:i A', strtotime(date_sunrise(time(), SUNFUNCS_RET_STRING, 13.0833, 80.2833, 90, 5.30)));?></p></div>
  <div class="sun_set"><img src="<?php echo base_url();?>/assests/images/sun_set.svg" alt="sun set"><p><?php echo date('h:i A', strtotime(date_sunset(time(), SUNFUNCS_RET_STRING, 13.0833, 80.2833, 90, 5.30))); ?></p></div>
</div>
