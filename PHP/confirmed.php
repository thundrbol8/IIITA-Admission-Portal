<?php
    session_start();
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="applicantinfo";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    $sql_query = "SELECT * FROM userdata WHERE Status='Confirmed'";

    $result=mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");
    $output='';

    if(mysqli_num_rows($result)>0)
    {
        
        $output.='<table class="mx-5" style="width:100%;">
            <tr>
                <th>NAME</th>
                <th>APPLICATION ID</th>
                <th>GENDER</th>
                <th>AGE</th>
                <th>EMAIL</th>
                <th>COURSE APPLIED</th>
            </tr>';

            while($row=mysqli_fetch_assoc($result))
            {
                $output.="<tr><td>{$row['Name']}</td><td>{$row['ID']}</td><td>{$row['Gender']}</td><td>{$row['Age']}</td><td>{$row['Email']}</td><td>{$row['Course']}</td></tr>";
            }
        $output.='</table>';

        mysqli_close($conn);
        echo $output;
    }
    else{
        echo '<h2>Nothing To Show</h2>';
    }
?>