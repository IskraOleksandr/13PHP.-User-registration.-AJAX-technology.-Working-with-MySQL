<?php
try {
        $db = new PDO('mysql:host=127.0.0.1:3306;dbname=Users_book;charset=utf8', 'root', '');
        $tm1 = "select fullname, login, password, email from users_book.users";
        $stms = $db->query($tm1);
        $result = $stms->fetchAll();
        $data = '<thead><tr><th>Полное имя</th><th>Логин</th><th>Пароль</th><th>Email</th></tr></thead><tbody>';

        if ($result){
            foreach ($result as $row){
                $data .= "<tr>
                <td class='td_n1'>{$row['fullname']}</td>
                <td class='td_n1'>{$row['login']}</td>
                <td class='td_n1'>{$row['password']}</td>
                <td class='td_n1'>{$row['email']}</td>
            </tr>";
            }
        } else {
            $data .= "<tr><td class='td_n1' colspan='4'>Результатов не найдено</td></tr>";
        }
        $data .= '</tbody>';

        echo json_encode(['data' => $data]);


} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}


?>
