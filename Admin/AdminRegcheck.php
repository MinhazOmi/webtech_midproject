<?php

    include("connection.php");
    session_start();
    


    if(isset($_POST['submit']))
    {


        $Name = $_POST['name'];
        $username = $_POST['uname'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(empty($Name) || empty($username) || empty($password) || empty($email)){

            header("location:AdminRegistration.php?msg=All fields are required");
            
        }
        else{

            $sql = "INSERT INTO adminlogin VALUES ('$Name' ,'$username','$password','$email')";
    
            $data = mysqli_query($connection, $sql);
            
            if($data)
            {
                setcookie('name', $Name, time()+3600, '/');
                setcookie('uname', $username, time()+3600, '/');
                setcookie('password', $password, time()+3600, '/');
                setcookie('email', $email, time()+3600, '/');


              
                echo "Admin registration Successful!";

            }
            else
            {
                echo "Error while registering";
          
            }
    
            header("refresh:2; url=AdminLogin.php");
    
         }

        }
    else 
    {
        echo "Failed";
    }


?>