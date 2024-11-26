<?php 
require 'dbconfig/config.php';


?>

<script type="text/javascript">
    visible = 1; //var that keeps track of which table is visible (1 or 2)
    function change_table() {
        t1 = document.getElementById("stock1");
        t2 = document.getElementById("stock2");
        if(visible == 1) {
            visible = 2;
            t1.style.display = 'none';
            t2.style.display = 'block';
        } 
        else {
            visible = 1;
            t1.style.display = 'block';
            t2.style.display = 'none';
        }
    }
</script>

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
    
            <a href="#"><i class="fa fa-cube"></i> 
                <span>Pharmacy</span> <span class="menu-arrow"></span>
            </a>
   
              <ul style="display: none;">
   
                <li class="active"><a href="stock.php">Invard & Outward Stocks</a></li>
   
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

                    <div class="col-sm-4 col-3">

                        <h4 class="page-title">Pharmacy Stock</h4>

                    </div>

                    <div class="col-sm-8 col-9 text-right m-b-20">
                    
                    <a href="add-stock.php" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Stock</a>
                
                </div>

<!--                 <div class="col-sm-12 col-9 text-right m-b-20">
                   
                    <a href="stock_history.php" class="btn btn-primary float-right btn-rounded">Stock History</a>
                
                </div> -->
                    
                </div>
                
                <form action="" method="POST">
                
                <div class="row filter-row">
                
                <div class="col-sm-6 col-md-3">
                
                    <div class="form-group form-focus">
                
                        <label class="focus-label">Stock ID</label>
                
                        <input type="text" class="form-control floating" name = "stock_id">
                
                    </div>
                
                </div>
                
                <div class="col-sm-6 col-md-3">
                
                    <div class="form-group form-focus">
                
                        <label class="focus-label">Product Name</label>
                
                        <input type="text" class="form-control floating" name = "product_name">
                
                    </div>
                
                </div>
                
                <div class="col-sm-6 col-md-3">
                
                    <div class="form-group form-focus select-focus">
                
                        <label class="focus-label">Stock</label>
                
                        <select class="select floating" name = "stock_type">
                
                            <option>Select Type</option>
                
                            <option>Inward Stock</option>
                
                            <option>Outward Stock</option>

                        </select>
                
                    </div>
                
                </div>
                
                <div class="col-sm-6 col-md-3">
                
                    <button class="btn btn-success btn-block" name="search">SEARCH</button>
                
                </div>
            
            </div>
            
            </form>
            
                <div class="row">

                    <div class="col-md-12">

						<div class="table-responsive">

                            <table class="table table-striped custom-table" id="stock1">

                                <thead>

                                    <tr>
                                        <th style="min-width:150px;">Name</th>
                                        <th>Stock ID</th>
                                        <th>Quantity</th>
                                        <th>Value(Each)</th>
                                        <th style="min-width: 110px;">Supplier</th>
                                        <th>Type</th>
                                    </tr>

                                </thead>

                                <tbody>

                                <?php 

                                $query = "SELECT * FROM stock";
                                $query_run = mysqli_query($con,$query);
                                while ($row = mysqli_fetch_array($query_run)){
                                    $r_prodname = $row['product_name'];
                                    $r_stockID = $row['stock_id'];
                                    $r_quantity = $row['stock_quantity'];
                                    $r_value = $row['value'];
                                    $r_suppName = $row['supplier_name'];
                                    $r_stockType = $row['stock_type'];
                                    ?>

                                    <tr>
                                        <td> <?php echo $r_prodname; ?></td>
                                        <td> <?php echo $r_stockID; ?></td>
                                        <td> <?php echo $r_quantity; ?></td>
                                        <td> <?php echo $r_value; ?></td>
                                        <td> <?php echo $r_suppName; ?></td>
                                        <td> <?php echo $r_stockType; ?></td>
                                    </tr>

                                    <?php } ?>	
                                </tbody>
                            </table>

                            <?php 
                            if(isset($_POST['search'])){?>

                                <script type="text/javascript">change_table()</script>

                                <table class="table table-striped custom-table" id="stock2">

                                <thead>

                                    <tr>
                                        <th style="min-width:150px;">Name</th>
                                        <th>Stock ID</th>
                                        <th>Quantity</th>
                                        <th>Value(Each)</th>
                                        <th style="min-width: 110px;">Supplier</th>
                                        <th>Type</th>
                                    </tr>

                                </thead>

                                <tbody>

                                <?php 
                                    $stock_id =$_POST['stock_id'];
                                    $product_name = $_POST['product_name'];
                                    $stock_type = $_POST['stock_type'];

                                    $query = "SELECT * FROM stock where stock_id='$stock_id' or product_name='$product_name' or stock_type='$stock_type'";

                                    $query_run = mysqli_query($con,$query);

                                while ($row = mysqli_fetch_array($query_run)){

                                    $r_prodname = $row['product_name'];
                                    $r_stockID = $row['stock_id'];
                                    $r_quantity = $row['stock_quantity'];
                                    $r_value = $row['value'];
                                    $r_suppName = $row['supplier_name'];
                                    $r_stock_type = $row['stock_type'];
                                    ?>
                                    <tr>
                                        <td> <?php echo $r_prodname; ?></td>
                                        <td> <?php echo $r_stockID; ?></td>
                                        <td> <?php echo $r_quantity; ?></td>
                                        <td> <?php echo $r_value; ?></td>
                                        <td> <?php echo $r_suppName; ?></td>
                                        <td> <?php echo $r_stock_type; ?></td>

                                    </tr>


                       <?php } } ?>

                                </tbody>
                            </table>
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
    
    <script src="assets/js/jquery.dataTables.min.js"></script>
    
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    
    <script src="assets/js/jquery.slimscroll.js"></script>
    
    <script src="assets/js/select2.min.js"></script>
    
    <script src="assets/js/moment.min.js"></script>
    
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    
    <script src="assets/js/app.js"></script>
</body>


<!-- employees23:22-->
</html>