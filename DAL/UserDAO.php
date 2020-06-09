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
                    return 0;
                } else {
                    fclose($fileOpen);
                    return 1;
                }
            } else {
                return 1;
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
