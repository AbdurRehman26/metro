<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

class main{

    private $dataReader;

    public function __construct(){
            $request = new HttpRequestData();
            $response = $request->fetchData();
            $this->dataReader = new JsonReader();
            $this->collection = $this->dataReader->read($response);
    }

    public function count_by_price_range(int $from, int $to): int
    {
        echo json_decode($this->collection, true)[0]['offerId'];
        return $from + $to;
    }

    public function count_by_vendor_id(int $id): int
    {
        return $id;
    }
}

$mainClass = new Main();

if (isset($argc)) {
    switch ($argv[1]){
        case 'count_by_price_range':
            if(!empty($argv[2]) && !empty($argv[3]))
                echo $mainClass->count_by_price_range($argv[2], $argv[3]);
            break;
        case 'count_by_vendor_id':
            if(!empty($argv[2]))
                echo $mainClass->count_by_vendor_id($argv[2]);
            break;
        default:
            return;
    }

    echo "\n";
}
else {
    echo "argc and argv disabled\n";
}
