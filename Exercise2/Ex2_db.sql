
create database Users_book;

use Users_book;

CREATE TABLE Users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname NVARCHAR(50) NOT NULL,
  login NVARCHAR(25) UNIQUE NOT NULL,
  password NVARCHAR(100) NOT NULL,
  email NVARCHAR(50)  NOT NULL
);

use Users_book;
insert into Users(fullname, login, password, email) values('Tom','dima','dima423','dima12dm@gmail.com');
select count(*) from Users