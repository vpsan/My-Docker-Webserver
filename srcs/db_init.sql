CREATE DATABASE bhatches_server;
CREATE USER 'bhatches'@'localhost' IDENTIFIED BY 'bhatches_password';
GRANT ALL PRIVILEGES ON bhatches_server.* TO 'bhatches'@'localhost';
FLUSH PRIVILEGES;
