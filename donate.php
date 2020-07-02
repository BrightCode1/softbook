<?php 

     $msg = '';
    $error = '';

    if(isset($_POST['upload'])) {
        
        $file = $_FILES['file']['name'];
        $name = $_POST['nameoffile'];
        $year = $_POST['year'];
        $text = $_POST['upload_message'];
        $topic = $_POST['topic'];

        
        if(empty($name)) {
            $error = "<div class='alert alert-danger'>Enter Name</div>";
        }
        elseif(empty($year)) {
            $error = "<div class='alert alert-danger'>Enter Year/Semester</div>";
        }
        elseif(empty($text)) {
            $error = "<div class='alert alert-danger'>Enter Info</div>";
        }
        else{
            if(file_exists('./data/new.json')) {
                $get_data = file_get_contents('./data/new.json');
                $array_data = json_decode($get_data, true);
                $add_extra = array(
                    "year"=> $year,
                    "name"=> $name,
                    "topic"=> $topic,
                    "Info" => $text,
                    "file" => "./files/handbook/".$file
                );
                $array_data[] = $add_extra;
                $final_data = json_encode($array_data);
                if(file_put_contents('./data/new.json', $final_data)) {
                    $msg = "<div class='alert alert-success'>File Successfully Uploaded</div>";
                }
            }else {
                $error = "File Do Not Exist";
            }
        }
     }
?>
<?php

    $msg = '';

    if(isset($_POST['upload'])) {
        $target_location = "./files/handbook/".basename($_FILES['file']['name']);
        $file = $_FILES['file']['name'];

        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_location)) {
            $msg = "<div class='alert alert-success'>File Uploaded Successfully</div>";
        }
        else{
            $msg = "<div class='alert alert-danger'>There was a problem uploading the File</div>";
        }
     }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About | Online SoftBook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="handout, softbook, school books, university book, college books, e-book, soft copy">
    <meta name="description" content="SoftBook is a website aim at providing free and safe online handouts for college student">
    <meta name="author" content="Bright K. Isaac">


    <meta property="og:url" content="https://www.softbook.ml/"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="SoftBook"/>
	<meta property="og:image" content=""/>
	<meta property="fb:admins" content="" />
	<meta property="og:site_name" content="Online SoftBook"/>
    <meta property="og:description" content="SoftBook is a website aim at providing free and safe online handouts for college student">
    

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome/css/all.css">
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
                                    <a href="index.html" class="nav-link"><i class="fas fa-home"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="donate.php" class="nav-link"><i class="fas fa-arrow-alt-up"></i>Upload File</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link"><i class="fas fa-tag"></i> About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link"><i class="fas fa-phone"></i> Contact</a>
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
            <div class="main-body contact mb-5">
            <div class="donate">
                <h4 class="text-center mb-5 mt-5"><i class="fas fa-arrow-alt-up"></i> Upload Your File Here <i class="fas fa-arrow-alt-up"></i></h4>
            </div>
            <!-- <div class="alert alert-info">
                <p>Please The Name Of The File(Handout) Should Be The Same With The File Name Eg If the File Name Is (MTH111) Then The File Should Be (MTH111.pdf) Else There Might Be An Error. Thank You</p>
            </div> -->
            <form action="donate.php" class="donating-form" enctype="multipart/form-data" method="post">
            <?php 

                if(isset($error)) {
                    echo $error;
                }
            
            ?>
            <?php
                if(isset($msg)) {
                    echo $msg;
                }
            ?>
            
                <div class="form-group">
                    <label for="nameoffile">Name Of File</label>
                    <input class="form-control" required name="nameoffile" autocomplete="off" placeholder="Eg CS111, MTH101" type="text" >
                </div>
                <div class="form-group">
                    <label for="year">Year/Semester Of File</label>
                    <input type="text" name="year" placeholder="Eg 2018/2019" class="form-control">
                </div>
                <div class="form-group">
                    <label for="year">Topic</label>
                    <input type="text" name="topic" placeholder="Enter The Topic For The Handout" class="form-control">
                </div>
                <div>
                    <label for="file">Upload Handout </label> <br>
                    <input type="file" accept=".pdf, .jpg, .doc, .docx, .png" name="file" id="file" hidden>
                    <input type="button" id="btnfile" class="btnfile btn-secondary" value="Choose File">
                    <span id="filename" class="filename">No Files Chosen</span>
                </div>
                <div class="form-group fileInfo mt-3">
                    <label for="upload_message">File Info</label>
                    <textarea name="upload_message" class="form-control" id="upload_message" placeholder="Enter the File Info"></textarea> <span id="fileInfo">File Info Should include Subject and password if there is one, all seperated by a line(|)</span>
                </div>
                
                <input type="submit" name="upload" class="btn btn-secondary btnsend">
            </form>
        </div>
            </div>
    



        <footer>
                <div class="copyright">
                        <p>&copy; Copyright 2019 SoftBook | Designed by <a href="about.html">Bright K. Isaac</a></p>
                </div>
            </footer>
        <script src="./js/main.js"></script>
        <script src="./js/jquery/jquery.js"></script>
        <script>
            $("#toggle").click(function() {
        $(this).toggleClass('on');
        $("#resize").toggleClass("active");
    });
    
        </script>
        <script type="text/javascript" >
        const inputFile = document.querySelector("#file");
        const btnFile = document.querySelector("#btnfile");
        const fileName = document.querySelector("#filename");

        btnFile.addEventListener('click', function() {
            inputFile.click();
        });
        inputFile.addEventListener('change', function() {
            if(inputFile.value) {
                fileName.innerHTML = inputFile.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
            }
            else {
                inputFile.innerHTML = "No Files Chosen";
            }
        });
    </script>
</body>
</html>