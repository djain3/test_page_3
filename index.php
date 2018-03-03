<!DOCTYPE html>
<html lang="en">
<head>
    <title>test-page2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<!--HEADER-->


<section id="header">

    <div class="container col-6">

        <div class="row justify-content-between nav-heigh">

            <div class="navbar-brand">
                <a href="#">
                    <img src="image/logo.png" alt="logo">
                </a>
            </div>

            <div>
                <a data-toggle="collapse"
                   data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                   aria-expanded="false" aria-label="Toggle navigation">
                    <img class="nav-button-gam rounded-circle" src="image/menu.svg" alt="menu">
                </a>
            </div>
        </div>

        <!--скрытый контент-->
        <div class="collapse " id="navbarToggleExternalContent">
            <div class="row justify-content-end">
                <a href="#">Hello</a>
                <a href="#about">About</a>
                <a href="#">Slider</a>
                <a href="#">Personal</a>
                <a href="#">Services</a>
                <a href="#">Contacts</a>
            </div>
        </div>
        <!--скрытый контент-->
    </div>
    <div class="container text-center hello-text">
        <h1>HELLO</h1>
        <h6>WE ARE ONLINE CLINIC</h6>
    </div>
</section>
<!--HEADER-->

<!--ABOUT-->

<section id="about">
    <div class="container element col-4">
        <div class="container p-3 col-10 text-center">
            <h1><b>ABOUT US</b></h1>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat. </p>
        </div>
    </div>
</section>


<!--ABOUT-->

<!--ABOUT2-->


<section id="about-2">
    <div class="container col-6 ab-wrap">
        <div class=" row text-center">
            <div class="col-4 mb-4">
                <img class="" src="image/left.png" alt="left">
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="col-4 mb-4">
                <img src="image/middle.png" alt="middle">
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="col-4 mb-4">
                <img src="image/right.png" alt="right">
                <p>Lorem ipsum dolor sit amet</p>
            </div>
        </div>
    </div>
</section>


<!--ABOUT2-->


<!--SLIDER-->


<section id="slider">

    <div class="col-6 container text-center justify-content-center">
        <div class="container  slider-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</p>
        </div>
    </div>
    <div id="img-slider" class="container col-6 slider-wrapper justify-content-center">
        <img src="" class="imghidden">
        <img src="image/brouser_1.png" class="container left-photo photo px-0">
        <img src="image/brouser_2.png" class="container center-photo photo px-0">
        <img src="image/brouser_3.png" class="container right-photo photo px-0">
    </div>
    <div>
        <div class="sli-nav container text-center justify-content-center">
            <a class="prev" onclick="plusSlides(-1)"><img src="image/arrow_prev.png" alt="prev"></a>
            <a class="next" onclick="plusSlides(1)"><img src="image/arrow_next.png" alt="next"></a>
        </div>
    </div>
</section>


<!--SLIDER-->

<section id="Personal">
    <div class="container col-6 text-center justify-content-center">
        <div class="container">
            <img src="image/photo.png" alt="photo">
            <h1>Alice G. Mullins</h1>
            <h2>General Physician</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat.</p>
            <a class="active" href="#">
                <div class="round"></div>
            </a>
            <a href="#">
                <div class="round"></div>
            </a>
            <a href="#">
                <div class="round"></div>
            </a>
        </div>
    </div>
</section>

<section id="services">
    <div class="container p-0">
        <div class="col-6 p-0">
            <div class="text-services">
                <h1>Lorem ipsum dolor sit amet</h1>
                <h2>Sed do eiusmod tempor</h2>

                <p>Sed ut perspiciatis unde omnis iste natus error sit volupta
                    accusantium doloremque laudantium.</p>

                <p>Totam rem aperiam, eaque ipsa quae ab illo inventore
                    veritatis et quasi architecto beatae.</p>

                <p>Nemo enim ipsam voluptatem quia voluptas sit aspern
                    atur aut odit aut fugit, sed quia consequuntur magni dolores
                    eos qui ratione voluptatem sequi nesciunt.</p>
            </div>
        </div>
    </div>
</section>


<section id="contacts">
    <div class="container p-0">
        <div class="row col-12 ">
            <div class=" container p-0 col-6">
                <a class="logo" href="#"><img src="image/logo.png" alt="logo"></a>
                <div class="social">
                    <a class="facebook" href="#"></a>
                    <a class="twitter" href="#"></a>
                    <a class="pinterest" href="#"></a>
                    <a class="instagram" href="#"></a>
                </div>
                <div class="contacts-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat.</p>
                    <br/>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id
                        est
                        laborum</p>
                </div>
            </div>


            <!--LATEST POST-->
            <div class="container col-6" id="lat-post">
                <h1>Latest Post</h1>

                <div class="container">
                    <div class="row">
                        <div class="img-post"></div>
                        <div class="col-8">
                            <h2>Lorem ipsum dolor sit amet cons...</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="img-post"></div>
                        <div class="col-8">
                            <h2>Lorem ipsum dolor sit amet cons...</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="img-post"></div>
                        <div class="col-8">
                            <h2>Lorem ipsum dolor sit amet cons...</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--LATEST POST-->

<section id="footer">
    <div class="container justify-content-center">
        <span>Terms of Use | Privacy & cookies</span>
        <span>Copyright © 2016, All rights reserved.</span>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/js.js"></script>
<script src="js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>