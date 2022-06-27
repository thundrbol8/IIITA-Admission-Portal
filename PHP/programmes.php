<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courses | IIITA</title>
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
    session_start();
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="applicantinfo";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    if(!$conn)
    {
        die("connection Failed:".mysqli_connect_error());
    }

    $sql_query = "SELECT * FROM course";
    $result=mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");

    if(mysqli_num_rows($result)>0)
    {
?>
<div class="row" id="logUp" style="background:white; color:black;">
    <div class="col-md-4"><h1 class="m-5 text-center"style="font-family:'Courier New';"><strong> COURSES OFFERED</strong></h1></div>
    <div class="col-md-7 m-5">
            <button class="btn btn-primary mx-4" data-target="#mymodel2" data-toggle="modal">INSERT COURSE</button>
            <div class="modal" id="mymodel2">
                <div class="modal-dialog">
                    <div class="modal-content" style="left:-20%; width:150%; background: linear-gradient(rgba(210, 255, 225, 0.97), rgba(210, 255, 225, 0.97));" id="authentication">
                        <div class="modal-header">
                            <h2>New Course</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="/UAS/PHP/adminFunctions.php" method="post">
                                <div class="form-group">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Course ID</b></label>
                                                <input type="text" name="courseid" class="form-control" required/>
                                                <label><b>Course Name</b></label>
                                                <input type="text" name="coursename" class="form-control" required/>
                                                <label><b>Course Credits</b></label>
                                                <input type="text" name="coursecredits" class="form-control" required/>
                                                <label><b>Start Date</b></label>
                                                <input type="date" name="startdate" class="form-control" required/>
                                            </div>
                                            <div class="col-md-6">
                                                <label><b>Seats Allocated</b></label>
                                                <input type="text" name="seats" class="form-control" required/>
                                                <label><b>Course Duration(in yrs)</b></label>
                                                <input type="text" name="courseduration" class="form-control" required/>
                                                <label><b>Degree Offered</b></label>
                                                <select name="degree">   
                                                    <option value = "Select Course">Select Course</option> 
                                                    <option value = "B.Tech">B.Tech</option> 
                                                    <option value = "M.Tech">M.Tech</option>
                                                    <option value = "Dual Degree">Dual Degree</option>
                                                    </select>
                                                <input type="submit" name="insert" value="INSERT">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-danger mx-4" name="delete" data-target="#mymodel3" data-toggle="modal">DELETE COURSE</button>
            <div class="modal" id="mymodel3">
                <div class="modal-dialog">
                    <div class="modal-content" style="background: linear-gradient(rgba(210, 255, 225, 0.97), rgba(210, 255, 225, 0.97));" id="authentication">
                        <div class="modal-header">
                            <h2>Delete Course</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="/UAS/PHP/adminFunctions.php" method="post">
                                <div class="form-group">
                                    <label><b>Course ID</b></label>
                                    <input type="text" name="courseid" class="form-control" required/>
                                    <input type="submit" name="delete" value="DELETE">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-info mx-4" name="delete" data-target="#mymodel0" data-toggle="modal">CHANGE SCHEDULE</button>
            <div class="modal" id="mymodel0">
                <div class="modal-dialog">
                    <div class="modal-content" style="background: linear-gradient(rgba(210, 255, 225, 0.97), rgba(210, 255, 225, 0.97));" id="authentication">
                        <div class="modal-header">
                            <h2>Change Schedule</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="/UAS/PHP/adminFunctions.php" method="post">
                                <div class="form-group">
                                    <label><b>Course ID</b></label>
                                    <input type="text" name="courseid" class="form-control" required/>
                                    <label><b>New Start Date</b></label>
                                    <input type="date" name="newdate" class="form-control" required/>
                                    <input type="submit" name="schedule" value="CHANGE SCHEDULE">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-warning mx-4" name="delete" data-target="#mymodel4" data-toggle="modal">VIEW BY DATE</button>
            <div class="modal" id="mymodel4">
                <div class="modal-dialog">
                    <div class="modal-content" style="background: linear-gradient(rgba(210, 255, 225, 0.97), rgba(210, 255, 225, 0.97));" id="authentication">
                        <div class="modal-header">
                            <h2>Change Schedule</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="/UAS/PHP/adminFunctions.php" method="post">
                                <div class="form-group">
                                    <label><b>Select Date</b></label>
                                    <input type="date" name="newdate" class="form-control" required/>
                                    <input type="submit" name="viewByDate" value="SORT BY DATE">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="row"  style="width:100vw;">
<table id="students" class="mx-5">
    <thead>
        <th id="1">COURSE ID</th>
        <th id="1">COURSE NAME</th>
        <th id="1">COURSE CREDITS</th>
        <th id="1">START DATE</th>
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
            <td><?php echo $row['StartDate'];?></td>
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
        echo 'No applicants to show!!';
    }
?>

</body>
</html>