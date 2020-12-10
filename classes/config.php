<?php

    class Database {

        private $host = 'localhost';
        private $username = 'root';
        private $password = '123';
        private $dbName = 'car_rental';
        private $charset = 'utf8mb4';

        protected function establishConnection () {

            try {

                $dsn = "mysql:host=" . $this->host .";dbname=" . $this->dbName .";charset=" . $this->charset;
                $pdo = new PDO($dsn, $this->username, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $pdo;

            } catch (PDOExecption $e) {

                echo "Connection failed: " . $e->getMessage();

            }
        }

        public function connect () {

            return $this->establishConnection();
        }
    }