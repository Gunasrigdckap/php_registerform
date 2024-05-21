<?php 

$config = require("../config.php");

class Databaseconnection
{
    public $connection;

    public function __construct($config)
    {
        $this->connection = mysqli_connect($config["host"], $config["username"], $config["password"], $config["database"]);

        if (!$this->connection) {
            echo "Connection failed: " . mysqli_connect_error();
        } else {
            // echo "Connected successfully";
        }
    }

    public function dbConnection()
    {
        return $this->connection;
    }
}

$database = new Databaseconnection($config);
$conn = $database->dbConnection();
?>


