CREATE DATABASE IF NOT EXISTS appDB;

CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;
USE appDB;

CREATE TABLE IF NOT EXISTS users (
    ID       INT(11) NOT NULL AUTO_INCREMENT,
    name     VARCHAR(20) CHARACTER SET ascii NOT NULL,
    password VARCHAR(45) CHARACTER SET ascii NOT NULL,
    PRIMARY KEY (ID)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS catalog (
    ID INT(10) NOT NULL AUTO_INCREMENT,
    author VARCHAR(32)  NOT NULL,
    book VARCHAR(128) NOT NULL,
    PRIMARY KEY (ID)
);

INSERT INTO users (name, password)
VALUES ('admin', '{SHA}0DPiKuNIrrVmD8IUCuw1hQxNqZc=');

INSERT INTO catalog (author, book)
VALUES ('Travis Bradberry', 'Emotional Intelligence 2.0');

INSERT INTO catalog (author, book)
VALUES ('Wilkie Collins', 'After Dark');
