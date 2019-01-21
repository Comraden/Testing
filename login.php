<?php
include_once("core/engine.inc.php");
if(isset($_SESSION['q']))header("Location:start.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Postalx">
    <link rel="icon" href="favicon.ico">

    <title>Вход</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.css"/>
</head>

<?php include_once('header.php');?>
    
<body>

    <main role="main" class="container  wow fadeIn">
        <form action="start.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">ФИО</label>
            <input type="name" name="name" class="form-control" id="InputName" placeholder="ФИО" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="example@domain.com" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Если вы являетесь студентом какого - либо учебного заведения, напишите свою группу/класс и  название заведения</label>
            <input type="text" name="info" class="form-control" id="InputInfo" placeholder="ИРНИТУ мКС-18-2">
            <small id="nameHelp" class="form-text text-muted">Мы никогда не передаём ваши данные третьим лицам</small>
          </div>
          <button type="submit" class="btn btn-primary">Поехали !</button>
        </form>
    </main>

<?php include_once('footer.php');?>
</body>
</html>