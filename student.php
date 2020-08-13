<?php
    include('database.php');
?>

<?php
    class Student{
        private $db;

        public function Student(){
            $this->db = new Database();
        }

        public function newStudents(){
            $query = "select * from studentinfo where name = '$studname', roll='$studroll'";
            $result = $this->db->select($query);

            return $result;
        }
    }
?>