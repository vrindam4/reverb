<?php

require 'dbconfig/config.php';  

$count=0;
$total=0;
$billing_no=$_GET['a']; 

?>

<!DOCTYPE html>

<html lang="en">





<!-- employees23:21-->

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">

    <title>Reverb</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!--[if lt IE 9]>

		<script src="assets/js/html5shiv.min.js"></script>

		<script src="assets/js/respond.min.js"></script>

	<![endif]-->

</head>



<body>

    <div class="main-wrapper">

        <div class="header">

			<div class="header-left">

				<a href="dashboard.php" class="logo">

					<img src="assets/img/logo.jpg" width="35" height="35" alt=""> <span>Reverb</span>

				</a>

			</div>

			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>

            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>

            <ul class="nav user-menu float-right">

                

                    

                <li class="nav-item dropdown has-arrow">

                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">

                        <span class="user-img">

							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">

							<span class="status online"></span>

						</span>

						<span>Admin</span>

                    </a>

					<div class="dropdown-menu">

						<a class="dropdown-item" href="profile.php">My Profile</a>

						<a class="dropdown-item" href="edit-profile.php">Edit Profile</a>

						

						<a class="dropdown-item" href="login.php">Logout</a>

					</div>

                </li>

            </ul>

            <div class="dropdown mobile-user-menu float-right">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>

                <div class="dropdown-menu dropdown-menu-right">

                    <a class="dropdown-item" href="profile.php">My Profile</a>

                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>

                    

                    <a class="dropdown-item" href="login.php">Logout</a>

                </div>

            </div>

        </div>

        <div class="sidebar" id="sidebar">

            <div class="sidebar-inner slimscroll">

                <div id="sidebar-menu" class="sidebar-menu">

                    <ul>

                        <li class="menu-title">Main</li>

                        <li>

                            <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>

                        </li>

						<li>

                            <a href="doctors.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>

                        </li>

                        <li class="submenu">

							<a href="#"><i class="fa fa-wheelchair"></i> <span> Patients </span> <span class="menu-arrow"></span></a>

							<ul style="display: none;">

								<li><a href="patient_history.php">Patient History</a></li>

								<li class="submenu">

								<a href="#"><span>Admission</span> <span class="menu-arrow"></span> </a>

								<ul style="display: none;">

								<li><a href="outpatient_reg.php">OPD</a></li>

								<li><a href="inpatient_reg.php">In-Patient</a></li>

								</ul>

								</li>

								

							</ul>

						</li>

						

                        <li>

                            <a href="#"><i class="fa fa-cube"></i> <span>Pharmacy</span> <span class="menu-arrow"></span></a>

							<ul style="display: none;">

								<li><a href="stock.php">Invard & Outward Stocks</a></li>

								<li><a href="purchase_history.php">Purchases</a></li>

								

							</ul>

                        </li>

                        

                        

						<li class="submenu">

							<a href="#"><i class="fa fa-user"></i> <span> HRM</span> <span class="menu-arrow"></span></a>

							<ul style="display: none;">

								<li><a href="employees.php">Employees List</a></li>

								<li><a href="timesheet.php">Time Sheet</a></li>

								<li><a href="salary.php">Payroll</a></li>

							</ul>

						</li>

						<li>

                            <a href="inventory.php"><i class="fa fa-hospital-o"></i> <span>Inventory</span></a>

                        </li>

						<li class="submenu">

							<a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>

							<ul style="display: none;">

								<li class="active"><a href="bill_history.php">Billings</a></li>

								<li><a href="expenses.php">Expenses</a></li>

								<li><a href="payments.php">Payments</a></li>

								

							</ul>

						</li>

						

                    </ul>

                </div>

            </div>

        </div>

        <div class="page-wrapper">

            <div class="content">

                <div class="row">

                    <div class="col-sm-5 col-4">

                        <h4 class="page-title">Bill</h4>

                    </div>

                    <div class="col-sm-7 col-8 text-right m-b-30">

                        <div class="btn-group btn-group-sm">

                           

                            <button class="btn btn-white">PDF</button>

                            <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="card-box">

                            <h4 class="payslip-title">Billing</h4>

                            <div class="row">

                                <div class="col-sm-6 m-b-20">

                                    <img src="assets/img/logo.jpg" class="inv-logo" alt="">

                                    <ul class="list-unstyled mb-0">

                                        <li><strong>Reverb Life Care</strong></li>

                                        <li>Plot No.C-,Part II, Hebbal Industrial Area,Mysuru</li>

                                        <li>Mob: 9108904726, 0821-297260</li>

                                    </ul>

                                </div>
								<?php
								$query="select * from billing where billing_no='$billing_no'";  
								$query_run = mysqli_query($con,$query);  

									while($row=mysqli_fetch_array($query_run)){  
										$patient_id=$row["patient_id"]; 
										$date=$row["date"];
								}
								?>
								 <div class="col-sm-6 m-b-20">
                                    <div class="invoice-details">
                                        <h4 class="text-uppercase">Bill No: <?php echo $billing_no?></h4>
                                        
                                           <h5 <li>Billing Date: <span><?php echo $date?></span></h5>
                                        
                                    </div>
                                </div>

                            </div>
							<?php 
						 

							$query="select * from patient where patient_id='$patient_id'"; 
							$query_run = mysqli_query($con,$query); 

							while($row=mysqli_fetch_array($query_run)){  
							$full_name=$row["full_name"];  
							$date_of_admission=$row["date_of_admission"];  
							$phone_no=$row["phone_no"]; 
							$email=$row["email"];
								}
							?>
							<div class="row">

                                <div class="col-lg-12 m-b-20">

                                    <ul class="list-unstyled">

                                        <li>

                                            <h5 class="mb-0"><strong><?php echo $full_name ?></strong></h5></li>

                                        <li>Patient ID: <?php echo $patient_id?></li>

                                        <li>Admission Date: <?php echo $date_of_admission?></li>

                                        <li>Email: <?php echo $email ?></li>

                                        <li>Phone: <?php echo $phone_no ?></li>

                                    </ul>

                                </div>

                            </div>

                           <div class="row">
							<div class="col-md-12">
							<h4><caption> Bill</caption></h4>
							<div class="table-responsive">
								<table class="table table-striped custom-table">
								<thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Description</th>
                                    <th>No of days</th>
									<th>Amount</th>
									
                                </tr>  
								
                            </thead>
								
								<tbody>
								<?php
									$query="select * from billing where billing_no='$billing_no'";  
									$query_run = mysqli_query($con,$query);  

									while($row=mysqli_fetch_array($query_run)){  
									$product_name=$row["product_name"]; 
									$no_of_days=$row["no_of_days"];
									$amount=$row["amount"];
									$total=$total+$amount;
									$count=$count+1;
								?>

                                    <tr>
                                        <td> <?php echo $count; ?></td>
                                        <td> <?php echo $product_name; ?></td>
                                        <td> <?php echo $no_of_days; ?></td>
                                        <td> <?php echo $amount; ?></td>  
                                    </tr>

                                    <?php } ?>	
                                </tbody>
								<tfoot>
									<tr>
										<td><strong>Total</strong></td>
										<td></td>
										<td><b></b></td>
										<td><b><?php echo $total?></b></td>
										
									</tr>
								</tfoot>
                        </table>  
						
					</div>	
                </div>
				
            </div>  

                        </div>

                    </div>

                </div>

            </div>

            </div>

        </div>

    </div>

    <div class="sidebar-overlay" data-reff=""></div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>

	<script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/app.js"></script>

</body>





<!-- salary-view23:28-->

</html>