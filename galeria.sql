-- SQL script to set up the galeria database
-- Run this in PHPMyAdmin to create the database and tables

CREATE DATABASE IF NOT EXISTS galeria;
USE galeria;

-- Create characters table
CREATE TABLE characters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    imagen VARCHAR(255) NOT NULL
);

-- Create users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Insert character data
INSERT INTO characters (nombre, descripcion, imagen) VALUES
('Arthur', 'Caballero legendario de la Mesa Redonda, protagonista de Ghosts n Goblins.', 'images.scr/arthur.jpg'),
('Bowser', 'Rey de los Koopas, archienemigo de Mario en el Reino Champiñón.', 'images.scr/bowser.jpg'),
('Crash', 'Bandicoot marsupial aventurero, conocido por sus saltos y giros.', 'images.scr/crash.jpg'),
('Diddy', 'Mono compañero de Donkey Kong, ágil y veloz.', 'images.scr/diddy.jpg'),
('Donkey', 'Kong gorila fuerte y poderoso, rey de la isla DK.', 'images.scr/donkey.jpg'),
('Ezio', 'Asesino maestro de la Orden, protagonista de Assassin\'s Creed.', 'images.scr/ezio.jpg'),
('Ganondorf', 'Rey Gerudo malvado, antagonista principal en The Legend of Zelda.', 'images.scr/ganondorf.jpg'),
('Jill', 'Valentine superviviente en Resident Evil, experta en armas.', 'images.scr/jill.jpg'),
('Kirby', 'Criatura rosada que absorbe poderes, héroe de Dream Land.', 'images.scr/kirby.jpg'),
('Kratos', 'Espartano vengativo, dios de la guerra en God of War.', 'images.scr/kratos.jpg'),
('Leon', 'Kennedy agente especial, luchador contra zombis en Resident Evil.', 'images.scr/leon.jpg'),
('Link', 'Héroe Hyliano, salvador de Hyrule en The Legend of Zelda.', 'images.scr/link.jpg'),
('Luigi', 'Hermano de Mario, fontanero valiente pero miedoso.', 'images.scr/luigi.jpg'),
('Mario', 'Fontanero italiano, ícono de Nintendo y salvador del Reino Champiñón.', 'images.scr/mario.jpg'),
('Samus', 'Cazarecompensas, heroína en Metroid con traje de poder.', 'images.scr/samus.jpg'),
('Snake', 'Soldado de élite, protagonista de Metal Gear Solid.', 'images.scr/snake.jpg'),
('Sonic', 'Erizo azul supersónico, corredor más rápido del mundo.', 'images.scr/sonic.jpg'),
('Spiderman', 'Hombre Araña, superhéroe trepamuros de Marvel.', 'images.scr/spiderman.jpg'),
('Yoshi', 'Dinosaurio amigo de Mario, come frutas y huevos.', 'images.scr/yoshi.jpg'),
('Zelda', 'Princesa sabia de Hyrule, aliada de Link.', 'images.scr/zelda.jpg');

-- Insert admin user (password is hash of 'pass')
INSERT INTO users (username, password) VALUES ('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');