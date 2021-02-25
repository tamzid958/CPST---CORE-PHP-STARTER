<?php
class UserController extends DB\DBcontext
{

    function Login()
    {
        if ($_POST) {
            $email = $_POST["email"];
            $pass = $_POST["password"];
            if (!$email || !$pass) {
                header("Location:" . $GLOBALS["pages_array"]["login"]["slug"]);
            } else {
                header("Location:" . $GLOBALS["pages_array"]["dashboard"]["slug"]);
            }
        }
    }
    function Register()
    {
        if ($_POST) {

            $username = $_POST["username"];
            $email = $_POST["email"];
            $pass = $_POST["password"];

            if (!$username || !$email || !$pass) {
                header("Location:" . $GLOBALS["pages_array"]["register"]["slug"]);
            } else {
                $newuser = new UserModel();

                $newuser->set_username($username);
                $newuser->set_email($email);
                $newuser->set_password($pass);
                $newuser->set_token($email);
                $newuser->set_userrole(1);

                $newuser->get_username();
                $newuser->get_email();
                $newuser->get_password();
                $newuser->get_token();
                $newuser->get_userrole();


                header("Location:" . $GLOBALS["pages_array"]["login"]["slug"]);
            }
        }
    }

    function Dashboard()
    {
        $query = "SELECT * FROM users";
        $users = parent::query($query)->fetchAll();
        parent::close();
        return $users;
    }
}
