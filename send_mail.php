<?php
/**
 * send_mail.php — Contact form handler
 * Receives POST data, validates, and sends email.
 * Returns JSON response.
 */

header('Content-Type: application/json; charset=UTF-8');

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

require_once 'includes/lang.php';

// Sanitize helper
function sanitize($value) {
    return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
}

function limit_length($value, $max) {
    if (function_exists('mb_substr')) {
        return mb_substr($value, 0, $max, 'UTF-8');
    }

    return substr($value, 0, $max);
}

$name    = sanitize($_POST['name']    ?? '');
$phone   = sanitize($_POST['phone']   ?? '');
$email   = sanitize($_POST['email']   ?? '');
$message = sanitize($_POST['message'] ?? '');
$lang    = in_array($_POST['lang'] ?? 'pl', ['pl', 'uk']) ? $_POST['lang'] : 'pl';

// Match database field limits to avoid insert errors.
$name = limit_length($name, 60);
$phone = limit_length($phone, 20);
$email = limit_length($email, 40);
$message = limit_length($message, 90);

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'name';
}

if (empty($phone)) {
    $errors[] = 'phone';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'email';
}

if (empty($message)) {
    $errors[] = 'message';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => $lang === 'uk'
            ? 'Будь ласка, заповніть всі обов\'язкові поля.'
            : 'Proszę wypełnić wszystkie wymagane pola.',
        'fields'  => $errors,
    ]);
    exit;
}

// Save feedback to MySQL (phpMyAdmin table: feedback).
$dbHost = 'fu615827.mysql.tools';
$dbName = 'fu615827_horbatiukremont';
$dbUser = 'fu615827_horbatiukremont';
$dbPass = 'V3_%yi3hA9';

$mysqli = @new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($mysqli->connect_errno) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $lang === 'uk'
            ? 'Помилка збереження заявки. Будь ласка, зателефонуйте нам.'
            : 'Blad zapisu formularza. Prosze zadzwonic do nas.',
    ]);
    exit;
}

$mysqli->set_charset('utf8mb3');
$stmt = $mysqli->prepare('INSERT INTO `feedback` (`name`, `telephone`, `e-mail`, `message`) VALUES (?, ?, ?, ?)');

if (!$stmt) {
    $mysqli->close();
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $lang === 'uk'
            ? 'Помилка збереження заявки. Будь ласка, зателефонуйте нам.'
            : 'Blad zapisu formularza. Prosze zadzwonic do nas.',
    ]);
    exit;
}

$stmt->bind_param('ssss', $name, $phone, $email, $message);
$saved = $stmt->execute();
$stmt->close();
$mysqli->close();

if (!$saved) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $lang === 'uk'
            ? 'Помилка збереження заявки. Будь ласка, зателефонуйте нам.'
            : 'Blad zapisu formularza. Prosze zadzwonic do nas.',
    ]);
    exit;
}

// Compose email
$to      = 'horbatiukrenovation@gmail.com';
$subject = $lang === 'uk'
    ? 'Нова заявка з сайту — Олександр Горбатюк'
    : 'Nowe zapytanie ze strony — Oleksandr Horbatiuk';

$body  = "==============================\n";
$body .= ($lang === 'uk' ? "Нова заявка з сайту\n" : "Nowe zapytanie ze strony\n");
$body .= "==============================\n\n";
$body .= ($lang === 'uk' ? "Прізвище та ім'я: " : "Nazwisko i imię: ") . $name . "\n";
$body .= ($lang === 'uk' ? "Телефон: " : "Telefon: ") . ($phone ?: '—') . "\n";
$body .= "E-mail: " . $email . "\n\n";
$body .= ($lang === 'uk' ? "Повідомлення:\n" : "Wiadomość:\n");
$body .= $message . "\n\n";
$body .= "==============================\n";
$body .= "Oleksandr Horbatiuk — ul. Morcinska 13/5, 43-100 Tychy\n";

$headers  = "From: noreply@horbatiukrenovation.pl\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = @mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode([
        'success' => true,
        'message' => $lang === 'uk'
            ? 'Дякуємо! Ми зв\'яжемося з вами найближчим часом.'
            : 'Dziękujemy! Odezwiemy się wkrótce.',
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $lang === 'uk'
            ? 'Помилка надсилання. Будь ласка, зателефонуйте нам.'
            : 'Błąd wysyłki. Proszę zadzwonić do nas.',
    ]);
}
exit;
