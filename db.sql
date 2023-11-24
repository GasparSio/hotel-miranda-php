CREATE TABLE IF NOT EXISTS room (
	id INT NOT NULL AUTO_INCREMENT,
	room_number INT NOT NULL,
	room_type VARCHAR(45) NOT NULL,
	description LONGTEXT NOT NULL,
	price INT NOT NULL,
	offer_price BOOLEAN NOT NULL,
	discount INT NOT NULL,
	status VARCHAR(45) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS booking (
	id INT NOT NULL AUTO_INCREMENT,
	guest VARCHAR(255) NOT NULL,
	phone_number VARCHAR(45) NULL,
	email VARCHAR(255) NOT NULL,
	order_date DATE DEFAULT (CURRENT_DATE),
	check_in DATE NULL,
	check_out DATE NULL,
	special_request LONGTEXT NULL,
	status VARCHAR(45) DEFAULT 'Check In',
	room_id INT NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (room_id) REFERENCES room (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS contact (
	id INT NOT NULL AUTO_INCREMENT,
	full_name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	phone_number VARCHAR(45) NOT NULL,
	subject_of_review LONGTEXT NOT NULL,
	review_body LONGTEXT NOT NULL,
	dateTime DATE DEFAULT (CURRENT_DATE),
	status VARCHAR(255) DEFAULT 'Not Archived',
	PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS user (
	id INT NOT NULL AUTO_INCREMENT,
	full_name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	photo VARCHAR(255) NOT NULL,
	start_date DATE NOT NULL,
	description LONGTEXT NOT NULL,
	phone_number VARCHAR(45) NOT NULL,
	status VARCHAR(45) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS photo (
	id INT NOT NULL AUTO_INCREMENT,
	photos VARCHAR(255) NOT NULL,
	room_id INT NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (room_id) REFERENCES room (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS amenity (
	id INT NOT NULL AUTO_INCREMENT,
	amenities VARCHAR(255) NOT NULL,
	PRIMARY KEY (id)
);


CREATE TABLE IF NOT EXISTS amenity_has_room (
	room_id INT NOT NULL,
	amenity_id INT NOT NULL,
	FOREIGN KEY (room_id) REFERENCES room (id) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (amenity_id) REFERENCES amenity (id), 
	PRIMARY KEY (room_id, amenity_id)
);



