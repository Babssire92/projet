
CREATE TABLE Client (
     id_client INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
     nom VARCHAR(20), 
     prenom VARCHAR(20), 
     email VARCHAR(30), 
     tel VARCHAR(10), 
     adresse VARCHAR(40), 
     cp VARCHAR(5), 
     ville VARCHAR(20)
) ENGINE=InnoDB;  


CREATE TABLE Chambre (
     id_chambre INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
     prix FLOAT(5), 
     nbLits INT(1), 
     superficie INT(3), 
     `description` TEXT, 
     image VARCHAR(30)
) ENGINE=InnoDB; 
          

CREATE TABLE personnel (
     id_personnel INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
     renom VARCHAR(20), 
     login VARCHAR(10), 
     mdp VARCHAR(100), 
     statut VARCHAR(10)
) ENGINE=InnoDB;  


CREATE TABLE Reservation (
     id_client int(10), 
     id_chambre int(10), 
     dateArrivee DATE, 
     dateDepart DATE, 
     PRIMARY KEY (id_client,  id_chambre, dateArrivee),
     FOREIGN KEY (id_client) REFERENCES Client (id_client)
) ENGINE=InnoDB;  

ALTER TABLE Reservation ADD CONSTRAINT FK_Reservation_id_chambre_Chambre FOREIGN KEY (id_chambre) REFERENCES Chambre (id_chambre);