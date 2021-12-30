<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/App.php';
include_once '../../models/Description.php';

use App\Models\App;
use App\Config\Database;

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate App object
$app = new App($db);

// app query
$result = $app->find_categories();
// Get row count
$num = $result->rowCount();

// Check if any apps
if ($num > 0) {
    // Post array
    //$apps_arr = array();
    $apps_arr['prime_genre'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        array_push($apps_arr['prime_genre'], $row['prime_genre']);
    }

    // Turn to JSON & output
    echo json_encode($apps_arr);

} else {
    // No Posts
    echo json_encode(
        array('message' => 'No Apps Found')
    );
}
