<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "Portfolio_login";


$conn = mysqli_connect($serverName,$userName,$password,$database);
if(mysqli_connect_error()){
    die('connection failed'.mysqli_connect_error());
}
else{


if(isset($_POST)){
    $email = $_POST['username'];
    $pass=$_POST['password'];
    $sql = "select *from LoginData where email = '$email' and password = '$pass'";  
    $result= mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    // echo $email<br>;
    // echo $pass<br>;
    echo $count;

    echo 'Hello world';
    echo $email;
    echo $pass;

    if($count == 1){  
        header('location:frontPage.php');
        echo "<h1><center> Login successful </center></h1>";     
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }     
}

}

?>