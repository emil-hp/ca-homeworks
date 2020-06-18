<?php

class database {
    public $host = "127.0.0.1";
    public $server = "homestead";
    public $password = "secret";
    public $database = "registration_db";

    function __construct($host, $server, $password, $database) {
        $this->host = $host;
        $this->server = $server;
        $this->password = $password;
        $this->database = $database;
    }

    function connection_db() {
        return mysqli_connect($this->host, $this ->server, $this->password, $this->database);
    }

    function createUser($name, $username, $email, $browser, $created_at) {
        $sql = "INSERT INTO users (firstname, username, email browser, created_at) VALUES ('$name', '$username', '$email', '$browser', '$created_at');"; 
        mysqli_query($this->connection_db(),$sql);
    }
}