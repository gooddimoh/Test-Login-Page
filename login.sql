-- Create --
CREATE TABLE Users (
    ID int,
    email varchar(255),
    lastname varchar(255),
    firstname varchar(255),
    password varchar(255),
    created current_timestamp
    update current_timestamp
);
-- Create --

-- Login --
INSERT into users VALUES (lastname, firstname, password, timestamp) WHERE login != email
-- Login --

-- Sign-up --
SELECT login, password FROM users WHERE login LIKE login and password LIKE password
-- Sign-up --