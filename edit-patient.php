<?php

require 'dbconfig/config.php';
$patient_id=$_GET['a'];
?>





<!DOCTYPE html>

<html lang="en">





<!-- add-employee24:07-->

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">

    <title>Reverb</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

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

                        <li >

                            <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>

                        </li>

                 <li>

                            <a href="doctors.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>

                        </li>

                        <li class="submenu">

              <a href="#"><i class="fa fa-wheelchair"></i> <span> Patients </span> <span class="menu-arrow"></span></a>

              <ul style="display: none;">

                <li class="active"><a href="patient_history.php">Patient History</a></li>

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

                <li><a href="bill_history.php">Billings</a></li>

                <li><a href="expenses.php">Expenses</a></li>

 

                

              </ul>

            </li>

            

</ul>

                </div>

            </div>

        </div>

    <div class="page-wrapper">

            <div class="content">

                <div class="row">

                    <div class="col-lg-8 offset-lg-2">

                        <h4 class="page-title">Edit Profile</h4>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-8 offset-lg-2">
					
						  <?php 



                                $query = "SELECT * FROM patient where patient_id='$patient_id'";
								$query_run = mysqli_query($con,$query);
									while ($res = mysqli_fetch_array($query_run)){
									$full_name = $res['full_name'];
									$phone = $res['phone_no'];
									$sex = $res['sex'];
									$date = $res['date_of_admission'];
									$email = $res['email'];
									$address = $res['address'];
									$doctor_id= $res['doctor_id'];
									$diagnosis=$res['diagnosis'];
									$previous_medication=$res['previous_medication'];
									$allergies=$res['allergies'];
									$e_full_name=$res['e_full_name'];
									$e_phone_no=$res['e_phone_no'];
									
								$query1="select full_name from doctor where doctor_id='$doctor_id'";
								$query_run1 = mysqli_query($con,$query1);
									while ($row = mysqli_fetch_array($query_run1)){
									$d_full_name = $row['full_name'];
									}

                                    ?>


                        <form action="" method="POST" >

                            <div class="row">

                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Full Name</label>
										
                                        <input class="form-control" type="text" name="full_name" value='<?php echo $full_name; ?>'>

                                    </div>

                                </div>
								
								 <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Patient ID</label>
										
                                        <input class="form-control" type="text" name="patient_id" value= <?php echo $patient_id; ?> disabled>

                                    </div>

                                </div>
								 <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Email </span></label>
										
                                        <input class="form-control" type="Email" name="email" value= <?php echo $email; ?>>

                                    </div>

                                </div>
								
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Sex</label>
										
                                        <input class="form-control" type="text" name="sex" value= <?php echo $sex; ?> disabled>

                                    </div>

                                </div>
								
								 <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Date of Admission </label>

                                        <div class="cal-icon">
											
                                            <input class="form-control " type="text" name="date" value=<?php echo $date; ?> disabled>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Consulting Doctor</label>
										<input class="form-control" type="text" name="d_full_name" value='<?php echo $d_full_name; ?>'disabled>
                                        

                                    </div>

                                </div>

                                

                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Phone Number </label>
										
                                        <input class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Please enter 10 digits" type="text" name="phone" value=<?php echo $phone; ?> >

                                    </div>

                                </div>
								
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Diagnosis </label>
										
                                        <input class="form-control" type="text" name="diagnosis" value='<?php echo $diagnosis; ?>'>

                                    </div>

                                </div>
								

                                
							</div>
							 <div class="row">
							<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Address</label><br>
										<textarea class="form-control" type="text" name="address" ><?php echo $address; ?></textarea><br>
                                    </div>

                                </div>
								
								
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Previous medication</label>
										
                                        <input class="form-control" type="text" name="previous_medication" value= '<?php echo $previous_medication; ?>'disabled>

                                    </div>

                                </div>
								
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Allergies</label>
										
                                        <input class="form-control" type="text" name="allergies" value= <?php echo $allergies; ?>>

                                    </div>

                                </div>
								
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Emergency Conntact Number</label>
										
                                        <input class="form-control" type="text" name="e_phone_no" value= <?php echo $e_phone_no; ?>>

                                    </div>

                                </div>
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Emergency Conntact Name</label>
										
                                        <input class="form-control" type="text" name="e_full_name" value= '<?php echo $e_full_name; ?>'>

                                    </div>

                                </div>
								
							</div>
                            <div class="m-t-20 text-center">

                                <button class="btn btn-primary submit-btn" name="save">Save Changes</button>

                            </div>
							
                        </form>

                     
					<?php } ?>
                    
					<?php

                        if(isset($_POST['save'])){
							$full_name = $_POST['full_name'];
							$diagnosis = $_POST['diagnosis'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$address = $_POST['address'];
							$allergies = $_POST['allergies'];
							$e_full_name = $_POST['e_full_name'];
							$e_phone_no = $_POST['e_phone_no'];

                            $table_name = "patient";

							$query = "UPDATE ".$table_name." SET full_name='$full_name',diagnosis='$diagnosis',allergies='$allergies',e_full_name='$e_full_name',email='$email',phone_no='$phone',address='$address',e_phone_no='$e_phone_no' WHERE patient_id='$patient_id';";

                            $query_run = mysqli_query($con,$query);

                            if($query_run){

                                echo '<script type ="text/javascript"> alert("Successful edited account with Patient ID: '.$patient_id.'")</script>';
                                echo "<script>location.href='patient_history.php'</script>";

                            }

                            else{

                                echo '<script type ="text/javascript"> alert("Failed'.mysqli_error($con).'")</script>';

                                // echo("Error description: " . mysqli_error($con));

                            }



                            // echo '<script type ="text/javascript"> alert("Clicked '.$dcotor_id.'")</script>';

                        }

                        ?>  


                    </div>

                </div>

            </div>

    <!--Paste code here-->

  </div>

    <div class="sidebar-overlay" data-reff=""></div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>

  <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/app.js"></script>

  <script src="assets/js/moment.min.js"></script>

  <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

  

</body>





<!-- add-employee24:07-->

</html>

