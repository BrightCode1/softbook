
<!-- <?php 

// $msg = '';
// $err = '';
//     if(isset($_POST['submit'])) {
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $message = $_POST['message'];

//         $to = 'brightonline80@gmail.com';
//         $subject = 'Form Submission';
//         $message = "Sender Name:  ".$name."\n"."Message Sent:  "."\n\n".$message;
//         $headers = "Sent From:  ".$email;

//         if(mail($to, $subject, $message, $headers)) {
//             $msg = "<div class='alert alert-success'>Your Message Was Successfully Sent! Thank You.  ;) </div>";
//         }
//         else {
//             $err =  "<div class='alert alert-danger'>Something Went Wrong! Your Message Wasnt Sent, Please Try Again. :( </div>";
//         }
//     }



?> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact | Online SoftBook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="handout, softbook, school books, university book, college books, e-book, soft copy">
    <meta name="description" content="SoftBook is a website aim at providing free and safe online handouts for college student">
    <meta name="author" content="Bright K. Isaac">


    <meta property="og:url" content="http://www.softbook.ml"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="SoftBook"/>
	<meta property="og:image" content="./images/logo.jpg"/>
	<meta property="fb:admins" content="" />
	<meta property="og:site_name" content="Online SoftBook"/>
	<meta property="og:description" content="SoftBook is a website aim at providing free and safe online handouts for college student">


    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="navbar navbar-light navbar-expand-lg">
            <div class="container navbar-header">
                <a href="index.html" class="navbar-brand"><img src="./images/logo.png" style="width: 70px;
                    height: 40px;
                    margin: -10px 0 0 0;" alt="" srcset=""><span style="font-size: 1.8rem;">SoftBook</span></a>
                <div class="navd" id="navbar-ul-link">
                    <ul class="navbar-nav ml-auto" id="menu">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link"><i class="fas fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="donate.php" class="nav-link"><i class="fas fa-arrow-alt-up"></i>Upload File</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link"><i class="fas fa-tag"></i>About</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link"><i class="fas fa-phone"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <div id="toggle">
                    <div class="span" id="one"></div>
                    <div class="span" id="two"></div>
                    <div class="span" id="three"></div>
                </div>
                <div id="resize">
                        <ul id="menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link"><i class="fas fa-home"></i> Home</a>
                                </li>
                                <li class="nav-item">
                            <a href="donate.php" class="nav-link"><i class="fas fa-arrow-alt-up"></i>Upload File</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link"><i class="fas fa-tag"></i>About</a>
                        </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link"><i class="fas fa-phone"></i> Contact</a>
                                </li>
                            </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="main-body">
        <div class="container contact mb-5">
            <h3 class="head text-center" style="margin: 30px 0;">CONTACT ME</h3>
            <div class="contact-via">
                <table class="table table-striped" style="width: 100%;">
                    <tr class="">
                        <td style="font-weight: 700;font-size: 1.4rem;">VIA</td>
                        <td style="font-weight: 400;font-size: 1.4rem;color: rgb(63, 236, 141);"><i class="fab fa-whatsapp"></i></td>
                        <td style="color: #000; font-weight: 400;font-size: 1.2rem;">+234 (0)7016505681</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-weight: 400;font-size: 1.4rem;color: rgb(4, 0, 255);"><i class="fab fa-facebook"></i></td>
                        <td style="color: #000; font-weight: 500;font-size: 1.2rem;"><a  target="_blank" href="https://web.facebook.com/profile.php?id=100010277356142">www.facebook.com</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-weight: 400;font-size: 1.4rem; color: rgb(83, 221, 240)"><i class="fab fa-twitter"></i></td>
                        <td style="color: #000; font-weight: 500;font-size: 1.2rem;"><a href="#" onclick="alert('Not Yet Developed, Hold On.');">www.twitter.com</a></td>
                    </tr>
                </table>
            </div>
            <h4 class="text-center" style="margin: 30px 0;font-size: 1.5rem;">OR</h4>
            <h5 class="text-center" style="margin: 30px 0;">Contact Via Email for FeedBack </h5>
            <form action="./mail_handler.php" name="form" class="messageM" enctype="multipart/form-data" method="post">
            <?php 

                if(isset($err)) {
                    echo $err;
                }
            
            ?>
            <?php
                if(isset($msg)) {
                    echo $msg;
                }
            ?>
                <div class="form-group">
                    <label for="name">Enter Your Full Name</label>
                    <input type="text" id="name" required name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Enter Email Address</label>
                    <input type="email" required name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control textarea" required name="message" id="message"></textarea>
                </div>
                <div class="successfully" hidden name="success">
                    <div class="alert alert-success"><p>
                        Your Message Was Successfully Sent! Thank You.  ;)
                    </p></div>
                </div>
                <div class="failed" hidden name="fail">
                    <div class="alert alert-danger"><p>
                        Something Went Wrong! Your Message Wasn't Sent, Please Try Again. :(
                    </p></div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" name="submit" class="btn btnsend btn-secondary btnclick">SEND</button>
                </div>
                
            </form>
        <footer>
                <div class="copyright">
                        <p>&copy; Copyright 2019 SoftBook | Designed by <a href="about.html">Bright K. Isaac</a></p>
                </div>
            </footer>
    </div>

    
    <script src="./js/main.js"></script>
    <script src="./js/jquery/jquery.js"></script>
    <script>
        $("#toggle").click(function() {
    $(this).toggleClass('on');
    $("#resize").toggleClass("active");
});

    </script>
</body>
</html>