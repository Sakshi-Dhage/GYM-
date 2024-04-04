<?php
  session_start();
  $conn=mysqli_connect('localhost','root','','news');
  if(!isset($_SESSION['uname'])){
    header("Location:login.php");
  }
  $id=$_GET['id'];
  $query="SELECT * FROM users WHERE id='$id'";
  $run=mysqli_query($conn,$query);
  $data=mysqli_fetch_assoc($run);  
?>
<!doctype html>
<html lang="eng">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Profile</title>
  </head>
  <body>
    <?php include_once("component/main_header.php"); ?>
      <main class="bg-wheat py-3">
        <div class="row m-auto">
          <div class="col-2 text-center">            
              <a href="https://www.Facebook.com">
                <img src="./static/laptop_4.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <a href="https://www.Facebook.com">
                <img src="./static/laptop_4.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <a href="https://www.Facebook.com">
                <img src="./static/laptop_4.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <br>
              <a href="https://www.google.com">
                <img src="./static/laptop_5.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <br>
              <a href="https://www.twitter.com">
                <img src="./static/laptop_6.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <br>
          </div>
          <div class="col-8">                        
            <h1 class="text-center">Edit Profile</h1>
            <form method="POST" action="query.php?id=<?php echo $data['id']; ?>" enctype="multipart/form-data">
              <div class="mb-3">
                <input type="text" class="form-control" value="<?php echo $data['name']; ?>" name="name" id="name" placeholder="Enter Your Name">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" value="<?php echo $data['email']; ?>" name="email" id="email" placeholder="Enter Your Email">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" value="<?php echo $data['mobile']; ?>" name="mobile" id="" placeholder="Enter Your Mobile">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" value="<?php echo $data['uname']; ?>" name="uname" id="uname" placeholder="Enter Your Username">
              </div>            
              <div class="text-center">
                <img src="<?php echo $data['photo']; ?>" alt="photo" height="50px">
                <input type="hidden" class="form-control" value="<?php echo $data['photo']; ?>" name="old">              </div>
              <div class="mb-3">
                <input type="file" class="form-control" name="photo" id="photo">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" value="<?php echo $data['question']; ?>" name="question" placeholder="Enter Your Question">
              </div>
              <div class="mb-3">                  
                <input type="text" class="form-control" value="<?php echo $data['address']; ?>" name="adr" id="exampleFormControlTextarea1" placeholder="Enter Your Address">
              </div>
              <div class="text-center">
                <input type="submit" class="btn btn-success" value="Update" name="update">
              </div>
            </form>
          </div>
          <div class="col-2 text-center">            
              <a href="https://www.Facebook.com">
                <img src="./static/laptop_4.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <a href="https://www.Facebook.com">
                <img src="./static/laptop_4.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <a href="https://www.Facebook.com">
                <img src="./static/laptop_4.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <br>
              <a href="https://www.google.com">
                <img src="./static/laptop_5.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <br>
              <a href="https://www.twitter.com">
                <img src="./static/laptop_6.jpg" alt="Google Ads" height="100px" class="py-2">
              </a>
              <br>
          </div>        
        </div>
      </main>
    <?php include_once("component/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>