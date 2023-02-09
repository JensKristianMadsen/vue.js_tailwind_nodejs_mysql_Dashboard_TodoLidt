import db from "./create-connection.js";

db.query("DROP TABLE IF EXISTS users");

db.query(`CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL  UNIQUE,
    email VARCHAR(60) NOT NULL UNIQUE,
    password VARCHAR(150) NOT NULL
);`);

db.end();
