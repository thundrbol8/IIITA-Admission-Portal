<?php

if(isset($_POST['macLogin']))
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

    $macID = $_POST['macID'];
    $password = $_POST['password'];
    session_start();

    $sql_query = "SELECT * FROM mac WHERE ID='$macID' AND Password='$password'";


    if($result = mysqli_query($conn,$sql_query))
    {
        $row = mysqli_fetch_assoc($result);
        if($row && $row['ID']==$macID && $row['Password']==$password){
            $_SESSION['name'] = $row['Name'];
            $_SESSION['age'] = $row['Age'];
            $_SESSION['gender'] = $row['Gender'];
            $_SESSION['dob']=$row['DoB'];
            $_SESSION['phone'] = $row['Phone'];
            $_SESSION['email']=$row['Email'];
            $_SESSION['ID'] = $row['ID'];
            
            echo '<script>window.location.href="/UAS/PHP/macDashboard.php";</script>';
        }
        else{
            echo 'Invalid User Credentials';
        }
    }
    else
    {
        echo "Error: ". $sql ."" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>