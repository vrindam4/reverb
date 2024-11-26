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
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

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
                <li  class="active"><a href="inpatient_reg.php">In-Patient</a></li>
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
                        <h4 class="page-title">In-Patient Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="full_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Sex</label>
                                        <select class="select" name="sex" >
                                            
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Others</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Age <span class="text-danger">*</span></label>
                                        <input class="form-control" pattern="[0-9]+" title="Please enter number only" type="text" name="age" required>
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
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="address" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Diagnosis<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="diagnosis" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Admission <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text" name="date_admission" required>
                                        </div>
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
                                        <label>Consulting Doctor</label>
                                        <select class="select" name="doc">
                                            <?php
                                                $query = "SELECT full_name FROM doctor";
                                                $result = mysqli_query($con,$query);
                                                while ($res=mysqli_fetch_array($result)) {
                                                    $r_doc_name = $res[0];
                                                ?>
                                                <option><?php echo $r_doc_name; ?></option>
                                               <?php } ?>  
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Allergies</label>
                                        <textarea class="form-control" type="text" name="allergies"></textarea> 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Previous Medication Details(if any)</label>
                                        <textarea class="form-control" type="text" name="previous_medication"></textarea> 
                                    </div>
                                </div>
                                <div class="col-lg-9 offset-lg-2">
                                    <h4 class="page-title">Emergency Contact Details</h4>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="emrg_full_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Relation</label>
                                        <input class="form-control" type="text" name="emrg_relation" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <input class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Please enter 10 digits" type="text" name="emrg_phone" required>
                                    </div>
                                </div>  
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="register">Register Patient</button>
                            </div>
                        </form>
                        <?php
                        if(isset($_POST['register'])){
                            
                            $patient_id ="P-";
                            $full_name = $_POST['full_name'];
                            $sex = $_POST['sex'];
                            $age = $_POST['age'];
                            $phone = $_POST['phone'];
                            $address = $_POST['address'];
                            $diagnosis = $_POST['diagnosis'];
                            $date_admission = $_POST['date_admission'];
                            $email = $_POST['email'];
                            $doc = $_POST['doc'];
                            $allergies = $_POST['allergies'];
                            $previous_medication = $_POST['previous_medication'];
                            $emrg_full_name = $_POST['emrg_full_name'];
                            $emrg_relation = $_POST['emrg_relation'];
                            $emrg_phone = $_POST['emrg_phone'];

                            $address=str_replace(",", " ", $address);
                            $address=str_replace("'", "", $address);

                            $table_name = "patient";

                            $query = "SELECT COUNT(*) FROM ".$table_name."";
                            $result = mysqli_query($con,$query);
                            while ($res=mysqli_fetch_array($result)) {
                                $count = $res[0];
                            }
                            
                            $patient_id = $patient_id.$count;

                            // $doc = ltrim($doc,'Dr.');
                            $query = "SELECT doctor_id FROM doctor where full_name='$doc'";
                            $result = mysqli_query($con,$query);
                            while ($res=mysqli_fetch_array($result)) {
                                $doc = $res['doctor_id'];
                            }


                            // $query = "INSERT into ".$table_name." ('patient_id','full_name','sex','age','phone_no','address','diagnosis','date_of_admission','email','doctor_id','allergies','previous_medication','e_full_name','e_relation','e_phone_no','patient_type') values ('$patient_id','$full_name','$sex','$age','$phone','$address','$diagnosis','$date_admission','$email','$doc','$allergies','$previous_medication','$emrg_full_name','$emrg_relation','$emrg_phone','In-Patient')";
                            $query = "INSERT into ".$table_name." values ('$patient_id','$full_name','$age','$sex','$phone','$email','$address','$doc','$diagnosis','$date_admission','$allergies','$previous_medication','$emrg_full_name','$emrg_relation','$emrg_phone','In-Patient');";
                            $query_run = mysqli_query($con,$query);
                            if($query_run){
                                echo '<script type ="text/javascript"> alert("Successful create with Patient ID: '.$patient_id.'")</script>';
                                echo "<script>location.href='inpatient_reg.php'</script>";
                            }
                            else{
                                echo '<script type ="text/javascript"> alert("Failed '.mysqli_error($con).'")</script>';
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
