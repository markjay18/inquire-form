<?php
require __DIR__ . '/bridge.php';

$database = getFirebaseDatabase();

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$pn = $_POST['pn'];
$ea = $_POST['ea'];
$ci = $_POST['ci'];

$newPost = $database->getReference('data')->push([
    'FirstNAme' => $fn,
    'LastName' => $ln,
    'PhoneNumber' => $pn,
    'EmailAdd' => $ea,
    'Inquiries' => $ci
]);

// Optionally, you can check if the operation was successful
if ($newPost->getKey()) {
    // Data pushed successfully
    echo "Data saved successfully";
} else {
    // Error handling
    echo "Error: Connection Die!";
}

?>