<?php
// File: unzip.php

$zipFile   = __DIR__ . '/lidia.zip';   // Path to your zip file
$extractTo = __DIR__ . '/';     // Folder where files will be extracted

$zip = new ZipArchive;

if ($zip->open($zipFile) === TRUE) {
    // Create target folder if not exists
    if (!is_dir($extractTo)) {
        mkdir($extractTo, 0777, true);
    }

    // Extract all files
    $zip->extractTo($extractTo);
    $zip->close();

    echo "✅ Extracted to: $extractTo";
} else {
    echo "❌ Failed to open zip file: $zipFile";
}