<?php

$con = mysqli_connect("localhost","root","") or die("Unable to connet");
$sql = 'CREATE Database Reverb';
$retval = mysqli_query($con,$sql);

if($retval){
	echo "<script>alert('Database Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Database already exists')</script>";
}

$query = "CREATE TABLE `Reverb`.`doctor` ( `doctor_id` VARCHAR(20) NOT NULL , PRIMARY KEY (`doctor_id`) ,`full_name` VARCHAR(100) NOT NULL , `specialisation` VARCHAR(100) NOT NULL , `date_of_joining` VARCHAR(50) NOT NULL ,`uname` VARCHAR(30) NOT NULL,`password` VARCHAR(30) NOT NULL, `email` VARCHAR(100) NOT NULL , `phone_no` VARCHAR(15) NOT NULL,`address` VARCHAR(200) NOT NULL,`gender` VARCHAR(50) NOT NULL,`short_bio` VARCHAR(250) NOT NULL)";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}

$query = "CREATE TABLE `Reverb`.`patient` ( `patient_id` VARCHAR(20) NOT NULL , `full_name` VARCHAR(100) NOT NULL , `age` VARCHAR(5) NOT NULL , `sex` VARCHAR(10) NOT NULL , `phone_no` VARCHAR(15) NOT NULL , `email` VARCHAR(100) NOT NULL , `address` VARCHAR(150) NOT NULL , `doctor_id` VARCHAR(20) NOT NULL , `diagnosis` VARCHAR(100) NOT NULL , `date_of_admission` VARCHAR(20) NOT NULL , `allergies` VARCHAR(100) NOT NULL , `previous_medication` VARCHAR(150) NOT NULL , `e_full_name` VARCHAR(100) NOT NULL , `e_relation` VARCHAR(50) NOT NULL , `e_phone_no` VARCHAR(15) NOT NULL , `patient_type` VARCHAR(10) NOT NULL , PRIMARY KEY (`patient_id`))";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}

$query= "CREATE TABLE `Reverb`.`billing` ( `billing_no` VARCHAR(20) NOT NULL ,  `patient_id` VARCHAR(50) NOT NULL ,  `date` VARCHAR(20) NOT NULL ,  `product_name` VARCHAR(100) NOT NULL ,  `no_of_days` VARCHAR(10) NOT NULL ,  `amount` VARCHAR(20) NOT NULL )";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}

$query="CREATE TABLE `Reverb`.`inventory` ( `inv_id` VARCHAR(20) NOT NULL , PRIMARY KEY(`inv_id`) `inv_name` VARCHAR(100) NOT NULL ,  `stock` INT(250) NOT NULL ,  `info` VARCHAR(500) NOT NULL )";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}

$query="CREATE TABLE `Reverb`.`cart` ( `product_name` VARCHAR(100) NOT NULL , `no_of_days` VARCHAR(10) NOT NULL , `amount` VARCHAR(50) NOT NULL )";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}

$query="CREATE TABLE `Reverb`.`timesheet` ( `emp_id` VARCHAR(50) NOT NULL ,  `date` VARCHAR(50) NOT NULL ,  `in_time` VARCHAR(50) NOT NULL ,  `out_time` VARCHAR(50) NOT NULL ,    PRIMARY KEY  (`emp_id`))";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}

$query="CREATE TABLE `Reverb`.`salary` ( `emp_id` VARCHAR(50) NOT NULL ,  `basic` VARCHAR(50) NOT NULL ,  `DA` VARCHAR(50) NOT NULL ,  `HRA` VARCHAR(50) NOT NULL ,  `MA` VARCHAR(50) NOT NULL ,  `PF` VARCHAR(50) NOT NULL ,    PRIMARY KEY  (`emp_id`))";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}

$query="CREATE TABLE `Reverb`.`employee` ( `emp_id` VARCHAR(50) NOT NULL ,  `full_name` VARCHAR(70) NOT NULL ,  `email` VARCHAR(50) NOT NULL ,  `uname` VARCHAR(50) NOT NULL ,  `password` VARCHAR(50) NOT NULL ,  `date_of_joining` VARCHAR(70) NOT NULL ,  `phone_no` VARCHAR(70) NOT NULL ,  `role` TEXT NOT NULL ) ";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}
$query = "CREATE TABLE `Reverb`.`pharm_purchase` ( `bill_id` VARCHAR(20) NOT NULL , `patient_name` VARCHAR(100) NOT NULL , `doctor_name` VARCHAR(100) NOT NULL, `phone_no` VARCHAR(15) NOT NULL, `product_name` VARCHAR(100) NOT NULL ,  `quantity` VARCHAR(20) NOT NULL , `price` VARCHAR(10) NOT NULL, `tax` INT(11) NOT NULL, `amount` INT(11) NOT NULL )";
$query_run = mysqli_query($con,$query);

if($query_run){
echo "<script>alert('Created Sucessfully')</script>";
}
else{
echo "<script>alert('Tables already exists')</script>";
}

$query = "CREATE TABLE `Reverb`.`pharm_cart` ( `patient_name` VARCHAR(100) NOT NULL , `doctor_name` VARCHAR(100) NOT NULL, `phone_no` VARCHAR(15) NOT NULL, `product_name` VARCHAR(100) NOT NULL ,  `quantity` VARCHAR(20) NOT NULL , `price` VARCHAR(10) NOT NULL, `tax` INT(11) NOT NULL, `amount` INT(11) NOT NULL )";
$query_run = mysqli_query($con,$query);

if($query_run){
echo "<script>alert('Created Sucessfully')</script>";
}
else{
echo "<script>alert('Tables already exists')</script>";
}


$query = "CREATE TABLE `Reverb`.`inventory` ( `inv_id` VARCHAR(20) NOT NULL , PRIMARY KEY (`inv_id`) ,`inv_name` VARCHAR(100) NOT NULL , `stock` INT(250) NOT NULL , `info` VARCHAR(500) NOT NULL ,`purchased_by` VARCHAR(250) NOT NULL,`purchased_from` VARCHAR(250) NOT NULL, `date` DATE NOT NULL , `amount` INT(250) NOT NULL)";
$query_run = mysqli_query($con,$query);

if($query_run){
echo "<script>alert('Created Sucessfully')</script>";
}
else{
echo "<script>alert('Tables already exists')</script>";
}

$query = "CREATE TABLE `Reverb`.`stock` ( `stock_id` VARCHAR(20) NOT NULL , `product_name` VARCHAR(100) NOT NULL , `supplier_name` VARCHAR(100) NOT NULL , `stock_quantity` VARCHAR(10) NOT NULL , `value` VARCHAR(15) NOT NULL ,  `date_of_addition` VARCHAR(20) NOT NULL , `stock_type` VARCHAR(10) NOT NULL , PRIMARY KEY (`stock_id`))";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}
$query = "ALTER TABLE `employee`  ADD `gender` VARCHAR(20) NOT NULL  AFTER `password`;";
$query_run = mysqli_query($con,$query);
$query = "ALTER TABLE `employee`  ADD `address` VARCHAR(150) NOT NULL  AFTER `role`;";
$query_run = mysqli_query($con,$query);

?>