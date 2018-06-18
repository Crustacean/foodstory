<!doctype html>
<html>
    <head>
        <title>Foodstory by Nayomi</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <meta name="keywords" content="">
        <meta name="description" content="" >
        <meta name="author" content="trickle">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" href="images/cittishop-title.png" >
        <link href="seethis.css" rel="stylesheet" type="text/css"/>
        <!--        <link href="script/font-awesome.min.css" rel="stylesheet" type="text/css"/>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <script src="script/jquery-latest.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $(window).bind('scroll', function () {
                    if ($(window).scrollTop() > 50) {
                        $('.centerContent').addClass('fixed');
                    } else {
                        $('.centerContent').removeClass('fixed');
                    }
                });
            });

            $(document).ready(function () {
                $('.open-menu').on('click', function () {
                    $('.overlay').toggleClass('open');
                });

                $('.menu-button').click(function () {
                    $(this).toggleClass('menu-open');
                });

                $('.close-menu').on('click', function () {
                    $('.overlay').removeClass('open');
                    $('.menu-button').removeClass('menu-open');
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <section class="content">
                <div class="topContent">
                    <a id="menu-button" class="menu-button open-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </a>
                    <!-- Overlay Navigation Menu -->
                    <div class="overlay">
                        <div class="menuContainer">
                            <div>
                                <input type="search" class="search" placeholder="I am looking for..." />
                            </div>
                            <br>
                            <nav class="overlay-menu">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Food Travels</a></li>
                                    <li><a href="#">Recipes</a></li>
                                    <li><a href="#">About me</a></li
                                </ul>
                                <div class="social">
                                    <a class="fa fa-facebook" style="font-size: 40px;font-weight: 400;"></a>
                                    <a class="fa fa-instagram" style="font-size: 40px;font-weight: 400;"></a>
                                </div>
                                <br>
                            </nav>
                        </div>
                    </div>
                    <div class="centerContent">
                        <div class="welcomeLogo"><h1>food story</h1></div>

                        <div class="line"></div>

                        <div class="welcomeSignature"><h2>by Nayomi</h2></div>
                    </div>
                </div>
                <div class="subbannerHolder">
                    <div class="subbanner">
                        <div class="subbanner-outer">
                            <div class="subbanners subbanner-inner1">
                                <a href="/shoes.html">
                                    <img src="image/mine.jpeg" alt=""/>
                                </a>
                                <div class="hover_content">
                                    <div class="hover_data">
                                        <div class="desc-text">
                                            <a href="/shoes.html">About Me</a>
                                        </div>
                                        <div class="fineLine">
                                            <a href="/shoes.html">:-P</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subbanners subbanner-inner2">
                                <a href="/shoes.html">
                                    <img src="image/foodtravels.jpg" alt=""/>
                                </a>
                                <div class="hover_content">
                                    <div class="hover_data">
                                        <div class="desc-text">
                                            <a href="/shoes.html">FoodTravels</a>
                                        </div>
                                        <div class="fineLine">
                                            <a href="/shoes.html">:-)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subbanners subbanner-inner3">
                                <a href="/shoes.html">
                                    <img src="image/recipes.jpeg" alt=""/>
                                </a>
                                <div class="hover_content">
                                    <div class="hover_data">
                                        <div class="desc-text">
                                            <a href="/shoes.html">Recipes</a>
                                        </div>
                                        <div class="fineLine">
                                            <a href="/shoes.html">:-)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper">

                </div>
            </section>
        </div>
        <footer>
            site by <a href="" rel="nofollow" target="_blank">trikkle</a>
        </footer>
    </body>
</html>