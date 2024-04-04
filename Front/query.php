<?php
$conn=mysqli_connect('localhost','root','','gym');
     if(isset($_POST['login']) && $_POST['uname'] && $_POST['pwd']){
         $uname =$_POST['uname'];
         $pwd =$_POST['pwd'];
         $query="SELECT * FROM admin where uname='$uname'";
         $run=mysqli_query($conn,$query);
         $fetch=mysqli_fetch_assoc($run);
         $fetch_uname= $fetch['uname'];
         $fetch_pwd= $fetch['pwd'];
         if($fetch_uname && $pwd=$fetch_pwd){
             session_start();
             $_SESSION['admin_uname']=$fetch_uname;
             header('Location:../back/Dashboard.php');
         }
         else{ header('Location:admin.php'); }
     }
     ?>