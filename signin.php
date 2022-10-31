<?php
$conn = mysqli_connect('localhost','root','','alumni_site');
if(isset($_POST['register']))
{
    $name= $_POST['name'];
    $pass= $_POST['password'];

    $select =" SELECT * FROM user WHERE user_email='$name' AND password= '$pass'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)> 0)
    {
        header("location:index.php");
        // echo "LOGIN SUCCESSFUL";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/login.css">
    <title>SIGN IN</title>
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
                                    <li><a class="dropdown-item" href="#">ict 1</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">ict 2</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">ict 3</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">ict 4</a></li>
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
    <section class="log-in">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ms-auto me-3 form-page text-center my-auto">
                    <h1>SIGN IN</h1>
                    <form action="" method="POST">
                        <input type="email" placeholder="Enter Your Email" name="name" class="form-control">
                        <input type="password" placeholder="Enter Your Password" name="password" class="form-control" >
                        <input type="submit" name="register" value="SIGN IN">
                    </form>
                   
                </div>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>