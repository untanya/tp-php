<?php

require_once __DIR__ . '/Data.php';

class User extends Data {
    private $sessionPath = '../data/session.json';

    public function __construct() {
        parent::__construct('../data/users.json');
    }

    protected function hashPassword(string $password): string {
        return sha1($password);
    }

    protected function verifyPassword(string $password, string $hashed): bool {
        return $this->hashPassword($password) === $hashed;
    }

    public function getUser($filter = []) {
        $all = $this->getData();

        if (empty($filter)) return $all;

        return array_filter($all, function($user) use ($filter) {
            foreach ($filter as $key => $value) {
                if (!isset($user[$key]) || stripos($user[$key], $value) === false) {
                    return false;
                }
            }
            return true;
        });
    }

    public function setUser($data) {
        $data['id'] = $this->getNextId();

        if (isset($data['password'])) {
            $data['password'] = $this->hashPassword($data['password']);
        }

        $this->setData($data);
    }

    public function login(string $name, string $password): bool {
        $users = $this->getUser(['name' => $name]);
        if (empty($users)) return false;

        $user = array_values($users)[0]; // prend le premier qui match

        if ($this->verifyPassword($password, $user['password'])) {
            file_put_contents($this->sessionPath, json_encode($user, JSON_PRETTY_PRINT));
            return true;
        }

        return false;
    }

    public function logout(): void {
        if (file_exists($this->sessionPath)) {
            unlink($this->sessionPath);
        }
    }

    public function getLoggedUser(): ?array {
        if (file_exists($this->sessionPath)) {
            $json = file_get_contents($this->sessionPath);
            return json_decode($json, true);
        }

        return null;
    }
    
}

?>