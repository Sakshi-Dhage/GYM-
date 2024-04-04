<?php
$conn=mysqli_connect('localhost','root','','admin');
if(isset($_POST['registration']) && $_POST['name'] && $_POST['email']&& $_POST['mobile']
            && $_POST['date']&& $_POST['class']  && $_POST['adr'] )
{
   $name  =$_POST['name'];
   $email =$_POST['email'];
   $mobile=$_POST['mobile'];
   $date =$_POST['date'];
   $class   =$_POST['class'];    
   $adr   =$_POST['adr'];
   $query="INSERT INTO `school` VALUE('','$name','$email','$mobile','$date','$class','$adr')";
   $run=mysqli_query($conn,$query);
   ($run)?$r=header("location:home.php"):$r="server not responding...";
   echo $r;
}  
else if(isset($_POST['registration'])){  echo "fill the form...."; }

?>