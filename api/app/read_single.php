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

// Instantiate app object
$app = new App($db);

// Get ID
$app->id = isset($_GET['q']) ? $_GET['q'] : die();

// Get app
$app->read_single();

// Create array
$app_arr = array(

    'id' => $app->id,
    'track_name' => $app->trackName,
    'size_bytes' => $app->sizeBytes,
    'currency' => $app->currency,
    'price' => $app->price,
    'rating_count_tot' => $app->ratingCountTot,
    'rating_count_ver' => $app->ratingCountVer,
    'user_rating' => $app->userRating,
    'user_rating_ver' => $app->userRatingVer,
    'ver' => $app->ver,
    'cont_rating' => $app->contRating,
    'prime_genre' => $app->primeGenre,
    'sup_devicesnum' => $app->supDevicesNum,
    'ipadSc_urlsnum' => $app->ipadScUrlsNum,
    'langnum' => $app->langNum,
    'vpp_lic' => $app->vppLic,
    'description' => $app->description,
);

// Make JSON
print_r(json_encode($app_arr));