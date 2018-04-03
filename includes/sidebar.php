 <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4 ">

                <!-- Blog Search Well -->
                <!--form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form-->
                <div class="card mb-3">
                  <!--h5 class="card-header">Blog Search</h5-->
                   <div class="card-body">
                    
                    <div class="input-group mb-3">
                    <form class="form-inline ">
                      <input class="form-control " type="search" placeholder="Blog Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search</button>
                    </form>
                    </div>
                    </div>

                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="card mb-3">
                 
                  <?php
                      $select_categories_sidebar = "SELECT * FROM categories ";
                      $result_categories  = $pdo_conn->query($select_categories_sidebar);
                    
                      //Set the fetch mode
                      $result_categories->setFetchMode(PDO::FETCH_ASSOC);
                      
                    ?>
                    
                   <h5 class="card-header text-sm-left ">Blog Categories</h5>
                   <div class="card-body">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                               <?php
                                    while($row = $result_categories->fetch()){
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                        echo "<li><a href='category.php?categoryID={$cat_id} ' >{$cat_title}</a></li>";
                                    }
                                
                                ?>
                                
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        
                    </div>
                    <!-- /.row -->
                    </div>
                </div>

                <!-- Side Widget Well -->
                <div class="card mb-3">
                    <h5 class="card-header text-sm-left ">Side Widget Card</h5>
                    <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                    </div>
                </div>

            </div>
            <!--------End of Sidebar---------------->