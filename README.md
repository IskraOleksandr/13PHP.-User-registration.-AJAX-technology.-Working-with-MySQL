13. Регистрация пользователей. Технология AJAX. Работа с СУБД MySQL

Задание 1
Создайте в базе данных две связанные таблицы Countries и
Cities:
Countries
(
id int, //primary key
country varchar(64) //country name
)и
Cities
(
id int, //primary key
city varchar(64), //city name
countryid int //foreign key for relationship with Countries
)
Создайте страницу lists.php, в которой создайте элемент select,
отображающий перечень стран из таблицы Countries.
Средствами AJAX сделайте так, чтобы при выборе страны в
этом элементе select, под ним появлялась таблица (тег table), со-
держащая список городов выбранной страны. Никаких кнопок
на странице быть не должно.

Задание 2
Снова поработаем с регистрацией пользователей 
В этот раз вам надо выполнить такую работу. Вы прекрасно
понимаете, что при регистрации пользователей надо соблюдать
уникальность их описания. В нашем случае надо следить за тем,
чтобы login у каждого пользователя был уникальным. Сейчас вы
делали это непосредственно при записи пользователя в файл или
в базу данных. Однако, такую проверку можно сделать еще до
того, как пользователь нажмет кнопку submit и отправит запол-
ненную форму на сервер. Это можно сделать с помощью AJAX.
Сделайте так, чтобы при заполнении в форме поля login, и еще
до нажатия кнопки submit, создавался AJAX запрос к серверу.
Этот запрос должен пересылать на сервер занесенный в форму
login, проверять его там на уникальность, и в случае нарушения
уникальности, сообщать об этом в форму регистрации
