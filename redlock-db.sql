CREATE DATABASE redlock;

USE redlock;
CREATE TABLE users (
  id INT PRIMARY KEY,
  nama CHAR(50),
  alamat CHAR(100),
  jabatan CHAR(50)

);

INSERT INTO users (id, nama, alamat, jabatan) VALUES 
("001", "Rio", "BSQ", "CEO"),
("002", "Ferdinand", "BSQ", "Manager"),
("003", "Vindi", "BSQ", "Project Manager"),
("004", "Tanius", "BSQ", "Karyawan");