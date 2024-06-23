CREATE DATABASE Countries_and_Cities;

USE Countries_and_Cities;
 
CREATE TABLE Countries (-- Создание таблицы Countries
  id INT PRIMARY KEY Auto_increment,
  country NVARCHAR(64)
); 

CREATE TABLE Cities (-- Создание таблицы Cities с внешним ключом для связи с таблицей Countries
  id INT PRIMARY KEY Auto_increment,
  city NVARCHAR(64),
  countryid INT,
  FOREIGN KEY (countryid) REFERENCES Countries(id)
);

USE Countries_and_Cities;
INSERT INTO Countries(country) VALUES("Австрия");
INSERT INTO Countries(country) VALUES('Азербайджан');
INSERT INTO Countries(country) VALUES('Алжир');
INSERT INTO Countries(country) VALUES('Ангола');
INSERT INTO Countries(country) VALUES('Бангладеш');
INSERT INTO Countries(country) VALUES('Белиз');
INSERT INTO Countries(country) VALUES('Боливия');
INSERT INTO Countries(country) VALUES('Бурунди');
INSERT INTO Countries(country) VALUES('Гаити');
INSERT INTO Countries(country) VALUES('Германия');

USE Countries_and_Cities;
INSERT INTO Cities(city, countryid) VALUES('Зальцбург','1');
INSERT INTO Cities(city, countryid) VALUES('Инсбрук','1');
INSERT INTO Cities(city, countryid) VALUES('Клагенфурт','1');
INSERT INTO Cities(city, countryid) VALUES('Филлах','1');
INSERT INTO Cities(city, countryid) VALUES('Баку','2');
INSERT INTO Cities(city, countryid) VALUES('Астара','2');
INSERT INTO Cities(city, countryid) VALUES('Бабек','2');
INSERT INTO Cities(city, countryid) VALUES('Геранбой','2');
INSERT INTO Cities(city, countryid) VALUES('Оран','3');
INSERT INTO Cities(city, countryid) VALUES('Константина','3');
INSERT INTO Cities(city, countryid) VALUES('Джельфа','3');
INSERT INTO Cities(city, countryid) VALUES('Батна','3');
INSERT INTO Cities(city, countryid) VALUES('Луанда','4');
INSERT INTO Cities(city, countryid) VALUES('Кабинда','4');
INSERT INTO Cities(city, countryid) VALUES('Уамбо','4');
INSERT INTO Cities(city, countryid) VALUES('Лубанго','4');
INSERT INTO Cities(city, countryid) VALUES('Дакка','5');
INSERT INTO Cities(city, countryid) VALUES('Читтагонг','5');
INSERT INTO Cities(city, countryid) VALUES('Кхулна','5');
INSERT INTO Cities(city, countryid) VALUES('Силхет','5');
INSERT INTO Cities(city, countryid) VALUES('Белиз Сити','6');
INSERT INTO Cities(city, countryid) VALUES('Сан-Игнасио','6');
INSERT INTO Cities(city, countryid) VALUES('Бельмопан','6');
INSERT INTO Cities(city, countryid) VALUES('Дангрига','6');
INSERT INTO Cities(city, countryid) VALUES('Эль-Альто ','7');
INSERT INTO Cities(city, countryid) VALUES('Кочабамба ','7');
INSERT INTO Cities(city, countryid) VALUES('Тариха','7');
INSERT INTO Cities(city, countryid) VALUES('Потоси','7');
INSERT INTO Cities(city, countryid) VALUES('Гитега','8');
INSERT INTO Cities(city, countryid) VALUES('Бужумбура','8');
INSERT INTO Cities(city, countryid) VALUES('Рутана','8');
INSERT INTO Cities(city, countryid) VALUES('Чибитоке','8');
INSERT INTO Cities(city, countryid) VALUES('Веретт','9');
INSERT INTO Cities(city, countryid) VALUES('Дельма','9');
INSERT INTO Cities(city, countryid) VALUES('Леоган','9');
INSERT INTO Cities(city, countryid) VALUES('Мирагоан','9');
INSERT INTO Cities(city, countryid) VALUES('Берлин','10');
INSERT INTO Cities(city, countryid) VALUES('Гамбург','10');
INSERT INTO Cities(city, countryid) VALUES('Мюнхен','10');
INSERT INTO Cities(city, countryid) VALUES('Кёльн','10');