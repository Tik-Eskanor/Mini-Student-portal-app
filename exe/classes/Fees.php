<?php
 class Fees
 {
     private $Db = null;

     public function __construct(Database $Db)
     {        
        $this->Db = $Db;
     }

     public function get_school_fees($programme):array
     {
        $sql = "select * from school_fees where id = :id";
        $stmt = $this->Db->con->prepare($sql);
        $stmt->execute(['id'=>$programme]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result)
        {
          return $result;
        }
        else
        {
          return [];
        }
      
      }

      public function get_other_fees():array
      {
        $stmt = $this->Db->con->query("select * from other_fees");
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

      public function payment($sid,$type,$amount)
      {
          $sql = "insert into payments set s_id = :sid, type=:type, amount = :amount";
          $stmt = $this->Db->con->prepare($sql);
          $stmt->execute(['sid'=>$sid,'type'=>$type,'amount'=>$amount]);
  
          if($stmt)
          {
            return true;
          }
          else
          {
              return false;
          }
      }
     
      public function get_payments($sid,$type):array
      {
         $sql = "select * from payments where s_id = :sid && type = :type";
         $stmt = $this->Db->con->prepare($sql);
         $stmt->execute(['sid'=>$sid,'type'=>$type]);
         $result = $stmt->fetch(PDO::FETCH_ASSOC);
         if($result)
         {
           return $result;
         }
         else
         {
           return [];
         }
       
       }
 
       public function get_payment_history($sid):array
       {
          $sql = "select * from payments where s_id = :sid ";
          $stmt = $this->Db->con->prepare($sql);
          $stmt->execute(['sid'=>$sid]);
          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
          if($result)
          {
            return $result;
          }
          else
          {
            return [];
          }
        
        }
  

}