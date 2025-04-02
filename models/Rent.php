<?php

require_once __DIR__ . '/Data.php';

class Rent extends Data {
    public function __construct() {
        parent::__construct('../data/rents.json');
    }

    public function getBooks($filter = []) {
        $all = $this->getData();

        if (empty($filter)) return $all;

        return array_filter($all, function($rent) use ($filter) {
            foreach ($filter as $key => $value) {
                if (!isset($rent[$key]) || stripos($rent[$key], $value) === false) {
                    return false;
                }
            }
            return true;
        });
    }

    public function setBook($data) {
        $data['id'] = $this->getNextId();
        $this->setData($data);
    }
    
}


?>