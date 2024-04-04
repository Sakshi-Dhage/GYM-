<?php
  $conn=mysqli_connect('localhost','root','','gym');
  $id = $_GET['id'];
  $query="SELECT * FROM `t_user` WHERE `id`=$id";
  $run = mysqli_query($conn,$query);
  $data=mysqli_fetch_array($run);    
?>
<!doctype html>
<html lang="eng">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration</title>
  </head>
  <body>
    <?php include_once("component/header.php"); ?>
      <main class="bg-wheat py-3">
        <div class="row m-auto">
          <div class="col-2 text-center">            
              
          </div>
          <div class="col-8">                        
            <h1 class="text-center">Update POST</h1>
            <form method="POST" action="query.php?id=<?php echo $id ?>" enctype="multipart/form-data">
              <div class="mb-3">
                <input type="text" value="<?php echo $data['name']; ?>" class="form-control" name="title" placeholder="Enter Your News Title">
              </div>              
              <div class="mb-3">
                <input type="text" value='<?php echo $data['email']; ?>' class="form-control" name="description" placeholder="Enter Your News Description">
              </div>
              <div class="mb-3">
                <input type="text" value='<?php echo $data['mobile']; ?>' class="form-control" name="description" placeholder="Enter Your News Description">
              </div>              
              <div class="mb-3">
                <input type="text" value='<?php echo $data['adr']; ?>' class="form-control" name="description" placeholder="Enter Your News Description">
              </div>              
                    
              <div class="mb-3 text-center">
                <img src="<?php echo $data['photo']; ?>" alt="old" height="50px">
                <input type="file" class="form-control" name="banner">
              </div>              
              <div class="text-center">
                <input type="submit" class="btn btn-success" value="edit" name="edit">
              </div>
            </form>
          </div>
          </div>        
        </div>
      </main>
    <?php include_once("component/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>