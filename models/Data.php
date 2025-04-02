<?php

class Data {
    private $data;
    private $path;
    private $json;

    public function __construct($path) { 
        $this->path = $path;

        if (file_exists($this->path)) {
            $this->json = file_get_contents($this->path);
            $this->data = json_decode($this->json, true);
        } else {
            $this->data = [];
        }
    }

    public function getData(): array {
        return $this->data;
    }
    

    protected function getNextId() {
        $all = $this->getData();
    
        $maxId = 0;
        foreach ($all as $item) {
            if (isset($item['id']) && $item['id'] > $maxId) {
                $maxId = $item['id'];
            }
        }
    
        return $maxId + 1;
    }

    public function setData(array $data): void {
        $newData = $data;
        unset($newData['id']);
    
        foreach ($this->data as $existing) {
            $existingCopy = $existing;
            unset($existingCopy['id']);
    
            if ($existingCopy == $newData) {
                echo "❌ Doublon détecté (hors id), insertion annulée.<br>";
                return;
            }
        }
    
        $this->data[] = $data;
        $this->json = json_encode($this->data, JSON_PRETTY_PRINT);
        file_put_contents($this->path, $this->json);
    }   
}

?>