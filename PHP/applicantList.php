        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<?php
    session_start();
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="applicantinfo";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);

    $sql_query = "SELECT * FROM userdata";

    $result=mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");
    $output='';

    if(mysqli_num_rows($result)>0)
    {
        
        $output.='<h2 class="text-center pb-3"><b style="color:black;">APPLICANT LIST</b></h2><table class="table" style="width:100%;">
            <tr style="background-color:black;">
                <th style="color:white;">NAME</th>
                <th style="color:white;">APPLICATION ID</th>
                <th style="color:white;">COURSE APPLIED</th>
                <th style="color:white;">ACTIONS</th>
            </tr>';

            while($row=mysqli_fetch_assoc($result))
            {
                $ID=$row['ID'];
                $output.="<tr><td style='color:black;'>{$row['Name']}</td><td style='color:black;'>{$row['ID']}</td><td style='color:black;'>{$row['Course']}</td><td><form class='form-horizontal' action='/UAS/PHP/macFunctions.php?id=$ID' method='POST'><div class='form-group'><button class='btn btn-info mr-3' name='details'><b>DETAILS</b></button><button class='btn btn-primary mr-3' name='accept'><b>ACCEPT</b></button><button class='btn btn-danger mr-3' name='reject'><b>REJECT</b></button><button class='btn btn-success' name='confirm'><b>CONFIRM</b></button></div></form></td></tr>";
            }
                $output.='</table>';

        mysqli_close($conn);
        echo $output;
    }
    else{
        echo '<h2>Nothing To Show</h2>';
    }
?>