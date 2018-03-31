<?php  # login.php 
//This page will handle and display the login form.

//Need the utilities file
require('includes/utilities.php');



//Create new form
set_include_path(get_include_path() . PATH_SEPARATOR . 'C:/xampp/php/pear');

//set_include_path(get_include_path() . PATH_SEPARATOR . '/usr/local/pear/share/pear/');
require('HTML/QuickForm2.php');
$form = new HTML_QuickForm2('loginForm');

//Add the username
$userName = $form->addElement('text', 'username');
$userName->setLabel('User Name');
$userName->addFilter('trim');
$userName->addRule('required', 'Please enter your user name.');
//$userName->addRule('username' 'Please Enter User Name.');


//Add the password field:
$password = $form->addelelment('password', 'password');
$password->setLabel('Password');
$password->addFilter('trim');
$password->addRule('required', 'Please enter your password.');

//Add the submit button
$form->addElement('submit', 'submit', array('value'=>'Login'));
    


//Check for a form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //validate the form data
   if($form->validate()){
        
        //check against the database:
        $login_query = 'SELECT * FROM users WHERE username=:username AND user_password=SHA1(:password)';
        $stmt = $pdo_conn->prepare($login_query);
        $rs = $stmt->execute(array(':username'=> $userName->getValue(), ':password' => $password->getValue()));
        
        //try to fetch the results
        if($rs) {
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $user=$stmt->fetch();
            
        }
        
        //Store the user in the session and redirect
        if($user){
            //store in a session
            $_SESSION['user'] = $user;
            
            //redirect
            header("Location:index.php");
            exit;
        }
    }//end of form validation IF
}//End of form submission IF

//Show the login page:
$pageTitle = 'Login';
include('includes/header.php');
include('views/view_login.php');
include('includes/footer.php')
?>