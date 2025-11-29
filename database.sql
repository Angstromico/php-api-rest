-- Create the database
CREATE DATABASE IF NOT EXISTS product_db;

-- Use the database we just created
USE product_db;

-- Create the products table
CREATE TABLE product (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    size INT NOT NULL DEFAULT 0,
    is_available BOOLEAN NOT NULL DEFAULT FALSE,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;