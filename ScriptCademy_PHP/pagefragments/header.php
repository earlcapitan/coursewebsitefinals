<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Learn Server-side Web Scripting</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    </head>

    <body>
        <!-- Navigation -->

        <nav class="grey lighten-2" role="navigation">
            <div class="nav-wrapper container">
                <a href="../index.php" class="brand-logo">ScriptCademy</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="dropdown-trigger" href="#!" data-target="java">Servlets<i class="material-icons right">arrow_drop_down</i></a></li>

                    <ul id='java' class='dropdown-content'>
                        <li><a href="http://localhost:8084/ScriptCademy/Registration">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>

                    <li><a class="dropdown-trigger" href="#!" data-target="php">PHP<i class="material-icons right">arrow_drop_down</i></a></li>

                    <ul id='php' class='dropdown-content'>
                        <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/notes.php">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>

                    <li><a class="dropdown-trigger" href="#!" data-target="node">NodeJS<i class="material-icons right">arrow_drop_down</i></a></li>

                    <ul id='node' class='dropdown-content'>
                        <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/notes.php">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="#!">three</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                    </ul>

                    <li><a class="dropdown-trigger" href="#!" data-target="acc">Account<i class="material-icons right">arrow_drop_down</i></a></li>

                    <ul id='acc' class='dropdown-content'>
                        <li><a href="#">
                            <?php
                            echo $_SESSION['username'];
                            ?>
                            </a> 
                        </li>
                        <li><a href="../links/logout.php">Logout</a></li>
                    </ul>
                </ul>

            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
