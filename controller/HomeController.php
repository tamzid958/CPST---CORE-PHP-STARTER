<?php


if (isset($_POST["button"])) {
}

class HomeController extends DB\DBcontext
{
    public $err_invalid = "";
    public $has_error = false;


    function fetchUser()
    {
        $query = "SELECT * FROM users";
        $users = parent::query($query)->fetchAll();
        parent::close();
        return $users;
    }
}
