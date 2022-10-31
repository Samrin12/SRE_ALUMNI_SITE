<?php
$db = mysqli_connect('localhost','root','','alumni_site');
$query = "select * from user where user_batch='02'";
$result =  mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT DIARY</title>
     <!-- fontawesome -->
     <link rel="stylesheet" href="css/all.min.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,500&display=swap"
        rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <!-- header part start -->
    <section class="header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="#"><img src="images/BUP ICT Alumni Association-01.png"
                            class="img-fluid logo" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">gallery</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    contact diary
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="contact.php">All</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="contact1.php">ict 1</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="contact2.php">ict 2</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="contact3.php">ict 3</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="contact4.php">ict 4</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    others
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">upcomin activities</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">blood bank</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">fund collection</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">donation</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">cv bank</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">events</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="images/user.png" class="img-fluid" alt="">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="signup.php">sign up</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="signin.php">log in</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="admin/index.php"> admin log in</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">log out</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">profile</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </section>
    <!-- header part end -->


    <!-- Table part start -->
<section class="table">
    <div class="container">
        <div class="row heading">
            <div class="col-md-6 m-auto text-center">
                <h1>contact diary</h1>
                <span></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 m-auto">
                <table class="table table-bordered text-center">
                    <tr>
                        <td>Name</td>
                        <td>batch</td>
                        <td>email</td>
                        <td>contact number</td>
                    </tr>

                    <tr>
                        <?php
while($row=mysqli_fetch_assoc($result))
{
                        ?>
                        <td><?php echo $row['user_name']?></td>
                        <td><?php echo $row['user_batch']?></td>
                        <td><?php echo $row['user_email']?></td>
                        <td><?php echo $row['user_number']?></td>

                    </tr>
                    <?php
}
?>
                </table>
            </div>
        </div>
    </div>
</section>
    <!-- Table part end -->


    <!-- footer1 part start -->
    <section class="blog">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4 col-sm-10 mx-auto logo-banner">
                    <h1>OUR LOCATION</h1>
                    <p>Mirpur DOHS, Dhaka
                        Bangladesh</p>
                    <div class="sec-1 ">
                        <div class="content">
                            <ul>

                                <li>
                                    <h1>EMAIL ADDRESS:</h1>
                                </li>
                                <li>
                                    <h2>alumni876@gmail.com</h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="sec-1">
                        <div class="content">
                            <ul>

                                <li>
                                    <h1>CONTACT NO:</h1>
                                </li>
                                <li>
                                    <h2> +8801234-987654</h2>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sec-1">
                        <div class="content">
                            <ul>

                                <li>
                                    <h1>CONTACT NO:</h1>
                                </li>
                                <li>
                                    <h2> +8801894-493806</h2>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-10 mx-auto blog-section">
                    <h1>ADMINS</h1>
                    <div class="blogger">
                        <div class="img"> <img src="images/blogger1.png" class="img-fluid" alt=""></div>
                        <div class="content">
                            <h4>Nathaniel</h4>
                            <p>nath56@gmail.com</p>

                        </div>
                    </div>
                    <div class="blogger">
                        <div class="img"> <img src="images/blogger2.png" class="img-fluid" alt=""></div>
                        <div class="content">
                            <h4>Ethan</h4>
                            <p> ethan897@gmail.com</p>
                        </div>
                    </div>
                    <div class="blogger">
                        <div class="img"> <img src="images/blogger3.png" class="img-fluid" alt=""></div>
                        <div class="content">
                            <h4>Lewis</h4>
                            <p> lewis777@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-10 mx-auto newsletter">
                    <h1>newsletter</h1>
                    <div class="signup">
                        <input type="email" placeholder="Your email address here">
                        <button>sign up</button>
                    </div>
                    <div class="social-icon">
                        <h2>follow us</h2>
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-goodreads-g"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer 1 part end -->
    <!-- footer 2 part start-->
    <footer>
        <div class="container">
            <div class="row text-center">
                <p>copyright &copy; 2016 reserved by ALUMNIWEBSITE.com</p>
            </div>
        </div>
    </footer>
    <!-- footer 2 part end -->
    <!-- bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>