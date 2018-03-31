<?php  # index.php
    //Need utilities file here:
require('includes/utilities.php');

//inlude the header:
$pageTitle = 'Welcome to Dong Hanh CLC - Agape';
include('includes/header.php');

//include page content
//Fetch the three most recent page:
try{
    $select_post_query = 'SELECT page_id, page_title, page_sub_title, page_excerpt, page_author, page_content, DATE_FORMAT(page_date_added, "%M %e %Y") AS page_date_added 
    FROM pages ORDER BY page_date_added DESC LIMIT 3 ';
    
    $rs = $pdo_conn->query($select_post_query);
    
    //Check that rows were returned:
    if ($rs && $rs->rowCount() > 0) {
        
        //echo "Ok there are some data";
        //set the fetch mode:
        $rs->setFetchMode(PDO::FETCH_CLASS, 'Page');
        
        //records will be fetched in the views:
        include('views/view_all_posts.php');
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