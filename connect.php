<?php 
    class connect {
        public $db = null;
        function __construct () {
            $dsn = "mysql:host=localhost;dbname=test";
            $user = 'root';
            $pass = '';
            $this->db = new PDO($dsn , $user, $pass, 
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
       public function getList ($select){
            $result = $this -> db -> query($select);
            return $result;
        }
        public function getInstance ($select){
            $results = $this -> db -> query($select);
            $result = $results ->fetch();
            return $result;
        }
     
    } 
?>
