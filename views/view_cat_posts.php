    <!-- Page Content -->
    <div class="container">
                <h4 class="text-sm-center text-uppercase text-primary mt-3">
                   Lent reflections
                    <small>2018</small>
                </h4>
                </div>
    <div class="container">

        <div class="row mt-4">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
               
               <div><img class='img-fluid mb-3' src='images/lent.jpg' alt=''></div>
                <?php //fetch the posts and display them here
                
                //echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                 // echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                
                    while ($page = $stmt->fetch()) {
                       
                        echo "<div class='card bg-light mb-3'>";
                        echo "<div class='card-body'>";
                        echo "<p class='card-text'><small class='text-uppercase text-muted'>  {$page->getPageSubTitle()} </small></p>";
                        
                        echo "<h5 class='card-title'><a href='page.php?pageId={$page->getPageId()}'>{$page->getPageTitle()}</a></h5>";
                        
                        
                        echo "<p class='card-text'><small class='text-muted'> by {$page->getPageAuthor()} </small></p>";
                        echo "<p class='card-text'><small class='text-muted'> {$page->getPageDateAdded()}</small></p>";
                        
                        echo "<p class='card-text'><small class='text-muted'>  {$page->getPageExcerpt()} </small></p>";              
                        echo "<p class='card-text text-justify'>{$page->getPageIntro()}</p>";
                        echo " <p><a href='page.php?pageId={$page->getPageId()}'>read more...</a></p> ";
                        
                        
                        echo "</div>";
                        echo "</div>";
                       
                    }    
                
                
                ?>

                <!-- First Blog Post 
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
              
                    ---->

            </div>

          
           <?php
             //include sidebar
include('includes/sidebar.php');
            ?>

        </div>
        <!-- /.row -->

       
   
      </div>
     
   <!--------End of page container------>