<?php

namespace App\Models;

use App\Models\Description;
use PDO;

class App
{
    // DB stuff
    private $conn;
    private $table = 'apps';

    // Apps Properties
    public $id;
    public $trackName;
    public $sizeBytes;
    public $currency;
    public $price;
    public $ratingCountTot;
    public $ratingCountVer;
    public $userRating;
    public $userRatingVer;
    public $ver;
    public $contRating;
    public $primeGenre;
    public $supDevicesNum;
    public $ipadScUrlsNum;
    public $langNum;
    public $vppLic;
    public $description;


    // Constructor with DB
    public function __construct($db)
    {
        $this->conn = $db;
        $this->description = new Description($db);
    }

    // Get Apps
    public function read()
    {
        // Create query
        $query = "SELECT * FROM " . $this->table;

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    // Get Single App
    public function read_single()
    {
        // Create query
        $query = "SELECT * FROM " . $this->table . " WHERE id = ? ";

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Bind id
        $stmt->bindParam(1, $this->id);

        // Execute query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Set properties
        $this->id = $row['id'];
        $this->trackName = $row['track_name'];
        $this->sizeBytes = $row['size_bytes'];
        $this->currency = $row['currency'];
        $this->price = $row['price'];
        $this->ratingCountTot = $row['rating_count_tot'];
        $this->ratingCountVer = $row['rating_count_ver'];
        $this->userRating = $row['user_rating'];
        $this->userRatingVer = $row['user_rating_ver'];
        $this->ver = $row['ver'];
        $this->contRating = $row['cont_rating'];
        $this->primeGenre = $row['prime_genre'];
        $this->supDevicesNum = $row['sup_devicesnum'];
        $this->ipadScUrlsNum = $row['ipadSc_urlsnum'];
        $this->langNum = $row['langnum'];
        $this->vppLic = $row['vpp_lic'];

        // Set App Name Of review
        $this->description->id = $this->id;
        $this->description = $this->description->get_description();
    }

    // Serach item
    public function find($item)
    {
        // Create query
        $query = "SELECT * FROM  " . $this->table . "  WHERE `track_name` LIKE :keywords OR `prime_genre`  LIKE :keywords";

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        $stmt->bindValue(':keywords', '%' . $item . '%', PDO::PARAM_STR);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    // Similar apps
    public function find_related_apps($name, $limit)
    {
        // Create query
        $query = "SELECT * FROM  " . $this->table . "  WHERE `prime_genre` = :name LIMIT $limit";

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        $stmt->bindValue(':name', $name);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    // Get Categories
    public function find_categories()
    {
        // Create query
        $query = "SELECT DISTINCT `prime_genre` FROM  " . $this->table;

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    // Get Apps by same category name
    public function find_category($name)
    {
        // Create query
        $query = "SELECT * FROM  " . $this->table . "  WHERE `prime_genre` = :name ORDER BY `rating_count_tot`  DESC";

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        $name = strtolower($name);
        $stmt->bindValue(':name', $name);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    // Get Most popular Apps
    public function most_popular_apps($limit)
    {
        // Create query
        $query = "SELECT * FROM  " . $this->table . " ORDER BY `rating_count_tot`  DESC  LIMIT $limit";

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    public function type_apps($type)
    {
        // Create query
        if ($type === 'paid') {
            $query = "SELECT * FROM  " . $this->table . " WHERE `price` <> 0 ORDER BY `rating_count_tot` DESC";
        }else if($type === 'free'){
            $query = "SELECT * FROM  " . $this->table . " WHERE `price` = 0 ORDER BY `rating_count_tot`  DESC";
        }

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

}

