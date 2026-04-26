
CREATE DATABASE cablecar_db;
USE cablecar_db;

CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admin_users (username, password)
VALUES ('admin', MD5('admin123'));

CREATE TABLE system_status (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status ENUM('ON','OFF') NOT NULL DEFAULT 'OFF',
    next_time DATETIME,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO system_status (status, next_time)
VALUES ('OFF', DATE_ADD(NOW(), INTERVAL 1 HOUR));

CREATE TABLE passenger_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
