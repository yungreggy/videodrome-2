
CREATE TABLE genres (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom_genre VARCHAR(50) NOT NULL
);


CREATE TABLE realisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    prenom VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL
    
);


CREATE TABLE playlist (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom_playlist VARCHAR(100) NOT NULL,
    description TEXT
);


CREATE TABLE films (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL,
    genre INT, 
    annee_de_sortie INT,
    realisateur_id INT,
    resume TEXT,
    pays_d_origine VARCHAR(70),
    poster_local VARCHAR(255),
    poster_url text,
    FOREIGN KEY (genre) REFERENCES genres(id),
    FOREIGN KEY (realisateur_id) REFERENCES realisateurs(id)
);

CREATE TABLE films_playlists (
    film_id INT,
    playlist_id INT,
    PRIMARY KEY (film_id, playlist_id),
    FOREIGN KEY (film_id) REFERENCES films(id),
    FOREIGN KEY (playlist_id) REFERENCES playlist(id)
);

-- Pre-fill genres table
INSERT INTO genres (nom_genre) VALUES
('Action'),
('Animation'),
('Aventure'),
('Biographie'),
('Comédie'),
('Crime'),
('Documentaire'),
('Drame'),
('Famille'),
('Fantastique'),
('Film noir'),
('Guerre'),
('Histoire'),
('Horreur'),
('Musique'),
('Mystère'),
('Romantique'),
('Science-fiction'),
('Sport'),
('Thriller'),
('Western');


INSERT INTO realisateurs (prenom, nom) VALUES
('Steven', 'Spielberg'),
('Luc', 'Besson'),
('John', 'Carpenter'),
('Bob', 'Clark'),
('Georges', 'Franju'),
('George A.', 'Romero'),
('Roman', 'Polanski'),
('William', 'Friedkin'),
('Woody', 'Allen'),
('David', 'Cronenberg'),
('Andrzej', 'Zulawski'),
('Gerald', 'Kargl'),
('John', 'McNaughton'),
('Clive', 'Barker'),
('Adrian', 'Lyne'),
('Mark L.', 'Lester'),
('John', 'Lafia'),
('Frank', 'Henenlotter'),
('Adam', 'Simon'),
('Rob', 'Reiner'),
('Ron', 'Underwood'),
('Tommy Lee', 'Wallace'),
('Wes', 'Craven'),
('Francis Ford', 'Coppola');