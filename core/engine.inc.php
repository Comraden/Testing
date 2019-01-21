<?php
session_start();

include_once("core/test.php");

$result = "";

function applyData()
{   
    $name = trim(strip_tags($_POST["name"]));
    $email = trim(strip_tags($_POST["email"]));
    $info = trim(strip_tags($_POST["info"]));
    if($name != "" && $email !="")
    {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['info'] = $info;
        $_SESSION['q'] = "0";
    } 
}

function checkLogin()
{
    if(!isset($_SESSION["name"]) || !isset($_SESSION["email"]) || $_SESSION['name'] == "" || $_SESSION['email'] == "" || $_SESSION['q'] == "" || !isset($_SESSION['q'])) 
    {
        header("Location:login.php");  
    }else
    {
        //header("Location:start.php");
    }   
    //if(isset($_SESSION["result"])) header("Location:result.php");
}

function nextQuestion()
{
    if(isset($_POST['answers']))
    {
        if($_POST['answers'] == '1' || $_POST['answers'] == '2' || $_POST['answers'] == '3' || $_POST['answers'] == '4')
        {
            $_SESSION["answers"] .= $_POST["answers"];
            $_SESSION["q"] += 1;
        }
    }
    if(strlen($_SESSION["answers"]) >= 10)
    {
        header("Location:result.php");
        //$_SESSION['result'] == $_SESSION["answers"];
        
    }
}

function checkResult()
{
    if(strlen($_SESSION["answers"]) < 10)header("Location:start.php");
    if($_GET['op'] == "logout")
    {
        logout();
    }
}

function getResult($questions)
{
    $rightCombination = "1132431421";
    $rightAnswers = 0;
    $str = "";
    for($i = 0; $i < strlen($_SESSION["answers"]); $i++)
    {
        if($_SESSION["answers"][$i] == $rightCombination[$i])
        {
            $rightAnswers++;
            $str .= "<div class='alert alert-success' role='alert'><b>".$questions[$i]['question']."</b><br>".$questions[$i]["answer".$_SESSION['answers'][$i]]."</div>";
        }else
        {
            $str .= "<div class='alert alert-danger' role='alert'><b>".$questions[$i]['question']."</b><br>".$questions[$i]["answer".$_SESSION['answers'][$i]]."<br><b>".$questions[$i]["answer".$rightCombination[$i]]."</b></div>";
        }
    }
        
    echo "<div class='jumbotron jumbotron-fluid'><div class='container'><h1 class='display-4'>".$_SESSION['name']."</h1><p class='lead'>".$_SESSION['info']."</p>";
    echo "Правильных ответов: ".$rightAnswers." из ".strlen($_SESSION['answers']);
    echo "<br><a href='result.php?op=logout' role='button' class='btn btn-primary'>Выйти</a>";
    echo "</div></div>";
    
    
    echo "<div id='accordion' role='tablist' aria-multiselectable='true'><div class='card'><div class='card-header' role='tab' id='headingThree'><h5 class='mb-0'><a class='collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapseThree' aria-expanded='false' aria-controls='collapseThree'>Показать ответы</a></h5></div><div id='collapseThree' class='collapse' role='tabpanel' aria-labelledby='headingThree'><div class='card-block'>".$str."</div></div></div></div>";
}

function logout()
{
    $_SESSION['name'] = null;
    $_SESSION['email'] = null;
    $_SESSION['info'] = null;
    $_SESSION['q'] = null;
    $_SESSION['answers'] = null;
    header("Location:index.php");
}

function debug()
{
    echo $_SESSION["answers"]."ans<br>";
    echo $_SESSION["q"]."q<br>";
    echo strlen($_SESSION["answers"])."strlans<br>";
}
?>