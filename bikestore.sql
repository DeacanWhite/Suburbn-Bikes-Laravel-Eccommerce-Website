-- | CREATING DATABASE | --
CREATE DATABASE IF NOT EXISTS bikestore;
USE bikestore;

-- | CREATING TABLE PRODUCT | --
DROP TABLE IF EXISTS products;
CREATE TABLE products(
    prodNo INT NOT NULL AUTO_INCREMENT,
    category VARCHAR(30) NOT NULL,
    category2 VARCHAR(30),
    name VARCHAR(200) NOT NULL,
    price DECIMAL(10, 2),
    img VARCHAR(300),
    description LONGTEXT,
    size INT,
    color VARCHAR(255),
    PRIMARY KEY (prodNo)
);

INSERT INTO products (prodNo, category, category2, name, price, img, description, size, color)
VALUES (1, "bike", "road bike", "Polygon Strattos", 899.00, "https://github.com/Alex11520/img/blob/main/product_img/roadbike.jpeg?raw=true", NULL, 26, "Sky"),
       (2, "bike", "city bike", "Polygon Path", 499.00, "https://github.com/Alex11520/img/blob/main/product_img/citybike.jpeg?raw=true", NULL, 24, "Lake"),
       (3, "bike", "mountain bike", "Marin Pine Mountain", 1799.00, "https://github.com/Alex11520/img/blob/main/product_img/mountainbike.jpeg?raw=true", NULL, 28, "Grey"),
       (4, "scooter", NULL, "DRAGONFLY KICK SCOOTER", 149.00, "https://github.com/Alex11520/img/blob/main/product_img/dragonfly-kick-scooter.jpeg?raw=true", NULL, 10, "Black"),
       (5, "scooter", NULL, "HURRICANE", 3999.00, "https://github.com/Alex11520/img/blob/main/product_img/Hurrricane_scooter.jpeg?raw=true", NULL, 11, "Grey"),
       (6, "scooter", NULL, "Klima Electric", 2699.00, "https://github.com/Alex11520/img/blob/main/product_img/nami-klima-electric-scooter.jpeg?raw=true", NULL, 10, "Charcoal"),
       (7, "apparel", NULL, "CYCLING WATERPROOF JACKET", 144.00, "https://github.com/Alex11520/img/blob/main/product_img/CYCLING%20WATERPROOF%20JACKET.jpeg?raw=true", NULL, 14, "Lemon"),
       (8, "apparel", NULL, "WATERPROOF CYCLING GLOVES", 80.00, "https://github.com/Alex11520/img/blob/main/product_img/gloves.jpeg?raw=true", NULL, 12, "Grey"),
       (9, "apparel", NULL, "CYCLING OVERSHOES", 25.00, "https://github.com/Alex11520/img/blob/main/product_img/shoe.jpeg?raw=true", NULL, 9, "Grey"),
       (10, "part", "component", "Entity Alloy Pedals", 60.00, "https://github.com/Alex11520/img/blob/main/product_img/pedal.jpeg?raw=true", NULL, 7, "Black"),
       (11, "part", "component", "Maxxis Rekon Tyre", 65.00, "https://github.com/Alex11520/img/blob/main/product_img/tyre.jpeg?raw=true", NULL, 9, "Black"),
       (12, "part", "accessory", "Entity Pump", 35.00, "https://github.com/Alex11520/img/blob/main/product_img/pump.jpeg?raw=true", NULL, 10, "Yellow"),
       (13, "part", "accessory", "Entity WB600 Bottle", 30.00, "https://github.com/Alex11520/img/blob/main/product_img/bottle.jpeg?raw=true", NULL, 10, "Grey"),
       (14, "service", NULL, "Basic", 119.00, NULL, "Safety Check, Degrease & Clean, General Tuning, Lubricating, Bolts Check", NULL, NULL),
       (15, "service", NULL, "General", 169.00, NULL, "Basic + Wheels Check, Polish, Headset Check, Bracket Check", NULL, NULL),
       (16, "service", NULL, "Premium", 269.00, NULL, "General + New Cable, Brake Bleed, Grease, Frame Check", NULL, NULL);


DROP TABLE IF EXISTS serviceBooking;
CREATE TABLE serviceBooking(
     id INT NOT NULL AUTO_INCREMENT,
     clientName VARCHAR(200) NOT NULL,
     serviceName VARCHAR(200) NOT NULL,
     time VARCHAR(300),
     PRIMARY KEY (id)
);




DROP TABLE IF EXISTS users;
CREATE TABLE users (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(100) NOT NULL,
   email VARCHAR(100) NOT NULL UNIQUE,
   password VARCHAR(255) NOT NULL,
   role ENUM('client', 'staff', 'manager') NOT NULL,
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   remember_token VARCHAR(100) NULL
);


-- 在实际应用中，您应该在 PHP 中使用 Hash::make('password') 来生成加密后的密码
INSERT INTO users (name, email, password, role) VALUES
    ('Staff1', 'staff1@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'staff'),
    ('Staff2', 'staff2@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'staff'),
    ('Staff3', 'staff3@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'staff'),
    ('Staff4', 'staff4@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'staff'),
    ('Staff5', 'staff5@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'staff'),
    ('Client6', 'client6@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'client'),
    ('Client7', 'client7@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'client'),
    ('Client8', 'client8@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'client'),
    ('Client9', 'client9@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'client'),
    ('Client10', 'client10@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'client'),
    ('Manager11', 'manager11@example.com', '$2y$12$JEV86i5Z6WO6meKPbpCBTO9h/GvVqX1Q/rQXBpc1pYy7ZYwo.Qdqi', 'manager');



DROP TABLE IF EXISTS roaster;
CREATE TABLE roaster (
     id INT AUTO_INCREMENT PRIMARY KEY,
     user_id INT NOT NULL,
     position ENUM('sale', 'admin', 'workshop') NOT NULL,
     day ENUM('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday') NOT NULL,
     FOREIGN KEY (user_id) REFERENCES users(id)
);

