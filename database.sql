CREATE DATABASE info;

CREATE TABLE article(
	title 		VARCHAR(30),
	author 		VARCHAR(20),
	description VARCHAR(200),
	content 	TEXT,
	timeline 	INT
);

ALTER TABLE article ADD id int unsigned NOT NULL auto_increment, ADD primary key (id);

