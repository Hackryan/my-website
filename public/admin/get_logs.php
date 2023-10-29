<?php
// Read log file
$logFile = "../Database/logs.txt";
$logContent = file_get_contents($logFile);

// Split log entries
$logEntries = explode(PHP_EOL, $logContent);

// Prepare log data array
$logData = [];

// Iterate through log entries
foreach ($logEntries as $logEntry) {
  $logParts = explode(' | ', $logEntry);
  
  // Skip empty or invalid entries
  if (count($logParts) !== 2) {
    continue;
  }
  
  $title = $logParts[0];
  $description = $logParts[1];
  
  // Add log entry to the log data array
  $logData[] = [
    'title' => $title,
    'description' => $description
  ];
}

// Send log data as JSON response
header('Content-Type: application/json');
echo json_encode($logData);
?>
