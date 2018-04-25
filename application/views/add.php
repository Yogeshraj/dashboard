<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="addnew">
	<div class="container">
		<div class="add">
			<!-- <button id="box">Click me</button> -->
			<div  class="circle" id="box">
				<span class="add-plus"><i class="fa fa-close" aria-hidden="true"></i></span>
			</div>

<!-- 			<div  class="result" id="reslut">
				<span class="add-plus"><i class="fa fa-close" aria-hidden="true"></i></span>
			</div> -->

			<form name="add_new" id="add_new" method="post">
				<label>Date</label>
				<input type="date" name="date" id="date">
				<label>Project Name</label>
				<input type="text" name="project_name" id="project_name">
				<label>Client</label>
				<input type="text" name="client_name" id="client_name"><br>
				<label>Working for</label>
				<select id="billing_status" name="billing_status">
					<option value="billing">Billing</option>
					<option value="non-Billing">Non-Billing</option>
					<option value="new-implementation">New-implementation</option>
					<option value="training">Training</option>
				</select>
				<label>Time taken</label>
				<input type="time" name="time_taken" id="time_taken">
				<label>Comments</label>
				<input type="text" name="comments" id="comments">
				<input class="btn" type="submit" name="submit" value="Submit" id="submit">
			</form>

		</div>
	</div>
</div>
