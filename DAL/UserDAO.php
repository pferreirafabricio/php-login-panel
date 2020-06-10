<?php
require_once("Model/User.php");

class UserDAO
{
    private $debug = true;
    private $directory = "Files";

    public function getFullDirectory(string $pFileName)
    {
        return $this->directory . "/" . $pFileName;
    }

    public function verifyIfFileExists(string $pFileName)
    {
        $fullDirectory = $this->getFullDirectory($pFileName);

        if (file_exists($fullDirectory))
            return true;
        else
            return false;
    }

    public function register(User $user)
    {
        try {
            $fileName = $user->getEmail() . ".txt";

            if (!$this->verifyIfFileExists($fileName)) {
                $fullDirectory = $this->getFullDirectory($fileName);

                $fileOpen = fopen($fullDirectory, "w");

                $str = "{$user->getName()};{$user->getEmail()};{$user->getPassword()};{$user->getDate()};";

                if (fwrite($fileOpen, $str)) {
                    fclose($fileOpen);
                    return "User succesfully registered!";
                } else {
                    fclose($fileOpen);
                    return "An error occurred while registering the user...";
                }
            } else {
                return "User already registered!";
            }
        } catch (Exception $ex) {
            if ($this->debug) {
                echo $ex->getMessage();
            }
        }
    }

    public function getUser(string $pEmail)
    {
        if ($this->verifyIfFileExists($pEmail)) {
            $directory = $this->getFullDirectory($pEmail);
            $fileOpen = fopen($directory, "r");

            $file = fread($fileOpen, filesize($directory));
            $arrData = explode(";", $file);

            $user = new User();
            $user->setName($arrData[0]);
            $user->setEmail($arrData[1]);
            $user->setPassword($arrData[2]);
            $user->setDate($arrData[3]);

            //var_dump($user);
            fclose($fileOpen);
            return $user;
        } else {
            return null;
        }
    }

    public function Authorization(string $pEmail, string $pPassword)
    {
        $fileName = "{$pEmail}.txt";
        if ($this->verifyIfFileExists($fileName)) {
            $user = $this->getUser($fileName);
            if ($user->getPassword() === md5($pPassword)) {
                return $user;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
}
