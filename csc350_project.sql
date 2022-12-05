-- CREATE TABLE customer (
--     c_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
--     first_name VARCHAR(50) NOT NULL,
--     last_name VARCHAR(50) NOT NULL,
--     area_code VARCHAR(50) NOT NULL,
--     street VARCHAR(50) NOT NULL,
--     city VARCHAR(50) NOT NULL,
--     state VARCHAR(50) NOT NULL,
--     zip VARCHAR(50) NOT NULL,
--     credit_limit VARCHAR(50) NOT NULL,
--     PRIMARY KEY (c_id)
-- );
-- CREATE TABLE employee (
--     e_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
--     e_first_name VARCHAR(50) NOT NULL,
--     e_last_name VARCHAR(50) NOT NULL,
--     e_area_code VARCHAR(50) NOT NULL,
--     e_street VARCHAR(50) NOT NULL,
--     e_city VARCHAR(50) NOT NULL,
--     e_state VARCHAR(50) NOT NULL,
--     e_zip VARCHAR(50) NOT NULL,
--     PRIMARY KEY (e_id)
-- );
-- CREATE TABLE services (
-- 	request_number VARCHAR (100) NOT NULL,
--     service VARCHAR(50) NOT NULL,
--     estimate VARCHAR(50) NOT NULL,
--     PRIMARY KEY (request_number)
-- );
-- CREATE TABLE supplies (
-- 	request_number VARCHAR (100) REFERENCES services(request_number),
--     e_id MEDIUMINT REFERENCES employee(e_id),
--     PRIMARY KEY (request_number)
-- );
-- CREATE TABLE request_or_complaints (
--     request_number VARCHAR (100) REFERENCES services(request_number),
--     total_amount INT,
--     street VARCHAR(50) REFERENCES customer(street),
--     city VARCHAR(50) REFERENCES customer(city),
--     state VARCHAR(50) REFERENCES customer(state),
--     zip VARCHAR(50) REFERENCES customer(zip),
--     c_id MEDIUMINT REFERENCES customer(c_id),
--     PRIMARY KEY (request_number)
-- );

CREATE TABLE customer (
    c_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    area_code VARCHAR(50) NOT NULL,
    street VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    zip VARCHAR(50) NOT NULL,
    credit_limit VARCHAR(50) NOT NULL,
    PRIMARY KEY (c_id)
);
CREATE TABLE employee (
    e_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    e_first_name VARCHAR(50) NOT NULL,
    e_last_name VARCHAR(50) NOT NULL,
    e_area_code VARCHAR(50) NOT NULL,
    e_street VARCHAR(50) NOT NULL,
    e_city VARCHAR(50) NOT NULL,
    e_state VARCHAR(50) NOT NULL,
    e_zip VARCHAR(50) NOT NULL,
    PRIMARY KEY (e_id)
);
CREATE TABLE services (
	request_number VARCHAR (100) NOT NULL,
    service VARCHAR(300) NOT NULL,
    estimate VARCHAR(100) NOT NULL,
    PRIMARY KEY (request_number)
);
CREATE TABLE supplies (
	request_number VARCHAR (100) REFERENCES services(request_number),
    e_id MEDIUMINT REFERENCES employee(e_id),
    PRIMARY KEY (request_number)
);
CREATE TABLE request_or_complaints (
    request_number VARCHAR (100) REFERENCES services(request_number),
    date DATETIME NOT NULL,
    total_amount INT NOT NULL,
    street VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    zip VARCHAR(50) NOT NULL,
    c_id MEDIUMINT REFERENCES customer(c_id),
    PRIMARY KEY (request_number)
);
