
CREATE DATABASE assad;
USE assad;

CREATE TABLE utilisateur(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    email VARCHAR(50),
    `role` VARCHAR(50),
    isactive BOOLEAN DEFAULT 1, 
    motpasse_hash VARCHAR(100)
);

CREATE TABLE visitesguidees(
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(50),
    dateheure DATETIME DEFAULT CURRENT_TIMESTAMP,
    langue VARCHAR(50),
    capacite_max INT,
    `status` ENUM('admin', 'guide', 'visitor'),
    duree INT,
    prix DECIMAL(10,2)
);

CREATE TABLE etapesvisite(
    id INT AUTO_INCREMENT PRIMARY KEY,
    titreetape VARCHAR(50),
    descriptionetape TEXT,
    ordreetape INT,
    idvisite INT,
    FOREIGN KEY (idvisite) REFERENCES visitesguidees(id) ON DELETE CASCADE
);

CREATE TABLE commentaire(
    id INT AUTO_INCREMENT PRIMARY KEY,
    idvisiteguides INT,
    idutilisateur INT,
    note INT,
    texte TEXT,
    date_commentaire DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idvisiteguides) REFERENCES visitesguidees(id) ON DELETE CASCADE,
    FOREIGN KEY (idutilisateur) REFERENCES utilisateur(id) ON DELETE CASCADE
);

CREATE TABLE reservation(
    id INT AUTO_INCREMENT PRIMARY KEY,
    idvisite INT,
    idutilisateur INT, 
    nbpersonnes INT,
    datereservations DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idutilisateur) REFERENCES utilisateur(id) ON DELETE CASCADE,
    FOREIGN KEY (idvisite) REFERENCES visitesguidees(id) ON DELETE CASCADE
);

CREATE TABLE habitat(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    typeclimat VARCHAR(50),
    `description` TEXT,
    zonezoo VARCHAR(50)
);

CREATE TABLE animal(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    espece VARCHAR(50),
    alimentation VARCHAR(50),
    `image` VARCHAR(100),
    paysorigine VARCHAR(50),
    `description` TEXT,
    id_habitat INT,
    FOREIGN KEY (id_habitat) REFERENCES habitat(id) ON DELETE CASCADE
); 
