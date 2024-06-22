<?php
try {
    //header('Content-Type: application/json');
    // $db = new PDO('mysql:host=127.0.0.1:3307;dbname=Users_book;charset=utf8', 'root', '');
//    $key = $_GET['key'];


//    $arr_err = array();


//    if ($key == "show") {
        $db = new PDO('mysql:host=127.0.0.1:3306;dbname=Users_book;charset=utf8', 'root', '');
        $tm1 = "select fullname, login, password, email from users_book.users";
        $stms = $db->query($tm1);
        $result = $stms->fetchAll();
        $data = '';

        if ($result){
            foreach ($result as $row){
                $data .= "<tr>
                <td>{$row['fullname']}</td>
                <td>{$row['login']}</td>
                <td>{$row['password']}</td>
                <td>{$row['email']}</td>
            </tr>";
            }
        } else {
            $data .= "<tr><td colspan='5'>No results found</td></tr>";
        }

        echo json_encode(['data' => $data]);
//        echo json_encode($result);
//        $i = 0;
//        while ($row = $result->fetch()) {
//            print_r($i);
//            $arr_err = array($i => array($row['fullname'], $row['$login'], $row['password'], $row['email']));
//
//        }
//    }
    // print_r($arr_err);
    //echo json_encode($arr_err);


} catch (PDOException $e) {
    die("Error: " . $e->getMessage());//Вывести сообщение и прекратить выполнение текущего скрипта
}


?>
