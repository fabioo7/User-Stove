<?php
require_once 'db.php';

class User extends Database {
    public function getUsers() {
        $stmt = $this->connect()->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }

    public function getUserById($id) {
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function addUser($name, $email,$address,$city,$state) {
        $stmt = $this->connect()->prepare("INSERT INTO users (name, email,address,city,state) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email,$address,$city,$state]);
    }

    public function updateUser($name, $email,$address,$city,$state,$id) {
        $stmt = $this->connect()->prepare("UPDATE users SET name = ?, email = ?, address = ?, city = ?, state = ?  WHERE id = ?");
        $stmt->execute([$name, $email,$address,$city,$state, $id]);
    }

    public function deleteUser($id) {
        $stmt = $this->connect()->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
    }


    public function getUsersJson() {
        header('Content-Type: application/json');
        $users = $this->getUsers();
        return json_encode($users);
    }



}
?>
