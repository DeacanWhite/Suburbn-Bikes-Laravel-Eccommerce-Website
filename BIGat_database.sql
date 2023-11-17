CREATE DATABASE IF NOT EXISTS bikestore;
USE bikestore;
-- newly added tables
DROP TABLE IF EXISTS products;
CREATE TABLE products
(
    prodNo INT PRIMARY KEY,
    b_name VARCHAR(255),
    b_size INT,
    colour VARCHAR(255),
    price DECIMAL(10,2),
    decs VARCHAR(255),
    stock INT,
    photo_url VARCHAR(255)
);

DROP TABLE IF EXISTS parts;
CREATE TABLE parts
(
    prodNo INT PRIMARY KEY,
    P_name VARCHAR(255),
    P_size INT,
    price DECIMAL(10,2),
    stock INT,
    P_photo_url VARCHAR(255)
);






--old tables
DROP TABLE IF EXISTS roadbikes;
CREATE TABLE roadbikes
(
    RB_ProdNo VARCHAR(255) PRIMARY KEY,
    RB_name VARCHAR(255),
    RB_size INT,
    RB_colour VARCHAR(255),
    RB_price DECIMAL(10,2),
    RB_decs VARCHAR(255),
    RB_stock INT,
    RB_photo_url VARCHAR(255)
);

DROP TABLE IF EXISTS citybikes;
CREATE TABLE citybikes
(
    CB_ProdNo VARCHAR(255) PRIMARY KEY,
    CB_name VARCHAR(255),
    CB_size INT,
    CB_colour VARCHAR(255),
    CB_price DECIMAL(10,2),
    CB_decs VARCHAR(255),
    CB_stock INT,
    CB_photo_url VARCHAR(255)
);

DROP TABLE IF EXISTS mountainbikes;
CREATE TABLE mountainbikes
(
    MB_ProdNo VARCHAR(255) PRIMARY KEY,
    MB_name VARCHAR(255),
    MB_size INT,
    MB_colour VARCHAR(255),
    MB_price DECIMAL(10,2),
    MB_decs VARCHAR(255),
    MB_stock INT,
    MB_photo_url VARCHAR(255)
);

DROP TABLE IF EXISTS P_chains;
CREATE TABLE P_chains
(
    PC_prodNO VARCHAR(255) PRIMARY KEY,
    PC_name VARCHAR(255),
    PC_size INT,
    PC_price DECIMAL(10,2),
    PC_stock INT,
    PC_photo_url VARCHAR(255)
);

DROP TABLE IF EXISTS P_Sprockets;
CREATE TABLE P_Sprockets
(
    PSp_prodNO VARCHAR(255) PRIMARY KEY,
    PSp_name VARCHAR(255),
    PSp_size INT,
    PSp_price DECIMAL(10,2),
    PSp_stock INT,
    PSp_photo_url VARCHAR(255)
);

DROP TABLE IF EXISTS P_seats;
CREATE TABLE P_seats
(
    PSe_prodNO VARCHAR(255) PRIMARY KEY,
    PSe_name VARCHAR(255),
    PSe_size INT,
    PSe_price DECIMAL(10,2),
    PSe_stock INT,
    PSe_photo_url VARCHAR(255)
);

-- Create the 'customers' table
DROP TABLE IF EXISTS customers;
CREATE TABLE customers
(
    email VARCHAR(255) PRIMARY KEY,
    First_name VARCHAR(255),
    Last_name VARCHAR(255),
    address VARCHAR(255),
    Post_code INT,
    state VARCHAR(255),
    password VARCHAR(255)
);

-- Create the 'orders' table
DROP TABLE IF EXISTS orders;
CREATE TABLE orders
(
    order_No VARCHAR(255) PRIMARY KEY,
    email VARCHAR(255),
    order_total DECIMAL(10, 2),
    FOREIGN KEY (email) REFERENCES customers(email)
);

-- Create the 'staff' table
DROP TABLE IF EXISTS staff;
CREATE TABLE staff
(
    Fistname VARCHAR(255) ,
    lastname VARCHAR(255) ,
    staff_ID VARCHAR(255) PRIMARY KEY,
    staff_PS VARCHAR(255)
);

-- Create the 'roster' table
DROP TABLE IF EXISTS roster;
CREATE TABLE roster
(
    R_date DATE PRIMARY KEY,
    R_time VARCHAR(255),
);

-- Create the 'services' table
DROP TABLE IF EXISTS services;
CREATE TABLE services
(
    services_no VARCHAR(255),
    service_date DATE,
    service_time VARCHAR(255)
);

DROP TABLE IF EXISTS order_items;
CREATE TABLE order_items
(
    order_No VARCHAR(255),
    prodNo INT,
    quantity INT,
    FOREIGN KEY (order_No) REFERENCES orders(order_No),
    FOREIGN KEY (prodNo) REFERENCES products(prodNo)

);

DROP TABLE IF EXISTS staff_roster;
CREATE TABLE staff_roster
(
    R_date DATE,
    staff_ID VARCHAR(255),
    PRIMARY KEY (R_date, staff_ID),
    FOREIGN KEY (R_date) REFERENCES roster(R_date),
    FOREIGN KEY (staff_ID) REFERENCES staff(staff_ID)

);


-- test data




-- Insert test data into 'products' table
INSERT INTO products
    (prodNo, b_name, b_size, colour, price, decs, stock)
