create database final;
use final;
create table fi_membre(
    id_membre int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    naissance DATE,
    genre VARCHAR(10),
    email VARCHAR(50),
    ville VARCHAR(50),
    mdp VARCHAR(50),
    imgprofil VARCHAR(100)
);

create table fi_categorie_objet(
    id_categorie int PRIMARY KEY AUTO_INCREMENT,
    nom_categorie VARCHAR(50)
);

create table fi_objet(
    id_objet int PRIMARY KEY AUTO_INCREMENT,
    nom_objet VARCHAR(50),
    id_categorie int,
    id_membre int,
    FOREIGN KEY (id_categorie) REFERENCES fi_categorie_objet(id_categorie),
    FOREIGN KEY (id_membre) REFERENCES fi_membre(id_membre)

);

create table fi_images_objet(
    id_image int PRIMARY KEY AUTO_INCREMENT,
    id_objet int,
    id_categorie int,
    id_membre int,
    FOREIGN KEY (id_objet) REFERENCES fi_objet(id_objet),
);

create table fi_emprunt(
    id_emprunt int PRIMARY KEY AUTO_INCREMENT,
    id_objet int,
    id_membre int,
    date_emprunt DATE,
    date_retour DATE,
    FOREIGN KEY (id_objet) REFERENCES fi_objet(id_objet),
    FOREIGN KEY (id_membre) REFERENCES fi_membre(id_membre)

);

-- Insertion des membres
INSERT INTO fi_membre (nom, naissance, genre, email, ville, mdp, imgprofil) VALUES
('Alice Dupont', '1990-05-15', 'Femme', 'alice.dupont@example.com', 'Paris', 'password123', 'img/alice.jpg'),
('Bob Martin', '1985-08-22', 'Homme', 'bob.martin@example.com', 'Lyon', 'password123', 'img/bob.jpg'),
('Claire Bernard', '1992-12-30', 'Femme', 'claire.bernard@example.com', 'Marseille', 'password123', 'img/claire.jpg'),
('David Lefevre', '1988-03-10', 'Homme', 'david.lefevre@example.com', 'Toulouse', 'password123', 'img/david.jpg');

-- Insertion des categories
INSERT INTO fi_categorie_objet (nom_categorie) VALUES
('Esthetique'),
('Bricolage'),
('Mecanique'),
('Cuisine');

-- Insertion des objets
-- Objets pour Alice Dupont
INSERT INTO fi_objet (nom_objet, id_categorie, id_membre) VALUES
('Creme hydratante', 1, 1),  -- Esthétique
('Marteau', 2, 1),            -- Bricolage
('Cle a bougie', 3, 1),       -- Mécanique
('Casserole', 4, 1),          -- Cuisine
('Rouge a levres', 1, 1),     -- Esthétique
('Tournevis', 2, 1),          -- Bricolage
('Huile moteur', 3, 1),       -- Mécanique
('Poêle', 4, 1),              -- Cuisine
('Masque facial', 1, 1),       -- Esthétique
('Demonte-pneu', 3, 1);       -- Mécanique

-- Objets pour Bob Martin
INSERT INTO fi_objet (nom_objet, id_categorie, id_membre) VALUES
('Gel douche', 1, 2),         -- Esthétique
('Scie', 2, 2),               -- Bricolage
('Batterie de voiture', 3, 2), -- Mécanique
('Mixeur', 4, 2),             -- Cuisine
('Vernis a ongles', 1, 2),    -- Esthétique
('Pince', 2, 2),              -- Bricolage
('Filtre a huile', 3, 2),     -- Mécanique
('Râpe', 4, 2),               -- Cuisine
('Brosse a cheveux', 1, 2),   -- Esthétique
('Cutter', 2, 2);             -- Bricolage

-- Objets pour Claire Bernard
INSERT INTO fi_objet (nom_objet, id_categorie, id_membre) VALUES
('Lotion corporelle', 1, 3),  -- Esthétique
('Niveau a bulle', 2, 3),     -- Bricolage
('Bougies d’allumage', 3, 3), -- Mécanique
('Tasse a mesurer', 4, 3),    -- Cuisine
('Seche-cheveux', 1, 3),      -- Esthétique
('Metre ruban', 2, 3),        -- Bricolage
('Câbles de demarrage', 3, 3), -- Mécanique
('Moule a gâteau', 4, 3),      -- Cuisine
('Parfum', 1, 3),              -- Esthétique
('Trousse a outils', 2, 3);    -- Bricolage

-- Objets pour David Lefevre
INSERT INTO fi_objet (nom_objet, id_categorie, id_membre) VALUES
('Fouet', 4, 4),              -- Cuisine
('Clé à molette', 2, 4),      -- Bricolage
('Pneu', 3, 4),                -- Mécanique
('Creme solaire', 1, 4),      -- Esthétique
('Planche a decouper', 4, 4),  -- Cuisine
('Clé à bougie', 3, 4),       -- Mécanique
('Spatule', 4, 4),            -- Cuisine
('Démonte-pneu', 3, 4),       -- Mécanique
('Couteau de chef', 4, 4),    -- Cuisine
('Gants de travail', 2, 4);    -- Bricolage

-- Insertion des emprunts
INSERT INTO fi_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES
(1, 2, '2023-10-01', '2023-10-15'), -- Alice's creme hydratante
(2, 3, '2023-10-02', '2023-10-16'), -- Alice's rouge a levres
(3, 4, '2023-10-03', '2023-10-17'), -- Alice's masque facial
(4, 1, '2023-10-04', '2023-10-18'), -- Alice's seche-cheveux
(5, 2, '2023-10-05', '2023-10-19'), -- Alice's vernis a ongles
(6, 3, '2023-10-06', '2023-10-20'), -- Bob's marteau
(7, 4, '2023-10-07', '2023-10-21'), -- Bob's tournevis
(8, 1, '2023-10-08', '2023-10-22'), -- Claire's cle a bougie
(9, 2, '2023-10-09', '2023-10-23'), -- Claire's cle a molette
(10, 3, '2023-10-10', '2023-10-24'); -- David's casserole