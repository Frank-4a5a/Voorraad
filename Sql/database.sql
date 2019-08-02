-- verwijder de database als hij al bestaat
DROP DATABASE IF EXISTS voorraad;

-- maak database aan met naam voorraad
CREATE DATABASE voorraad;

-- maak tabel fabrikant aan met PRIMARY KEY fabrikantId
CREATE TABLE merk(
  merkId int(11) NOT NULL AUTO_INCREMENT,
  merkNaam varchar(35),
  PRIMARY KEY (merkId)
)ENGINE=InnoDB;

-- maak tabel product aan met PRIMARY KEY productId en FOREIGN KEY merkId die zich aanpast op UPDATE
CREATE TABLE product(
  productId int(11) NOT NULL AUTO_INCREMENT,
  productNaam varchar(35),
  type varchar(35),
  merkId int(11),
  aankoopprijs decimal(6,2),
  minimumAantalPerAankoop int(11),
  PRIMARY KEY (productId),
  FOREIGN KEY (merkId) REFERENCES merk(merkId) ON UPDATE CASCADE
)ENGINE=InnoDB;

-- maak tabel voorraad aan met PRIMARY KEY productId en FOREIGN KEY productId die zich aanpast op UPDATE
CREATE TABLE voorraad(
  voorraadId int(11) NOT NULL AUTO_INCREMENT,
  productId int(11) NOT NULL,
  aantal int(11),
  PRIMARY KEY (voorraadId),
  FOREIGN KEY (productId) REFERENCES product(productId) ON UPDATE CASCADE
)ENGINE=InnoDB;

-- voer gegevens in tabel merk
INSERT INTO merk(merkNaam)
  values('Bison'),
  ('Duracell'),
  ('Weidmüller'),
  ('HECO'),
  ('Spax'),
  ('Martens'),
  ('Dresselhaus'),
  ('Infineon Technologies'),
  ('Diotec');

INSERT INTO product(productNaam, type, merkId, aankoopprijs, minimumAantalPerAankoop)
  values('Lijm', 'Extreem klevend', '1', '10.00', '1'),
  ('Batterij', 'Lithium 69v', '2', '4.00', '6'),
  ('Tiewrap', 'Zwart 10cm', '3', '3.50', '10'),
  ('Schroef', 'Plat 10mm', '4', '5.00', '10'),
  ('Schroef', 'Kruis 10mm', '5', '7.00', '10'),
  ('Schroef', 'Plat 15mm', '6', '4.00', '10'),
  ('Schroef', 'Kruis 15mm', '7', '6.00', '10'),
  ('Transistor', 'iets met ohm', '8', '16.00', '5'),
  ('Diode', 'geen idee', '9', '18.00', '5');


INSERT INTO voorraad(productId, aantal)
  values('1', '3'),
  ('2', '4'),
  ('3', '11'),
  ('4', '5'),
  ('5', '7'),
  ('6', '5'),
  ('7', '2'),
  ('8', '8'),
  ('9', '8');
