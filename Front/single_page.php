<?php
    session_start();
    if(!isset($_SESSION['uname'])){
        header("Location:login.php");
    }
    $conn=mysqli_connect('localhost','root','','news');
    $id =$_GET['id'];
    $query="SELECT * FROM news WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($run);    
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Single Page</title>    
    </head>
    <body>
        <?php include_once("component/main_header.php"); ?>
        <main class="">
            <div class="container-fluid row m-auto">
                <div class="col-3 text-center border">
                    <img src="<?php echo $row['banner']; ?>" alt="banner" height="250px">
                </div>
                <div class="col-9">
                    <h1><?php echo $row['title']; ?></h1>
                    <p><?php echo $row['description']; ?></p>
                </div>
            </div>
      </main>
    <?php include_once("component/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>