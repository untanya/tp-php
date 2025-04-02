<?php
require_once '../models/Data.php';

echo "==== TEST DATA BASE ====\n";

$data = new Data('../data/example.json');
$data->setData([
    ['id' => 1, 'name' => 'Test']
]);

print_r($data->getData());
