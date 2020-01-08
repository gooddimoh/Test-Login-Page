-- Create --
CREATE TABLE Users (
    ID int,
    lastname varchar(255),
    firstname varchar(255),
    password varchar(255),
    created current_timestamp
    updated current_timestamp
);
-- Create --

-- Login --
INSERT into users VALUES (lastname, firstname, password, timestamp) WHERE login != email
-- Login --

-- Signup --
SELECT login, password FROM users WHERE login LIKE login and password LIKE password
-- Signup --