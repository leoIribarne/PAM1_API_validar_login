<?php
namespace App\Models;

use \PDO;

class DB
{
        private $host = 'localhost';
        private $port = '3306';
        private $user = 'root';
        private $pass = '';
        private $dbname = 'db_realapp';

        public function connect(){
                $conn_str = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname";
                $conn = new PDO($conn_str, $this->user, $this->pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
        }


}

