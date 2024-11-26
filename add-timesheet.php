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
								<li  class="active"><a href="employees.php">Employees List</a></li>
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
                        <h4 class="page-title">Time</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Employee ID<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="emp_id" list="list_empID" required>
                                        <datalist id="list_empID">
                                            <?php
                                                $query = "SELECT emp_id FROM employee";
                                                $query_run = mysqli_query($con,$query);
                                                while ($row = mysqli_fetch_array($query_run)){?>
                                                    <option value="<?php echo $row['emp_id'] ?>">
                                                <?php } ?>
												
												<?php
												$query1= "SELECT doctor_id FROM doctor";
                                                $query_run1= mysqli_query($con,$query1);
                                                while ($row = mysqli_fetch_array($query_run1)){?>
                                                    <option value="<?php echo $row['doctor_id'] ?>">
												<?php } ?>
                                        </datalist>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="select" name="in_out">
                                            <option>In-Time</option>
                                            <option>Out-Time</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-left: 20px">
                                        <label>Time<span class="text-danger">*</span></label>
                                        <input class="form-control" type="time" name="entered_time" required>
                                </div>

                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="create">Make Entry</button>
                            </div>
                        </form>

                        <?php
                        if(isset($_POST['create'])){

                            $emp_id = $_POST["emp_id"];
                            $in_out = $_POST["in_out"];
                            $entered_time = $_POST['entered_time'];
                            $stamp = date("d/m/Y");

                            //echo '<script type ="text/javascript"> alert("Time :'.$stamp.'")</script>';
							if(strcmp($in_out,"In-Time")==0){
							$query = "INSERT into timesheet VALUES ('$emp_id','$stamp','$entered_time','');";
							$query_run = mysqli_query($con,$query);
                            if($query_run){
                                echo '<script type ="text/javascript"> alert("Sucessfull")</script>';
                                echo "<script>location.href='timesheet.php'</script>";
                                }
                            else{
                                echo '<script type ="text/javascript"> alert("User alreaady exists'.mysqli_error($con).'")</script>';
                            }
							}
							else 
							{
								$query1= "SELECT in_time from timesheet where emp_id='$emp_id' and date='$stamp'";
								$query_run1=mysqli_query($con,$query1);
                                $in_time="";
								while ($res=mysqli_fetch_array($query_run1)) {
                                        $in_time = $res['in_time'];
                                    }
								
								if($in_time!=""){
								$query = "UPDATE timesheet SET out_time='$entered_time' where emp_id='$emp_id' and date='$stamp'";
								$query_run = mysqli_query($con,$query);
                                echo '<script type ="text/javascript"> alert("Sucessfull")</script>';
                                echo "<script>location.href='timesheet.php'</script>";
								}
                                else{
                                    echo '<script type ="text/javascript"> alert("Enter In-Time")</script>';
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
