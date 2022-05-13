CREATE TABLE categorie(
    id serial primary key,
    nom varchar(50)
);

INSERT INTO (contenu) VALUES ('Inondations');
INSERT INTO (contenu) VALUES ('Cyclones');
INSERT INTO (contenu) VALUES ('Sécheresse');
INSERT INTO (contenu) VALUES ('Incendies');
INSERT INTO (contenu) VALUES ('Neige');

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
    titre text,
    resume text,
    contenu text,
    url text,
    photo varchar(100),
    FOREIGN KEY(idCategorie) REFERENCES categorie (id),
    FOREIGN KEY(idLieu) REFERENCES lieu (id)
);

INSERT INTO actualite (idCategorie, date, idLieu, titre, resume, contenu, url, photo) VALUES (
    1, 
    '2022-04-24', 
    1, 
    'Nantes. « L’équivalent de trois semaines de précipitations » est tombé pendant l’orage de dimanche', 
    'Nantes a enregistré 48,2 mm de pluie en vingt-quatre heures, après l’épisode orageux qui s’est abattu sur la ville, dimanche 24 avril dans l’après-midi. Une quantité remarquée, mais pas rare selon Météo France', 'Le phénomène a été très localisé sur Nantes, où un violent orage s’est abattu vers 16 h, dimanche 24 avril, mêlant pluie, grêle et foudre. La station automatique Météo France de Nantes-Bouguenais a relevé 48,2 mm de précipitations, tandis que le point suivant était à 15 mm seulement, à Ponchâteau.
    « Sur un mois, on enregistre normalement environ une soixantaine de millimètres, précise Météo France. Dimanche, il est tombé l’équivalent de trois semaines de précipitations ».
    Pour autant, le phénomène n’est pas exceptionnel. « C’est une quantité remarquée, mais ce n’est pas rare sous orage, souligne Météo France. Et les orages ne sont pas rares en mars – avril. » Et d’expliquer : « Ils sont dus à une différence de température. Nous avions de l’air doux accumulé par des températures élevées ces derniers jours, avec de l’air froid en altitude. »',
    'france/nantes-l-equivalent-de-trois-semaines-de-precipitations-est-tombe-pendant-l-orage-de-dimanche',
    'innondation1.jpg');

CREATE TABLE Definition(
    id serial primary key,
    contenu text
);

INSERT INTO definition (contenu) VALUES ('Le réchauffement climatique, appelé également réchauffement planétaire, est un phénomène qui se caractérise par l’augmentation du niveau moyen de la température à la surface de la Terre.');

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

INSERT INTO consequence (contenu) VALUES ('Le niveau de la mer augmente à mesure que les barrières de glace polaire fondent');
INSERT INTO consequence (contenu) VALUES ('Les événements météorologiques et les précipitations extrêmes sont de plus en plus fréquents');
INSERT INTO consequence (contenu) VALUES ('Les épisodes climatiques extrêmes de plus en plus fréquents forcent certaines populations à migrer pour survivre');
INSERT INTO consequence (contenu) VALUES ('Le changement climatique et la perte de terres dues à la montée des eaux, ses impacts sur l’agriculture et la pêche affectant la sécurité alimentaire');
INSERT INTO consequence (contenu) VALUES ('Les épisodes climatiques extrêmes de plus en plus fréquents forcent certaines populations à migrer pour survivre');
INSERT INTO consequence (contenu) VALUES ('Le changement climatique et la perte de terres dues à la montée des eaux, ses impacts sur l’agriculture et la pêche affectant la sécurité alimentaire');


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