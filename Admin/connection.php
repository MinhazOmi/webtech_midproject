<?php
    
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'jobportal'); 

    if($connection)
    {
        //echo "connection established";
    }
    else{
        print("connection failed because ".mysqli_connect_error());
    }


?>