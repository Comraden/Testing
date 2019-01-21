<?php
include_once("core/engine.inc.php");

checkLogin();


checkResult();
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Тестирование по теме 'Компьютерная грамотность'">
    <meta name="author" content="Postalx">
    <link rel="icon" href="favicon.ico">

    <title>Результаты</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.css"/>
</head>

<?php include_once('header.php');?>
    
<body>

    <main role="main" class="container">
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php getResult($questions);?>

    </main><!-- /.container -->

<?php include_once('footer.php');?>
</body>
</html>