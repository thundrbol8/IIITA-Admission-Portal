<?php

if(isset($_POST['applicationid']))
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

    $applyID = $_POST['applicationid'];
    $password=$_POST['password'];
    session_start();

    $sql_query = "SELECT * FROM userdata WHERE ID='$applyID' AND Password='$password'";
    $output='';

    if($result = mysqli_query($conn,$sql_query))
    {
        $output.="<h4 style='color:black;'>Dear <b style='color:firebrick;'>";
        $row = mysqli_fetch_assoc($result);
        if($row && $row['ID']==$applyID){
            $_SESSION['applicantemail']=$row['Email'];
            if($row['Status']=="Accepted"){
                $output.=$row['Name']."</b>, your application has been shortlisted for the interview.</h4>";
            }
            else if($row['Status']=="Applied"){
                $output.=$row['Name']."</b>, your application is yet to be shortlisted for the interview.</h4>";
            }
            else if($row['Status']=="Confirmed"){
                $output.=$row['Name']."</b>,</h4>";
                $output.="<h4 style='color:black;'>Congrats! you have been granted the admission. Kindly download your admission letter from your account.</h4>";
            }
            else if($row['Status']=="Rejected"){
                $output.=$row['Name']."</b>,</h4>";
                $output.="<h4 style='color:black;'>We regret to inform you thar your application has been rejected by the committee.</h4>";
            }

            echo $output;
        }
        else{
            echo '<h4>Invalid User Credentials</h4>';
        }
    }
    else
    {
        echo "Error: ". $sql ."" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>