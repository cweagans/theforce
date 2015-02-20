#!/usr/bin/env php
<?php

require_once "vendor/autoload.php";

// Download the PHP manual in JSON format.
echo "Downloading PHP manual...\n";
$file = fopen(__DIR__ . '/data/php.json', 'w+');
$curl = curl_init("http://doc.php.net/downloads/json/php_manual_en.json");
curl_setopt($curl, CURLOPT_TIMEOUT, 50);
curl_setopt($curl, CURLOPT_FILE, $file);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_exec($curl);
curl_close($curl);
fclose($file);
echo "PHP Manual downloaded to " . __DIR__ . "/data/php.json\n";

// Load and parse the PHP manual.
echo "Loading PHP manual data.\n";
$php_symbols = json_decode(file_get_contents(__DIR__ . '/data/php.json'));
echo "Data loaded. " . (memory_get_usage() / 1000) . "kb memory used.\n";

$statements = array();
$builder = new \PhpParser\BuilderFactory();
echo "Generating documentation stubs.\n";
foreach ($php_symbols as $function_name => $data) {
  // If there's a :: in the name, skip it for now.
  if (strpos($function_name, "::")) { continue; }

  $docblock = "\n";
  $docblock .= "/**\n";
  $docblock .= ' * ' . $data->purpose . ".\n";
  $docblock .= " */";

  $node = $builder->function($function_name)
    ->setDocComment($docblock)
    ->getNode();

  $statements[] = $node;
}

$prettyPrinter = new \PhpParser\PrettyPrinter\Standard();

echo "Writing documentation stubs to the data directory.\n";
file_put_contents(__DIR__ . '/data/stdlib.php', $prettyPrinter->prettyPrintFile($statements));

echo "Cleaning up.\n";
unlink(__DIR__ . '/data/php.json');

echo "Done.\n";
