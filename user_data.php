<?php 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];

print_r($_POST);
    //print_r($name,$email,$dob,$gender,$country);
}




?>