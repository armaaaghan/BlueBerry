<?php

namespace App\Models;

class Description
{

    // DB stuff
    private $conn;
    private $table = 'description';

    // Description Properties
    public $id;
    public $trackName;
    public $sizeBytes;
    public $appDesc;

    // Constructor with DB
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Get Description
    public function get_description()
    {
        // Create query
        $query = "SELECT * FROM `$this->table` WHERE id = ? ";

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Bind name
        $stmt->bindParam(1, $this->id);

        // Execute query
        $stmt->execute();

        // Get Desriptions
        $row = $stmt->fetch();

        $description = [];
        $description['id'] = $row['id'];
        $description['track_name'] = $row['track_name'];
        $description['size_bytes'] = $row['size_bytes'];
        $description['app_desc'] = $row['app_desc'];

        return $description;
    }

}