<?php

class account {
        public function getAccount(){
            $db = new connect();
            $strQuery = "Select * from account";
            $r = $db->getList($strQuery);
            return $r;
        }
        public function deleteAccount($id){
            $db = new connect();
            $strQuery = "Delete from account where id =".$id;
            $r = $db->exec($strQuery);
            return $r;
        }
        public function insert($acc_name,$amount){
            $db = new connect();
            $strQuery = "INSERT INTO account (acc_name, amount)
            VALUES ('".$acc_name."','".$amount."')";
            $r = $db->exec($strQuery);
            return $r;
        }
        public function getOneAcc($id){
            $db = new connect();
            $strQuery = "Select * from account where id=".$id;
            $r = $db->getInstance($strQuery);
            return $r;
        }
        public function update($acc_name,$amount,$id){
            $db = new connect();
            $strQuery = "UPDATE account
            SET acc_name = '$acc_name', amount = '$amount'
            WHERE id=".$id;
            $r = $db->exec($strQuery);
            return $r;
        }
        


}
 ?>