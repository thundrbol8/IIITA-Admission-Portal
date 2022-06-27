<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applicants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/UAS/CSS/viewApplicants.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="applicantinfo";
$conn=mysqli_connect($server_name,$username,$password,$database_name);


if(!$conn)
{
    die("connection Failed:".mysqli_connect_error());
}

if(isset($_POST['details']))
{
    $IDHere = $_GET['id'];
    $sql_query = "SELECT * FROM userdata WHERE ID='$IDHere'";
    $result = mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");

    $row = mysqli_fetch_assoc($result);
    ?>
        <h1 class="m-5" style="font-family:'Courier New';"><strong>APPLICATION ID: <?php echo $row['ID'];?></strong></h1>
        <div class="row justify-content-around mx-5" style="width:100vw;">
            <div class="col">
                <table id="students" class="mx-5" style="width:50%;">
                    <tbody>
                        <th>Parameter</th>
                        <th>Details</th>
                        <tr><td>Name : </td><td><?php echo $row['Name'];?></td></tr>
                        <tr><td>Age: </td><td><?php echo $row['Age'];?></td></tr>
                        <tr><td>Gender : </td><td><?php echo $row['Gender'];?></td></tr>
                        <tr><td>Class 10 Aggregate : </td><td><?php echo $row['Class10%'];?></td></tr>
                        <tr><td>Class 12 Aggregate : </td><td><?php echo $row['Class12%'];?></td></tr>
                        <tr><td>Adderess : </td><td><?php echo $row['Address'];?></td></tr>
                        <tr><td>Email : </td><td><?php echo $row['Email'];?></td></tr>
                        <tr><td>Course Applied : </td><td><?php echo $row['Course'];?></td></tr>
                        <tr><td>Date of Birth : </td><td><?php echo $row['DoB'];?></td></tr>
                        <tr><td>Application Status : </td><td><?php echo $row['Status'];?></td></tr>
                    </tbody>
                </table>
            </div>
        </div>

    <?php
}

if(isset($_POST['accept']))
{   
    $IDHere=$_GET['id'];

    $sql_query = "UPDATE userdata SET Status='Accepted' WHERE ID='$IDHere'";
    $sql_query1 = "SELECT Email,Name FROM userdata WHERE ID='$IDHere'";
    $result = mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");
    $result1 = mysqli_query($conn,$sql_query1) or die("Error !! Something went wrong");
    $row = mysqli_fetch_assoc($result1);
    $name=$row['Name'];

    echo '<script>window.location.href="/UAS/PHP/macDashboard.php";</script>';

}

if(isset($_POST['confirm']))
{   
    $IDHere=$_GET['id'];

    $sql_query = "UPDATE userdata SET Status='Confirmed' WHERE ID='$IDHere'";
    $sql_query1 = "SELECT Email,Name,Course FROM userdata WHERE ID='$IDHere'";
    $result = mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");
    $result1 = mysqli_query($conn,$sql_query1) or die("Error !! Something went wrong");
    $row = mysqli_fetch_assoc($result1);
    $name=$row['Name'];
    $programme=$row['Course'];

    echo '<script>window.location.href="/UAS/PHP/macDashboard.php";</script>';

}

if(isset($_POST['reject']))
{

    $IDHere=$_GET['id'];
    $sql_query = "UPDATE userdata SET Status='Rejected' WHERE ID='$IDHere'";
    $sql_query1 = "SELECT Email,Name FROM userdata WHERE ID='$IDHere'";
    $result=mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");
    $result1 = mysqli_query($conn,$sql_query1) or die("Error !! Something went wrong");
    $row = mysqli_fetch_assoc($result1);

    echo '<script>window.location.href="/UAS/PHP/macDashboard.php";</script>';

}

?>