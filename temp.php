<?php

$BASE_PATH = "/var/lib/asterisk/agi-bin/";
require $BASE_PATH . "phpagi.php";

class Asterisk {
    private $manager;

    function __construct($hostname, $username, $password) {
        $astManager = new AGI_AsteriskManager();
        $this->manager = $astManager->connect($hostname, $username, $password);
        if (!$this->manager) {
            throw new Exception("Connection to Manager Failed");
        }
    }

    public function checkExtension($id) {
        $result = $this->manager->ExtensionState("10030");

        print_r($result);

        return $this->manager->ExtensionState((string)$id);
    }
}

$asterisk = new Asterisk("localhost", "originatecall", "ece16c3ada98ed1b22e9e52c559392eb");

$asterisk->checkExtension(10030);
