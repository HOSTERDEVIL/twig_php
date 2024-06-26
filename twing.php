<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('admin-db');

$twig = new \Twig\Environment($loader);

$summary_file = 'admin-db/jsons/summary.json';
$summary_data = file_get_contents($summary_file);
$summary_details = json_decode($summary_data, true); // Summary


$Progress_file = 'admin-db/jsons/Project_Progress_Summary.json';
$Progress_data = file_get_contents($Progress_file);
$Progress_details = json_decode($Progress_data, true); // Progress

$new_data_file = 'admin-db/jsons/Whats_New.json';
$new_data_data = file_get_contents($new_data_file);
$new_data_details = json_decode($new_data_data, true); // Whats_New

$latest_activity_file = 'admin-db/jsons/Latest_Activity.json';
$latest_activity_data = file_get_contents($latest_activity_file);
$latest_activity_details = json_decode($latest_activity_data, true); // Activity

$New_Products_file = 'admin-db/jsons/New_Products.json';
$New_Products_data = file_get_contents($New_Products_file);
$New_Products_details = json_decode($New_Products_data, true); // New Products

echo $twig->render('template.html', 
[
    'summary_details' =>    $summary_details['summary'],
    'progress_details' =>   $Progress_details['project_progress_summary'],
    'what_new_items' =>     $new_data_details['what_new_items'],
    'latest_activity'=>     $latest_activity_details['latest_activity'],
    'new_products'=>     $New_Products_details['new_products']
]);
?>
