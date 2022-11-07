use sampleDB;
CREATE TABLE categories (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  description text NOT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO categories
(id, name, description)
VALUES
(1, "SC", "Sample Category"),
(2, "OSC", "Other Sample Category");

UPDATE categories
SET name = "SC New"
WHERE id = 1;

CREATE TABLE items (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  amount int(10) NOT NULL,
  category_id int(10) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO items
(id, name, amount, category_id)
VALUES
(1,'Item 1', 10, 1),
(2, 'Item 2', 20, 1),
(3, 'Item 3', 30, 2),
(4, 'Item 4', 40, 2);

INSERT INTO items
(id, name, amount)
VALUES
(5, 'Item 5', 50);

INSERT INTO categories
(id, name, description)
VALUES
(3, 'EC', 'Empty Category');

#inner join
SELECT
     categories.id as cat_id,
     categories.name as cat_name,
     items.id as it_id,
     items.name as it_name,
     items.amount
FROM
     categories
     INNER JOIN items
     ON categories.id = items.category_id;
     
#Left join
SELECT
     categories.id as cat_id,
     categories.name as cat_name,
     items.id as it_id,
     items.name as it_name,
     items.amount
FROM
     categories
     LEFT JOIN items
     ON categories.id = items.category_id;

#Right join
SELECT
     categories.id as cat_id,
     categories.name as cat_name,
     items.id as it_id,
     items.name as it_name,
     items.amount
FROM
     categories
     RIGHT JOIN items
     ON categories.id = items.category_id;

#Bai 1.1
SELECT categories.id as cat_id,
       categories.name as cat_name,
       categories.description as cat_description,
       categories.created_at as cat_created_at,
       categories.updated_at as cat_updated_at,
	COUNT(items.category_id) AS "SO LUONG Items"
FROM categories INNER JOIN items ON categories.id = items.category_id
GROUP BY categories.id,
		 categories.name,
		 categories.description,
		 categories.created_at,
		 categories.updated_at;

#Bai 1.2
SELECT categories.id as cat_id,
       categories.name as cat_name,
       categories.description as cat_description,
       categories.created_at as cat_created_at,
       categories.updated_at as cat_updated_at,
	SUM(items.amount) AS "Tong so amount"
FROM categories INNER JOIN items ON categories.id = items.category_id
GROUP BY categories.id,
		 categories.name,
		 categories.description,
		 categories.created_at,
		 categories.updated_at;
         
#Bai 1.3
SELECT categories.id as cat_id,
       categories.name as cat_name,
       categories.description as cat_description,
       categories.created_at as cat_created_at,
       categories.updated_at as cat_updated_at
FROM categories INNER JOIN items ON categories.id = items.category_id
WHERE items.amount > 40
GROUP BY categories.id,
		 categories.name,
		 categories.description,
		 categories.created_at,
		 categories.updated_at;
         
#Bai 1.4
DELETE  FROM items WHERE category_id IS NULL;





