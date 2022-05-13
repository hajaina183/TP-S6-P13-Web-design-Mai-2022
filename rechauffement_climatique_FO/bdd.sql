CREATE TABLE categorie(
    id serial primary key,
    nom varchar(50)
);

INSERT INTO categorie (nom) VALUES ('Inondations');
INSERT INTO categorie (nom) VALUES ('Cyclones');
INSERT INTO categorie (nom) VALUES ('Sécheresse');
INSERT INTO categorie (nom) VALUES ('Incendies');
INSERT INTO categorie (nom) VALUES ('Neige');

CREATE TABLE lieu(
    id serial primary key,
    nom varchar(50)
);

INSERT INTO lieu (nom) VALUES ('France');
INSERT INTO lieu (nom) VALUES ('Madagascar');
INSERT INTO lieu (nom) VALUES ('Chine');

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
    contenu text
);

INSERT INTO definition (contenu) VALUES ('Le réchauffement climatique, appelé également réchauffement planétaire, est un phénomène qui se caractérise par l’augmentation du niveau moyen de la température à la surface de la Terre.')

CREATE TABLE Cause(
    id serial primary key,
    contenu text
);

INSERT INTO cause (contenu) VALUES ('Une partie du rayonnement solaire traverse l’atmosphère');
INSERT INTO cause (contenu) VALUES ('La terre, en absorbant une partie de ce rayonnement, se réchauffe');
INSERT INTO cause (contenu) VALUES ('Les gaz à effet de seere retiennent une partie de la chaleur');

CREATE TABLE Consequence(
    id serial primary key,
    contenu text
);

INSERT INTO Consequence (contenu) VALUES ('Le niveau de la mer augmente à mesure que les barrières de glace polaire fondent');
INSERT INTO Consequence (contenu) VALUES ('Les événements météorologiques et les précipitations extrêmes sont de plus en plus fréquents');
INSERT INTO Consequence (contenu) VALUES ('Les épisodes climatiques extrêmes de plus en plus fréquents forcent certaines populations à migrer pour survivre');
INSERT INTO Consequence (contenu) VALUES ('Le changement climatique et la perte de terres dues à la montée des eaux, ses impacts sur l’agriculture et la pêche affectant la sécurité alimentaire');


CREATE TABLE Solution(
    id serial primary key,
    contenu text
);

INSERT INTO solution (contenu) VALUES ('Limiter le réchauffement climatique, c’est donc adapter son mode de vie à la situation actuelle et agir en conséquence');
INSERT INTO solution (contenu) VALUES ('Réduire ses émissions de gaz à effet de serre est impératif pour lutter contre le réchauffement climatique');
INSERT INTO solution (contenu) VALUES ('Intégrer la thématique du changement climatique et de l’adaptation dans les cursus scolaires');
INSERT INTO solution (contenu) VALUES ('Développer un centre de ressources sur l’adaptation climatique');

CREATE TABLE Login(
    id serial primary key,
    email varchar(50),
    mdp varchar(50)
);

INSERT INTO login (email,mdp) VALUES ('hajaina@gmail.com','hajaina');