<?php

if(isset($_POST['apply']))
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

    $sql_query0="SELECT * FROM userdata";
    $result=mysqli_query($conn,$sql_query0) or die("Error !! Something went wrong");
    $cnt=0;

    while($row=mysqli_fetch_assoc($result))
    {
        $cnt=$row['ID'];
    }
    if($cnt==0){
        $cnt=123456788;
    }

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $Class10 = $_POST['Percent10'];
    $Class12 = $_POST['Percent12'];
    $Email = $_POST['Email'];
    $ID=$cnt+1;
    $Password = $_POST['Password'];
    $DoB = $_POST['DoB'];
    $status="Applied";
    $CourseName = $_POST['CourseName'];
    $file = $_FILES['photo'];


    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror==0){
        $destinationFile='UPLOAD/'.$filename;
        move_uploaded_file($filepath,$destinationFile);

        $sql_query = "INSERT INTO userdata VALUES('$Name','$Age','$Gender','$Address','$Class10','$Class12','$Email','$CourseName','$ID','$Password','$DoB','$destinationFile','$status')";
        mysqli_query($conn,$sql_query);
        $msg="Registration Completed Successfully. Your Application ID is : ".$ID;
        echo "<script>alert('$msg')</script>";
        echo '<script>window.location.href="/UAS/index.php";</script>';
    }

    else
    {
        echo "Error: ". $sql ."" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>