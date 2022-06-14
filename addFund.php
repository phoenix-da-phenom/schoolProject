<?php
require ('session.php');


if (isset($_POST['amount'])){
    //get amount sent
    $amount = $_POST['amount'];
    $email= $_SESSION['email'];
    
    //Insert into database
    require 'DBconnection.php';
    $sql= "SELECT * FROM user_info WHERE email = '$email'";
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $customerID= $row['id'];

     //add to cookie
     //first get cookie value
        $firstPrice =$_COOKIE['price'];
        $funds= $firstPrice +  $amount;
$timeStamp=0;
$timeStamp= time() + (86400*30);

      
        $cookie_name="price";
        $cookie_value=$funds;

    $sql= "INSERT INTO purchase (customer_id,email, timestamp, amount ) VALUES ('$customerID', '$email', $timeStamp,'$funds')";
   
	if(mysqli_query($conn, $sql))
	{
		//set new cookkie
        
         setcookie($cookie_name, $cookie_value,$timeStamp, "/"); // 86400 = 1day       ;    
        
        
       



		//Redirect user to credit page
        header("location:credit_Page.php");

		
		
	}else {
		
		echo  mysqli_error($con);
	}

}




?>