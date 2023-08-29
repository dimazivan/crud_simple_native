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

    public function tampil_data()
    {
        $hasil = array();
        $data = mysqli_query($this->dbhandle, "SELECT * FROM user");

        if (!$data) {
            die("Query failed: " . mysqli_error($this->dbhandle));
        }

        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }

        return $hasil;
    }

    public function input($nama, $alamat, $usia)
    {
        $data = mysqli_query($this->dbhandle, "insert into user values('','$nama','$alamat','$usia')");
    }

    public function edit($id)
    {
        $data = mysqli_query($this->dbhandle, "select * from user where id='$id'");
        while($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    public function update($id, $nama, $alamat, $usia)
    {
        $data = mysqli_query($this->dbhandle, "update user set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
    }


    public function hapus($id)
    {
        $data = mysqli_query($this->dbhandle, "delete from user where id='$id'");
    }

}
