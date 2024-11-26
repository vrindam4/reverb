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
       
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa 
                    fa-ellipsis-v"></i></a>
                
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
    
              <a href="#" ><i class="fa fa-wheelchair"></i> <span> Patients </span> <span class="menu-arrow"></span></a
                >
           
              <ul style="display: none;">
           
                <li><a href="patinet_history.php">Patient History</a></li>
           
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
    
            <a href="#"><i class="fa fa-cube"></i> 
                <span>Pharmacy</span> <span class="menu-arrow"></span>
            </a>
   
              <ul style="display: none;">
   
                <li><a href="stock.php">Invard & Outward Stocks</a></li>
   
                <li><a href="purchase_history.php">Purchases</a></li>
                
              </ul>
                        </li>
                        
                        
            <li class="submenu">
              <a href="#"><i class="fa fa-user"></i> <span> HRM</span> <span class="menu-arrow"></span></a>
   
              <ul style="display: none;">
   
                <li><a href="employees.php">Employees List</a></li>
   
                <li><a href="leaves.php">Leaves</a></li>
   
                <li><a href="employees.php">Time Sheet</a></li>
   
                <li><a href="employees.php">Dr. License Approval</a></li>
   
              </ul>
   
            </li>
   
            <li>
   
            <a href="appointments.php"><i class="fa fa-hospital-o"></i> <span>Inventory</span></a>
   
            </li>
   
            <li class="submenu">
   
              <a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
   
              <ul style="display: none;">
   
                <li class="active"><a href="bill_history.php">Billings</a></li>
   
                <li><a href="expenses.php">Expenses</a></li>
   
                <!-- <li><a href="payments.php">Payments</a></li> -->
                
              </ul>
   
            </li>
   
            <li class="submenu">
   
              <a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
   
              <ul style="display: none;">
   
                <li><a href="salary.php"> Employee Salary </a></li>
   
                <li><a href="salary-view.php"> Payslip </a></li>
   
              </ul>
   
            </li>

</ul>

                </div>

            </div>

        </div>

        <div class="page-wrapper">

            <div class="content">

                <div class="row">

                    <div class="col-sm-4 col-3">

                        <h4 class="page-title">Purchase Invoice</h4>

                    </div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            
            <div class="row">
                <div class="col-xs-6">
                    <strong>Billed To:</strong><br>
             </div>
                
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Doctor Name:</strong><br>
                        
                    </address>
                </div>
            </div>
                <div class="col-xs-6 text-right">
                    
                        <strong>Phone Number:</strong>
                    
                </div>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Product Name</strong></td>
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-center"><strong>Tax</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                $query = "Select * from pharm_purchase,pharm_bill where pharm_bill.bill_id=pharm_purchase.bill_id";
                                $query_run=mysqli_query($con,$query);

                    
                                while ($row = mysqli_fetch_array($query_run)){

                                    $r_prodname = $row['product_name'];
                                    $r_value = $row['price'];

                                    $r_quantity = $row['quantity'];
                                    
                                    $r_tax = $row['tax'];
                                    $r_total = $row['amount'];

                                    
                                    ?>
                                    <tr>
                                        <td> <?php echo $r_prodname; ?></td>
                                        <td> <?php echo $r_value; ?></td>
                                        <td> <?php echo $r_quantity; ?></td>
                                        <td> <?php echo $r_tax; ?></td>
                                        <td> <?php echo $r_total; ?></td>
                                        
                                        


                                    </tr>


                       <?php }  ?>

                                
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                    