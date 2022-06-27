<?php

if(isset($_POST['adminLogin']))
{
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="iiita";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    if(!$conn)
    {
        die("connection Failed:".mysqli_connect_error());
    }

    $adminID = $_POST['adminID'];
    $password = $_POST['password'];
    session_start();

    $sql_query = "SELECT * FROM admin WHERE ID='$adminID' AND Password='$password'";


    if($result = mysqli_query($conn,$sql_query))
    {
        $row = mysqli_fetch_assoc($result);
        if($row && $row['ID']==$adminID && $row['Password']==$password){
            $_SESSION['name'] = $row['Name'];
            $_SESSION['age'] = $row['Age'];
            $_SESSION['gender'] = $row['Gender'];
            $_SESSION['dob']=$row['DoB'];
            $_SESSION['phone'] = $row['Phone'];
            $_SESSION['email']=$row['Email'];
            $_SESSION['ID'] = $row['ID'];
            
            echo '<script>window.location.href="/UAS/PHP/adminDashboard.php";</script>';
        }
    }
    else
    {
        echo "Error: ". $sql ."" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>