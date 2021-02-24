<?php

class AuthController extends DBcontext
{

    static function logout()
    {
        $past = time() - 86400 * 30 * 30;
        foreach ($_COOKIE as $key => $value) {
            setcookie($key, $value, $past, '/');
        }
        $helper = array_keys($_SESSION);
        foreach ($helper as $key) {
            unset($_SESSION[$key]);
        }
        session_destroy();
        header("Location:/");
    }

    static function login($email, $password)
    {
        $password = md5($password);

        $query = "SELECT `token` from `users` WHERE `email`='$email' AND `password`='$password' ";
        $user = parent::query($query)->fetchArray();

        if ($user) {
            $_SESSION["ackqwtoken"] = $user["token"];
            setcookie("ackqwtoken", $user["token"], time() + (86400 * 30 * 30), "/");
            return true;
        } else {
            return false;
        }
    }

    static function CurrentUser()
    {
        $current_user_token = $_COOKIE["ackqwtoken"];

        $query = "SELECT * from `users` WHERE `token` = '$current_user_token' ";

        $current_user = parent::query($query)->fetchArray();

        if (!$current_user) {
            return false;
        }
        return $current_user;
    }
}
