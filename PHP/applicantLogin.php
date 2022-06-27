<?php

if(isset($_POST['applicantLogin']))
{
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="applicantinfo";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    if(!$conn)
    {
        die("connection Failed:".mysqli_connect_error());
    }

    $applyID = $_POST['applyID'];
    $password = $_POST['password'];
    session_start();

    $sql_query = "SELECT * FROM userdata WHERE ID='$applyID' AND password='$password'";


    if($result = mysqli_query($conn,$sql_query))
    {
        $row = mysqli_fetch_assoc($result);
        if($row && $row['ID']==$applyID && $row['Password']==$password){
            $_SESSION['name'] = $row['Name'];
            $_SESSION['age'] = $row['Age'];
            $_SESSION['gender'] = $row['Gender'];
            $_SESSION['address'] = $row['Address'];
            $_SESSION['class10'] = $row['Class10%'];
            $_SESSION['class12'] = $row['Class12%'];
            $_SESSION['email']=$row['Email'];
            $_SESSION['course']=$row['Course'];
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['dob']=$row['DoB'];
            $_SESSION['photo']=$row['Photo'];
            $_SESSION['status']=$row['Status'];
            $_SESSION['password']=$row['Password'];
            
            echo '<script>window.location.href="/UAS/PHP/applicantDashboard.php";</script>';
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