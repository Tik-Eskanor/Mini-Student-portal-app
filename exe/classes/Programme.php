<?php
 class Programme
 {
     private $name;
     private $Db = null;

     public function __construct(Database $Db, $name = null)
     {        
        $this->Db = $Db;
        $this->name = $name;
     }

     public function get_programmes():array
     {
       $stmt = $this->Db->con->query("select * from programme_type");
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       $row = $stmt->rowCount();
       if($row > 0)
       {
         return $result;
       }
       else
       {
         return [];
       }
 
     }
     
     public function get_programme($id):array
     {
       $sql = "select * from programme_type where id = :id";
       $stmt = $this->Db->con->prepare($sql);
       $stmt->execute(['id'=>$id]);
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       $row = $stmt->rowCount();
       if($row > 0)
       {
         return $result;
       }
       else
       {
         return [];
       }
 
     }
}