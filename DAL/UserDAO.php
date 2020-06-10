<?php
require_once("Model/User.php");

class UserDAO
{
    private $debug = true;
    private $directory = "Files";

    public function register(User $user)
    {
        try {
            $fileName = $user->getEmail() . ".txt";

            if (!$this->verifyIfFileExists($fileName)) {
                $fullDirectory = $this->createFullDirectory($fileName);

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

    public function verifyIfFileExists(string $pFileName)
    {
        $fullDirectory = $this->directory . "/" . $pFileName;

        if (file_exists($fullDirectory))
            return true;
        else
            return false;
    }

    public function createFullDirectory(string $pFileName)
    {
        return $this->directory . "/" . $pFileName;
    }
}
