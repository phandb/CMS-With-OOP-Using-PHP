SELECT * FROM users;

SELECT * FROM pages

WHERE page_cat_id = 3
 ORDER BY page_date_added DESC;
 
 SELECT page_id, page_cat_id, page_title, page_sub_title, page_excerpt, page_author, page_content, DATE_FORMAT(page_date_added, "%M %e %Y") AS page_date_added 
    FROM pages ORDER BY page_date_added DESC;
    
SELECT * FROM categories;

ALTER TABLE users ADD user_first_name VARCHAR(80) NOT NULL AFTER user_id, ADD user_last_name VARCHAR(80) NOT NULL AFTER user_first_name;
ALTER TABLE users DROP COLUMN user_first_name, DROP COLUMN user_last_name;
UPDATE users SET user_first_name = 'Public', user_last_name = 'User' WHERE user_id =1;
UPDATE users SET user_first_name = 'Author', user_last_name = 'User' WHERE user_id =2;
UPDATE users SET user_first_name = 'Admin', user_last_name = 'User' WHERE user_id =3;
UPDATE users SET user_first_name = 'Dalton', user_last_name = 'Phan' WHERE user_id =4;