CREATE USER IF NOT EXISTS 'panicmylaravel'@'localhost' IDENTIFIED BY 'password';


CREATE DATABASE IF NOT EXISTS panicmylaravel;

GRANT ALL PRIVILEGES ON panicmylaravel.* TO 'panicmylaravel'@'localhost';

USE panicmylaravel;


CREATE TABLE IF NOT EXISTS cities( id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                                                          name VARCHAR(100),
                                                                               updated_at TIMESTAMP,
                                                                                          created_at TIMESTAMP);


CREATE TABLE IF NOT EXISTS people( id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                                                          name VARCHAR(300),
                                                                               email VARCHAR(100),
                                                                                     city_id INT, updated_at TIMESTAMP,
                                                                                                             created_at TIMESTAMP,
                                  FOREIGN KEY (city_id) REFERENCES cities(id));
