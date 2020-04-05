# Library-portal


A book management system using PHP and MySQL.

To run the system clone the repository and edit connection.php to your mySQL credentials.

Run the following commands at your mySQL server to make the necessary database


```
CREATE DATABASE IF NOT EXISTS books;
SELECT DATABASE books;

CREATE TABLE `books`.`inrequests` ( `no` INT(50) NOT NULL AUTO_INCREMENT , `ID` INT(255
) NOT NULL , PRIMARY KEY (`no`)) ENGINE = InnoDB;


CREATE TABLE `books`.`outrequests` ( `no` INT(10) NOT NULL AUTO_INCREMENT , `ID` INT(255) NOT NULL , PRIMARY KEY (`no`)) ENGINE = InnoDB;


CREATE TABLE `books`.`booklist` ( `ID` INT(10) NOT NULL AUTO_INCREMENT , `book name` VARCHAR(50) NOT NULL , `availability` VARCHAR(20) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;

INSERT INTO `booklist` (`ID`, `book name`, `availability`) VALUES ('675242', 'harry potter', 'Available');
INSERT INTO `booklist` (`ID`, `book name`, `availability`) VALUES ('432422', 'RK Jain', 'Available');
INSERT INTO `booklist` (`ID`, `book name`, `availability`) VALUES ('434032', 'Hubbard', 'Available');
INSERT INTO `booklist` (`ID`, `book name`, `availability`) VALUES ('190882', 'HC Verma', 'Available');
INSERT INTO `booklist` (`ID`, `book name`, `availability`) VALUES ('297522', 'Dictionary', 'Unavailable');
INSERT INTO `booklist` (`ID`, `book name`, `availability`) VALUES ('507432', 'fofhevoe', 'Unavailable');
```
Now, open login.php !!

Note:

Admin Credentials                   
username:   admin                         
password:   baap

User Credentials                    
username:   user                            
password:   baccha


