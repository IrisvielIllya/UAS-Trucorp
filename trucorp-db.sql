CREATE DATABASE IF NOT EXISTS Trucorpdb;
USE Trucorpdb;
CREATE TABLE users (

id int,
name varchar(255),
office varchar(255)

);

INSERT INTO users(id, name, office) 
VALUES ('01', 'kenny', 'office1');

INSERT INTO users(id, name, office) 
VALUES ('02', 'prajna', 'office2');

INSERT INTO users(id, name, office) 
VALUES ('03', 'steven', 'office3');

INSERT INTO users(id, name, office) 
VALUES ('04', 'tong', 'office4');

INSERT INTO users(id, name, office) 
VALUES ('05', 'fadhil', 'office5');
