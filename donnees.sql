INSERT INTO FILM (titre, datesortie, duree, genre )
    VALUES
    ('The Shawshank Redemption', '1994', '142', 'Drame'),
    ('The Godfather', '1972', '175', 'Drame'),
    ('The Dark Knight', '2008', '195', 'Action'),
    ("Schindler's List", '1993', '195', 'Biographie'),
    ('Inception', '2010', '148', 'Science-fiction');

INSERT INTO PERSONNE (nompersonne, prenompersonne, datenaissance)
    VALUES
    ('Robbins', 'Tim', '1958'),
    ('Freeman', 'Morgan', '1937'),
    ('Darabont', 'Frank', '1959'),
    ('Brando', 'Marlon', '1924'),
    ('Al Pacino', '', '1940'),
    ('Ford Coppola', 'Francis', '1939'),
    ('Bale', 'Christian', '1970'),
    ('Ledger', 'Heath', '1979'),
    ('Nolan', 'Christopher', '1970'),
    ('Neeson', 'Liam', '1952'),
    ('Spielberg','Steven', '1946'),
    ('DiCaprio', 'Leonardo', '1974'),

INSERT INTO JOUE (roleact, IDpersonne, IDfilm)
    VALUES
    ('Andy Dufresne', '1', '1'),
    ('Ellis "Red" Redding', '2', '1'),
    ('Vito Corleone', '4', '2'),
    ('Michael Corleone', '5', '2'),
    ('Bruce Wayne / Batman', '7', '3'),
    ('Joker', '8', '3'),
    ('Oskar Schindler', '10', '4'),
    ('Dom Cobb', '12','5');

INSERT INTO CLIENT (nom_client, prenom_client,email)
    VALUES
    ('Guillamet', 'Mael', 'mael.guillamet@icloud.com'),
    ('Rechard', 'Victor', 'victor.rechard@icloud.com'),
    ('Bouchet','Antoine', 'antoine.bouchet@icloud.com'),
    ('Grivaud', 'Chloe', 'chloe.grivaud@icloud.com'),
    ('Lepoivre', 'Thibaut', 'thibaut.lesel@icloud.com');


INSERT INTO SALLE (nomSalle, capacite)
    VALUES
    ('3D', '30'),
    ('4D', '20'),
    ('CL', '50');

INSERT INTO REALISE (IDpersonne, IDfilm)
    VALUES
    ('3','1'),
    ('6','2'),
    ('9','3'),
    ('11','4'),
    ('9','5');

INSERT INTO SEANCE (date_seance, type_seance, langue, prix_billet, IDsalle, IDfilm)
    VALUES
    ('2023-01-02 10:00:00', 'classique', 'VO', '6', '3', '1'),
    ('2023-01-02 13:00:00', '3D', 'VF', '10', '1', '2'),
    ('2023-01-02 16:00:00', '4DX', 'V0', '12', '2', '3'),
    ('2023-01-02 20:00:00', 'classique', 'VF', '6', '3', '4'),
    ('2023-01-03 10:00:00', '3D', 'VO', '10', '1', '5');

INSERT INTO RESERVATION (IDclient, IDseance)
    VALUES
    ('1', '1'),
    ('2','1');










