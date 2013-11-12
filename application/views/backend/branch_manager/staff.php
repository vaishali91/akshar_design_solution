<section id="main">
	<!-- START Bootstrap Navbar -->
	<div class="navbar navbar-static-top">
		<div class="navbar-inner">
			<!-- Breadcrumb -->
			<ul class="breadcrumb">
				<li>
					<a href="#">Dashboard</a><span class="divider"></span>
				</li>
				<li class="active">
					Staff
				</li>
			</ul>
			<!--/ Breadcrumb -->
		</div>
	</div>
	<!--/ END Bootstrap Navbar -->

	<!-- START Content -->
	<div class="container-fluid">
		<!-- START Row -->
		<div class="row-fluid">
			<!-- START Page/Section header -->
			<div class="span12">
				<div class="page-header line1">
					<h4>Staff <small>Manage staff details over here.</small></h4>
				</div>
			</div>
			<!--/ END Page/Section header -->
		</div>
		<!--/ END Row -->
		<!--Page Content Here  -->
		<div id="Staff">
			<!-- START Row -->
			<div class="row-fluid">
				<!-- Start Tabs -->
				<div class="tabbable" style="margin-bottom: 25px;">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#tab1" data-toggle="tab"><span class="icon icone-eraser"></span>Staff</a>
						</li>
						<li class="">
							<a href="#tab2" data-toggle="tab"><span class="icon icone-pencil"></span> Add Staff</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="body-inner">
								<div class="portlet-body">
									<table class="table table-striped table-bordered table-hover dataTable" id="tblStaff">
										<thead>
											<tr>
												<th style="width:8px;">
												<input type="checkbox" class="group-checkable" data-set="#tblStaff .checkboxes" />
												</th>
												<th>Staff Name</th>
												<th class="hidden-480">Email</th>
												<th class="hidden-480">ContactNo</th>
												<th colspan="2">View</th>
											</tr>
										</thead>
										<tbody>
											<?php
											if (isset($staff_list)) {
												foreach ($staff_list as $key) {
echo "<tr class=\"odd gradeX\">
<td><input type=\"checkbox\" class=\"checkboxes\" value=\"1\" /></td>													
<td class=\"center hidden-480\">{$key->userFirstName} {$key->userMiddleName} {$key->userLastName}</td>
<td class=\"center hidden-480\">{$key->userEmailAddress}</td>
<td class=\"center hidden-480\">{$key->userContactNumber}</td>
<td ><span class=\"label label-success\"Edit</span></td>
<td ><span class=\"label label-success\"Delete</span></td>
</tr>
";
												}
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab2">
							<form class="form-horizontal span12 widget shadowed green" id="form_staff">
								<div class="alert alert-error hide">
									<button class="close" data-dismiss="alert"></button>
									You have some form errors. Please check below.
								</div>
								<div class="alert alert-success hide">
									<button class="close" data-dismiss="alert"></button>
									Your form validation is successful!
								</div>

								<div class="body-inner">
									<h3 class="form-section">Staff Info.</h3>
									<!-- Staff Name -->
									<div class="control-group">
										<label class="control-label">Staff Name</label>
										<div class="controls">
											<div class="span4"><input type="text" name="first_name" id="first_name" placeholder="FirstName" class=""></div>
											<div class="span4"><input type="text" name="middle_name" id="middle_name" placeholder="MiddleName" class=""></div>
											<div class="span4"><input type="text" name="last_name" id="last_name" placeholder="LastName" class=""></div>
										</div>
									</div><!--/ Staff Name -->
									<!-- Contact Number -->
									<div class="control-group">
										<label class="control-label">Contact Number</label>
										<div class="controls">
											<input type="text" name="contact_number" id="contact_number" class="span8">
										</div>
									</div><!--/ Contact Number -->
									<!-- Email -->
									<div class="control-group">
										<label class="control-label">Email</label>
										<div class="controls">
											<input type="text" name="email" id="email" class="span8">
										</div>
									</div><!--/ Email -->
									<!-- Date Of Birth -->
									<div class="control-group">
										<label class="control-label">Date Of Birth</label>
										<div class="controls">
											<div class="input-append span6" id="dob_datepicker">
												<input type="text" readonly="" name="dob" id="dob" class="m-wrap span7">
												<span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
									</div><!--/ Date Of Birth -->
									<!-- Qualification -->
									<div class="control-group">
										<label class="control-label">Qualification</label>
										<div class="controls">
											<input type="text" name="qualification" id="qualification" class="span8">
										</div>
									</div><!--/ Qualification -->
									<!-- Date Of Joining -->
									<div class="control-group">
										<label class="control-label">Date Of Joining</label>
										<div class="controls">
											<div class="input-append span6" id="doj_datepicker">
												<input type="text" readonly="" name="date_of_joining" id="date_of_joining" class="m-wrap span7">
												<span class="add-on"><i class="icon-calendar"></i></span>
											</div>
										</div>
									</div><!--/ Date Of Joining -->
									<h3 class="form-section">Address</h3>
									<!-- Street -->
									<div class="control-group">
										<label class="control-label">Street<span class="required">*</span></label>
										<div class="controls">
											<input type="text" name="street_1" id="street_1" placeholder="Street1" class="span8"/>
										</div>

									</div>
									<div class="control-group">
										<label class="control-label"><span class="required"></span></label>
										<div class="controls">
											<input type="text" name="street_2" id="street_2" placeholder="Street2" class="span8"/>
										</div>
									</div><!--/ Street -->
									<!-- City -->
									<div class="control-group">
										<label class="control-label">City<span class="required">*</span></label>
										<div class="controls">
											<input type="text" name="city" id="city" class="span8"/>
										</div>
									</div><!--/ City -->
									<!-- State -->
									<div class="control-group">
										<label class="control-label">State<span class="required">*</span></label>
										<div class="controls">
											<div class="span4">
												<select class="span12" name="state" id="state">
													<option value="">Select...</option>
													<option value="Category 1">Category 1</option>
													<option value="Category 2">Category 2</option>
													<option value="Category 3">Category 5</option>
													<option value="Category 4">Category 4</option>
												</select>
											</div>
											<div class="span4">
												<input type="text" name="pin_code" id="pin_code" placeholder="Pincode" class="span12"/>
											</div>
										</div>
									</div><!--/ StateState -->

									<!-- Form Action -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">
											Register
										</button>
										<button type="button" class="btn">
											Cancel
										</button>
									</div><!--/ Form Action -->
								</div>
								</form>
							</div>
						</div>
					</div>
					<!--/ End Tabs -->
					
					<!--View Staff -->
				<div class="form-horizontal form-view" id="ViewBatch">
												<h3> View Staff Info - Bob Nilson </h3>
												<h3 class="form-section">Person Info</h3>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" for="firstName">First Name:</label>
															<div class="controls">
																<span class="text">Bob</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" for="lastName">Last Name:</label>
															<div class="controls">
																<span class="text">Nilson</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Qualification</label>
															<div class="controls">
																<span class="text">MBA</span> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Date of Birth:</label>
															<div class="controls">
																<span class="text bold">20.01.1984</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Branch Name:</label>
															<div class="controls">
																<span class="text">Ahmedabad Branch</span> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Role:</label>
															<div class="controls">
																<span class="text bold">Faculty</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->        
										<h3 class="form-section">Contact Info</h3>
											<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" for="firstName">Contact No.:</label>
															<div class="controls">
																<span class="text">9999999999</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label" for="lastName">Email:</label>
															<div class="controls">
																<span class="text">Nilson@mail.com</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
										
											               
												<h3 class="form-section">Address</h3>
												<div class="row-fluid">
													<div class="span12 ">
														<div class="control-group">
															<label class="control-label">Street:</label>
															<div class="controls">
																<span class="text">#24 Sun Park Avenue, Rolton Str</span>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">City:</label>
															<div class="controls">
																<span class="text">New York</span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="span6">
														<div class="control-group">
															<label class="control-label">State:</label>
															<div class="controls">
																<span class="text">New York</span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->           
												<div class="row-fluid">
													<div class="span6 ">
														<div class="control-group">
															<label class="control-label">Post Code:</label>
															<div class="controls">
																<span class="text">457890</span>
															</div>
														</div>
													</div>
													<!--/span-->
													
												</div>
				</div><!-- End View Staff -->
					
				</div>
				<!--/ END Row -->
			</div>
			<!--Page Content End  -->
		</div>
		<!--/ END Content -->
</section>
