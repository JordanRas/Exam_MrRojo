create database regime;
use regime;

CREATE TABLE Genre(
    idgenre INT PRIMARY KEY AUTO_INCREMENT,
    nomgenre CHARACTER(15) NOT NULL
);

INSERT INTO Genre(nomgenre) VALUES('Homme');
INSERT INTO Genre(nomgenre) VALUES('Femme');

create table utilisateur(
    idutilisateur int primary key not null auto_increment,
    nom varchar(50),
    email varchar(50) unique,
    motdepasse varchar(50),
    genre int,
    FOREIGN KEY (genre) REFERENCES Genre(idgenre)
);
insert into utilisateur values(DEFAULT,'admin','admin@gmail.com','0000',null);

-- Création de la table CategorieRegime
CREATE TABLE Categorieregime (
    idcategorieregime INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL
);

INSERT INTO Categorieregime VALUES (DEFAULT, 'Gain de poids');
INSERT INTO Categorieregime VALUES (DEFAULT, 'Perte de poids');

-- Création de la table Aliment
CREATE TABLE Aliment (
  idaliment INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50) NOT NULL,
  idcategorieregime INT,
  FOREIGN KEY (idcategorieregime) REFERENCES Categorieregime(idcategorieregime)
);
INSERT INTO Aliment (nom, idcategorieregime) VALUES
                                                        ('Riz', 1),
                                                        ('Pomme', 2),
                                                        ('Banane', 1),
                                                        ('Brocoli', 2),
                                                        ('Tacos', 1),
                                                        ('Courgette', 2),
                                                        ('Sandwich', 1),
                                                        ('Salade', 2),
                                                        ('Pizza', 1);

-- Création de la table Activite
CREATE TABLE Activite (
  idactivite INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50) NOT NULL,
  idcategorieregime INT,
  FOREIGN KEY (idcategorieregime) REFERENCES Categorieregime(idcategorieregime)
);

INSERT INTO Activite (nom, idcategorieregime) VALUES
                                                  ('Marche', 2),
                                                  ('Zumba', 2),
                                                  ('Danse', 2),
                                                  ('Haltérophilie', 1),
                                                  ('Repos', 1),
                                                  ('Relaxation', 1),
                                                  ('Escalade', 2);


-- Création de la table Profil
CREATE TABLE Profil (
  idprofil INT PRIMARY KEY AUTO_INCREMENT,
  idutilisateur INT,
  poids DECIMAL(5,2) NOT NULL,
  taille DECIMAL(3,2) NOT NULL,
  dateprofil DATE NOT NULL,
  FOREIGN KEY (idutilisateur) REFERENCES Utilisateur(idutilisateur)
);

-- Création de la table Regime
CREATE TABLE Regime (
  idregime INT PRIMARY KEY AUTO_INCREMENT,
  idcategorieregime INT,
  montant DECIMAL(6,2) NOT NULL,
  duree INT NOT NULL,
  poids DECIMAL(5,2) NOT NULL,
  FOREIGN KEY (idcategorieregime) REFERENCES Categorieregime(idcategorieregime)
);

-- Création de la table RegimeAliment
CREATE TABLE Regimealiment (
  idregimealiment INT PRIMARY KEY AUTO_INCREMENT,
  idaliment INT,
  idregime INT,
  FOREIGN KEY (idaliment) REFERENCES Aliment(idaliment),
  FOREIGN KEY (idregime) REFERENCES Regime(idregime)
);

-- Création de la table RegimeActivité
CREATE TABLE Regimeactivite (
  idregimeactivite INT PRIMARY KEY AUTO_INCREMENT,
  idactivite INT,
  idregime INT,
  FOREIGN KEY (idactivite) REFERENCES Activite(idactivite),
  FOREIGN KEY (idregime) REFERENCES Regime(idregime)
);

-- Création de la table Suggestion
CREATE TABLE Suggestion (
  idsuggestion INT PRIMARY KEY AUTO_INCREMENT,
  idregime INT,
  idprofil INT,
  estpaye INT NOT NULL,
  FOREIGN KEY (idregime) REFERENCES Regime(idregime),
  FOREIGN KEY (idprofil) REFERENCES Profil(idprofil)
);
