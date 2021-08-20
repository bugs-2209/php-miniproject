<?php

class Database {

    const HOST = 'localhost';

    const USERNAME = 'root';

    const PASSWORD = '';

    const DB_NAME = 'php';

    private $connection;

    public function connect() {

        $connection = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);

        mysqli_set_charset($connection, 'utf8');

        if (mysqli_connect_errno() == 0) {
            return $connection;
        }

        return false;
    }
}