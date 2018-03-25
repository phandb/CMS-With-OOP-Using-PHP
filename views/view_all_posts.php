    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-9">

                <h2 class="page-header">
                   LENT REFLECTIONS
                    <small></small>
                </h2>
                
                <?php //fetch the posts and display them here
                
                //echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                 // echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                
                    while ($page = $rs->fetch()) {
                       
                        echo "<h3><a href='page.php?pageId={$page->getPageId()}'>{$page->getPageTitle()}</a></h3>";
                        echo "<p class='lead'>by {$page->getPageAuthor()} </p>";
                        echo "<p><span class='glyphicon glyphicon-time'></span> {$page->getPageDateAdded()}</p>";
                       
                        echo " <img class='img-responsive' src='images/lent.jpg' alt=''> ";
                      
                        echo "<p>{$page->getPageIntro()}</p>";
                        echo " <p><a href='page.php?pageId={$page->getPageId()}'>read more...</a></p> ";
                         echo " <hr>";
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

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <!-- Blog Search Well -->
                <!--form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form-->
                <div class="card">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="card">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="card">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>
            <!--------End of Sidebar---------------->

        </div>
        <!-- /.row -->

       
   
      </div>
     
   <!--------End of page container------>