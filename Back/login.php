<?php 
session_start();
if(isset($_SESSION['admin_uname']))
{
  header('location:Dashboard.php');
}
?>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Login</title>
  </head>
  <body>
    <?php include_once("component/header.php"); ?>
      <main class="bg-wheat">
        <div class="row m-auto">
          <div class="col-3 text-center">
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
          <div class="col-6 py-2">
            <h1 class="text-center">Admin Login</h1>
            
          </div>
          <div class="col-3 text-center">
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