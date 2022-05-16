/*CREATE TABLE categorie(
    id serial primary key,
    nom varchar(50)
);

INSERT INTO categorie (nom) VALUES ('Inondations');
INSERT INTO categorie (nom) VALUES ('Cyclones');
INSERT INTO categorie (nom) VALUES ('Sécheresse');
INSERT INTO categorie (nom) VALUES ('Incendies');
INSERT INTO categorie (nom) VALUES ('Neige');*/

/*CREATE TABLE lieu(
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
);*/
delete from actualite;

INSERT INTO actualite (idCategorie, date, idLieu, titre, resume, contenu, url, photo) VALUES (
    1, 
    '2022-04-24', 
    1, 
    'Nantes. « L’équivalent de trois semaines de précipitations » est tombé pendant l’orage de dimanche', 
    'Nantes a enregistré 48,2 mm de pluie en vingt-quatre heures, après l’épisode orageux qui s’est abattu sur la ville, dimanche 24 avril dans l’après-midi. Une quantité remarquée, mais pas rare selon Météo France', 'Le phénomène a été très localisé sur Nantes, où un violent orage s’est abattu vers 16 h, dimanche 24 avril, mêlant pluie, grêle et foudre. La station automatique Météo France de Nantes-Bouguenais a relevé 48,2 mm de précipitations, tandis que le point suivant était à 15 mm seulement, à Ponchâteau.
    « Sur un mois, on enregistre normalement environ une soixantaine de millimètres, précise Météo France. Dimanche, il est tombé l’équivalent de trois semaines de précipitations ».
    Pour autant, le phénomène n’est pas exceptionnel. « C’est une quantité remarquée, mais ce n’est pas rare sous orage, souligne Météo France. Et les orages ne sont pas rares en mars – avril. » Et d’expliquer : « Ils sont dus à une différence de température. Nous avions de l’air doux accumulé par des températures élevées ces derniers jours, avec de l’air froid en altitude. »',
    'nantes-l-equivalent-de-trois-semaines-de-precipitations-est-tombe-pendant-l-orage-de-dimanche',
    'innondation1.jpg');


/*CREATE TABLE Login(
    id serial primary key,
    email varchar(50),
    mdp varchar(50)
);

INSERT INTO login (email,mdp) VALUES ('hajaina@gmail.com','hajaina');*/