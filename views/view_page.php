<section>
    <article>
        <h1>
           <span>
                <?php
                     echo $page->getPageDateAdded();
            
                ?>
            </span>
                <?php
                     echo $page->getPageTitle();
            
                ?>
        </h1>
        <?php
            echo $page->getPageContent();
            
        ?>
        <?php
            if($user && $user->canEditPage($page)) {
                echo '<p><a href="edit_page.php?pageId=' .$page->getPageId() . '">EDIT</a></p>';
            }
        ?>
    </article>
    
</section>