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
    //echo "Database Connected Successful!";
}catch (PDOException $e){
    //report the error!
    
    $pageTitle = 'Error!';
    include('includes/header.php');
    include('views/view_error.php');
    include('includes/footer.php');
    exit();
}
?>