<?php
class Database {
    private $server = "mysql:host=sql204.infinityfree.com;dbname=if0_40415630_db;charset=utf8mb4";
    private $username = "if0_40415630"; // Updated username
    private $password = "Oa8DAvaEmcByE4q"; // Updated password
    private $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    );
    protected $conn;

    public function open() {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            error_log("Database connection error: " . $e->getMessage() . "\n", 3, __DIR__ . "/error_log.txt");
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function close() {
        $this->conn = null;
    }
}
?>
