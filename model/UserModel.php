<?php
class UserModel
{
    public string $username; //unique
    public string $email; //unique
    private string $password;
    private string $token; //unique
    public int $userrole;

    function set_username($username)
    {
        $this->username = $username;
    }
    function get_username()
    {
        return $this->username;
    }
    function set_email($email)
    {
        $this->email = $email;
    }
    function get_email()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return $this->email;
    }
    function set_password($password)
    {
        $this->password = $password;
    }
    function get_password()
    {
        $uppercase = preg_match('@[A-Z]@', $this->password);
        $lowercase = preg_match('@[a-z]@', $this->password);
        $number    = preg_match('@[0-9]@', $this->password);
        $specialChars = preg_match('@[^\w]@', $this->password);

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($this->password) < 8) {
            return false;
        }

        $this->password = md5($this->password);
        return $this->password;
    }
    function set_token($token)
    {
        $this->token = $token;
    }
    function get_token()
    {
        $this->token = base64_encode($this->token);
        $this->token = md5($this->token);
        return $this->token;
    }
    function set_userrole($userrole)
    {
        $this->userrole = $userrole;
    }
    function get_userrole()
    {
        return $this->userrole;
    }
}
