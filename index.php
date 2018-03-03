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

    <div class="row col-12">
        <div class="container col-6 col-md-4 text-center">
            <img id="logo" src="image/logo.png" alt="logo">
        </div>
        <div class="container col-2 text-md-right text-right">
            <a id="menu" href="#" onclick=""><img src="image/menu.svg" alt="menu"></a>
        </div>

    </div>
    <!--скрытый контент-->
    <div class="row col-12 text-md-right text-center" id="menu-open">
        <a href="#">Hello</a>
        <a href="#about">About</a>
        <a href="#">Slider</a>
        <a href="#">Personal</a>
        <a href="#">Services</a>
        <a href="#">Contacts</a>
    </div>
    <!--скрытый контент-->
    <div class="col-md-6 col-12 container text-center hello-text">
        <h1><b>HELLO</b></h1>
        <h6><b>WE ARE ONLINE CLINIC</b></h6>
    </div>

</section>

<!--HEADER-->

<!--ABOUT-->

<section id="about" class="col-md-8 col-12 container">
    <div class="container p-3 text-center">
        <h1><b>ABOUT US</b></h1>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip
            ex ea commodo consequat. </p>
    </div>
</section>


<!--ABOUT-->

<!--ABOUT2-->


<section id="about-2" class="row justify-content-center">

    <div class="col-md-3 text-center">
        <img src="image/left.png" alt="left">
        <p>Lorem ipsum dolor sit amet</p>
    </div>

    <div class="col-md-3 text-center">
        <img src="image/middle.png" alt="middle">
        <p>Lorem ipsum dolor sit amet</p>
    </div>

    <div class="col-md-3 text-center">
        <img src="image/right.png" alt="right">
        <p>Lorem ipsum dolor sit amet</p>
    </div>

</section>


<!--ABOUT2-->


<!--SLIDER-->


<section id="slider">
    <div class="col-12 text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.</p>
    </div>
    <div id="img-slider">
        <img src="" class="imghidden">
        <img src="image/brouser_1.png" class="img-fluid left-photo photo">
        <img src="image/brouser_2.png" class="img-fluid center-photo photo">
        <img src="image/brouser_3.png" class="img-fluid right-photo photo">
    </div>
    <div id="navi-sli" class="container row col-12 text-center">
        <a class="prev col-4" onclick="plusSlides(-1)"><img src="image/arrow_prev.png" alt="prev"></a>
        <a class="next col-4" onclick="plusSlides(1)"><img src="image/arrow_next.png" alt="next"></a>
    </div>
</section>


<!--SLIDER-->

<section id="personal">
    <div class="photo-slider col-12 text-center">

        <div class="photo-slide">
            <img src="image/photo.png" style="width:50%" alt="photo">
            <h1>Alice G. Mullins</h1>
            <h2>General Physician</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat.</p>
        </div>
        <div class="photo-slide">
            <img src="image/photo.png" style="width:50%" alt="photo">
            <h1>Alice G. Mullins</h1>
            <h2>Assistant</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat.</p>
        </div>
        <div class="photo-slide">
            <img src="image/photo.png" style="width:50%" alt="photo">
            <h1>Alice G. Mullins</h1>
            <h2>Medic</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat.</p>
        </div>
    </div>
    <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</section>

<section id="services">
    <div class="col-4 offset-1">
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
</section>

<section id="contacts">
    <div class="col-md-12 row">
        <div class="col-12 offset-1 col-md-5">
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
        <div class="col-12 offset-1 col-md-5">
            <h1>Latest Post</h1>
            <div class="row ">
                <img class="rect col-3" src="image/rect.png" alt="rect">
                <div class="col-9">
                    <h5>Lorem ipsum dolor sit amet cons...</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua.</p>
                </div>
            </div>
            <div class="row ">
                <img class="rect col-3" src="image/rect.png" alt="rect">
                <div class="col-9">
                    <h5>Lorem ipsum dolor sit amet cons...</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua.</p>
                </div>
            </div>
            <div class="row ">
                <img class="rect col-3" src="image/rect.png" alt="rect">
                <div class="col-8">
                    <h5>Lorem ipsum dolor sit amet cons...</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et
                        dolore magna aliqua.</p>
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