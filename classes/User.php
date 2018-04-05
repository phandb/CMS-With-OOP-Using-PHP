<?php #Use
    //THis script define user class

/*Class User
    The class contain 6 attributes: user_id, user_type, username, user_email, user_password, user_date_added.
    The attributes match corresponding database columns
    The class contains 4 methods:  getId(), isAdmin(), canEditPage(), and CanCreatePage()
    
*/

class User {
    //all attributes are protected and correspond to database columns
    
    protected $user_id = null;
    protected $user_first_name = null;
    protected $user_last_name = null;
    protected $user_type = null;
    protected $username = null;
    protected $user_email = null;
    protected $user_password = null;
    protected $user_date_added = null;
    
    //Method return User ID
    function getUserId() {
        return $this->user_id;
    }
    
    //Method return boolean if user is an admin
    function isAdmin() {
        return ($this->user_type=='admin');
    }
    
    //Method return a Boolean indicating if user is an admin or author
    function canEditPage(Page $page) {
        return ($this->isAdmin() || ($this->user_id == $page->getPageCreatorId()));
    }
        
    //Method return a Boolean indicating if user is an admin or author
    function canCreatePage() {
        return ($this->isAdmin() || ($this->user_type== 'author'));
    }
    
}  //End of User class


?>