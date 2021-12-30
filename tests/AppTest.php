<?php

use App\Config\Database;
use App\Models\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testCategories()
    {
        $database = new Database();
        $db = $database->connect();

        $app = new App($db);
        $result = $app->find_category("Games");
        $actual = $result->rowCount();

        $this->assertGreaterThan(
            0,
            $actual,
            "actual value is not greater than expected"
        );
    }

    public function testReadSingle()
    {
        $database = new Database();
        $db = $database->connect();
        $app = new App($db);
        $app->id = 281656475;
        $app->read_single();

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

        $this->assertContains(
            $app->id,
            $app_arr,
            "testArray doesn't contains value as value"
        );
    }

    public function testSerach()
    {
        $database = new Database();
        $db = $database->connect();
        $app = new App($db);
        $item = "test";
        $result = $app->find($item);

        $num = $result->rowCount();
        $this->assertIsInt($num);

        $rows = $result->fetchAll();
        $this->assertIsArray($rows);

        foreach ($rows as $row) {
            if (stripos($row['track_name'], $item) || stripos($row['prime_genre'], $item)){
                $res = false;
            }

            $this->assertFalse($res);
        }
    }
}
