CREATE TABLE IF NOT EXISTS users  (
user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
user_type ENUM('public','author','admin'),
username VARCHAR(30) NOT NULL,
user_email VARCHAR(40) NOT NULL,
user_password CHAR(40) NOT NULL,
user_date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (user_id),
UNIQUE (username),
UNIQUE (user_email),
INDEX login (user_email, user_password)
);

CREATE TABLE  IF NOT EXISTS  pages (
page_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
page_creator_id INT UNSIGNED NOT NULL,
page_title VARCHAR(100) NOT NULL,
page_content TEXT NOT NULL,
page_date_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
page_date_added TIMESTAMP NOT NULL,
PRIMARY KEY (page_id),
INDEX (page_creator_id),
INDEX (page_date_updated)
);

INSERT INTO users VALUES 
(NULL, 'public', 'publicUser', 'public@example.com', SHA1('publicPass'), NULL),
(NULL, 'author', 'authorUser', 'author@example.com', SHA1('authorPass'), NULL),
(NULL, 'admin', 'adminUser', 'admin@example.com', SHA1('adminPass'), NULL);

INSERT INTO pages VALUES
(NULL, 2, 'This is a post', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', NULL, NOW());