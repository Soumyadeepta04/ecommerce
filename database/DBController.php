<?php

class DBController
{
    public $con = null;

    public function __construct()
    {
        // ✅ Hardcoded credentials for safe connection
        $host = 'localhost';
        $user = 'root';
        $password = '';         // Leave blank for XAMPP default
        $database = 'ecommerce';
        $port = 3307;

        // ✅ Establish the connection
        $this->con = mysqli_connect($host, $user, $password, $database, $port);

        // ✅ Error handling
        if (!$this->con) {
            die("Database connection failed: " . mysqli_connect_error());
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection()
    {
        if ($this->con !== null) {
            mysqli_close($this->con);
            $this->con = null;
        }
    }
}
