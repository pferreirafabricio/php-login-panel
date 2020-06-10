<?php

require_once("DAL/UserDAO.php");

class UserController
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function Register(User $pUser)
    {
        if (
            strlen($pUser->getName()) > 3 &&
            strpos($pUser->getEmail(), "@") > 0 &&
            strlen($pUser->getPassword()) >= 7
        ) {
            return $this->userDAO->Register($pUser);
        } else {
            return "Please, fill all inputs!";
        }
    }

    public function getUser(string $pUser)
    {
        if (strpos($pUser, "@") > 0 && strpos($pUser, ".") > 0) {
            return $this->userDAO->getUser($pUser);
        } else {
            return "Invalid email!";
        }
    }

    public function Authorization(string $pEmail, string $pPassword)
    {
        if (
            (strpos($pEmail, "@") > 0 && strpos($pEmail, ".") > 0) &&
            (strlen($pPassword) > 0)
        ) {
            return $this->userDAO->Authorization($pEmail, $pPassword);
        } else {
            return null;
        }
    }
}
