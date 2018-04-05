<?php  # login.php 
//This page will handle and display the login form.

//Need the utilities file
require('includes/utilities.php');



//Check for a form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
//if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //validate the form data
  
        
        //check against the database:
        $login_query = 'SELECT * FROM users WHERE username=:username AND user_password=:password';
        $stmt = $pdo_conn->prepare($login_query);
        //$rs = $stmt->execute(array(':username'=> $_POST['username'], ':password' => $_POST['password']));
        $rs = $stmt->execute(array(':username'=> $username, ':password' => $password));   
        
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
            header("Location: index.php");
            exit;
        }
    
}//End of form submission IF
else echo "Something Wring";

//Show the login page:
//$pageTitle = 'Login';
//include('includes/header.php');
//include('views/view_login.php');
//include('includes/footer.php')
?>