<?php
    session_start();
    $_SESSION['shouldDisplay']=1;
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>MAC | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/UAS/CSS/applicantDashboard.css">
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
            <div class="row" id="menuSection">

                <div class="col-md-2" style="background-color:#002147;">
                    <div class="row justify-content-around my-5" style="height:150px;" id="iconSection">
                        <img style="background:white;border-radius:50%;" src="/UAS/Images/Index Page/Image2.png" alt="">
                    </div>
                    <div class="row justify-content-around mt-1 mb-5">
                        <h5><strong>Dashboard</strong></h5>
                    </div>
                    <div class="row justify-content-around pb-3">
                        <button class="btn btn-outline-info mb-3" id="viewProfile"><span class="fa fa-users pr-2"></span><b>VIEW THE PROFILE</b></button>
                    </div>
                    <div class="row justify-content-around pb-3">
                        <button class="btn btn-outline-info" id="seeProgramme"><b><span class="fa fa-calculator pr-3"></span>SEE PROGRAMME</b></button>
                    </div>
                    <div class="row justify-content-around py-3">
                        <button class="btn btn-outline-info" id="viewApplicants"><b><span class="fa fa-user pr-3"></span>VIEW APPLICANTS</b></button>
                    </div>
                    <div class="row justify-content-around py-3">
                        <button class="btn btn-outline-info" id="seatMatrix"><b><span class="fas fa-calculator pr-2"></span>VIEW SEAT MATRIX</b></button>
                    </div>
                    <div class="row justify-content-around py-3">
                        <a href=/UAS/index.php><button class="btn btn-danger" name="logout"><b><span class="fa fa-sign-out-alt pr-2"></span>SIGNOUT ACCOUNT</b></button></a>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="row justify-content-around py-4" style="background-color:#002147;">
                        <div class="col-6 px-5">
                            <h4 style="font-weight:600;">Welcome
                                <?php echo $_SESSION['name']?>
                            </h4>
                        </div>
                        <div class="col-6 text-right px-5">
                            <h4 style="font-weight:600;">MAC ID: 
                                <?php echo $_SESSION['ID']?>
                            </h4>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col pt-5" style="width:100%;" id="dynamic-Content">
                            <table class="table">
                                
                                <tbody>
                                    <tr>
                                        <th scope="row" style="color:black;">1</th>
                                        <th style="color:black;">NAME </td>
                                            <td style="color:black;">
                                                <?php echo $_SESSION['name']?>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="color:black;">2</th>
                                        <td style="color:black;">AGE </td>
                                        <td style="color:black;">
                                            <?php echo $_SESSION['age']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="color:black;">3</th>
                                        <td style="color:black;">GENDER </td>
                                        <td style="color:black;">
                                            <?php echo $_SESSION['gender']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="color:black;">4</th>
                                        <td style="color:black;">DATE OF BIRTH </td>
                                        <td style="color:black;">
                                            <?php echo $_SESSION['dob']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="color:black;">5</th>
                                        <td style="color:black;">CONTACT NUMBER </td>
                                        <td style="color:black;">
                                            <?php echo $_SESSION['phone']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="color:black;">6</th>
                                        <td style="color:black;">EMAIL ID </td>
                                        <td style="color:black;">
                                            <?php echo $_SESSION['email']?>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $('#seatMatrix').click(function(){
                    
                    $.ajax({
                        url:"/UAS/PHP/seatMatrix.php",
                        method:"post",
                        success:function(data){
                            $('#dynamic-Content').html(data);
                        }
                    });
                });
                $('#viewProfile').click(function(){
                    
                    $.ajax({
                        url:"/UAS/PHP/macProfile.php",
                        method:"post",
                        success:function(data){
                            $('#dynamic-Content').html(data);
                        }
                    });
                });
                $('#seeProgramme').click(function(){
                    
                    $.ajax({
                        url:"/UAS/PHP/macProgramme.php",
                        method:"post",
                        success:function(data){
                            $('#dynamic-Content').html(data);
                        }
                    });
                });
                $('#viewApplicants').click(function(){
                    
                    $.ajax({
                        url:"/UAS/PHP/applicantList.php",
                        method:"post",
                        success:function(data){
                            $('#dynamic-Content').html(data);
                        }
                    });
                });
            });
        </script>

    </body>

    </html>