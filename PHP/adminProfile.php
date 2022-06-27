<?php
    session_start();
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="iiita";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);

    $sql_query = "SELECT * FROM admin";

    $result=mysqli_query($conn,$sql_query) or die("Error !! Something went wrong");
    $output='';

    if(mysqli_num_rows($result)>0)
    {
        
        $output.='<table class="table" style="width:100%;">';

            while($row=mysqli_fetch_assoc($result))
            {
                $output.="<tr><td style='color:black;'>1</td><td style='color:black;'>NAME </td><td style='color:black;'>{$row['Name']}</td></tr>";
                $output.="<tr><td style='color:black;'>2</td><td style='color:black;'>AGE </td><td style='color:black;'>{$row['Age']}</td></tr>";
                $output.="<tr><td style='color:black;'>3</td><td style='color:black;'>GENDER </td><td style='color:black;'>{$row['Gender']}</td></tr>";
                $output.="<tr><td style='color:black;'>4</td><td style='color:black;'>DATE OF BIRTH </td><td style='color:black;'>{$row['DoB']}</td></tr>";
                $output.="<tr><td style='color:black;'>5</td><td style='color:black;'>CONTACT NUMBER </td><td style='color:black;'>{$row['Phone']}</td></tr>";
                $output.="<tr><td style='color:black;'>6</td><td style='color:black;'>EMAIL ID </td><td style='color:black;'>{$row['Email']}</td></tr>";
            }
        $output.='</table>';

        mysqli_close($conn);
        echo $output;
    }
    else{
        echo '<h2>Nothing To Show</h2>';
    }
?>