<?php
function fileRead($fileName){
    $data = [];
    try {
        $file = fopen($fileName, 'r');
        while($row = fgetcsv($file)){
            $data[] = $row;

        }
    }catch (Exception $exception){
        echo $exception->getMessage();
    } finally {
        return $data;
    }

}
$read = fileRead('data.csv');
var_dump($read);
