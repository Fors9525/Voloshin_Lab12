<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання даних
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : null;
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : null;

    // Збереження даних
    $data = "Name: $name\nEmail: $email\n\n";
    $file = 'submissions.txt';
    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo "Дякуємо, $name! Ваші данні успішно оброблено.";
    } else {
        echo "Сталася помилка.";
    }
} else {
    echo "?";
}
?>
