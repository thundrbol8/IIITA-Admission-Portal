<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IIITA | Admission Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <!--Menu Section Starts Now-->

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <em class="fa fa-bars"></em>
        </label>
        <label class="logo"><em class="fa fa-graduation-cap"></em> Admission Portal</label>
        <ul>
            <li><a href="">HOME</a></li>
            <li><a href="/UAS/HTML/signup.html">APPLY</a></li>
            <li><a href="/UAS/HTML/about.html">ABOUT</a></li>
            <li><a href="#goDown">CONTACT</a></li>
        </ul>
    </nav>

    <!--IIITA Intro Section-->

    <section>

        <div class=" calltoaction-20 py-5 editContent">
            <div class="container py-md-3 ">

                <div class="calltoaction-20-content row">
                    <div class="column center-align-self col-lg-6 pr-lg-5" id="infoID" data-aos="slide-left">
                        <h2 class="editContent " style="padding-bottom:20px; "><strong>Why IIITA ?</strong></h2>
                        <p class="more-gap editContent text-justify">The campus plan, based on a bird taking flight symbolises a launchpad for students to shoot for the stars. The beautiful 100 acre campus, situated at Deoghat, Jhalwa, designed meticulously on the Penrose Geometry pattern, is being
                            further topped by fine landscaping.</p>
                        <p class="more-gap editContent text-justify">IIITA maintaining its legacy in the domain of coding stuff and invention, makes endless efforts in making the students inclined towards the field of oif reasearch with its rigrous academic ciricullum making students arriving ICPC
                            Regionals and finals.<button type="button"><a href="/UAS/HTML/about.html" target="_blank"><strong>Read More</strong></button></a>
                        </p>
                    </div>
                    <div class="column ccont-left col-lg-6" data-aos="slide-right">
                        <img src="Images/Index Page/Image1.jpg " class="img-responsive " alt=" " style="height:100%;width:100%;border-radius:15px;cursor:pointer;border:1px solid grey;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Login SignUp Section Here-->

    <section id="logUp">
        <div class="form-12-content py-5 ">
            <div class="container py-md-3 ">
                <div class="row justify-content-around">
                    <h1 style="font-weight:600; " class="text-center">LOGIN HERE</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 my-md-5 my-3" data-aos="fade-up-right">
                        <div class="courses-item" id="op1">
                            <p><span class="fa fa-users mb-4"></span></p>
                            <h3><strong>Applicant Login</strong></h3>
                            <div class="row justify-content-around align-items-center mt-4 center">
                                <button class="btn btn-info mt-4" data-target="#mymodel" data-toggle="modal">LOGIN</button>
                                <div class="modal fade" id="mymodel">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: linear-gradient(rgba(210, 255, 225, 0.97), rgba(210, 255, 225, 0.97));" id="authentication">
                                            <div class="modal-header">
                                                <h2>Applicant Login</h2>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" action="PHP/applicantLogin.php" method="post">
                                                    <div class="form-group">
                                                        <label><b>Application ID</b></label>
                                                        <input type="text" name="applyID" class="form-control" required/>
                                                        <label><b>Password</b></label>
                                                        <input type="password" name="password" class="form-control mb-4" required>
                                                        <input type="submit" name="applicantLogin" value="Sign In">
                                                        <h6><b>Want to Register?<a href="/UAS/HTML/signup.html"> Apply Here</a></b></h6>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-md-5 my-3">
                        <div class="courses-item" id="op2">
                            <p><span class="fa fa-lock mb-4"></span></p>
                            <h3><strong>Admin Login</strong></h3>
                            <div class="row justify-content-around align-items-center mt-4">
                                <button class="btn btn-success mt-4" data-target="#mymodel1" data-toggle="modal">LOGIN</button>
                                <div class="modal fade" id="mymodel1">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: linear-gradient(rgba(210, 255, 225, 0.97), rgba(210, 255, 225, 0.97));" id="authentication">
                                            <div class="modal-header">
                                                <h2>Admin Login</h2>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" action="PHP/adminLogin.php" method="post">
                                                    <div class="form-group">
                                                        <label><b>User ID</b></label>
                                                        <input type="text" name="adminID" class="form-control" required/>
                                                        <label><b>Password</b></label>
                                                        <input type="password" name="password" class="form-control mb-4" required>
                                                        <input type="submit" name="adminLogin" value="Sign In">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-md-5 my-3" data-aos="fade-down-left">
                        <div class="courses-item" id="op3">
                            <p><span class="fa fa-clipboard mb-4"></span></p>
                            <h3><strong>MAC Login</strong></h3>
                            <div class="row justify-content-around align-items-center mt-4">
                                <button class="btn btn-danger mt-4" data-target="#mymodel2" data-toggle="modal">LOGIN</button>
                                <div class="modal fade" id="mymodel2">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: linear-gradient(rgba(210, 255, 225, 0.97), rgba(210, 255, 225, 0.97));" id="authentication">
                                            <div class="modal-header">
                                                <h2>MAC Login</h2>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" action="PHP/macLogin.php" method="post">
                                                    <div class="form-group">
                                                        <label><b>User ID</b></label>
                                                        <input type="text" name="macID" class="form-control" required/>
                                                        <label><b>Password</b></label>
                                                        <input type="password" name="password" class="form-control mb-4" required>
                                                        <input type="submit" name="macLogin" value="Sign In">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Our Courses Section-->
    <section id="courses">
        <div class="form-12-content py-5">
            <div class="container py-md-3">
                <div class="row justify-content-around ">
                    <h1 style="font-weight:600;" class="text-center">Our Courses</h1>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6 my-3" data-aos="flip-up">
                        <div class="courses-item" id="course1">
                            <p><span class="fa fa-code"></span></p>
                            <h5 class="text-center pt-4">Information Technology</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 my-3" data-aos="flip-down">
                        <div class="courses-item" id="course2">
                            <p><span class="fa fa-money"></span></p>
                            <h5 class="text-center pt-4">Business Informatics</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 my-3" data-aos="flip-left">
                        <div class="courses-item" id="course3">
                            <p><span class="fa fa-calculator"></span></p>
                            <h5 class="text-center pt-4">Electronics Engineering</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 my-3" data-aos="flip-right">
                        <div class="courses-item" id="course4">
                            <p><span class="fa fa-flask"></span></p>
                            <h5 class="text-center pt-4">Chemical Enginerring</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-6 my-3" data-aos="flip-down">
                        <div class="courses-item" id="course5">
                            <p><span class="fa fa-bolt"></span></p>
                            <h5 class="text-center pt-4">Electrical Enginerring</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 my-3" data-aos="flip-up">
                        <div class="courses-item" id="course6">
                            <p><span class="fa fa-wrench"></span></p>
                            <h5 class="text-center pt-4">Mechanical Engineering</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 my-3" data-aos="flip-right">
                        <div class="courses-item" id="course7">
                            <p><span class="fa fa-industry"></span></p>
                            <h5 class="text-center pt-4">Metallurgical Enginerring</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 my-3" data-aos="flip-left">
                        <div class="courses-item" id="course8">
                            <p><span class="fa fa-building"></span></p>
                            <h5 class="text-center pt-4">Production Engineering</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.view-details').click(function() {
                var applicationid = $('#idd1').val();
                var password = $('#idd2').val();

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


    <!--Footer Starts Now-->

    <section class="footer">
        <div class="container py-md-3 ">
            <div class="row justify-content-around">
                <div class="col-md-3 align-center my-5" style="height:150px;">
                    <img src="Images/Index Page/Image2.png" alt="" style="height:100%">
                </div>
                <div class="col-md-3 ">
                    <div class="row ">
                        <h5 class="footer-title py-3" id="goDown"><strong>Contact Us</strong></h5>
                    </div>
                    <div class="row ">
                        <ul>
                            <li>
                                <p><span class="fa fa-map-marker pr-3" style="font-size:15px;color:yellow "></span>Indian Institute of Information Technology Allahabad Devghat, Jhalwa, Prayagraj-211015, U. P. INDIA</p>
                            </li>
                            <p>
                                <li><a href="tel:+7-800-999-800 "><span class="fa fa-phone pr-2" style="font-size:15px;color:yellow "></span> +(91)-532-2922025</a></li>
                            </p>
                            <p>
                                <li><a href="mailto:contact@iiita.ac.in " class="mail "><span class="fa fa-envelope-open-o pr-2" style="font-size:15px;color:yellow "></span> contact@iiita.ac.in</a></li>
                            </p>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row ">
                        <h5 class="footer-title pt-3 "><strong>Featured Links</strong></h5>
                    </div>
                    <div class="row ">
                        <ul>
                            <p>
                                <li>
                                    <a href="https://www.iiita.ac.in/ " target="_blank ">IIITA Website</a>
                                </li>
                            </p>
                            <p>
                                <li>
                                    <a href="https://www.iiita.ac.in/research/ " target="_blank ">Research</a>
                                </li>
                            </p>
                            <p>
                                <li><a href="https://www.iiita.ac.in/campus_life/ " target="_blank ">Campus  Life</a></li>
                            </p>
                            <p>
                                <li><a href="#courses">Courses</a></li>
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 350,
            duration: 1500,
            once: true,
        });
    </script>

</body>

</html>