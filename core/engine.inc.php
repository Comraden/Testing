<?php
session_start();
include_once("core/test.php");

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
    if($_SESSION["answers"] < 10)header("Location:start.php");
}

function debug()
{
    echo $_SESSION["answers"]."ans<br>";
    echo $_SESSION["q"]."q<br>";
    echo strlen($_SESSION["answers"])."strlans<br>";
}
?>