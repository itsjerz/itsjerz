<?php
require 'vendor/autoload.php';
/*$client = new MongoDB\Client();
echo extension_loaded("mongodb")? "MongoDB is Connected": "not loaded"
*/

$collection = (new MongoDB\Client)->mydb->user;
$cursor = $collection->find();
foreach ($cursor as $document) {
    if(!empty($document['name']))
    {
        echo $document['name'], "\n";
    }
    

}

?>