VALUES
    (1, 'Speedster', 26, 'Red', 799, 'High performance road bike', 10),
    (2, 'Trailblazer', 24, 'Blue', 599, 'Versatile mountain bike', 15),
    (3, 'Urban Glide', 28, 'Black', 449, 'Stylish city bike', 20);

-- Insert test data into 'roadbikes' table
INSERT INTO roadbikes
    (RB_ProdNo, RB_name, RB_size, RB_colour, RB_price, RB_decs, RB_stock, order_list)
VALUES
    ('RB001', 'Speedster 3000', 26, 'Red', 1200, 'Premium road bike', 5, NULL),
    ('RB002', 'Velocity', 28, 'Black', 850, 'Lightweight road bike', 8, NULL),
    ('RB003', 'Endurance', 25, 'White', 950, 'Comfort road bike', 6, NULL);

-- Insert test data into 'citybikes' table
INSERT INTO citybikes
    (CB_ProdNo, CB_name, CB_size, CB_colour, CB_price, CB_decs, CB_stock)
VALUES
    ('CB001', 'Metro Rider', 27, 'Green', 500, 'Comfortable city bike', 12),
    ('CB002', 'Urban Express', 28, 'Grey', 450, 'Efficient city bike', 20),
    ('CB003', 'City Star', 26, 'Yellow', 400, 'Economical city bike', 10);

-- Insert test data into 'mountainbike' table
INSERT INTO mountainbike
    (MB_ProdNo, MB_name, MB_size, MB_colour, MB_price, MB_decs, MB_stock)
VALUES
    ('MB001', 'Rock Hopper', 29, 'Orange', 1100, 'Rugged mountain bike', 7),
    ('MB002', 'Summit Seeker', 27, 'Blue', 950, 'Advanced mountain bike', 10),
    ('MB003', 'Trail Boss', 26, 'Black', 870, 'Durable mountain bike', 8);

-- Insert test data into 'parts' table
INSERT INTO parts
    (prodNo, P_name, P_size, price, stock)
VALUES
    (101, 'Handlebar', 30, 50, 40),
    (102, 'Bicycle Chain', 10, 20, 100),
    (103, 'Pedal Set', 15, 30, 80);

-- Insert test data into 'P_chains' table
INSERT INTO P_chains
    (PC_prodNO, PC_name, PC_size, PC_price, PC_stock, order_list)
VALUES
    ('PC101', 'Durable Chain', 10, 25, 50, NULL),
    ('PC102', 'Speed Chain', 10, 30, 70, NULL),
    ('PC103', 'Mountain Chain', 12, 35, 40, NULL);

-- Insert test data into 'P_Sprockets' table
INSERT INTO P_Sprockets
    (PSp_prodNO, PSp_name, PSp_size, PSp_price, PSp_stock, order_list)
VALUES
    ('PSp101', 'Mountain Sprocket', 15, 35, 40, NULL),
    ('PSp102', 'Road Sprocket', 14, 30, 55, NULL),
    ('PSp103', 'Hybrid Sprocket', 16, 32, 60, NULL);

-- Insert test data into 'P_seats' table
INSERT INTO P_seats
    (PSe_prodNO, PSe_name, PSe_size, PSe_price, PSe_stock, order_list)
VALUES
    ('PSe101', 'Comfort Seat', 20, 40, 50, NULL),
    ('PSe102', 'Racing Seat', 18, 60, 30, NULL),
    ('PSe103', 'Touring Seat', 22, 45, 40, NULL);

-- Insert test data into 'customers' table
INSERT INTO customers
    (email, First_name, Last_name, address, Post_code, state, password)
VALUES
    ('john.doe@example.com', 'John', 'Doe', '123 Main St', 12345, 'State', 'password123'),
    ('jane.smith@example.com', 'Jane', 'Smith', '456 High St', 23456, 'State', 'secretpass'),
    ('mike.brown@example.com', 'Mike', 'Brown', '789 Oak St', 34567, 'State', 'mypassword');

-- Insert test data into 'orders' table
INSERT INTO orders
    (email, order_No, order_list, order_total)
VALUES
    ('john.doe@example.com', 'ORD001', 'RB001, PC101', 1225.00),
    ('jane.smith@example.com', 'ORD002', 'MB002, PSe102', 1010.00),
    ('mike.brown@example.com', 'ORD003', 'CB003, PSp103', 432.00);

-- Insert test data into 'staff' table
INSERT INTO staff
    (Fistname, lastname, staff_ID, staff_PS)
VALUES
    ('James', 'Wilson', 'ST001', 'pass123'),
    ('Emily', 'Johnson', 'ST002', 'pass456'),
    ('David', 'Miller', 'ST003', 'pass789');

-- Insert test data into 'roster' table
INSERT INTO roster
    (R_date, R_time, staff_members)
VALUES
    ('2023-11-01', '09:00-17:00', 'James Wilson'),
    ('2023-11-02', '10:00-18:00', 'Emily Johnson'),
    ('2023-11-03', '08:00-16:00', 'David Miller');

-- Insert test data into 'services' table
INSERT INTO services
    (services_no, service_date, service_time)
VALUES
    ('SV001', '2023-11-05', '14:00'),
    ('SV002', '2023-11-06', '10:00'),
    ('SV003', '2023-11-07', '09:00');



