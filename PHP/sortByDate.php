<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date: <?php echo $_SESSION['dateVal'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/UAS/CSS/viewApplicants.css">
    <link rel="stylesheet" href="/UAS/CSS/signup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

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
    $dateVal=$_SESSION['dateVal'];
    $sql_query = "SELECT * FROM course WHERE StartDate='$dateVal'";
    $result=mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");

    if(mysqli_num_rows($result)>0)
    {
?>
<div class="row" id="logUp" style="background:white; color:black;">
    <div class="col"><h1 class="m-5 text-center"style="font-family:'Courier New';"><strong>START DATE: <?php echo $_SESSION['dateVal'];?></strong></h1></div>
</div>
<div class="row"  style="width:100vw;">
<table id="students" class="mx-5">
    <thead>
        <th id="1">COURSE ID</th>
        <th id="1">COURSE NAME</th>
        <th id="1">COURSE CREDITS</th>
        <th id="1">COURSE DURATION(in yrs)</th>
        <th id="1">DEGREE OFFERED</th>
    </thead>
    <tbody>
        <?php
            while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['CourseID'];?></td>
            <td><?php echo $row['CourseName'];?></td>
            <td><?php echo $row['Credits'];?></td>
            <td><?php echo $row['Course Duration'];?></td>
            <td><?php echo $row['Degree'];?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>
    </div>

<?php 
    }
    else{
        echo 'No courses to show!!';
    }
?>

</body>
</html>