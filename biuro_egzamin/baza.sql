DROP DATABASE IF EXISTS `biuro`;
CREATE DATABASE `biuro`;
USE `biuro`;

CREATE TABLE `zdjecia` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nazwaPliku TEXT,
    podpis TEXT
);

CREATE TABLE `wycieczki` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    zdjecia_id INT UNSIGNED,
    dataWyjazdu DATE,
    cel TEXT,
    cena DOUBLE,
    dostepna TINYINT(1),
    FOREIGN KEY (zdjecia_id) REFERENCES zdjecia(id)
);

INSERT INTO `zdjecia` VALUES (NULL, 'https://via.assets.so/img.jpg?w=400&h=100&tc=#202020&bg=#e9e9e9', 'zdjecie1'), (NULL, 'https://via.assets.so/img.jpg?w=400&h=100&tc=#202020&bg=#e9e9e9', 'zdjecie2'), (NULL, 'https://via.assets.so/img.jpg?w=400&h=100&tc=#202020&bg=#e9e9e9', 'zdjecie3'), (NULL, 'https://via.assets.so/img.jpg?w=400&h=100&tc=#202020&bg=#e9e9e9', 'zdjecie4'), (NULL, 'https://via.assets.so/img.jpg?w=400&h=100&tc=#202020&bg=#e9e9e9', 'zdjecie5'), (NULL, 'https://via.assets.so/img.jpg?w=400&h=100&tc=#202020&bg=#e9e9e9', 'zdjecie6'), (NULL, 'https://via.assets.so/img.jpg?w=400&h=100&tc=#202020&bg=#e9e9e9', 'zdjecie7'), (NULL, 'https://via.assets.so/img.jpg?w=400&h=100&tc=#202020&bg=#e9e9e9', 'zdjecie8'), (NULL, 'https://via.assets.so/img.jpg?w=400&h=100&tc=#202020&bg=#e9e9e9', 'zdjecie9');
INSERT INTO `wycieczki` VALUES (NULL, 1, '2019-01-01', 'Wakacje', 1000, 1), (NULL, 2, '2019-02-02', 'Wakacje', 2000, 1), (NULL, 3, '2019-03-03', 'Wakacje', 3000, 1), (NULL, 4, '2019-04-04', 'Wakacje', 4000, 1), (NULL, 5, '2019-05-05', 'Wakacje', 5000, 1), (NULL, 6, '2019-06-06', 'Wakacje', 6000, 1), (NULL, 7, '2019-07-07', 'Wakacje', 7000, 1), (NULL, 8, '2019-08-08', 'Wakacje', 8000, 1), (NULL, 9, '2019-09-09', 'Wakacje', 9000, 1);