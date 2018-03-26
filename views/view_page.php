


 <div class="container">

        <div class="row">
            <div class="col">
             
            </div>
            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php //fetch the posts and display them here
                        //<div><img class='img-fluid' src='images/Lent.jpg' alt=''></div>
                
                
                //echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                 // echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                
                ?>
               <?php //display the whole article here
                       echo "<div class='card bg-light mb-3'>";
                       echo "<img class='img-fluid' src='images/lent.jpg' alt=''>";
                        echo "<div class='card-body'>";
                        
                        echo "<h5 class='card-title'>{$page->getPageTitle()}</h5>";
                        
                        echo "<p class='card-text'><small class='text-muted'> by {$page->getPageAuthor()} </small></p>";
                        echo "<p class='card-text'><small class='text-muted'> {$page->getPageDateAdded()}</small></p>";
                        echo "<p class='card-text'><small class='text-muted'>  {$page->getPageSubTitle()} </small></p>";
                        echo "<p class='card-text'><small class='text-muted'>  {$page->getPageExcerpt()} </small></p>";              
                        echo "<p class='card-text text-justify'>{$page->getPageContent()}</p>";
                        
                        
                        
                         echo "</div>";
                        echo "</div>";
                    
                
                
                ?>
                <?php
            if($user && $user->canEditPage($page)) {
                echo '<p><a href="edit_page.php?pageId=' .$page->getPageId() . '">EDIT</a></p>';
            }
        ?>
           


            </div>
            <div class="col">
             
            </div>
     </div>
 </div>
 
   