
    
 <div class="container">

        <div class="row">
            <div class="col">
             
            </div>
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1>Login</h1>
                
               <?php 
                    
                    if($form->isSubmitted() && $form->validate()) {
                        echo '<p >Either username or password does not match</p>';
                        
                    }
                
                ?>
                <?php   echo $form;   ?>
                    
           


            </div>
            <div class="col">
             
            </div>
     </div>
 </div>
 