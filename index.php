<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>David Anderson</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- AOS Paralax Sliding -->
    <link rel="stylesheet" href="dist/aos.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">David Anderson</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#hobbies">Hobbies</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background-image: url(img/pittskyline.jpg)" data-parallax="scroll"  class="parallax-window" data-image-src="/path/to/image.jpg">
        <div class="container" >
            <div class="row"  >
                <div class="col-lg-12" >
                    <img class="img-responsive" src="img/DaveCircle.png" alt="" >
                    <div class="intro-text">
                        <span class="name">David Anderson</span>
                        <hr class="star-primary3">
                        <span class="skills">Software Engineer - Tester - Creater Of Worlds</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" data-aos="slide-left" data-aos-easing="ease-in-sine" data-aos-duration="600" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/website.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/hack.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/temp.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>

            <div class="row resumeRow">
                    <h2 class="col-lg-12 text-center" style="Color:White" for="collapseOne" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-----Resume-----</h2>
                <div class="col-lg-12 text-center collapse" id="collapseOne">
                   <a href="resume/Resume.pdf"> <h2 style="Color:White">Click Here!</h2></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" >
        <div class="container" id="about" data-aos="slide-right" data-aos-easing="ease-in-sine" data-aos-duration="600">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p> My name is David Anderson and I am a software developer from Feasterville Pennsylvania. I am a Computer Science gradute from the University Of Pittsburgh. I love to solve problems and write software that can help people accomplish their goals.</p>
                </div>
                <div class="col-lg-4">
                    <p>Alongside writing software, I enjoy staying up to date with various television shows, following Esports, and going roller skating with my friends. Thanks for coming to my website, I hope you enojoy what you find.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Hobbie Section -->
    <section id="hobbies" data-aos="slide-left" data-aos-easing="ease-in-sine" data-aos-duration="600"  >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Hobbies.</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row" >
                <div class="col-sm-4 portfolio-item"  >
                    <a href="#hobbiesModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/league.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#hobbiesModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/skating.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#hobbiesModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/itg.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-13 text-center">
                    <h2>Contact Me.</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form action="" method="post" name="sentMessage" id="contactForm" novalidate> 
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="first_name" name="first_name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone_num" name="phone_num" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" name="submit" value="Submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Feasterville, Pennsylvania </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Social Media</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/david.anderson.10441" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/david-anderson-58286792/" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/Davidboo25" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                            </li>
                            <li>
                                <a href="http://stackoverflow.com/users/5791410/danderson" class="btn-social btn-outline"><i class="fa fa-fw fa-stack-overflow"></i></a>
                            </li>
                               <li>
                                <a href="https://www.reddit.com/user/Davidboo25/" class="btn-social btn-outline"><i class="fa fa-fw fa-reddit"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact Me!</h3>
                        <p>Feel free to reach out and contact me at any time. I always check my email!</p>
                        <p><a href="mailto:DavidJAnderson25@gmail.com">DavidJAnderson25@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; David Anderson 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>This Website.</h2>
                            <hr class="star-primary2">
                            <img src="img/portfolio/website.png" class="img-responsive img-centered" alt="">
                            <p>In Spring 2017, I created a Portfolio Website in my Into to Web Applications class. Although I was familiar with html and css before the class, I learned a lot about Javascript and PHP to help me develop this website. I also incorporated the bootstrap framework to help assist me in creating the website.
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" >
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body" >
                            <h2>Hacker Harrasment Twitter Bot</h2>
                            <hr class="star-primary2">
                            <img src="img/portfolio/hack.png" class="img-responsive img-centered" alt="">
                            <p>At The University of Pittsburgh's' annual Hackathon, Steelhacks, I created a twitter bot that analyzed the tweets of users 
                                to look for offensive words in relation to video games.
                            </p>
                            <br>
                            <p>
                                Upon finding a tweet that is marked offensive, we tweeted to that user a reminder to be respectful on the internet.
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Not Yet Created C#/WPF App.</h2>
                            <hr class="star-primary2">
                            <img src="img/portfolio/temp.png" class="img-responsive img-centered" alt="">
                            <p>I hope to create a c# WPF app in the future. I haven't thought up of an idea or had time to even begin this so this is a WIP.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Hobbies Modals -->
    <div class="portfolio-modal modal fade" id="hobbiesModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>League Of Legends ESports</h2>
                            <hr class="star-primary2">
                            <img src="img/portfolio/league.png" class="img-responsive img-centered" alt="">
                            <p>In my free time, I enjoy watching professional League Of Legeneds. I stay up to date with all of the different teams in North American and europe.
                                Given that I am very familiar with the game, I enjoy watching much more skilled players duke it out on the main <stage class=""></stage>
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="hobbiesModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" >
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body" >
                            <h2>Rollerskating</h2>
                            <hr class="star-primary2">
                            <img src="img/portfolio/skating.png" class="img-responsive img-centered" alt="">
                            <p>When I am back home in Philadelphia and sometimes in Pittsburgh, I enjoy going to the local rollerskating rink with my friends and skating around in circles.
                                Its a fun recreational sport that I took up when I started college.
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="hobbiesModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>In The Groove</h2>
                            <hr class="star-primary2">
                            <img src="img/portfolio/itg.png" class="img-responsive img-centered" alt="">
                            <p>In The Groove is an arcade game that is simillar to Dance Dance Revoltion. This is a hobbie of mine that I developed over the years. 
                                I have a friend who owns a machine in his house in Pittsburgh that I go to every week.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
include 'database.php';
if(isset($_POST['submit'])){
    $to = "davidjanderson25@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $phone_num = $_POST['phone_num'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'] . "\n\n" . " Here is his number, PhoneNum: " . $phone_num;
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $connect;
    mysql_query("INSERT INTO employees1(first_name,email,phone_num,message) VALUES('$first_name','$from','$phone_num','$message')");
    }
                
?>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

    <!-- My Code -->
    <script src="js/myfile.js"></script>
    
    <!-- AOS paralax sliding import -->
    <script src="dist/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>

    <!-- Large Paralax Image Import -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/path/to/parallax.js"></script>

</body>

</html>
