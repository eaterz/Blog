CREATE DATABASE blog_tavs_uzvards;
USE blog_tavs_uzvards;

CREATE TABLE posts (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL
);

INSERT INTO posts (title)
VALUES
('My First Blog Post'),
('My Second Blog Post');

TRUNCATE posts;

CREATE TABLE categories (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
description TEXT
);

INSERT INTO categories (name)
VALUES
('sport'),
('music'),
('food');

ALTER TABLE posts
ADD COLUMN category_id INT;

ALTER TABLE posts
MODIFY COLUMN category_id INT NOT NULL,
ADD FOREIGN KEY (category_id) REFERENCES categories(id);


SELECT * FROM categories;

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE name = 'sport')
WHERE id = 1;

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE name = 'food')
WHERE id = 2;