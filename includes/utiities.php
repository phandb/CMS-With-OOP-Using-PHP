<?php #uti
    //This page needs to do the setup and configuration required by every other pages

//auto load classes from classes directory

function class_loader($class){
    require('classes/' . $class . '.php');
    
}

//register funtion to SPL
spl_autoload_register('class_loader');

//Start session
session_start();

//check for uer in the session
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : null;

//create database connection as a PDO object:
try{
    //create an object:
    $pdo_conn = new PDO('mysql:dbname=cms_oop; host=localhost', 'root', 'Thaihoa92');
}catch (PDOException $e){
    //report the error!
    
    $pageTitle = 'Error!';
    include('includes/header.php');
    include('views/error.html');
    include('includes/footer.php');
    exit();
}
?>