<?php
    session_start();
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="applicantinfo";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);

    $sql_query = "SELECT * FROM course";

    $result=mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");
    $output='';

    if(mysqli_num_rows($result)>0)
    {
        
        $output.='<h2 class="text-center pb-3"><b style="color:black;">SEAT MATRIX</b></h2><table class="table" style="width:100%;">
            <tr style="background-color:green;">
                <th style="color:white;">COURSE ID</th>
                <th style="color:white;">COURSE NAME</th>
                <th style="color:white;">TOTAL SEATS</th>
            </tr>';

            while($row=mysqli_fetch_assoc($result))
            {
                $output.="<tr><td style='color:black;'>{$row['CourseID']}</td><td style='color:black;'>{$row['CourseName']}</td><td style='color:black;'>{$row['Seats']}</td></tr>";
            }
        $output.='</table>';

        mysqli_close($conn);
        echo $output;
    }
    else{
        echo '<h2>Nothing To Show</h2>';
    }
?>