<?php
require 'dbconfig/config.php';
$name=$_GET['a'];

$query="SELECT SUM(stock) AS value_sum,inv_id,info from inventory where inv_name='$name' GROUP BY inv_name";
$query_run = mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)){

$stock=$row['value_sum'];

}
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
                        <li >
                            <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
            <li >
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
            <li class="active">
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
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title"><b>Item Details</b></h4>
                    </div>

                  
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="inventory-profile.php"><img class="avatar" src="assets/img/inventory.jpg" ></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $name?></h3>
                                                
												
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                
                                                <li>
                                                    <span class="title">Stock:</span>
                                                    <span class="text"><?php echo $stock?></span>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
			</div>	
			<br>
			<br>
					  <div class="content">
			
                <div class="row">
                    <div class="col-md-12">
                        
                               <div class="table-responsive">


							                                                       <table class="table table-striped custom-table">

                                <thead>

                                    <tr>
                                        <th >Inventory ID</th>
                                        <th>Inventory Name</th>
										 <th>Information</th>
										 <th class="text-right">Action</th>
                                    </tr>

                                </thead>

                                <tbody>

                                <?php

                                $query1 = "SELECT * FROM inventory where inv_name='$name'";

                                $query_run1 = mysqli_query($con,$query1);

                                while ($row1 = mysqli_fetch_array($query_run1)){

										$i_id=$row1['inv_id'];
										$info=$row1['info'];
                                    ?>

                                    <tr>
                                        <td> <?php echo $i_id; ?></td>
										<td> <?php echo $name; ?></td>
                                        <td> <?php echo $info; ?></td>
										<td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-inventory.php?a=<?php echo $i_id ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                   
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php } ?> 
                                </tbody>
                            </table>
							</div>
							 </div>
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