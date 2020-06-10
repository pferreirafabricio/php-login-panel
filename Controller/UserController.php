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
            echo "Error in user register!";
            return 1;
        }
    }
}
