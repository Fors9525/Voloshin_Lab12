<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    // Валідація
    if (!preg_match("/^[a-zA-Z\s]*$/", $name)) {
        die("Error: Name must contain only Latin characters and spaces.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

    // обробка
    echo "$name your email ($email) was submitted.";
}
?>
