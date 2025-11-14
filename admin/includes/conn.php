<?php
class Database {
    private $server = "mysql:host=sql204.infinityfree.com;dbname=if0_40415630_db";
    private $username = "if0_40415630";
    private $password = "Oa8DAvaEmcByE4q";
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    protected $conn;

    public function open() {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            // Log the error instead of echoing it in production
            error_log("Connection failed: " . $e->getMessage());
            return null; // Return null on failure to allow graceful error handling
        }
    }

    public function close() {
        $this->conn = null;
    }
}

$pdo = new Database();
?>
