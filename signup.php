<?php 
// echo"hello";
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$pass = $_POST['password'];
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "Portfolio_login";


$conn = mysqli_connect($serverName,$userName,$password,$database);
if(mysqli_connect_error()){
    die('connection failed'.mysqli_connect_error());
}
    else
{
    $duplicate = mysqli_query($conn,"SELECT * FROM LoginData WHERE email = '$email'") or die("query failed");
    // echo $duplicate[0];

    if(mysqli_num_rows($duplicate)>0){
        echo "This email is already registered.";
        // echo "This email is already registered";
      }else{
     $insert = mysqli_query($conn,"INSERT INTO `LoginData` (firstName,lastName, email,DOB, password) VALUES('$first_name','$last_name', '$email','$dob' ,'$pass')") or die ('query failed');


     if($insert){
        header('location:frontPage.php');
        echo "Done";
     }
     else{
        echo "failed";
     }
    }
}


    



?>