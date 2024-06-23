<?php
try {
    header('Content-Type: application/json');
    $db = new PDO('mysql:host=127.0.0.1:3306;dbname=Countries_and_Cities;charset=utf8', 'root', '');

    $countryID = $_POST['ID'];
    $countryID++;

    $cities = $db->query("SELECT * FROM Countries_and_Cities.Cities WHERE countryid = $countryID");
    $count = $cities->rowCount();

    $arr = array();
    if ($count > 0) {
        foreach ($cities as $row) {
            $arr[] = $row['city'];
        }
    } else
        $arr[] = "У этой страны не добавлень города";

    echo json_encode($arr);

} catch (PDOException $e) {
    die("Error: " . $e->getMessage());//Вывести сообщение и прекратить выполнение текущего скрипта
}
?>