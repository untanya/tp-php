<?php

require_once __DIR__ . '/Data.php';

class Book extends Data {
    public function __construct() {
        parent::__construct('../data/books.json');
    }

    public function getBooks($filter = []) {
        $all = $this->getData();

        if (empty($filter)) return $all;

        return array_filter($all, function($book) use ($filter) {
            foreach ($filter as $key => $value) {
                if (!isset($book[$key]) || stripos($book[$key], $value) === false) {
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

    public function delBook($id) {
        $all = $this->getData();
        $filtered = array_filter($all, function($book) use ($id) {
            return $book['id'] !== $id;
        });
        $this->setData(array_values($filtered)); // reindexation
    }
}

?>