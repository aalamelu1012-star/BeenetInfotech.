<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php'); exit;
}

function clean($value) {
    return trim(strip_tags((string)$value));
}

$type = clean($_POST['form_type'] ?? 'contact');
$record = [
    'date' => date('Y-m-d H:i:s'),
    'type' => $type,
    'name' => clean($_POST['name'] ?? ''),
    'phone' => clean($_POST['phone'] ?? ''),
    'email' => filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL),
    'service' => clean($_POST['service'] ?? ''),
    'project' => clean($_POST['project'] ?? ''),
    'message' => clean($_POST['message'] ?? '')
];

if ($record['name'] === '' || $record['phone'] === '' || $record['email'] === '' || $record['message'] === '') {
    header('Location: ' . ($type === 'quote' ? 'quote.php' : 'contact.php')); exit;
}

$dataDir = __DIR__ . '/data';
if (!is_dir($dataDir)) @mkdir($dataDir, 0755, true);
$file = $dataDir . '/submissions.csv';
$isNew = !file_exists($file);
$fp = @fopen($file, 'a');
if ($fp) {
    if ($isNew) fputcsv($fp, array_keys($record));
    fputcsv($fp, $record);
    fclose($fp);
}

header('Location: ' . ($type === 'quote' ? 'quote.php?sent=1' : 'contact.php?sent=1'));
exit;
