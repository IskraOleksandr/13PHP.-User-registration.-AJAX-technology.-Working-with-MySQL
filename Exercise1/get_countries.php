<?php
try {
    header('Content-Type: application/json');
    $db = new PDO("mysql:host=127.0.0.1:3306;dbname=Countries_and_Cities;charset=utf8", "root", "");
    $query = 'SELECT country FROM Countries_and_Cities.Countries';
    $stmt = $db->query($query);
    $count = $stmt->rowCount();

    $arr = array();
    if ($count > 0) {
        foreach ($stmt as $row) {
            $arr[] = $row['country'];
        }
    } else  $arr[] = "Стран нет";

    echo json_encode($arr);

} catch (PDOException $e) {
    die("Error: " . $e->getMessage());//Вывести сообщение и прекратить выполнение текущего скрипта
}
?>