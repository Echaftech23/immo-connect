CREATE DATABASE immo_connect ;
use immo_connect;

CREATE TABLE roles
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE locations
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    region VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    avenue VARCHAR(255) NOT NULL
);

CREATE TABLE types
(
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);


CREATE TABLE users
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image VARCHAR(255) Null,
    phone VARCHAR(20),
    rate DECIMAL(5, 2),
    status VARCHAR(50),
    location_id int,
    role_id int ,
    FOREIGN KEY (location_id) REFERENCES locations(id),
    FOREIGN KEY (role_id) REFERENCES roles(id)
);



CREATE TABLE immobiliers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR
(255),
    description VARCHAR
(255),
    price DOUBLE,
    image1 VARCHAR
(255),
    image2 VARCHAR
(255),
    image3 VARCHAR
(255),
    image4 VARCHAR
(255),
    image5 VARCHAR
(255),
    status ENUM
('Active', 'Inactive', 'Sold'), 
    rooms INT,
    flooring_type VARCHAR
(255),
    bathrooms INT,
    location_id INT,
    type_id INT,
    FOREIGN KEY
(location_id) REFERENCES locations
(id),
    FOREIGN KEY
(type_id) REFERENCES types
(id)
);


CREATE TABLE messages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR
(255),
    datePublication DATETIME,
    status ENUM
('Read', 'Unread'), -- Adjust status values as needed
    receiver_id INT,
    sender_id INT,
    FOREIGN KEY
(receiver_id) REFERENCES users
(id),
    FOREIGN KEY
(sender_id) REFERENCES users
(id)
);

CREATE TABLE reply (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR
(255),
    datePublication DATETIME,
    status ENUM
('Read', 'Unread'), -- Adjust status values as needed
    message_id INT,
   FOREIGN KEY 
(message_id) REFERENCES messages
(id)
);

CREATE TABLE commentaires (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR
(255),
    image VARCHAR
(255) Null,
    datePublication DATETIME,
    user_id INT,
    immobilier_id INT,
    FOREIGN KEY
(user_id) REFERENCES users
(id),
    FOREIGN KEY
(immobilier_id) REFERENCES immobiliers
(id)
);


CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    details VARCHAR
(255),
    user_id INT,
    immobilier_id INT,
    FOREIGN KEY
(user_id) REFERENCES users
(id),
    FOREIGN KEY
(immobilier_id) REFERENCES immobiliers
(id)
);

CREATE table saved
(
    user_id int,
    immobilier_id int,

    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (immobilier_id) REFERENCES immobiliers(id)


);
ALTER TABLE immobiliers
ADD COLUMN user_id INT,
ADD FOREIGN KEY (user_id) REFERENCES users(id);