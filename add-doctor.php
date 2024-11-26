<?php

require 'dbconfig/config.php';

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
	<script>
	function checkPassword(form) { 
                password = form.password.value; 
                c_password = form.c_password.value; 
  
               
                      
                // If Not same return False.     
                if (password != c_password) { 
                    alert ("\nPassword did not match: Please try again") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    //alert("Password Match: Welcome to Reverb!") 
                    return true; 
                } 
            } 

</script>
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

                    <li class="active">

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

                <li><a href="bill_history.php">Billings</a></li>

                <li><a href="expenses.php">Expenses</a></li>

                <!-- <li><a href="payments.php">Payments</a></li> -->

                

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

                        <h4 class="page-title">Add Doctor</h4>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-8 offset-lg-2">

                        <form action="" method="POST" onSubmit = "return checkPassword(this)" >

                            <div class="row">

                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Full Name(With Dr)<span class="text-danger">*</span></label>

                                        <input class="form-control" pattern="[D]{1}[r]{1}[ ]{1}+" type="text" name="full_name" required>

                                    </div>

                                </div>
								 <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Email <span class="text-danger">*</span></label>

                                        <input class="form-control" type="Email" name="email" required>

                                    </div>

                                </div>
								
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Username <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" name="user_name" required>

                                    </div>

                                </div>
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Password <span class="text-danger">*</span></label>

                                        <input class="form-control" type="password" name="password" required>

                                    </div>

                                </div>
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Confirm Password <span class="text-danger">*</span></label>

                                        <input class="form-control" type="password" name="c_password" required>

                                    </div>

                                </div>
								 <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Date of Join <span class="text-danger">*</span></label>

                                        <div class="cal-icon">

                                            <input class="form-control datetimepicker" type="text" name="date_admission" required>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Gender</label>

                                        <select class="select" name="gender" >

                                            

                                            <option>Male</option>

                                            <option>Female</option>

                                            <option>Others</option>

                                            

                                        </select>

                                    </div>

                                </div>

                                

                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Phone Number <span class="text-danger">*</span></label>

                                        <input class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Please enter 10 digits" type="text" name="phone" required>

                                    </div>

                                </div>
								
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Specialization <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" name="specialisation" required>

                                    </div>

                                </div>
								</div>
								<div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Address <span class="text-danger">*</span></label>

                                        <<textarea class="form-control" type="text" name="address" ></textarea><br>

                                    </div>

                                </div>
								
								
								
								<div class="col-sm-6">

                                    <div class="form-group">

                                        <label>Short Biography <span class="text-danger">*</span></label>

                                        <textarea class="form-control" type="text" name="bio"></textarea><br>

                                    </div>

                                </div>
							</div>
							
                            <div class="m-t-20 text-center">

                                <button class="btn btn-primary submit-btn" name="create_doctor">Create Doctor</button>

                            </div>
							
                        </form>

                        <?php

                        if(isset($_POST['create_doctor'])){

                            

                            $doctor_id ="D-";

                            $full_name = $_POST['full_name'];
							
							$specialisation = $_POST['specialisation'];
							
							$date_admission = $_POST['date_admission'];

                            $gender = $_POST['gender'];

                            $user_name = $_POST['user_name'];
							
							$password = $_POST['password'];
							
							$confirm_password = $_POST['c_password'];
							
							$email = $_POST['email'];

                            $phone = $_POST['phone'];

                            $address = $_POST['address'];
							
							$bio = $_POST['bio'];

                            $table_name = "doctor";



                            $query = "SELECT COUNT(*) FROM ".$table_name."";

                            $result = mysqli_query($con,$query);

                            while ($res=mysqli_fetch_array($result)) {

                                $count = $res[0];

                            }

                            

                            $doctor_id = $doctor_id.$count;

							$sql_u = "SELECT * FROM doctor WHERE uname='$user_name'";
							
							$res_u = mysqli_query($con,$sql_u);
							
							if (mysqli_num_rows($res_u) > 0) {
								$name_error = "Sorry... username already taken"; 	
							}

                            // $query = "INSERT into ".$table_name." ('patient_id','full_name','sex','age','phone_no','address','diagnosis','date_of_admission','email','doctor_id','allergies','previous_medication','e_full_name','e_relation','e_phone_no','patient_type') values ('$patient_id','$full_name','$sex','$age','$phone','$address','$diagnosis','$date_admission','$email','$doc','$allergies','$previous_medication','$emrg_full_name','$emrg_relation','$emrg_phone','In-Patient')";
							else{
                            $query = "INSERT into ".$table_name." values ('$doctor_id','$full_name','$specialisation','$date_admission','$user_name','$password','$email','$phone','$address','$gender','$bio');";

                            $query_run = mysqli_query($con,$query);


                            if($query_run){
                                echo '<script type ="text/javascript"> alert("Successful created account with Doctor ID: '.$doctor_id.'")</script>';
                                echo "<script>location.href='doctors.php'</script>";
                            }
                            else{
                                echo '<script type ="text/javascript"> alert("User alreaady exists'.mysqli_error($con).'")</script>';
                            }

                            }

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

