<?php

    class mahasiswa {
        private $host = "localhost";
        private $uname = "root";
        private $pass = "";
        private $db = "db_akademik";

        private function connect() {
            $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
            if (!$conn) {
                echo "Cannot connect to Database";
                die();
            }
            return $conn;
        }

        public function create($nama, $alamat, $umur) {
            $conn = $this->connect();
            $query = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
            
            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
        }

        public function read() {
            $conn = $this->connect();
            $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
            }
            return $rows;
        }

        public function delete($id) {
            $conn = $this->connect();
            $query = "DELETE FROM mahasiswa WHERE id='$id'";

            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
        }
    }
?>