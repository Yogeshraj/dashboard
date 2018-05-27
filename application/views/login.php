<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require('header.php'); ?>
<div class="container-fluid">
<div class="error-box">  <?php echo validation_errors(); ?> <?php echo $this->session->flashdata('message'); ?></div>
  <div class="center-box">
  <form action="welcome/check_data" method="post">
      <input type="email" name="email" placeholder="Enter ur mail id"></input>
      <input type="password" name="password" placeholder="Enter ur password"></input>
      <input type="submit" name="submit" value="Login"></input>
  </form>
</div>
</div>
<?php require('footer.php'); ?>
