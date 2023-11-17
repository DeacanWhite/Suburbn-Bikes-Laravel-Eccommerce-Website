-- | CREATING DATABASE | --
CREATE DATABASE IF NOT EXISTS bike_shop;
USE bike_shop;

-- | CREATING TABLE PRODUCT | --
DROP TABLE IF EXISTS products;
CREATE TABLE products(
    id INT NOT NULL AUTO_INCREMENT,
    category VARCHAR(30) NOT NULL,
    category2 VARCHAR(30),
    name VARCHAR(200) NOT NULL,
    price DECIMAL(10, 2),
    img VARCHAR(300),
    description LONGTEXT,
    PRIMARY KEY (id)
);

INSERT INTO products (id, category, category2, name, price, img, description)
VALUES (1, "bike", "road bike", "name", 1000.00, "url", ""),
       (2, "bike", "city bike", "name", 1000.00, "url", ""),
       (3, "bike", "mountain bike", "name", 1000.00, "url", ""),
       (4, "scooter", "", "name", 1000.00, "url", ""),
       (5, "scooter", "", "name", 1000.00, "url", ""),
       (6, "scooter", "", "name", 1000.00, "url", ""),
       (7, "apparel", "", "name", 1000.00, "url", ""),
       (7, "apparel", "", "name", 1000.00, "url", ""),
       (7, "apparel", "", "name", 1000.00, "url", ""),
       (7, "part", "component", "name", 1000.00, "url", ""),
       (7, "part", "component", "name", 1000.00, "url", ""),
       (7, "part", "accessory", "name", 1000.00, "url", ""),
       (7, "part", "accessory", "name", 1000.00, "url", ""),
       (7, "service", "", "name", 1000.00, "url", ""),
       (7, "service", "", "name", 1000.00, "url", ""),
       (7, "service", "", "name", 1000.00, "url", "");










