<?php

class User extends Database {

    protected $connect;

    public function __construct() {

        $this->connect = $this->connect();
    }

    public function login($username, $password) {

        $username = $this->connect->real_escape_string($username);
        $password = $this->connect->real_escape_string($password);
        
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $this->_query($sql);
        return $result;
        
    }

    public function get() {

        $sql = "SELECT * FROM users";

        $result = $this->_query($sql);

        $users = [];

        while ($data = $result->fetch_array()) {
            $users[] = $data;
        }

        return $users;
    }

    public function create($username, $password, $email) {
        $sql = "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";
        $this->_query($sql);
    }
    

    public function edit($id) {

        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = $this->_query($sql);
        $data = $result->fetch_array();
        return $data;

    }

    public function update($username, $email, $id) {

        $sql = "UPDATE users SET username = '$username', email = '$email' WHERE id = '$id'";
        $this->_query($sql);

    }

    public function delete($id) {
        $sql = "DELETE FROM users WHERE id = $id";
        return $this->_query($sql);
    }
    
    private function _query($sql) {

        return mysqli_query($this->connect, $sql);  
    }

}

