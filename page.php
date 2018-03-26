<?php  # page.php to display the full content of each post

//Retrieve the corresponding database record
//include the View file

    //Need utilities file here:
require('includes/utilities.php');

try{
    //Validate page ID:  page ID received? and should be an integer greater than or equal to 1
    if(!isset($_GET['pageId']) || !filter_var($_GET['pageId'], FILTER_VALIDATE_INT, array('min_range' => 1))){
        throw new Exception('An invalid page ID was provided to this page.');
        
    }
    
    //Fetch the page from the database:
    $select_page_query = 'SELECT page_id, page_title, page_sub_title, page_excerpt, page_author, page_content, DATE_FORMAT(page_date_added, "%M %e %Y") AS page_date_added FROM pages WHERE page_id = :pageId';
    $stmt = $pdo_conn->prepare( $select_page_query);
    $rs = $stmt->execute(array(':pageId' => $_GET['pageId']));

    //If the query is okm fetch the record into an object:
    if($rs){
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Page');
        $page = $stmt->fetch();
        
        //confirm that page exists:
        if ($page){
            //Set the browser title to page title:
            $pageTitle = $page->getPageTitle();
            
            //create the page:
            include('includes/header.php');
            include('views/view_page.php');
            
        }else {
            throw new Exception('An invalid page ID was provided to this page.');
        }
            
    }else {
        throw new Exception('An invalid page ID was provided to this page.');
    }
}catch (Exception $e) {
    $pageTitle = 'Error!';
    include('includes/header.php');
    include('views/view_error.php');
}
        
 
//include the footer:
include('includes/footer.php');

?>