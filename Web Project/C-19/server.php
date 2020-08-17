<?php

include ('dbcon.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];

    $chk = "";

     foreach($symp as $chk1){
         $chk .= $chk1.",";
    }

   // $insertquery = "INSERT INTO coronatable(username, email, mobile, message) values('$username', '$email', '$mobile', '$msg') ";
    $sql = "INSERT INTO coronatable (`username`, `email`, `mobile`,'coronasym','message')VALUES('".$username."','".$email."','".$mobile."','".$symp"',".$msg"')";


if(mysqli_query($con, $sql)){
                echo "Registration Successfully Done";
            }else{
                echo "Error";
            }



mysqli_close($con);
        
$sqlgetinfo ="SELECT * FROM student";
$results = mysqli_query($con,$sqlgetinfo);



    



?>