<?php
$db_user="root";
$db_pass="";
$db_name="dbproduct";

$db=new PDO('mysql:host=localhost;dbname='.$db_name.';charset-utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

function valid_phone($phone){

	 if(preg_match("#(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)#", $phone)){
	 	 return true;
	  }else{
    	   return false;
    }        	
 
 }

 function testMail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

 function testPassword($password)
{
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        return false;
    }
    return true;
}

 if(isset($_POST)){
                $firstname   =$_POST['firstname'];
                $lastname    =$_POST['lastname'];
                $email       =$_POST['email'];
                $phonenumber =$_POST['phonenumber'];
                $password    =$_POST['password'];

                $pass =  preg_replace('/\s+/', '', $_POST["password"]);
                $log =  preg_replace('/\s+/', '', $_POST["email"]);
                $tel =  preg_replace('/\s+/', '', $_POST["phonenumber"]);  

            if(testPassword($pass)==true && testMail($log, FILTER_VALIDATE_EMAIL)==true && valid_phone($tel)==true){
                $sql="INSERT INTO clients(firstname,lastname,email,phonenumber,password)VALUES(?,?,?,?,?) ";
                $stminsert=$db->prepare($sql);
                $result=$stminsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
                if($result){
                	echo'successfully saved';
                }else{
                	echo'There were errors while saving the data';
                }
            }else{
            	echo'invalid';
            }    
       
}else{
	echo'No data';
}




?>