<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MildCare | Admissions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />

    <!-- Favicons -->
    <link href="/img/children.png" rel="icon">

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<style>
    body{
        background: white;
    }
    #form{
        background: white;
        align-items: center;
        padding-left: 500px;
        margin-top: 50px;
        padding-bottom: 50px;
    }
    .form{
        padding-top: 20px;
        padding-bottom: 50px;
    }
    Input{
        width: 300px;
        height: 25px;
    }
    .radio{
        width: 10px;
    }
    .button{
    background: blue;
    border: 1px solid blue;
    color: white;
    }
    @media only screen and (max-width:1000px){
        #form{
            padding: 50px;
            margin-left: 50px;
        
        }.radio{
            display: flex;
        }
    }
</style>

<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <!-- Uncoment To Use A Logo Instead-->
                        <!--<a class="navbar-brand" href="index.html"><img src="/img/children1.png" alt="Mild Care" /></a> -->
                        <h3>MILD CARE |PS</h3>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="Home.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="admissions.php">Admissions</a></li>
                            <li><a href="fees.php">Pricing</a></li>
                            <li><a href="events.php">Events</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <hr>
        <!-- end header -->
        

            <!-- table -->
        <div id="form">
                <h3>Admission: Request Info.</h3>
            <div class="form">
                
                <form action="adcon.php" method="REQUEST">
                    
                    <input type='text' name="Parent_name" placeholder="Parents' Name:" required><br><br>
                    <input type='text' name="Child_name" placeholder="Childs' Name:" required><br><br>
                    <input type='email' name="Email" placeholder="Email:"><br><br>
                    <input type='numeric' name="Telephone" placeholder="Phone:" required><br><br>
                    Interest:<br>
                    <input class= 'radio' type='radio' name="Interest" value='Daycare(1-2yrs)' placeholder="interest">Daycare(1-2yrs)<br>
                    <input class= 'radio' type='radio' name="Interest" value='Pre-primary(Baby-Top)' placeholder="interest">Pre-primary(Baby-Top)<br>
                    <input class= 'radio' type='radio' name="Interest" value='Primary(P.1-P.7)'placeholder="interest">Primary(P.1-P.7)<br><br>
                    <input type='date' name="Child_Date_of_birth" placeholder="Date of Birth:" required><br><br>
                    <input type='text' name="Message" placeholder="Message:" required><br><br>
                    <input  class="button" type="submit" name="Submit">
                </form>

            </div>
        </div>
            <!-- end slider -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Our Contact</h5>
                            <address>
					<strong>Mild-Care Inc</strong><br>
					Plot No. 447, Block 213,
                    Salaama - Munyonyo Road, Munyonyo, Kampala, Uganda. P.O.
                    Box Number 1433, Kampala,
                    Uganda.<br>
                    P.O.
                    Box Number 1433, Kampala,</address>
                            <p>
                                <i class="icon-phone"></i> (+256) 0-752-711-882 <br>
                                <i class="icon-envelope-alt"></i> office@mcps.com
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Quick Links</h5>
                            <ul class="link-list">
                                <li><a href="#">Latest Events</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">School Policies & SOPs</h5>
                            <ul class="link-list">
                                <li><a href="#">Masks, hand sanitizer and Disposable gloves at the reception area of school.</a></li>
                                <li><a href="#">Used masks and/or Disposable
                                    gloves to be placed into
                                    provided bins</a></li>
                                <li>All staff to wear masks while being in contact with each other
                                    <a href="http://mosespace.github.io" target="_blank">| Read More</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Recent News</h5>
                            <ul class="link-list">
                                <li><a href="#">Mild Care Sets up a new building and new offices in Mukono!</a></li>
                                <li><a href="#">Children score highly last year and what parents say about it!</a></li>
                                <li><a href="#">We got chance to be ranked as the top five in the whole world, | Read More Here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>
                                    <span>&copy; Above Site All right reserved. Designed By </span><a href="http://twitter.com/NLadsen" target="_blank">Nkya Julius Ladsen</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="social-network">
                                <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/portfolio/jquery.quicksand.js"></script>
    <script src="js/portfolio/setting.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>
</body>

</html>
