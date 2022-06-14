<?php
session_start();

if (isset($_POST['login_button'])){

    //add email to session
 $email_address= $_POST['email_address'];
$_SESSION['email']= $email_address;
//get today date
$today= date("Y/m/d");



require ('DBconnection.php');

$mysql_qry="SELECT * FROM user_info WHERE email = '$email_address'";
$result = mysqli_query($conn,$mysql_qry);

if (mysqli_num_rows($result)> 0)
{
	//Email already exist
	//redirect user
        header("location:mainPage.php");
}else{
	
	//email does not exist
    $sql= "INSERT INTO user_info (email,purchase,date_register ) VALUES ('$email_address', 0,'$today' )";
    if (mysqli_query($conn, $sql)){
        
        //redirect user
        header("location:mainPage.php");
    }
    
}












    
}



  


mysqli_close($conn) ;



?>