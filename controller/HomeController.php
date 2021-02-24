<?php


if (isset($_POST["button"])) {
}

class HomeController extends DBcontext
{
    public $err_invalid = "";
    public $has_error = false;


    function fetchUser()
    {
        $query = "SELECT * FROM users";
        $users = parent::query($query)->fetchAll();
        return $users;
    }

    function createUser()
    {
        $newuser = new UserModel();

        $newuser->set_username("test_name");
        $newuser->set_email("test@email.com");
        $newuser->set_password("Passw@ord123");
        $newuser->set_token("test@email.com");
        $newuser->set_userrole(1);

        echo "username: " . $newuser->get_username();
        echo "<br>";
        echo "email: " . $newuser->get_email();
        echo "<br>";
        echo "password: " . $newuser->get_password();
        echo "<br>";
        echo "token: " . $newuser->get_token();
        echo "<br>";
        echo "role: " . $newuser->get_userrole();
        echo "<br>";
    }
}
