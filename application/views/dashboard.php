<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CS WEB Dashboard</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/assests/css/demo.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assests/font-awesome/css/font-awesome.min.css" />
		
		<link rel="stylesheet" href="<?php echo base_url();?>/assests/css/style.css" type="text/css" />

	</head>
	<body>
		<div class="header" id="head">
			<div class="container">
				<div class="logo">
					<img src="<?php echo base_url();?>/assests/images/logo.png" alt="logo">
				</div>
				<div class="menu">
					<h2>CS WEB Team</h2>
					<p><strong>Sun Rise:</strong> <?php echo date_sunrise(time(), SUNFUNCS_RET_STRING, 13.0833, 80.2833, 90, 5.30); ?></p>
				</div>
			</div>
		</div>
		<div class="banner">
			<img src="<?php echo base_url();?>/assests/images/banner.jpg" alt="banner" width="100%">
		</div>
		<div class="section2">
			<div class="container">
				<div  class="circle" id="circle">
					<span class="add-plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
				</div>
				<div class="report-table">
					<tr>
						<td>
							<table width="100%" align="center">
								<tr>
									<td class="heading">
										R. No
									</td>
									<td class="heading">
										Project Name
									</td>
									<td class="heading">
										Cient Name
									</td>
									<td class="heading">
										Billing Status
									</td>
									<td class="heading">
										Time Taken
									</td>
									<td class="heading">
										Comments
									</td>
								</tr>
								<?php foreach($tests as $test) { ; ?>
								<tr>
									<td>
										<?php echo $test['r_no']; ?>
									</td>
									<td>
										<?php echo $test['project_name']; ?>
									</td>
									<td>
										<?php echo $test['client_name']; ?>
									</td>
									<td>
										<?php echo $test['billing_status']; ?>
									</td>
									<td>
										<?php echo $test['time_taken']; ?>
									</td>
									<td>
										<?php echo $test['comments']; ?>
									</td>
								</tr>
								<?php }; ?>
							</table>
						</td>
					</tr>
				</div>
			</div>
		</div>
		<div class="addnew">
			<div class="container">
				<div class="add">
					<button id="box">Click me</button>sdsdsfsd
				</div>
			</div>
		</div>
<!--Desinged and developed by Yogesh Raj -->



<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
<script  type="text/javascript" src="<?php echo base_url();?>/assests/js/script.js"></script>
</body>
</html>