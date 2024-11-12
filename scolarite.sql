CREATE TABLE Enseignent(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    sexe CHAR(1) NOT NULL CHECK(sexe in('H', 'F')),
    email VARCHAR(30) NOT NULL,
    adresse VARCHAR(50) NOT NULL
);

CREATE TABLE Etudiant(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    sexe CHAR(1) NOT NULL CHECK(sexe in('H', 'F'))
);

CREATE TABLE Salle(
    id INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(50) NOT NULL,
    place INTEGER NOT NULL DEFAULT 0
);

CREATE TABLE  Cour(
    id INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(50) NOT NULL,
    niveau VARCHAR(50) NOT NULL,
    idEn INT NOT NULL,
    idSal INT NOT NULL,
    Foreign Key (idEn) REFERENCES Enseignent (id) ON DELETE CASCADE,
    Foreign Key (idSal) REFERENCES Salle (id) ON DELETE CASCADE
);

create table utilisateur(nom varchar(100) not null, 
motpasse varchar(100)not null);
