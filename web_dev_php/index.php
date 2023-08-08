<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("url=index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style_home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Home</title>

    <?php
    include('./Common/conn.php');
    ?>



</head>

<body>
    <header>
        <div class="lo">

            <?php
            if (isset($_SESSION['username'])) {
                echo '<span>
                    Welcome Back </span>';
                echo $_SESSION['username'];
            } else {
                echo '<span>Welcome to Portify </span>';
            }
            ?>


        </div>
        <div class="nav-bar-toggle" aria-controls="cs" aria-expanded="false">
            <i class="bi bi-chevron-right" id="icon-btn" name="right-arrow"></i>
            <i class="bi bi-chevron-left" id="icon-btn" name="left-arrow"></i>
        </div>
        <nav class="cs" id="cs" data-visible="false">
            <ul>
                <li><a href="#">
                        <i class="bi bi-house"></i>
                        <span>Home</span>
                    </a></li>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<li> <a href="Dashboard.php">
                            <i class="bi bi-person"></i>
                            <span>Dashboard</span>
                        </a></li>';
                } else {
                    echo '';
                }
                ?>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<li> <a href="#work_details">
                            <i class="bi bi-person"></i>
                            <span>Work</span>
                        </a></li>';
                } else {
                    echo '';
                }
                ?>

                <?php
                if (isset($_SESSION['username'])) {
                    echo '<li> <a href="#contactus">
                            <i class="bi bi-person"></i>
                            <span>Contact Us</span>
                        </a></li>';
                }
                ?>
                
                <?php
                if (!isset($_SESSION['username'])) {
                    echo ' <li><a href="./Components/template.html">
                    <i class="bi bi-house"></i>
                    <span>Template</span>
                </a></li>';
                }
                ?>
               


                <li>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<a href="./Php/logout.php">
                            <i class="bi bi-gear"></i>
                            <span>Logout</span>
                        </a>';
                    } else {
                        echo '<a href="./auth/login_form.php">
                            <i class="bi bi-gear"></i>
                            <span>Login/Register</span>
                        </a>';
                    }
                    ?>


                </li>
            </ul>
        </nav>
    </header>
    <section class="slide">
        <div class="title">
            <?php
            if (isset($_SESSION['username'])) {
                echo '  <h1></h1>';
                echo '<h1> Hi, I am' . " " . $_SESSION['username'] . '</h1>';
            } else {
                $path = "window.location='./auth/login_form.php'";
                $btn = "btn";
                $button = "button";

                echo "<h1>Create Your Own <span>Portfolio</span></h1>
                            <button class=$btn onclick=$path type=$button >Create</button>";
            } ?>


        </div>
    </section>


    <section id="work_details" class="work_details">
        <h1>My Work</h1>
        <div class="container">
            <div class="row gy-3 my-3">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="card">
                        <img src="./images/book-g7a912e329_1280.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Template 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="./images/book-g7a912e329_1280.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Template 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="./images/book-g7a912e329_1280.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Template 3</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="./images/book-g7a912e329_1280.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Template 4</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="./images/book-g7a912e329_1280.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Template 5</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="./images/book-g7a912e329_1280.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Template 5</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="./images/book-g7a912e329_1280.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Template 5</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="./images/book-g7a912e329_1280.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Template 5</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section id="contactus" class="collab">
        <h1>Contact Me</h1>
        <div class="container">
            <div class="crd">
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-google"></i>
                <i class="bi bi-git"></i>
            </div>
        </div>




    </section>

    <section class="container-fluid faq">
        <h1>Do you have any questions?</h1>


        <div class="faq_content">
            <div>
                <p class="d-inline-flex gap-1">
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Link with href
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but
                        revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
            <h1>Type your question</h1>
            <br><input type="text">
        </div>
    </section>

    <footer class="footer py-5 px-3">
        <div class="company">
            <h1>Logo</h1>
            <p>&copy; 2023 Copyright: Company</p>
        </div>
        <div class="links">
            <h2>Links</h2>
            <ul>
                <li><a href="#">Docs</a></li>
                <li><a href="#">Template</a></li>
                <li><a href="#">Accounts</a></li>
                <li><a href="#">Abouts</a></li>
            </ul>

        </div>
        <div class="icons">
            <h2>Connect</h2>
            <div class="social-icons">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-google"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-twitter"></i>
            </div>

        </div>
    </footer>


    <script src="./Scripts/landing.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>