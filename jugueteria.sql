CREATE DATABASE jugueteria;
USE jugueteria;

CREATE TABLE juguetes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    genero ENUM('niño', 'niña', 'ambos') NOT NULL
);

INSERT INTO juguetes (nombre, precio, genero) VALUES 
('Balón de Fútbol', 150.00, 'niño'),
('Muñeca Clásica', 200.00, 'niña'),
('Carro de Carreras', 120.50, 'niño'),
('Set de Té', 90.00, 'niña'),
('Juego de Mesa', 250.00, 'ambos');