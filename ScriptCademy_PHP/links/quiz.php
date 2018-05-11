<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
include("../pagefragments/header.php");

?>
<div class="navbar-fixed">
    <nav class="grey lighten-2" role="navigation">
        <div class="nav-wrapper container">
            <a href="../index.php" class="brand-logo">ScriptCademy</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" href="#!" data-target="java">Servlets<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='java' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/servlet_notes">Review Notes</a></li>
                    <li><a href="#">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="php">PHP<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='php' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/php_notes">Review Notes</a></li>
                    <li><a href="#">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="node">NodeJS<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='node' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/nodejs_notes">Review Notes</a></li>
                    <li><a href="#">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="acc"><img src="../img/avatar.png" alt="" class="circle avatar"></a></li>

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
</div>

<div class="container">
    <div class="row">
        <?php
            if (isset($_GET['quiz'])) {
                $quiz = $_GET['quiz'];
            }

            echo '<h1>'.$quiz.' Quiz</h1>';

            $con=mysqli_connect("localhost","root","","scriptcademy");
            $qry = 'SELECT * from topics natural join questions where topic="'.$quiz.'";';
            $result=mysqli_query($con,$qry);


            echo '<form action="quizresult.php" method="post">';
                while($row = mysqli_fetch_array($result)){
                    $questions = range(0, 3);
                    shuffle($questions);
                    echo 
                    '<div><h5>'.$row[4].') '.$row[5].'</h5></div>';
                    for($i = 0; $i < 4; $i++){
                        echo '<p><label><input name="'.$row[4].'" type="radio" value="'.$row[$questions[$i]+6].'" required /> <span>'.$row[$questions[$i]+6].'</span></label></p>';
                    }
                }
            echo '
            <input class="radh" type="radio" name="quiz" value="'.$quiz.'" checked>
            <button class="btn waves-effect my-1 blue" type="submit">SUBMIT</button>
            </form>';
            mysqli_close($con);
         ?>
    </div>
</div>



<?php
include("../pagefragments/footer.html");