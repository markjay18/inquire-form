<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

function getFirebaseDatabase() {
// Path to your service account key file
$serviceAccountPath = __DIR__ . '/foo/to-do-22a51-firebase-adminsdk-2m4sh-1522671ba2.json';

// Your Firebase project ID
    $databaseUrl = 'https://to-do-22a51-default-rtdb.firebaseio.com/';

    // Initialize the Firebase factory
    $factory = (new Factory)
        ->withServiceAccount($serviceAccountPath)
        ->withDatabaseUri($databaseUrl); // Set the database URL explicitly

    // Get a reference to the database
    $database = $factory->createDatabase();

    return $database;
}
?>