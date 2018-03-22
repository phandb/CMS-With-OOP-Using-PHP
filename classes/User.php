<?php #Use
    //THis script define user class

/*Class User
    The class contain 6 attributes: user_id, user_type, username, user_email, user_password, user_date_added.
    The attributes match corresponding database columns
    The class contains 4 methods:  getId(), isAdmin(), canEditPage(), and CanCreatePage()
    
*/

class User {
    //all attributes are protected and correspond to database columns
    
    protected $userId = null;
    protected $userType = null;
    protected $username = null;
    protected $userEmail = null;
    protected $userPassword = null;
    protected $userDateAdded = null;
    
    //Method return User ID
    function getUserId() {
        return $this->$userId;
    }
    
    //Method return boolean if user is an admin
    function isAdmin() {
        return ($this->$userType=='admin');
    }
    
    //Method return a Boolean indicating if user is an admin or author
    function canEditPage() {
        return ($this->isAdmin() || ($this->$userId == $page->getPageCreatorId()));
    }
        
    //Method return a Boolean indicating if user is an admin or author
    function canCreatePage() {
        return ($this->isAdmin() || ($this->$userType== 'author'));
    }
    
}  //End of User class


?>