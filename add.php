<?php
//if (isset($_POST["add"])) {
header('Content-Type: application/json');
//include("Functions.php");
$db = new PDO('mysql:host=127.0.0.1:3306;dbname=Users_book;charset=utf8', 'root', '');
//if (check(false, $_POST["full_name"], $_POST["login1"], $_POST["pas1"], $_POST["pas2"], $_POST["email1"])) {

$f = $_POST["full_name"];
$l = $_POST["login"];
$p1 = $_POST["pas1"];
$em = $_POST["email"];

$tm = "INSERT INTO users_book.users(fullname, login, password, email) VALUES ('$f','$l','$p1','$em')";
$db->exec($tm);

$temp = array();
$temp[0] = "<span style='color: green;margin-top: 15px'>Пользователь успешно добавлен!!</span>
<script>setTimeout('window.location=document.URL', 1000)</script>";
echo json_encode($temp);
// }

//} ?>