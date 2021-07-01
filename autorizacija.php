<?php

session_start();

if($_POST['email']==='oper@edunova.hr' && $_POST['lozinka']==='o'){
    $_SESSION['autoriziran']=$_POST['email'];
    header('location:zasticenastranica.php');
}else{
    header('location:index.php');
}