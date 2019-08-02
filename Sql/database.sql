-- verwijder de database als hij al bestaat
DROP DATABASE IF EXISTS warehouse;

-- maak database aan met naam warehouse
CREATE DATABASE warehouse;

-- maak tabel brand aan met PRIMARY KEY brandId
CREATE TABLE brand(
  brandId int(11) NOT NULL AUTO_INCREMENT,
  brandName varchar(35),
  PRIMARY KEY (brandId)
)ENGINE=InnoDB;

-- maak tabel product aan met PRIMARY KEY productId en FOREIGN KEY brandId die zich aanpast op UPDATE
CREATE TABLE product(
  productId int(11) NOT NULL AUTO_INCREMENT,
  productName varchar(35),
  type varchar(35),
  brandId int(11),
  price decimal(6,2),
  minimumAmountPerPurchase int(11),
  PRIMARY KEY (productId),
  FOREIGN KEY (brandId) REFERENCES brand(brandId) ON UPDATE CASCADE
)ENGINE=InnoDB;

-- maak tabel stock aan met PRIMARY KEY voorraadId en FOREIGN KEY productId die zich aanpast op UPDATE
CREATE TABLE stock(
  stockId int(11) NOT NULL AUTO_INCREMENT,
  productId int(11) NOT NULL,
  currentAmount int(11),
  PRIMARY KEY (stockId),
  FOREIGN KEY (productId) REFERENCES product(productId) ON UPDATE CASCADE
)ENGINE=InnoDB;

-- voer gegevens in tabel brand
INSERT INTO brand(brandName)
  values('Bison'),
  ('Duracell'),
  ('Weidmüller'),
  ('HECO'),
  ('Spax'),
  ('Martens'),
  ('Dresselhaus'),
  ('Infineon Technologies'),
  ('Diotec');

-- voer gegevens in tabel product
INSERT INTO product(productName, type, brandId, price, minimumAmountPerPurchase)
  values('Lijm', 'Extreem klevend', '1', '10.00', '1'),
  ('Batterij', 'Lithium 69v', '2', '4.00', '6'),
  ('Tiewrap', 'Zwart 10cm', '3', '3.50', '10'),
  ('Schroef', 'Plat 10mm', '4', '5.00', '10'),
  ('Schroef', 'Kruis 10mm', '5', '7.00', '10'),
  ('Schroef', 'Plat 15mm', '6', '4.00', '10'),
  ('Schroef', 'Kruis 15mm', '7', '6.00', '10'),
  ('Transistor', 'iets met ohm', '8', '16.00', '5'),
  ('Diode', 'geen idee', '9', '18.00', '5');

-- voer gegevens in tabel stock
INSERT INTO stock(productId, currentAmount)
  values('1', '3'),
  ('2', '4'),
  ('3', '11'),
  ('4', '5'),
  ('5', '7'),
  ('6', '5'),
  ('7', '2'),
  ('8', '8'),
  ('9', '8');
