<?php #Use
    //This script define user class

/*Class Page
    The class contain 6 attributes: pageId, pageCreatorId, pageTitle, pageContent, pageDateAdded, and pageDateUpdated.
    The attributes match corresponding database columns
    The class contains 7 methods:  getPageId(), getPageCreatorId(), getPageTitle(), getPageContent(), getPageDateAdded(), getPageDateUpdated(), and getPageIntro()
    
*/

class Page {
    //all attributes are protected and correspond to database columns
    
    protected $pageId = null;
    protected $pageCreatorId = null;
    protected $pageTitle = null;
    protected $pageContent = null;
    protected $pageDateAdded = null;
    protected $pageDateUpdated = null;
    
    //Method return User ID
    function getPageId() {
        return $this->$pageId;
    }
    
     function getPageCreatorId() {
        return $this->$pageCreatorId;
    }
     function getPageTitle() {
        return $this->$pageTitle;
    }
     function getPageContent() {
        return $this->$pageContent;
    }
     function getPageDateAdded() {
        return $this->$pageDateAdded;
    }
     function getPageDateUpdated() {
        return $this->$pageDateUpdated;
    }
    
    //Method return the first X characters from content:
    
    function getPageIntro($count = 200) {
        
        return substr(strip_tags($this->$pageContent), 0, $count) . '...';
    }
    
    
}  //End of Page class


?>