<?php #Use
    //This script define user class

/*Class Page
    The class contain 6 attributes: pageId, pageCreatorId, pageTitle, pageContent, pageDateAdded, and pageDateUpdated.
    The attributes match corresponding database columns
    The class contains 7 methods:  getPageId(), getPageCreatorId(), getPageTitle(), getPageContent(), getPageDateAdded(), getPageDateUpdated(), and getPageIntro()
    
*/

class Page {
    //all attributes are protected and correspond to database columns
    
    protected $page_id = null;
    protected $page_creator_id = null;
    protected $page_cat_id = null;
    protected $page_title = null;
    protected $page_sub_title = null;
    protected $page_excerpt = null;
    protected $page_author = null;
    protected $page_content = null;
    protected $page_date_added = null;
    protected $page_date_updated = null;
    
    //Method return User ID
    //value returned has to be matched up with table columns
    function getPageId() {
        return $this->page_id;
    }
    
     function getPageCreatorId() {
        return $this->page_creator_id;
    }
    
    function getPageCategoryId(){
        return $this->page_cat_id;
    }
    
     function getPageTitle() {
        return $this->page_title;
    }
    
     function getPageSubTitle() {
        return $this->page_sub_title;
    }
    
     function getPageExcerpt() {
        return $this->page_excerpt;
    }
    
    function getPageAuthor() {
        return $this->page_author;
    }
    
     function getPageContent() {
        return $this->page_content;
    }
    
     function getPageDateAdded() {
        return $this->page_date_added;
    }
    
     function getPageDateUpdated() {
        return $this->page_date_updated;
    }
    
    //Method return the first X characters from content:
    
    function getPageIntro($count = 300) {
        
        return substr(strip_tags($this->page_content), 0, $count) . '...';
    }
    
    
}  //End of Page class

/*if (method_exists("Page", "getPageId")){
    echo "The Method Exists";
    
}else{
    echo "No, it does not";
}*/
?>