<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CS WEB Dashboard</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/assests/css/demo.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assests/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
		<link rel="stylesheet" href="<?php echo base_url();?>/assests/css/style.css" type="text/css" />
	</head>
	<body>
<?php include('header.php'); ?>
		<div class="section2">
			<div class="container">
				<div  class="circle" id="circle">
					<span class="add-plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
				</div>
				<div class="report-table">

							<table width="100%" align="center" id="new_data">
								<thead>
								<tr>
									<th class="heading">
										R. No
									</th>
									<th class="heading">
										Date
									</th>
									<th class="heading">
										Project Name
									</th>
									<th class="heading">
										Cient Name
									</th>
									<th class="heading">
										Billing Status
									</th>
									<th class="heading">
										Time Taken
									</th>
									<th class="heading">
										Comments
									</th>
								</tr>
							</thead>

							</table>
				</div>
			</div>
		</div>
		<?php require('add.php'); ?>
<!--Desinged and developed by Yogesh Raj -->



<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>/assests/js/script.js"></script>
</body>
</html>
