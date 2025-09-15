CREATE DATABASE travel CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE travel;

CREATE TABLE flights(
  id INT AUTO_INCREMENT PRIMARY KEY,
  departure_city VARCHAR(120),
  arrival_city VARCHAR(120),
  flight_date DATE,
  airline VARCHAR(120),
  duration VARCHAR(20),
  stops INT,
  price_eur INT
);

CREATE TABLE hotels(
  id INT AUTO_INCREMENT PRIMARY KEY,
  city VARCHAR(120),
  name VARCHAR(200),
  stars INT,
  price_eur INT,
  amenities VARCHAR(400)
);

CREATE TABLE bookings(
  id INT AUTO_INCREMENT PRIMARY KEY,
  type ENUM('flight','hotel'),
  item_id INT,
  fullname VARCHAR(200),
  email VARCHAR(200),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO flights VALUES
(1,'Rabat','Paris','2025-10-01','Air Atlas','3h15',0,220),
(2,'Casablanca','Madrid','2025-10-02','Iberia','1h45',0,140);

INSERT INTO hotels VALUES
(1,'Paris','Hôtel Lumière',4,120,'WiFi,Petit-déjeuner'),
(2,'Madrid','Sol y Sombra',3,75,'WiFi,Navette');
