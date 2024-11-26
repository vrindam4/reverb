<?php
require 'dbconfig/config.php';
$total =0;
//$patient_id = $_GET['a'];
?>


<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">
    <title>Reverb</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
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
                <a href="index-2.php" class="logo">
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
                                <li class="active"><a href="purchase_history.php">Purchases</a></li>
                                
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
                        <li >
                            <a href="inventory.php"><i class="fa fa-hospital-o"></i> <span>Inventory</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li></li><a href="bill_history.php">Billings</a></li>
                                <li><a href="expenses.php">Expenses</a></li>
                                <!-- <li><a href="payments.php">Payments</a></li> -->
                                
                            </ul>
                        </li>
                        
                </div>
            </div>
        </div>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="settings.php">Settings</a>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </div>
        
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <img src="assets/img/logo.jpg" width="100" height="100" > 
                    <p><h3 class="heading"><strong>Reverb Life Care</strong></br>
                    Plot No. C-, Part II, Hebbal Industrial Area, Mysore<br>
                    Mob: 9108904726, 0821-297260</h3></p>
                </div>   
            <br>
                
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Patient Name</label>
                            <input type="text" class="form-control floating" name="patient_name" value="<?php if (isset($_POST['patient_name'])) {echo htmlentities($_POST['patient_name']); } ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Doctor Name</label>
                            <input type="text" class="form-control floating" name="doctor_name" value="<?php if (isset($_POST['doctor_name'])) {echo htmlentities($_POST['doctor_name']); } ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Phone Number</label>
                            <input type="text" class="form-control floating" name="phone_no" pattern="[0-9]+" title="Numeric value only" value="<?php if (isset($_POST['phone_no'])) {echo htmlentities($_POST['phone_no']); } ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Product Name</label>
                            <input type="text" class="form-control floating" name="product_name" list="list_prductname" required>
                            <datalist id="list_prductname">
                            <?php
                                $query = "SELECT product_name FROM stock";
                                $query_run = mysqli_query($con,$query);
                                while ($row = mysqli_fetch_array($query_run)){?>
                                    <option value="<?php echo $row['product_name'] ?>">
                                <?php } ?>
                            </datalist>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Quantity</label>
                            <input type="text" class="form-control floating" name="quantity" pattern="[0-9]+" title="Numeric value only" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Price</label>
                            <input type="text" class="form-control floating" name="price" pattern="[0-9]+" title="Numeric value only" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Tax</label>
                            <input type="text" class="form-control floating" name="tax" pattern="[0-9]+" title="Numeric value only" required>
                        </div>
                    </div>
                    <div style="padding-left: 1050px;">
                            <button class="btn btn-primary float-right btn-rounded" name="addItems"><i class="fa fa-plus"></i>ADD ITEMS</button>
                    </div>
                  </div>
                </form> 
                <?php
                    if(isset($_POST['addItems'])){
                        $patient_name = $_POST['patient_name'];
                        $doctor_name = $_POST['doctor_name'];
                        $phone_no= $_POST['phone_no'];
                        $product_name = $_POST['product_name'];
                        $quantity = $_POST['quantity'];
                        $price = $_POST['price'];
                        $tax = $_POST['tax'];
                        $amount = $quantity*$price+$tax/100;

                        $query = "SELECT stock_quantity FROM stock WHERE product_name='$product_name'";
                        $query_run = mysqli_query($con,$query);
                        while ($row = mysqli_fetch_array($query_run)){
                            $avl_quantity = $row['stock_quantity'];
                        }
                        if($avl_quantity<$quantity){
                            echo '<script type ="text/javascript"> alert("Stock Not availabe ")</script>';
                        }
                        else{
                            $query="INSERT INTO pharm_cart (`patient_name`,`doctor_name`,`phone_no`,`product_name`,`quantity`,`price`,`tax`,`amount`)VALUES ('$patient_name','$doctor_name','$phone_no','$product_name','$quantity', '$price', '$tax','$amount');";
                             $query_run = mysqli_query($con,$query);

                             if (!$query) {
                                 echo 'Error';
                             }
                        }
                    }
                ?>        
            <div class="row">
                <div class="col-md-12">
                    <h4><caption> Bill</caption></h4>
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Tax</th>
                                    <th>Amount</th>
                                    
                                </tr>  
                            </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT product_name,quantity,price,tax,amount FROM pharm_cart";
                                    $query_run = mysqli_query($con,$query);
                                    $count = 0;
                                    while ($row = mysqli_fetch_array($query_run)){
                                        $r_product_name = $row['product_name'];
                                        $r_quantity = $row['quantity'];
                                        $r_price = $row['price'];
                                        $r_tax = $row['tax'];
                                        $r_amount = $row['amount'];
                                        $count = $count+1;
                                        $total = $total+$r_amount;
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $r_product_name; ?></td>
                                        <td><?php echo $r_quantity; ?></td>
                                        <td><?php echo $r_price; ?></td>
                                        <td><?php echo $r_tax; ?></td>
                                        <td><?php echo $r_amount; ?></td>
                                        
                                    </tr>
                                <?php } ?>
                                </tbody> 
                                <tfoot>
                                    <tr>
                                        <td><strong>Total</strong></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong><?php echo $total; ?></strong></td>
                                    </tr>
                                </tfoot>
                        </table>    
                    </div>  
                </div>
                
            </div> 
            <form action="" method="post">
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn" name="create">Generate Bill</button>
                </div>
            </form> 
            <form action="" method="post">
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary float-right btn-rounded" name="clear">CLEAR</button>
                </div>
            </form>
            <?php

                if(isset($_POST['clear'])){
                        $query="DELETE from pharm_cart";
                        $query_run = mysqli_query($con,$query);
                }
                if(isset($_POST['create'])){
                    $query = "SELECT count(distinct(bill_id)) FROM pharm_purchase";
                    $result = mysqli_query($con,$query);
                    while ($res=mysqli_fetch_array($result)) {
                        $id = $res[0];
                    }
                    $bill_id = "PB-".$id;

                    $query1 = "SELECT * FROM pharm_cart;";
                    $query_run1 = mysqli_query($con,$query1);
                    $date = date("d/m/Y");
                    while ($row = mysqli_fetch_array($query_run1)){
                        $r_patient_name = $row['patient_name'];
                        $r_doctor_name = $row['doctor_name'];
                        $r_phone_no = $row['phone_no'];
                        $r_product_name = $row['product_name'];
                        $r_quantity = $row['quantity'];
                        $r_price = $row['price'];
                        $r_tax = $row['tax'];
                        $total = $total+$r_quantity*$r_price*(($r_tax/100));
                        $query = "INSERT into pharm_purchase (`bill_id`,`date`,`patient_name`,`doctor_name`,`phone_no`,`product_name`,`quantity`,`price`,`tax`,`amount`)values('$bill_id','$date','$r_patient_name','$r_doctor_name','$r_phone_no','$r_product_name','$r_quantity','$r_price','$r_tax','$total')";

                        $query_run = mysqli_query($con,$query);
                    
                    $query2 = "UPDATE `stock` SET `stock_quantity` = `stock_quantity`- $r_quantity where `product_name`='$r_product_name' ";
                        
                     $query_run2=mysqli_query($con,$query2);
                 }
                 
                    echo "<script>location.href='viewpharmbill.php?a=$bill_id'</script>";

                    $query="DELETE from pharm_cart";
                    $query_run = mysqli_query($con,$query);
                }
            ?>  
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
