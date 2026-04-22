<?php
function parseEnvFile($path) {
  if (!file_exists($path)) {
    throw new Exception(".env file not found");
  }

  $vars = [];
  $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

  foreach ($lines as $line) {
    $line = trim($line);

    // Skip comments
    if ($line === '' || str_starts_with($line, '#')) {
      continue;
    }

    // Skip invalid lines
    if (!str_contains($line, '=')) {
      continue;
    }

    // Split only first =
    [$key, $value] = explode('=', $line, 2);

    $key = trim($key);
    $value = trim($value);

    // Remove wrapping quotes
    $value = trim($value, "\"'");

    $vars[$key] = $value;
  }

  return $vars;
}
$ENV = parseEnvFile(__DIR__ . '/.env');
?>