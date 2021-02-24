<?php

class AuthController extends DBcontext
{

    function logout()
    {
        if ($_POST) {
            $past = time() - 86400 * 30 * 30;
            foreach ($_COOKIE as $key => $value) {
                setcookie($key, $value, $past, '/');
            }
            $helper = array_keys($_SESSION);
            foreach ($helper as $key) {
                unset($_SESSION[$key]);
            }
            session_destroy();
            header("Location:" . $GLOBALS["pages_array"]["login"]["slug"]);
        }
    }

    function login($email, $password)
    {
        if (!$password || !$email) {
            return false;
        }

        $password = md5($password);
        $query = "SELECT `token` from `users` WHERE `email`='$email' AND `password`='$password'";
        $user = parent::query($query)->fetchArray();

        if (!$user) {
            return false;
        }

        $_SESSION["ackqwtoken"] = $user["token"];
        setcookie("ackqwtoken", $user["token"], time() + (86400 * 30 * 30), "/");
        return true;
    }

    function CurrentUser()
    {
        $current_user_token = $_COOKIE["ackqwtoken"];
        if (!$current_user_token) {
            return false;
        }
        $query = "SELECT * from `users` WHERE `token` = '$current_user_token' ";

        $current_user = parent::query($query)->fetchArray();

        if (!$current_user) {
            return false;
        }
        return $current_user;
    }
}
