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
    FOREIGN KEY (id_categorie) REFERENCES fi_categorie_objet(id_categorie),
    FOREIGN KEY (id_membre) REFERENCES fi_membre(id_membre)

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
