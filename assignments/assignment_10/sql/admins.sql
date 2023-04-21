DROP TABLE IF EXISTS admins;

CREATE TABLE admins 
(
  id int NOT NULL AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  email varchar(60) NOT NULL UNIQUE,
  password varchar(255) NOT NULL,
  status varchar(5) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

INSERT INTO admins VALUES (1, 'Maryellen Queenan', 'mbbryson@admin.com', 'password', 'admin');
INSERT INTO admins VALUES (2, 'Maryellen Queenan', 'mbbryson@staff.com', 'password', 'staff');
