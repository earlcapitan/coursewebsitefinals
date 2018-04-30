<?php
header("HTTP/1.1 200 OK");
header("Content-Type: text/html");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Learn Server-side Web Scripting</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    </head>

    <body>
        <!-- Navigation -->

        <nav class="grey lighten-2" role="navigation">
            <div class=" nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo light-blue-text text-darken-4">ScriptCademy</a>
                <ul class="right hide-on-med-and-down ">
                    <li><a href="#">Java Servlets</a></li>
                    <li><a href="#">PHP</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="#">Navbar Link</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>

        <!-- Server-Side Web Scripting Technologies section-->

        <div id="index-banner" class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h1 class="header white-text">Server-side Web Scripting Technologies</h1>
                        </div>
                        
                    </div>

                </div>
            </div>
            <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 1"></div>
        </div>

        <!--   Servlet Section   -->
        <div class="container">
            <div class="section">



                <div class="row">

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">subject</i></h2>
                            <h5 class="center">Review Course Notes</h5>

                            <p class="center light">Take time in reviewing java servlets.</p>

                            <!-- Link of review-->

                            <ul class="center">
                                <li><a href="links/notes.php" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Review</a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Take the quiz -->

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">border_color</i></h2>
                            <h5 class="center">Take the quiz</h5>

                            <p class="center light">Test your knowledge about java servlets.</p>

                            <!-- Take the quiz link -->                                                        
                            <ul class="center">
                                <li><a href="#" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Quiz</a></li>
                            </ul>                        
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- PHP section-->


 <div id="index-banner" class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h1 class="header white-text">PHP (Hypertext Preprocessor)</h1>
                         
                        </div>
                        
                    </div>

                </div>
            </div>
            <div class="parallax"><img src="./img/background2.jpg" alt="Unsplashed background img 1"></div>
        </div>
        

        <!--   PHP Section   -->
        <div class="container">
            <div class="section">



                <div class="row">

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">subject</i></h2>
                            <h5 class="center">Review Course Notes</h5>

                            <p class="center light">Take time in reviewing php scripts.</p>

                            <!-- Link of review-->

                            <ul class="center">
                                <li><a href="./links/PHP.html" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Review</a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Take the quiz -->

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">border_color</i></h2>
                            <h5 class="center">Take the quiz</h5>

                            <p class="center light">Test your knowledge about php scripting.</p>

                            <!-- Take the quiz link -->                                                        
                            <ul class="center">
                                <li><a href="#" class="btn-large waves-effect waves-light #80cbc4 teal lighten-3">Quiz</a></li>
                            </ul>                        
                        </div>
                    </div>

                </div>

            </div>
        </div>  

        <footer class="page-footer light-blue darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/bin/materialize.min.js"></script>
        <script src="js/bin/init.js"></script>

    </body>

</html>


