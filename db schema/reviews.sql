CREATE TABLE missspelt.reviews
(
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    rating int(11) NOT NULL,
    review text NOT NULL,
    approved tinyint(1) DEFAULT '0' NOT NULL
);