<?php

namespace Database;

use mysqli;

class Connection extends mysqli
{
    // Сделаем $conn статическим свойством
    private static $conn;

    public function __construct($host, $username, $password, $dbname)
    {
        parent::__construct($host, $username, $password, $dbname);

        if ($this->connect_error) {
            die("Connection failed: " . $this->connect_error);
        }

        $this->set_charset("utf8");

        // Устанавливаем статическое свойство $conn
        self::$conn = $this;
    }

    // Статический метод для получения экземпляра подключения
    public static function getInstance() {
        // Проверяем, было ли установлено соединение
        if (!self::$conn) {
            // Если нет, создаем новый экземпляр
            new self("localhost", "root", "", "iframe");
        }

        return self::$conn;
    }
}

// Создаем экземпляр подключения (необязательно, если не хотите использовать статическое свойство)
//$conn = Connection::getInstance();
