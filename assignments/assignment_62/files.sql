CREATE DATABASE IF NOT EXISTS administrator;   
USE administrator;

CREATE TABLE files (
 file_name           char(100) NOT NULL,
 file_path   	     char(255) NOT NULL,
 entered_file_name   char(255) NOT NULL,
 PRIMARY KEY (entered_file_name)
) ENGINE = InnoDB;




