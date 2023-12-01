<?php
 class Student
 {
     private $Db = null;
     private $matric_no;
     private $firstname;
     private $lastname;
     private $othername;
     private $email;
     private $pwd;
     private $address;
     private $phone;
     private $gender;
     private $dob;
     private $lga;
     private $state;
     private $programme_type=null;
     private $programme;
     private $course;
     private $kname;
     private $kaddress;
     private $kpnone;
     private $blood_group;
     private $genotype;
     private $challenges;

     public function __construct(Database $Db, 
        $firstname = null,
        $lastname = null,
        $othername = null,
        $email = null,
        $pwd = null,
        $address = null,
        $phone = null,
        $gender = null,
        $dob = null,
        $lga = null,
        $state = null,
        $programme_type=null,
        $programme=null,
        $course=null,
        $kname=null,
        $kaddress=null,
        $kphone=null,
        $blood_group=null,
        $genotype=null,
        $challenges=null
        )
     {        
        $this->Db = $Db;
        $this->matric_no = rand(0,10000000000);
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->othername = $othername;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->address = $address;
        $this->phone = $phone;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->lga = $lga;
        $this->state = $state;
        $this->programme_type = $programme_type;
        $this->programme = $programme;
        $this->course = $course;
        $this->kname = $kname;
        $this->kaddress = $kaddress;
        $this->kphone = $kphone;
        $this->blood_group = $blood_group;
        $this->genotype = $genotype;
        $this->challenges = $challenges;
     }

     private function already_exists():bool
     {
         $sql = "SELECT * FROM student WHERE email = :email";
         $stmt = $this->Db->con->prepare($sql);
         $stmt->execute(['email'=>$this->email]);
         $count = $stmt->rowCount();
         
         $result;
         if($count > 0)
         {
             $result = false;
         }
         else
         {
             $result = true;
         }
         return $result;
     }

     public function student($id):array
     {
         $sql = "SELECT * FROM student WHERE id = :id";
         $stmt = $this->Db->con->prepare($sql);
         $stmt->execute(['id'=>$id]);
         $result= $stmt->fetch(PDO::FETCH_ASSOC);
         $count = $stmt->rowCount();

         if($count > 0)
         {
             return $result;
         }
         else
         {
             return [];
         }
     }


     public function create():bool
    {   
        if(!$this->already_exists())
        {
           $_SESSION['message'] = "Student already exists!";
           header("location:../admission_form.php");
           exit();
        }
        $sql = "insert into student set matric_no = :mn,
        firstname = :fname, lastname = :lname, othername = :oname, email = :email,
        pwd = :pwd, address = :address, phone = :phone, gender = :gender, dob = :dob,
        lga = :lga, state = :state, programme_type = :pt, programme = :p, course = :course,
        kname = :kname, kaddress = :kaddress, kphone = :kphone, blood_group = :bg, genotype = :gt,
        challenges = :challenges
         ";
        $stmt = $this->Db->con->prepare($sql);
        $stmt->execute(['mn'=>$this->matric_no,'fname'=>$this->firstname,'lname'=>$this->lastname,'oname'=>$this->othername,
         'email'=>$this->email,'pwd'=>$this->pwd,'address'=>$this->address,'phone'=>$this->phone,
        'gender'=>$this->gender,'dob'=>$this->dob,'lga'=>$this->lga,'state'=>$this->state,
        'pt'=>$this->programme_type,'p'=>$this->programme,'course'=>$this->course,
        'kname'=>$this->kname,'kaddress'=>$this->kaddress,'kphone'=>$this->kphone,
        'bg'=>$this->blood_group,'gt'=>$this->genotype,'challenges'=>$this->challenges]);

        if($stmt)
        {
          return true;
        }
        else
        {
            return false;
        }
    }

    public function login($email,$pwd):void
    {
        $sql = "SELECT * FROM student WHERE email = :email";
        $stmt = $this->Db->con->prepare($sql);
        $stmt->execute(['email'=>$email]);
        $row_count = $stmt->rowCount();
        if($row_count == 1)
        {
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
           $pwd_db = $row['pwd'];
           // $this->pwd = md5($this->pwd);
           if($pwd == $pwd_db)
           {
            $_SESSION['STUDENT'] = $row['id'];
            $_SESSION['welcome']  = "Welcome";
            header("location:../Dashboard/index.php");
            exit();
           }
           else
           {
               $_SESSION['message']  ="Incorrect Password";
               header("location:../login_form.php");
               exit();         
           }
        }
        else
        {
            $_SESSION['message']  ="Incorrect Email";
            header("location:../login_form.php");
            exit();
        }
    }

    public function update_bio($id,$phone,$address,$kaddress,$bg,$gt,$challenges):bool
    {
        $sql = "update student set phone = :phone, address = :address, kaddress = :kaddress, blood_group = :bg, genotype= :gt, challenges = :challenges where id = :id";
        $stmt = $this->Db->con->prepare($sql);
        $result = $stmt->execute(['phone'=>$phone,'address'=>$address,'kaddress'=>$kaddress, 'bg'=>$bg,'gt'=>$gt, 'challenges'=>$challenges,'id'=>$id]);

        if($result)
        {
          return true;
        }
        else
        {
            return false;
        }
    }
    public function update_password($id,$current,$new):bool
    {
        $sql = "select * from student where pwd = :current && id = :id";
        $stmt = $this->Db->con->prepare($sql);
        $stmt->execute(['id'=>$id,'current'=>$current]);
 
        $row_count = $stmt->rowCount();
 
        if($row_count == 1)
        {
         $sql = "update student set pwd = :new where id = :id";
         $stmt = $this->Db->con->prepare($sql);
         $result = $stmt->execute(['id'=>$id,'new'=>$new]);
         
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }      
        }
        else
        {
            $_SESSION['message']  = "Incorrect Password";
            header("location:../Dashboard/change_password.php");
            exit();
        }
     }
    
}