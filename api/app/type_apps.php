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

$price = isset($_GET['q']) ? $_GET['q'] : die();

// app query
$result = $app->type_apps($price);
// Get row count
$num = $result->rowCount();

// Check if any apps
if ($num > 0) {
    // Post array
    $apps_arr = array();
    // $apps_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        $app_item = array(
            'id' => $row['id'],
            'track_name' => $row['track_name'],
            'size_bytes' => $row['size_bytes'],
            'currency' => $row['currency'],
            'price' => $row['price'],
            'rating_count_tot' => $row['rating_count_tot'],
            'rating_count_ver' => $row['rating_count_ver'],
            'user_rating' => $row['user_rating'],
            'user_rating_ver' => $row['user_rating_ver'],
            'ver' => $row['ver'],
            'cont_rating' => $row['cont_rating'],
            'prime_genre' => $row['prime_genre'],
            'sup_devicesnum' => $row['sup_devicesnum'],
            'ipadSc_urlsnum' => $row['ipadSc_urlsnum'],
            'langnum' => $row['langnum'],
            'vpp_lic' => $row['vpp_lic'],
        );

        // Push to "data"
        array_push($apps_arr, $app_item);
        //array_push($apps_arr['data'], $app_item);
    }

    // Turn to JSON & output
    echo json_encode($apps_arr);

} else {
    // No Posts
    echo json_encode(
        array('message' => 'No Apps Found')
    );
}
