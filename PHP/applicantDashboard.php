<?php
    session_start();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>User | Dashboard</title>
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
                        <img src="<?php echo $_SESSION['photo'];?>" alt="" style="height:100%; width:65%;">
                    </div>
                    <div class="row justify-content-around mt-1 mb-5">
                        <h5><strong>Dashboard</strong></h5>
                    </div>
                    <div class="row justify-content-around py-3">
                        <button class="btn btn-outline-info" id="view-details"><span class="fa fa-clock-o pr-3"></span><b>VIEW YOUR STATUS</b></button>
                    </div>
                    <form class="form-horizontal" action="/UAS/PHP/applicantFunctions.php" method="post">
                        <div class="form-group">

                        <?php if($_SESSION['status']=="Confirmed"){?>

                            <div class="row justify-content-around py-3">
                                <button class="btn btn-outline-info" name="admissionLetter"><b><span class="fa fa-book pr-3"></span>ADMISSION LETTER</b></button>
                            </div>

                        <?php } ?>

                        <?php if($_SESSION['status']=="Accepted"){?>

                        <?php } ?>

                            <div class="row justify-content-around py-3">
                                <button class="btn btn-danger" name="logout"><b><span class="fa fa-sign-out-alt pr-3"></span>SIGNOUT ACCOUNT</b></button>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-around">
                        <div class="modal fade" id="mymodel1">
                            <div class="modal-dialog">
                                <div class="modal-content" style="background: linear-gradient(rgba(210, 255, 225, 0.97), rgba(210, 255, 225, 0.97));" id="authentication">
                                    <div class="modal-header">
                                        <h2 style="color:firebrick;">STATUS</h2>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 style="color:firebrick;">Application Status: <?php echo $_SESSION['status'];?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <h4 style="font-weight:600;">Application ID: 
                                <?php echo $_SESSION['ID']?>
                            </h4>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-8 p-5">
                            <h4 style="font-weight:600; color:black;">Application Details:
                                <?php echo $_SESSION['ID']?>
                            </h4>
                        </div>
                        <div class="col-3 p-5">
                            <form class="form-horizontal" action="/UAS/PHP/applicantFunctions.php" method="post">
                                <div class="form-group">
                                    <button class="btn btn-info" name="download"><span class="fa fa-download pr-3"></span>DOWNLOAD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row px-5 py-3">
                        <div class="col">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    </tr>
                                </thead>
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
                                        <td style="color:black;">EMAIL ID </td>
                                        <td style="color:black;">
                                            <?php echo $_SESSION['email']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="color:black;">6</th>
                                        <td style="color:black;">ADDRESS </td>
                                        <td style="color:black;">
                                            <?php echo $_SESSION['address']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="color:black;">7</th>
                                        <td style="color:black;">CLASS 10 SCRORE </td>
                                        <td style="color:black;">
                                            <?php echo $_SESSION['class10']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" style="color:black;">8</th>
                                        <td style="color:black;">CLASS 12 SCORE </td>
                                        <td style="color:black;">
                                            <?php echo $_SESSION['class12']?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="mymodelx">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background: linear-gradient(rgba(210, 255, 225, 0.97), rgba(210, 255, 225, 0.97));" id="authentication">
                                <div class="modal-header">
                                    <h2 style='color:firebrick;'>Information</h2>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body" id="interview-data" style="color:black;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        $(document).ready(function() {
            $('#view-details').click(function() {
                <?php $idd1=$_SESSION['ID'];$pass1=$_SESSION['password'];?>
                var applicationid = <?php echo json_encode($idd1); ?>;
                var password = <?php echo json_encode($pass1); ?>;

                $.ajax({
                    url: "/UAS/PHP/interviewQuery.php",
                    method: "post",
                    data: {
                        applicationid: applicationid,
                        password: password
                    },
                    success: function(data) {
                        $('#interview-data').html(data);
                        $('#mymodelx').modal("show");
                    }
                });
            });
        });
    </script>

    </body>

    </html>