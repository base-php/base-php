DROP TABLE IF EXISTS users;

CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	photo VARCHAR(256),
	name VARCHAR(256) NOT NULL,
	email VARCHAR(256) NOT NULL UNIQUE,
	password VARCHAR(256) NOT NULL,
	role VARCHAR(256),
	permissions TEXT,
	oauth VARCHAR(256),
	hash VARCHAR(256) NOT NULL,
	date_create DATETIME DEFAULT CURRENT_TIMESTAMP,
	date_update DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO
    users (name, email, password, hash)
VALUES ('Administrator', 'admin@admin.com', MD5('admin'), MD5(id));
