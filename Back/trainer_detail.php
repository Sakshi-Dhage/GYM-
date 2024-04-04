<?php
 
  $conn=mysqli_connect('localhost','root','','gym');
  $query="SELECT * FROM t_user";
  $run=mysqli_query($conn,$query);
  $data=mysqli_fetch_assoc($run);

?>

  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="./styl.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>index</title>
  </head>
  <body>
    
        <?php include_once("component/header.php"); ?>
        <main class="container-fluid row m-auto">
      <div class="row border-3">
        <?php while($data=mysqli_fetch_assoc($run)) { ?>
        <div class="col-2 text-center">
            <img src="<?php echo $data['photo']; ?>" alt="#" height="30px" id="photo">
        </div>
        <div class="col-2">
          <h5><?php echo $data['name']; ?></h5>
          <p>
            <?php echo $d=substr($data['email'],0,50); ?>
          </p>
        </div>
        <div class="col-2 text-center">
        <?php echo $data['mobile']; ?>
        </div>
        <div class="col-2 text-center">
        <?php echo $data['adr']; ?>
        </div>
        
        
        <div class="col-2 text-center m-auto">
          <button><a href="add_member.php?id=<?php echo $data['id'] ?>">Edit Post</a></button>
        </div>
        <div class="col-2 text-center m-auto">
          <form action="query.php?id=<?php echo $data['id']; ?>" method="post">
            <input type="submit" value="Delete member">
          </form>            
        </div>
        <?php } ?>
      </div>
    </main>
    
    



        
       
<?php include_once("component/footer.php"); ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
  


