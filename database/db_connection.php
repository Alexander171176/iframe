<?php

namespace Database;

use mysqli;

class Connection extends mysqli
{
    public function __construct($host, $username, $password, $dbname)
    {
        parent::__construct($host, $username, $password, $dbname);

        if ($this->connect_error) {
            die("Connection failed: " . $this->connect_error);
        }

        $this->set_charset("utf8");
    }
}

// Создаем экземпляр подключения
$conn = new Connection("localhost", "root", "", "iframe");
