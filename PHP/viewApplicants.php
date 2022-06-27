<?php
    session_start();
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row" id="logUp" style="background:white; color:black;">
        <div class="col-md-4 m-md-2">
            <h1 class="my-5 text-center"style="font-family:'Courier New';"><strong>APPLICANTS</strong></h1>
        </div>
        <div class="col-md-7 my-md-5">
            <button class="btn btn-primary mx-2 my-lg-3" id="viewAll">VIEW ALL</button>
            <button class="btn btn-warning mx-2 my-lg-3" id="accepted">ACCEPTED</button>
            <button class="btn btn-danger mx-2 my-lg-3" id="rejected">REJECTED</button>
            <button class="btn btn-info mx-2 my-lg-3" id="confirmed">CONFIRM</button>
        </div>
    </div>
    <div class="row justify-content-around mt-2" id="students" style="width:100%;">
    </div>

    <script>
        $(document).ready(function(){
            $('#accepted').click(function(){
                
                $.ajax({
                    url:"/UAS/PHP/accepted.php",
                    method:"post",
                    success:function(data){
                        $('#students').html(data);
                    }
                });
            });
            $('#rejected').click(function(){
                
                $.ajax({
                    url:"/UAS/PHP/rejected.php",
                    method:"post",
                    success:function(data){
                        $('#students').html(data);
                    }
                });
            });
            $('#confirmed').click(function(){
                
                $.ajax({
                    url:"/UAS/PHP/confirmed.php",
                    method:"post",
                    success:function(data){
                        $('#students').html(data);
                    }
                });
            });
            $('#viewAll').click(function(){
                
                $.ajax({
                    url:"/UAS/PHP/viewAll.php",
                    method:"post",
                    success:function(data){
                        $('#students').html(data);
                    }
                });
            });
        });
    </script>

</div>

</body>
</html>