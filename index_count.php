<?php
try {
    header('Content-Type: application/json');//
    // $db = new PDO('mysql:host=127.0.0.1:3307;dbname=Users_book;charset=utf8', 'root', '');
    $key = $_POST['key'];// . "не коректное полное имя!"



    $arr_err = array();
    if ($key == "add") {
        $full_name = $_POST["full_name"];
        $login = $_POST["login"];
        $pas1 = $_POST["pas1"];
        $pas2 = $_POST["pas2"];
        $email = $_POST["email"];
        $db = new PDO('mysql:host=127.0.0.1:3306;dbname=Users_book;charset=utf8', 'root', '');
        $tm = "INSERT INTO users_book.users(fullname, login, password, email) VALUES ('$full_name','$login','$pas1','$email')";
        $db->exec($tm);

        $arr_err[0] = "<span style='color: green;margin-top: 15px'>Пользователь успешно добавлен!!</span>
                       <script>setTimeout('window.location=document.URL', 1000)</script>";

    }
    if ($key == "add_users") {

        $arr_err[0] = true;
        include("Functions.php");

        if (!preg_match("/^\w(([a-zA-Z' -]{1,80})|([а-яА-ЯЁёІіЇїҐґЄє' -]{1,80}))$/u", $full_name)) {
            $arr_err[1] = "не коректное полное имя!";
            $arr_err[0] = false;
        } else $arr_err[1] = "<span style='color: green'>✔</span>";

        if (!preg_match("/^\w[a-zA-Z][a-zA-Z0-9-_.]{1,20}$/", $login)) {
            $arr_err[2] = "не коректный логин!";
            $arr_err[0] = false;
        } else {
            if (!Check_login($login)) {
                $arr_err[2] = "Логин занят";
                $arr_err[0] = false;
            } else
                $arr_err[2] = "<span style='color: green'>✔</span>";
        }

        if (!check_password($pas1)) {
            $arr_err[3] = "He коректный пароль!";
            $arr_err[0] = false;
        } else $arr_err[3] = "<span style='color: green'>✔</span>";

        if (!check_password($pas2)) {
            $arr_err[4] = "He коректное подтверджение пароля или нe совпадает!";
            $arr_err[0] = false;
        } else $arr_err[4] = "<span style='color: green'>✔</span>";


        if (!preg_match("/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/", $email)) {
            $arr_err[5] = "не коректнный email!";
            $arr_err[0] = false;
        } else $arr_err[5] = "<span style='color: green'>✔</span>";
    }

//   if ($key == "show") {
//        $db = new PDO('mysql:host=127.0.0.1:3306;dbname=Users_book;charset=utf8', 'root', '');
//        $tm1 = "select fullname, login, password, email from users_book.users";
//        $stms = $db->query($tm1);
//        $result = $stms->fetchAll();
//        if ($result){
//            foreach ($result as $row){
//
//            }
//        }
//        echo json_encode($result);
//        $i = 0;
//        while ($row = $result->fetch()) {
//            print_r($i);
//            $arr_err = array($i => array($row['fullname'], $row['$login'], $row['password'], $row['email']));
//
//        }
//    }
    // print_r($arr_err);
    echo json_encode($arr_err);//


} catch (PDOException $e) {
    die("Error: " . $e->getMessage());//Вывести сообщение и прекратить выполнение текущего скрипта
}


?>
