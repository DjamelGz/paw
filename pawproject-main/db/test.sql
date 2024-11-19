CREATE DATABASE paw;
USE paw;
CREATE TABLE etudiant (
    matricule INT PRIMARY KEY,
    name VARCHAR(50),
    last_name VARCHAR(50),
    password VARCHAR(50)
);

CREATE TABLE admin (
    id INT PRIMARY KEY, 
    password VARCHAR(50)
);

CREATE TABLE documents (
    id_etud INT, 
    id_admin INT, 
    filename VARCHAR(55) NOT NULL, 
    filetype VARCHAR(55) NOT NULL, 
    status VARCHAR(20), 
    date_de_Depot YEAR,
    data LONGBLOB NOT NULL, 
    PRIMARY KEY (id_etud, id_admin),
    FOREIGN KEY (id_etud) REFERENCES etudiant(matricule), 
    FOREIGN KEY (id_admin) REFERENCES admin(id)
);

