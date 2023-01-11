<?php
include('connect_database.php');
$skill_name = $_POST['skill'];
$user_id = $_POST['user_id'];



$query = " INSERT INTO skills(skill_name,user_id) VALUES ('$skill_name','$user_id')";



if(mysqli_query($connect,$query)){
    header("Location:../dashboard.php");
}




?>