<?php

class User extends Model {

    protected $table = 'users';


    public function create($data){
        $sql = "";

        $this->query($sql);
        $this->bind(':name', $data['name']);

        return $this->execute();
    }
}