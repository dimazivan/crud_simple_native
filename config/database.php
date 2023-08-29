<?php

class database
{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db = "project_crud";

    public function __construct()
    {
        $this->dbhandle = mysqli_connect($this->host, $this->username, $this->password);

        if (!$this->dbhandle) {
            die("Connection failed: " . mysqli_connect_error());
        }

        mysqli_select_db($this->dbhandle, $this->db);
    }

    public function init()
    {
        $init = $this->dbhandle = mysqli_connect($this->host, $this->username, $this->password);

        if (!$this->dbhandle) {
            die("Connection failed: " . mysqli_connect_error());
        }

        mysqli_select_db($this->dbhandle, $this->db);

        return $init;
    }

}
