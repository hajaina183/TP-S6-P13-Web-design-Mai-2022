CREATE TABLE categorie(
    id serial primary key,
    nom varchar(50)
);

CREATE TABLE lieu(
    id serial primary key,
    nom varchar(50)
);

CREATE TABLE actualite(
    id serial primary key,
    idCategorie int,
    date date,
    idLieu int,
    titre varchar(50),
    resume varchar(255),
    contenu text,
    url varchar(255),
    FOREIGN KEY(idCategorie) REFERENCES categorie (id),
    FOREIGN KEY(idLieu) REFERENCES lieu (id)
);

CREATE TABLE Definition(
    id serial primary key,
    contenu varchar(50)
);

CREATE TABLE Cause(
    id serial primary key,
    contenu varchar(50)
);

CREATE TABLE Consequence(
    id serial primary key,
    contenu varchar(50)
);

CREATE TABLE Solution(
    id serial primary key,
    contenu varchar(50)
);

CREATE TABLE Login(
    id serial primary key,
    email varchar(50),
    mdp varchar(50)
);