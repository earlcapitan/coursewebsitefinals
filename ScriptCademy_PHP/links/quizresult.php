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
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/servlet_notes.php">Review Notes</a></li>
                    <li><a href="quiz?quiz=Servlets">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="php">PHP<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='php' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/php_notes.php">Review Notes</a></li>
                    <li><a href="quiz?quiz=PHP">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="node">NodeJS<i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id='node' class='dropdown-content'>
                    <li><a href="http://localhost/coursewebsitefinals/ScriptCademy_PHP/links/nodejs_notes.php">Review Notes</a></li>
                    <li><a href="quiz?quiz=NodeJS">Take the Quiz</a></li>
                </ul>

                <li><a class="dropdown-trigger" href="#!" data-target="acc"><img src="../img/avatar.png" alt="" class="circle avatar"></a></li>

                <ul id='acc' class='dropdown-content'>
                    <li><a href="profile.php">
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
        $ans = array();
        $score = 0;

        if (isset($_POST['quiz'])) {
            $quiz = $_POST['quiz'];
        }


        include("../config/dbconnect.php");
        
        $qry = 'SELECT * from questions where topic="'.$quiz.'";';
        $result=mysqli_query($con,$qry);

        $numRows = mysqli_num_rows($result);
        for($i = 1; $i <= $numRows; $i++){   
            if (isset($_POST[''.$i.''])) {
                array_push($ans, $_POST[''.$i.'']);
            }
        }

        $counter = 0;
        while($row = mysqli_fetch_array($result)){
            if($row[8] == $ans[$counter]){
                $score++; 
            }
            $counter++;
        }
        
        $qry2 = 'update user_accounts set '.$quiz.'_score = "'.$score.'/'.$numRows.'" where user_id = '.$_SESSION['user_id'].';';
        
        mysqli_query($con,$qry2);

        echo '<h1>'.$quiz.' Quiz</h1>';
        echo '<h2>SCORE: '.$score.'/'.$numRows.'</h2>';
        ?>
    </div>
</div>



<?php
include("../pagefragments/footer.html");