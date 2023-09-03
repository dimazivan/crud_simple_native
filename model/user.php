<?php

include '../config/database.php';
// require_once 'config/database.php';
// include 'config/database.php';
class user
{
    // public $host = "localhost";
    // public $username = "root";
    // public $password = "";
    // public $db = "project_crud";

    public function __construct()
    {
        $initdb = new database();
        // $this->dbhandle = mysqli_connect($this->host, $this->username, $this->password);

        // if (!$this->dbhandle) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }

        // mysqli_select_db($this->dbhandle, $this->db);

        $this->inisiasidb = $initdb->init();
    }

    public function tampil_data()
    {
        $hasil = array();
        // $data = mysqli_query($this->dbhandle, "SELECT * FROM user");
        $data = mysqli_query($this->inisiasidb, "SELECT * FROM user");

        if (!$data) {
            // die("Query failed: " . mysqli_error($this->dbhandle));
            die("Query failed: " . mysqli_error($this->inisiasidb));
        }

        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }

        return $hasil;
    }

    public function input($nama, $alamat, $usia)
    {
        // $data = mysqli_query($this->dbhandle, "insert into user values('','$nama','$alamat','$usia')");
        $data = mysqli_query($this->inisiasidb, "insert into user values('','$nama','$alamat','$usia')");

    }

    public function edit($id)
    {
        // $data = mysqli_query($this->dbhandle, "select * from user where id='$id'");
        $data = mysqli_query($this->inisiasidb, "select * from user where id='$id'");
        while($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    public function update($id, $nama, $alamat, $usia)
    {
        // $data = mysqli_query($this->dbhandle, "update user set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
        $data = mysqli_query($this->inisiasidb, "update user set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
    }


    public function hapus($id)
    {
        // $data = mysqli_query($this->dbhandle, "delete from user where id='$id'");
        $data = mysqli_query($this->inisiasidb, "delete from user where id='$id'");
    }

}
