<?php  # index.php
    //Need utilities file here:
require('includes/utilities.php');

//inlude the header:
$pageTitle = 'Welcome to Dong Hanh CLC - Agape';
include('includes/header.php');

//include page content
//Fetch the three most recent page:
try{
    //Validate category ID:  category ID received? and should be an integer greater than or equal to 1
    if(!isset($_GET['categoryID']) || !filter_var($_GET['categoryID'], FILTER_VALIDATE_INT, array('min_range' => 1))){
       throw new Exception('Category ID is invalid');
    }
    //Fetch the category from database
    $select_cat_post_query = 'SELECT *  FROM pages WHERE page_cat_id =:categoryID ORDER BY page_date_added DESC  ';
    
   $stmt = $pdo_conn->prepare($select_cat_post_query);
    $rs =$stmt->execute(array(':categoryID' => $_GET['categoryID'])); 
    
    if ($rs) {
    
    //Check that rows were returned:
        
        
        //echo "Ok there are some data " . $_GET['categoryID'];
        //set the fetch mode:
        
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Page');
        //$catgoryPost = $stmt-fetch();
    
        //records will be fetched in the views:
        include('views/view_cat_posts.php');
    } else {
        throw new Exception('No content available to be viewed at this time.');
    }
    
} catch (Exception $e) {
    include('views/view_error.php');
}



//include the footer:
include('includes/footer.php');

?>
<?php /*
require_once 'System.php';
if(class_exists('System')) {
   echo 'PEAR is installed!';
} else {
   echo 'PEAR is not installed :(';
}*/
?>