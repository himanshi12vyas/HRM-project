<?php

require("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="ss/normalize.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	<div class="">
		<div class="order">
			<div >
				<div>
					<div class="card">
						<div class="card-header" style="margin-top: 60px;">
							<div class="row">
								<div class="col-lg-6"><h2 class="box-title" style="font-size: 20px;"><i class="fa fa-braille" style="color:#1976d2"></i> Dashboard </h2></div>
                     			<div class="col-lg-6 text-right"><h2 class="box-title" style="font-size: 15px;"> <a href="dashboard.php">Home </a> > Menu </h2></div>
							</div>
						</div>
						<div class="card-body" style="margin: 0px, 10px">
							<div class="row">
								<div class="col-lg-4 col-md-4 main">
									<a href="leavesd.php">
										<div class="hrm-box" style="border: 1px solid #2E86C1;">
                                   			<div class="hrm-link" style="background-color: #2E86C1">
                                      			<span class="hrm-icon" style="font-size: 36px;">
                                        		  <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                                       			</span>

                                      			<span class="hrm-text">Leave 
                                       			</span>
                                   			</div>
                                    		<span class="hrm-sub-text" style="color: #2E86C1;"> View Details
                                   			</span>
                                    		<span class="hrm-sub-icon" style="color: #2E86C1; ">
                                       		<i class="fa fa-arrow-circle-right"></i>
                                    		</span>
                                 		</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-4 main">
									<a href="attendanced.php">
										<div class="hrm-box" style="border: 1px solid #52BE80;">
                                    <div class="hrm-link" style="background-color: #52BE80;">
                                       <span class="hrm-icon"  style="font-size: 36px;">
                                           <i class="fa fa-clock-o" aria-hidden="true"></i>
                                       </span>

                                       <span class="hrm-text"> Attendance 
                                       </span>
                                    </div>
                                    <span class="hrm-sub-text" style="color: #52BE80;">
                                         	View Details
                                    </span>
                                    <span class="hrm-sub-icon" style="color: #52BE80; ">
                                       <i class="fa fa-arrow-circle-right"></i>
                                    </span>
                                 </div>
									</a>
								</div>
								<div class="col-lg-4 col-md-4 main">
									<a href="payroll.php">
										<div class="hrm-box" style="border: 1px solid #955DD6;">
											<div class="hrm-link"style="background-color: #955DD6;">
												<span class="hrm-icon"  style="font-size: 36px;">
													<i class="fa fa-money"></i>
												</span>
												<span class="hrm-text"> Payroll</span>
											</div>
												<span class="hrm-sub-text" style="color: #955DD6;">
												 View details</span>
												<span class="hrm-sub-icon" style="color:  #955DD6;"><i class="fa fa-arrow-circle-right"></i></span>
										</div>
									</a>
								</div>
							</div>
							<div class="row" style="margin-top: 25px;">
								<div class="col-lg-4 col-md-4 main">
									<a href="Employee.php">
										<div class="hrm-box" style="border: 1px solid #52A8BD;">
											<div class="hrm-link" style="background: #52A8BD;">
												<span class="hrm-icon" style="font-size: 36px;">
													<i class="fa fa-user" aria-hidden="true"></i>
												</span>
												<span class="hrm-text">Employee Details</span>
											</div>
											<span class="hrm-sub-text" style="color:  #52A8BD;"> View details</span>
											<span class="hrm-sub-icon" style="color:  #52A8BD;"><i class="fa fa-arrow-circle-right"></i></span>
										</div>
									</a>
									
								</div>
								<div class="col-lg-4 col-md-4 main">
									<a href="holidays.php">
										<div class="hrm-box" style="border: 1px solid #93C073;">
											<div class="hrm-link" style="background: #93C073;">
												<span class="hrm-icon" style="font-size: 36px;">
													<i class="fa fa-bullhorn" aria-hidden="true"></i>
												</span>
												<span class="hrm-text">Holidays</span>
											</div>
											<span class="hrm-sub-text" style="color:  #93C073;"> View details</span>
											<span class="hrm-sub-icon" style="color:  #93C073;"><i class="fa fa-arrow-circle-right"></i></span>
										</div>
									</a>
									
								</div>
								<div class="col-lg-4 col-md-4 main">
									<a href="cmppolicy.php">
										<div class="hrm-box" style="border: 1px solid #D6599A;">
											<div class="hrm-link" style="background: #D6599A;">
												<span class="hrm-icon" style="font-size: 36px;">
													<i class="fa fa-file" aria-hidden="true"></i>
												</span>
												<span class="hrm-text">Company Policy</span>
											</div>
											<span class="hrm-sub-text" style="color:  #D6599A;"> View details</span>
											<span class="hrm-sub-icon" style="color:  #D6599A;"><i class="fa fa-arrow-circle-right"></i></span>
										</div>
									</a>
									
								</div>
								
							</div>
							<div class="row" style="margin-top: 25px;  " >
								<div class="col-lg-4 col-md-4 main ">
									<a href="feedback.php">
										<div class="hrm-box" style="border: 1px solid #E9CD1A;">
											<div class="hrm-link" style="background: #E9CD1A;">
												<span class="hrm-icon" style="font-size: 36px;">
													 <i class="fa fa-comments" aria-hidden="true"></i>
												</span>
												<span class="hrm-text">Feedback</span>
											</div>
											<span class="hrm-sub-text" style="color:  #E9CD1A;"> View details</span>
											<span class="hrm-sub-icon" style="color:  #E9CD1A;"><i class="fa fa-arrow-circle-right"></i></span>
										</div>
									</a>
								</div>
								<div class="col-lg-4 col-md-4 main ">
								<a href="storage.php">
										<div class="hrm-box" style="border: 1px solid #EEA9E2;">
											<div class="hrm-link" style="background: #EEA9E2;">
												<span class="hrm-icon" style="font-size: 36px;">
													 <i class='fas fa-dolly'></i>
												</span>
												<span class="hrm-text">Storage</span>
											</div>
											<span class="hrm-sub-text" style="color:  #EEA9E2;"> View details</span>
											<span class="hrm-sub-icon" style="color:  #EEA9E2;"><i class="fa fa-arrow-circle-right"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
require('footer.php');

?>
</body>
</html>