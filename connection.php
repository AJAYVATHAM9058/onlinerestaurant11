<?php      
    $host = 'localhost';  
    $user = 'root';  
    $password ='';  
    $db_name = 'signup';  
     $name=$pwd=$mail=$no="";
    $con = new mysqli($host, $user, $password, $db_name) or die("NOT FOUND");  
    if($_SERVER['REQUEST_METHOD']==$_POST){
       $name=$_POST["username"];
       $mail=$_POST["email"];
       $pwd=$_POST["psw"];
       $no=$_POST["number"];
       $sql="insert into register(username,email,password,phone) values('$name','$mail','$pwd',$no)";
       if($con->query($sql)===TRUE){
             echo "Executed";
    }else{
              echo "Error:".$con->error;
      }
      
}
?>  