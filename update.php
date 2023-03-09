<?php
// Get the form data
$title = $_POST['title'];
$description = $_POST['description'];
$button_text = $_POST['button_text'];
$button_link = $_POST['button_link'];

// Open the CSV file for reading and writing
$lines = file('data.csv');

// Remove the second line of the file
unset($lines[1]);

// Open the CSV file for writing
$file = fopen('data.csv', 'w');

// Write the updated lines back to the CSV file
foreach ($lines as $line) {
    fwrite($file, $line);
}

// Write the form data to the CSV file
fwrite($file, $title . ',' . $description . ',' . $button_text . ',' . $button_link . "\n");

// Close the CSV file
fclose($file);

// Redirect the user back to the homepage
header('Location: admin.php');
?>
