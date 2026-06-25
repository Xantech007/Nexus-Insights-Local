<?php
session_start();
include_once 'conn.php';

$pdo = new Database();

try {

    $page_name = basename($_SERVER['PHP_SELF']);
    $visit_time = date('Y-m-d H:i:s');
    $ip_address = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown UA';

    // Visitor ID
    if (!isset($_COOKIE['visitor_id'])) {
        $visitor_id = bin2hex(random_bytes(16));
        setcookie('visitor_id', $visitor_id, time() + (365*24*60*60), "/");
    } else {
        $visitor_id = $_COOKIE['visitor_id'];
    }

    // Location (safe fallback)
    $location = 'Unknown';

    $user_id = $_SESSION['user'] ?? null;

    // DB connection
    $conn = $pdo->open();

    $sql = "INSERT INTO visitor_logs 
        (visitor_id, page_name, visit_time, location, ip_address, user_id, user_agent) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        exit();
    }

    $ok = $stmt->execute([
        $visitor_id,
        $page_name,
        $visit_time,
        $location,
        $ip_address,
        $user_id,
        $user_agent
    ]);

    if (!$ok) {
        error_log("Insert failed: " . json_encode($stmt->errorInfo()));
    } else {
        error_log("Visitor logged: " . $visitor_id);
    }

    $pdo->close();

} catch (Exception $e) {
    error_log("Visitor logging error: " . $e->getMessage());
}
?>
