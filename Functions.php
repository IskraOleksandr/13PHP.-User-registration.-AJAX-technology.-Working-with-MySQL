<?php
/*function checkz($flag, $full_name, $login, $pas1, $pas2, $email)
{
    $correct = true;
    $arr_err = array();

    if (!preg_match("/^\w(([a-zA-Z' -]{1,80})|([а-яА-ЯЁёІіЇїҐґЄє' -]{1,80}))$/u", $full_name)) {
        $arr_err[1] = "не коректное полное имя!";
        $correct = false;
    } else $arr_err[1] = "";

    if (!preg_match("/^\w[a-zA-Z][a-zA-Z0-9-_.]{1,20}$/", $login)) {
        $arr_err[2] = "не коректный логин!";

        $correct = false;
    } else $arr_err[2] = "";

    if (!checklog($login)) {
        $arr_err[2] = "Логин занят";
        $correct = false;
    } else $arr_err[2] = "";

    if (check_password($pas1)) {
        $arr_err[3] = "He коректный пароль!";
        $correct = false;
    } else $arr_err[3] = "";

    if (check_password($pas2)) {
        $arr_err[4] = "He коректное подтверджение пароля или нe совпадает!";
        $correct = false;
    } else $arr_err[4] = "";


    if (!preg_match("/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/", $email)) {
        $arr_err[5] = "не коректнный email!";
        $correct = false;
    } else $arr_err[5] = "";

    if ($flag)
        $GLOBALS["temp"] = $arr_err;

    return $correct;
}*/
function Check_Messages($full_name, $login, $pas1, $pas2, $email)
{
    $arr_err = array();

    if (!preg_match("/^\w(([a-zA-Z' -]{1,80})|([а-яА-ЯЁёІіЇїҐґЄє' -]{1,80}))$/u", $full_name)) {
        $arr_err[1] = "не коректное полное имя!";
    } else $arr_err[1] = "";

    if (!preg_match("/^\w[a-zA-Z][a-zA-Z0-9-_.]{1,20}$/", $login)) {
        $arr_err[2] = "не коректный логин!";
    } else $arr_err[2] = "";

    if (!checklog($login)) {
        $arr_err[2] = "Логин занят";
    } else $arr_err[2] = "";

    if (check_password($pas1)) {
        $arr_err[3] = "He коректный пароль!";
    } else $arr_err[3] = "";

    if (check_password($pas2)) {
        $arr_err[4] = "He коректное подтверджение пароля или нe совпадает!";
    } else $arr_err[4] = "";


    if (!preg_match("/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/", $email)) {
        $arr_err[5] = "не коректнный email!";
    } else $arr_err[5] = "";

    return $arr_err;
}

function Check($full_name, $login, $pas1, $pas2, $email)
{
    $flag = true;

    if (!preg_match("/^\w(([a-zA-Z' -]{1,80})|([а-яА-ЯЁёІіЇїҐґЄє' -]{1,80}))$/u", $full_name)) {
        $flag = false;
    }


    if (!preg_match("/^\w[a-zA-Z][a-zA-Z0-9-_.]{1,20}$/", $login)) {
        $flag = false;
    }

    if (!checklog($login)) {
        $flag = false;
    }

    if (check_password($pas1)) {
        $flag = false;
    }

    if (check_password($pas2)) {
        $flag = false;
    }

    if (!preg_match("/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/", $email)) {
        $flag = false;
    }

    return $flag;
}

function Check_login($login)
{
    $db = new PDO('mysql:host=127.0.0.1:3306;dbname=Users_book;charset=utf8', 'root', '');
    $tmp = true;
    $res = $db->query("SELECT login FROM users_book.users");

    foreach ($res as $row) {
        if ($row['login'] == $login)
            $tmp = false;
    }

    return $tmp;
}

//-------------------------------------------

function check_password($pas1)
{
    $flag = true;
    if (!(preg_match("/^\D.[^-() \/].*[a-zA-Z]+.*$/", $pas1) && preg_match("/^.{3,10}$/", $pas1))) {
        $flag = false;
    }
    return $flag;
}

?>