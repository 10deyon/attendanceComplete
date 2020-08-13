<?php
//$filepath = realpath(dirname(__FILE__));
include('config.php');
?>

<?php
class Database{
    /**
     * public $host = DB_HOST;
     * public $user = DB_USERNAME;
     * public $pass = DB_PASSWORD;
     * public $dbname = DB_NAME;
    **/

    public $link;
    public $error;

    public function __construct(){
        //$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        $this->link = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
        if(!$this->link /**mysqli_connect_errno()**/){
            $this->error = "CANNOT CONNECT TO DATABASE".$this->link->connect_error;
            //return false;
            exit;
        }
    }

    /**For registration process**/
    public function regUser($studname, $studroll){

        $sql = "select * from studinfo where name = '$studname' or roll = '$studroll'";

        //checking if the username or email is available in db
        $check = $this -> db ->query($sql) ;
        $count_row = $check -> num_rows;

        //if the username is not in db then insert to the table
        if ($count_row == 0){
            $sql1 = "INSERT INTO studinfo SET name='$studname', roll='$studroll' ";

            $result = mysqli_query($this->db,$sql1) or

            die(mysqli_connect_errno()."Data cannot inserted");

            return $result;
        }
        else {
            return false;
        }
    }

    /**
     * public function select($query){
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    public function insert($query){
        $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($insert_row){
            return $insert_row;
        }else{
            return false;
        }
    }
     **/
}
?>