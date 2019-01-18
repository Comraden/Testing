<?php
include_once("core/engine.inc.php");

if(isset($_POST["name"]) && isset($_POST["email"]))
{
   applyData(); 
}

checkLogin();
nextQuestion();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Тестирование по теме 'Компьютерная грамотность'">
    <meta name="author" content="Postalx">
    <link rel="icon" href="favicon.ico">

    <title>Тест 'Основы компьютерной грамотности'</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<?php include_once('header.php');?>
    
<body>

    <main role="main" class="container">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Вопрос <?=$_SESSION["q"]+1;?> из <?=count($questions);?></li>
    </ol>
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?=($_SESSION['q']+1) * 10?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=($_SESSION['q']+1) * 10?>%"></div>
    </div> 
    </nav>
    <form class="mainForm" method="post" action="">
    <?php
        echo "<div class='card'>";
            echo "<div class='card-body'>";
                echo "<h5 class='questionText'>".$questions[$_SESSION["q"]]['question']."</h5>";
                    
                echo"<div class='btn-group btn-group-toggle test-btn' data-toggle='buttons'>";
        
                echo"<label class='answer-radio submit-button btn btn-secondary'>";
                echo"<input class='' type='radio' name='answers' value='1' id='answer1' autocomplete='off'>";
                echo $questions[$_SESSION["q"]]['answer1'];
                echo "</label><br>";
        
                echo"<label class='answer-radio submit-button btn btn-secondary'>";
                echo"<input class='' type='radio' name='answers' value='2' id='answer2' autocomplete='off'>";
                echo $questions[$_SESSION["q"]]['answer2'];
                echo "</label><br>";
        
                echo"<label class='answer-radio submit-button btn btn-secondary'>";
                echo"<input class='' type='radio' name='answers' value='3' id='answer3' autocomplete='off'>";
                echo $questions[$_SESSION["q"]]['answer3'];
                echo "</label><br>";
        
                echo"<label class='answer-radio submit-button btn btn-secondary'>";
                echo"<input class='' type='radio' name='answers' value='4' id='answer4' autocomplete='off'>";
                echo $questions[$_SESSION["q"]]['answer4'];
                echo "</label></div>";
                echo "<input type='submit' class='btn btn-primary submit-button' value='Ответить'/>";
        echo "</div></div>";
        debug();
    ?>
    </form>

    </main><!-- /.container -->

<?php include_once('footer.php');?>
</body>
</html>