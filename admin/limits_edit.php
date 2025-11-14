<?php
include 'includes/session.php';

// Only process if form was submitted
if (isset($_POST['edit'])) {
    $id = $_POST['id'] ?? null;
    $min_deposit = $_POST['min_deposit'] ?? null;
    $max_deposit = $_POST['max_deposit'] ?? null;
    $min_withdraw = $_POST['min_withdraw'] ?? null;
    $max_withdraw = $_POST['max_withdraw'] ?? null;

    // Validate required fields
    if (!$id || $min_deposit === null || $max_deposit === null || $min_withdraw === null || $max_withdraw === null) {
        $_SESSION['error'] = 'All fields are required.';
        header('location: investment_plans.php');
        exit();
    }

    $conn = $pdo->open();

    try {
        $stmt = $conn->prepare("UPDATE limits SET 
            min_deposit = :min_deposit, 
            max_deposit = :max_deposit, 
            min_withdraw = :min_withdraw, 
            max_withdraw = :max_withdraw 
            WHERE id = :id");

        $stmt->execute([
            ':min_deposit' => $min_deposit,
            ':max_deposit' => $max_deposit,
            ':min_withdraw' => $min_withdraw,
            ':max_withdraw' => $max_withdraw,
            ':id' => $id
        ]);

        // CRITICAL: Check if any row was actually updated
        if ($stmt->rowCount() > 0) {
            $_SESSION['success'] = 'Limits updated successfully';
        } else {
            // No rows affected — likely wrong ID or no change
            $check = $conn->prepare("SELECT COUNT(*) FROM limits WHERE id = :id");
            $check->execute([':id' => $id]);
            $exists = $check->fetchColumn();

            if ($exists == 0) {
                $_SESSION['error'] = 'Limits row with ID ' . $id . ' not found.';
            } else {
                $_SESSION['warning'] = 'No changes detected (values may be the same).';
            }
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = 'Database error: ' . $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Invalid request. Form not submitted.';
}

header('location: investment_plans.php');
exit();
?>
