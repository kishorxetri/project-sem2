<?php
include('connect_database.php');
$degree_name = $_POST['degree_name'];
$passed_year=$_POST['passed_date'];
$user_id = $_POST['user_id'];



$query = " INSERT INTO education(degree_name,passed_year,user_id) VALUES ('$degree_name','$passed_year','$user_id')";



if(mysqli_query($connect,$query)){
    header("Location:../dashboard.php");
}




?>