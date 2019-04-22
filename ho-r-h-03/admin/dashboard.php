	<?php
	include ('header.php');
	?>
	  <div class="breadcrumbwidget">
				<!--skins-->
				<ul class="breadcrumb">
					<li><a href="dashboard">Home</a> <span class="divider">/</span></li>
					<li class="active">Dashboard</li>
				</ul>
			</div><!--breadcrumbwidget-->
		 <!-- <div class="pagetitle">
				<h1>Dashboard</h1> <span>This is a sample description for dashboard page...</span>
			</div>pagetitle-->
			
			<div class="maincontent">
				<div class="contentinner content-dashboard">
					<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Welcome!</strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $admin_name; ?>
					</div><!--alert-->
					<?php //include("header_menu.php");?>
					<div class="row-fluid">
						
							
							<!-- <div class="span12" style="padding:0; margin:0;">
							<h4 class="widgettitle">JOB ORDER DETAILS</h4>
							<div class="widgetcontent">
								<div id="tabs">
									
									<div id="tabs-1">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Job Order No.</th>
													<th>Client Name</th>
													<th>Job Order Date</th>
													
												</tr>
											</thead>
											<tbody>
												
												<?php
												foreach($data_job_order as $value_job_order)
												{
												?>
												<tr>
													<td><strong><?php echo $value_job_order['job_order_number']; ?></strong></td>
													<td><?php echo $value_job_order['CLIENT_NAME']; ?></td>
													<td><?php echo $value_job_order['job_order_date']; ?></td>
													
												</tr>
												<?php
												}
												?>
												
												<tr>
													<td><a href="#"><strong>Sed ut perspiciatis unde omnis iste natus...</strong></a></td>
													<td><a href="#">themepixels</a></td>
													<td>Jan 02, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Sed ut perspiciatis unde omnis iste natus</strong></a></td>
													<td><a href="#">johndoe</a></td>
													<td>Jan 01, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Quis autem vel eum iure reprehenderi...</strong></a></td>
													<td><a href="#">amanda</a></td>
													<td>Jan 01, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Nemo enim ipsam voluptatem quia</strong></a></td>
													<td><a href="#">mandylane</a></td>
													<td>Dec 31, 2012</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
											</tbody>
										</table>
									</div> -->
									<!--<div id="tabs-2">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>Submitted By</th>
													<th>Date Added</th>
													<th class="center">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#"><strong>Nemo enim ipsam voluptatem quia</strong></a></td>
													<td><a href="#">mandylane</a></td>
													<td>Jan 04, 2012</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Excepteur sint occaecat cupidatat non...</strong></a></td>
													<td><a href="#">admin</a></td>
													<td>Jan 02, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Sed ut perspiciatis unde omnis iste natus...</strong></a></td>
													<td><a href="#">themepixels</a></td>
													<td>Jan 02, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Sed ut perspiciatis unde omnis iste natus</strong></a></td>
													<td><a href="#">johndoe</a></td>
													<td>Jan 01, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Quis autem vel eum iure reprehenderi...</strong></a></td>
													<td><a href="#">amanda</a></td>
													<td>Jan 01, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div id="tabs-3">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>Submitted By</th>
													<th>Date Added</th>
													<th class="center">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#"><strong>Quis autem vel eum iure reprehenderi...</strong></a></td>
													<td><a href="#">amanda</a></td>
													<td>Jan 03, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Nemo enim ipsam voluptatem quia</strong></a></td>
													<td><a href="#">mandylane</a></td>
													<td>Dec 31, 2012</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Excepteur sint occaecat cupidatat non...</strong></a></td>
													<td><a href="#">admin</a></td>
													<td>Jan 02, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Sed ut perspiciatis unde omnis iste natus...</strong></a></td>
													<td><a href="#">themepixels</a></td>
													<td>Jan 02, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
												<tr>
													<td><a href="#"><strong>Sed ut perspiciatis unde omnis iste natus</strong></a></td>
													<td><a href="#">johndoe</a></td>
													<td>Jan 01, 2013</td>
													<td class="center"><a href="#" class="btn"><span class="icon-edit"></span> Edit</a></td>
												</tr>
											</tbody>-->
										</table> 
									</div>
								</div><!--#tabs-->
							</div><!--widgetcontent-->
							
							</div>
						</div><!--span8-->
						 <!--<div class="row-fluid">
						<div class="span4" style="padding:0px; margin:0px;">
						
						<h4 class="widgettitle">Site Impressions</h4>
							<div class="widgetcontent">
								<div id="bargraph2" style="height:200px;"></div>
							</div>
							
						  </div>
						   <div class="span4">  
							<h4 class="widgettitle nomargin">Events this month</h4>
							<div class="widgetcontent">
								<div id="calendar" class="widgetcalendar"></div>
							</div>
							</div>
						   <div class="span4"> 
							<h4 class="widgettitle nomargin">Some Simple Instructions</h4>
							<div class="widgetcontent bordered">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</div>
							</div>
						  
						
					</div>-->
				</div><!--contentinner-->
			</div><!--maincontent-->
			<?php
			//include ('footer.php');
			?>