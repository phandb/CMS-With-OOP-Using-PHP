<!---- # error.html  ---->


<section>
    <article>
        <h1> Error Occured!</h1>
        <p>The content is not viewable because an error occured.  We apologize for any inconvenience.  The system adminstrator has been notified and will correct the issue as soon as possible.</p>
        <p>Details (for purpose of debug only.  Remove when project complete):  <span class = "warning">
        <?php echo $e->getMessage();  ?></span></p>
    </article>
    
</section>