<?php
require_once __DIR__ . '/../core/Model.php';

class User extends Model {

    protected $table = 'users';

    // $data = array()
    public function create($data){
        $sql = "INSERT INTO {$this->table} (name, email, password) VALUES (:name,:email, :password)";
        $this->query($sql);

        $this->bind(':name', $data['name']);
        $this->bind(':email', $data['email']);
        $this->bind(':password',password_hash($data['password'], PASSWORD_DEFAULT));

        return $this->execute();
    }

    public function findAll(){
        $sql = "SELECT * FROM {$this->table}";
        $this->query($sql);
        return $this->resultSet();
    }

    public function findByEmail($email){
        $sql = "SELECT * FROM {$this->table} WHERE email = :email LIMIT 1";
        $this->query($sql);
        $this->bind(':email', $email);
        return $this->single();
    }
}