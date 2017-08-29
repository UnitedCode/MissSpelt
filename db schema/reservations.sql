CREATE TABLE missspelt.reservations
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    contact_type varchar(50) NOT NULL,
    contact varchar(100) NOT NULL,
    party_members int(11) NOT NULL,
    location varchar(50) NOT NULL,
    date varchar(50) NOT NULL,
    time varchar(50)
);