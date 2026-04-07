<?php
/**
 * Приём данных формы обратной связи и запись в таблицу feedback.
 * Ожидает POST: name, phone, email, message (поля формы contacts.php).
 */

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$configPath = __DIR__ . '/includes/db_config.php';
if (!is_readable($configPath)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server configuration error']);
    exit;
}

require_once $configPath;

$name = isset($_POST['name']) ? trim((string) $_POST['name']) : '';
$phone = isset($_POST['phone']) ? trim((string) $_POST['phone']) : '';
$email = isset($_POST['email']) ? trim((string) $_POST['email']) : '';
$message = isset($_POST['message']) ? trim((string) $_POST['message']) : '';

if ($name === '' || $phone === '' || $email === '' || $message === '') {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

$limits = [
    'name' => 60,
    'telephone' => 20,
    'email' => 40,
    'message' => 90,
];

if (mb_strlen($name, 'UTF-8') > $limits['name']) {
    echo json_encode(['success' => false, 'message' => 'Name is too long.']);
    exit;
}
if (mb_strlen($phone, 'UTF-8') > $limits['telephone']) {
    echo json_encode(['success' => false, 'message' => 'Phone is too long.']);
    exit;
}
if (mb_strlen($email, 'UTF-8') > $limits['email']) {
    echo json_encode(['success' => false, 'message' => 'Email is too long.']);
    exit;
}
if (mb_strlen($message, 'UTF-8') > $limits['message']) {
    echo json_encode(['success' => false, 'message' => 'Message is too long.']);
    exit;
}

try {
    $dsn = sprintf(
        'mysql:host=%s;dbname=%s;charset=utf8mb4',
        DB_HOST,
        DB_NAME
    );
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    $sql = 'INSERT INTO `feedback` (`name`, `telephone`, `e-mail`, `message`) VALUES (?, ?, ?, ?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $phone, $email, $message]);
    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Could not save your message. Please try again later.']);
}
