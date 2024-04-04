<?php
$conn=mysqli_connect('localhost','root','','gym');
if(isset($_POST['registration'])
        && $_POST['name'] 
        && $_POST['email']
        && $_POST['mobile']    
        && $_POST['uname']
        && $_POST['pwd']
        && $_FILES['photo']['name'] 
        && $_POST['adr'] 
        && $_POST['shift'] 
        && $_POST['Trainer'] 
       
        // && $_POST['question']
        ){
        $name  =$_POST['name'];
        $email =$_POST['email'];
        $mobile=$_POST['mobile'];
        $uname =$_POST['uname'];
        $pwd   =$_POST['pwd'];    
        $adr   =$_POST['adr'];
        $shift   =$_POST['shift'];
        $Trainer   =$_POST['Trainer'];
        // $question   =$_POST['question'];
        $file       =$_FILES['photo']['name'];
        $tmp_file  = $_FILES['photo']['tmp_name'];
        $folder="/static/user".$file;
        move_uploaded_file($tmp_file,$folder);
        $query="INSERT INTO user VALUE('','$name','$email','$mobile','$uname','$pwd','$folder','$adr','$shift','$Trainer')";
        $run=mysqli_query($conn,$query);
        ($run)?$r=header("location:Dashboard.php"):$r="server not responding...";
        echo $r;
    }  
else if(isset($_POST['registration'])){  echo "fill the form....";}
        
else if(isset($_POST['tregistration'])
        && $_POST['name'] 
        && $_POST['email']
        && $_POST['mobile']    
        && $_POST['uname']
        && $_POST['pwd']
        && $_POST['adr'] 
        && $_FILES['photo']['name'] 
        // && $_POST['question']
        ){
        $name  =$_POST['name'];
        $email =$_POST['email'];
        $mobile=$_POST['mobile'];
        $uname =$_POST['uname'];
        $pwd   =$_POST['pwd'];    
        $adr   =$_POST['adr'];
        // $question   =$_POST['question'];
        $file       =$_FILES['photo']['name'];
        $tmp_file  = $_FILES['photo']['tmp_name'];
        $folder="./static/user".$file;
        move_uploaded_file($tmp_file,$folder);
        $query="INSERT INTO t_user VALUE('','$name','$email','$mobile','$uname','$pwd','$folder','$adr')";
        $run=mysqli_query($conn,$query);
        ($run)?$r=header("location:Dashboard.php"):$r="server not responding...";
        echo $r;
    }  
else if(isset($_POST['tregistration'])){  echo "fill the form....";}


else if(isset($_GET['id']))
{        
    $id  = $_GET['id'];
    $query="DELETE FROM `user` WHERE id=$id";
    $run=mysqli_query($conn,$query);
    ($run)?$r=header("location:member_detail.php"):$r="server not responding...";
    echo $r;
}

else if(isset($_GET['id']))
{        
    $id  = $_GET['id'];
    $query="DELETE FROM `t_user` WHERE id=$id";
    $run=mysqli_query($conn,$query);
    ($run)?$r=header("location:trainer_detail.php"):$r="server not responding...";
    echo $r;
}
else if(isset($_POST['update_post']) && $_POST['title'] && $_POST['description'] && $_FILES['banner']['name'])
{
    $id  =$_GET['id'];
    $title  =$_POST['name'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $adr =$_POST['adr'];
    
    $file       =$_FILES['banner']['name'];
    $tmp_file  = $_FILES['banner']['tmp_name'];
    $folder="../static/".$file;
    move_uploaded_file($tmp_file,$folder);    
    $query="UPDATE `t_user` SET `name`='$name',`email`='$mobile',`mobile`='$mobile',`adr`='$adr',`banner`='$folder' WHERE id=$id";
    $run=mysqli_query($conn,$query);
    ($run)?$r=header("location:Dashboard.php"):$r="server not responding...";
    echo $r;
}

    
   ?>