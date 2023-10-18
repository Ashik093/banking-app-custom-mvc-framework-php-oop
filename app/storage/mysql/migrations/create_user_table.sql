CREATE TABLE users(
    id int not null primary key AUTO_INCREMENT,
    firstName varchar(255) not null,
    lastName varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    role varchar(255) not null,
    createdAt timestamp default current_timestamp
);