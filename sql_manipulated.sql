SELECT * FROM pages;

SELECT * FROM pages
INNER JOIN categories
 ORDER BY page_date_added DESC;
 
 SELECT page_id, page_cat_id, page_title, page_sub_title, page_excerpt, page_author, page_content, DATE_FORMAT(page_date_added, "%M %e %Y") AS page_date_added 
    FROM pages ORDER BY page_date_added DESC;
    
SELECT * FROM categories;