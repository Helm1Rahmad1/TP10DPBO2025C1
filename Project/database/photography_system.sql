-- Membuat database untuk sistem jasa fotografi
CREATE DATABASE photography_system;
USE photography_system;

-- Struktur tabel untuk photographer
CREATE TABLE photographer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    specialty VARCHAR(100) NOT NULL
);

-- Struktur tabel untuk client
CREATE TABLE client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    contact VARCHAR(100) NOT NULL
);

-- Struktur tabel untuk photoshoot
CREATE TABLE photoshoot (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    photographer_id INT NOT NULL,
    date DATE NOT NULL,
    location VARCHAR(200) NOT NULL,
    status VARCHAR(50) NOT NULL DEFAULT 'booked',
    FOREIGN KEY (client_id) REFERENCES client(id),
    FOREIGN KEY (photographer_id) REFERENCES photographer(id)
);

-- Data awal untuk pengujian
INSERT INTO photographer (name, specialty) VALUES 
('John Doe', 'Portrait'),
('Jane Smith', 'Landscape'),
('Robert Brown', 'Wedding');

INSERT INTO client (name, contact) VALUES 
('Alice Johnson', '081234567890'),
('Bob Wilson', '089876543210'),
('Carol Williams', '087654321098');

INSERT INTO photoshoot (client_id, photographer_id, date, location, status) VALUES 
(1, 3, '2025-06-15', 'Paradise Garden', 'booked'),
(2, 1, '2025-06-20', 'Metropolitan Studio', 'booked'),
(3, 2, '2025-05-30', 'Mountain View', 'booked');