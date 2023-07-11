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
insert into utilisateur values(DEFAULT,'Test','test@gmail.com','1234',1);
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
  taille DECIMAL(5,2) NOT NULL,
  dateprofil DATE NOT NULL,
  FOREIGN KEY (idutilisateur) REFERENCES Utilisateur(idutilisateur)
);
INSERT INTO Profil values(DEFAULT,'2','80.0','160.0','2023-07-10');
INSERT INTO Profil values(DEFAULT,'2','80.5','160.0','2023-07-11');


-- Création de la table Regime
CREATE TABLE Regime (
  idregime INT PRIMARY KEY AUTO_INCREMENT,
  idcategorieregime INT,
  montant DECIMAL(12,2) NOT NULL,
  duree INT NOT NULL,
  poids DECIMAL(5,2) NOT NULL,
  FOREIGN KEY (idcategorieregime) REFERENCES Categorieregime(idcategorieregime)
);
INSERT into regime values(DEFAULT,2,30000,30,5);
insert into regime values(DEFAULT,1,25000,15,5);

-- Création de la table RegimeAliment
CREATE TABLE Regimealiment (
  idregimealiment INT PRIMARY KEY AUTO_INCREMENT,
  idaliment INT,
  idregime INT,
  FOREIGN KEY (idaliment) REFERENCES Aliment(idaliment),
  FOREIGN KEY (idregime) REFERENCES Regime(idregime)
);
INSERT into regimealiment(idaliment,idregime) values(3,1);
INSERT into regimealiment(idaliment,idregime) values(1,1);
INSERT into regimealiment(idaliment,idregime) values(8,1);

INSERT into regimealiment(idaliment,idregime) values(5,2);
INSERT into regimealiment(idaliment,idregime) values(1,2);
INSERT into regimealiment(idaliment,idregime) values(8,2);


-- Création de la table RegimeActivité
CREATE TABLE Regimeactivite (
  idregimeactivite INT PRIMARY KEY AUTO_INCREMENT,
  idactivite INT,
  idregime INT,
  FOREIGN KEY (idactivite) REFERENCES Activite(idactivite),
  FOREIGN KEY (idregime) REFERENCES Regime(idregime)
);

INSERT into regimeactivite(idactivite,idregime) values(1,1);
INSERT into regimeactivite(idactivite,idregime) values(2,1);
INSERT into regimeactivite(idactivite,idregime) values(3,1);

INSERT into regimeactivite(idactivite,idregime) values(4,2);
INSERT into regimeactivite(idactivite,idregime) values(5,2);
INSERT into regimeactivite(idactivite,idregime) values(6,2);


-- Création de la table Suggestion
CREATE TABLE Suggestion (
  idsuggestion INT PRIMARY KEY AUTO_INCREMENT,
  idregime INT,
  idprofil INT,
  estpaye INT NOT NULL,
  FOREIGN KEY (idregime) REFERENCES Regime(idregime),
  FOREIGN KEY (idprofil) REFERENCES Profil(idprofil)
);


CREATE TABLE Codeportemonnaie (
    idcodeportemonnaie INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(10) NOT NULL UNIQUE,
    montant DECIMAL(10,2) NOT NULL,
    etat INT NOT NULL
);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('ABC123', 15000.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('DEF456', 18000.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('GHI789', 20000.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('JKL012', 22000.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('MNO345', 25000.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('PQR678', 28000.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('STU901', 15050.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('VWX234', 17500.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('YZA567', 19800.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('BCD890', 22500.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('EFG123', 24000.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('HIJ456', 26500.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('KLM789', 28000.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('NOP012', 30000.0, 0);

INSERT INTO Codeportemonnaie (code, montant, etat)
VALUES ('QRS345', 32000.0, 0);


CREATE TABLE Validationcodeportemonnaie (
    idcodeportemonnaie INT NOT NULL,
    idutilisateur INT NOT NULL,
    datevalidation DATE NOT NULL,
    FOREIGN KEY (idcodeportemonnaie) REFERENCES Codeportemonnaie(idcodeportemonnaie),
    FOREIGN KEY (idutilisateur) REFERENCES Utilisateur(idutilisateur)
);

CREATE TABLE Portemonnaie(
    idcodeportemonnaie INT NOT NULL,
    idutilisateur INT NOT NULL,
    montant DECIMAL(9, 2),
    FOREIGN KEY (idcodeportemonnaie) REFERENCES Codeportemonnaie(idcodeportemonnaie),
    FOREIGN KEY (idutilisateur) REFERENCES Utilisateur(idutilisateur)
);