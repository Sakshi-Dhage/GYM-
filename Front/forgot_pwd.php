<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Forgot</title>
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
            <h1 class="text-center">Forgot Password</h1>
            <form action="query.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" name="uname" id="exampleInputPassword1" placeholder="Enter Your Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Enter Your Password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="c_pwd" id="exampleInputPassword1" placeholder="Enter Your Confirm Password">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" name="question" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Question">
                </div>
              <div class="text-center">
                <input type="submit"  value="Forgot" name="forgot" class="btn btn-success"></button>
              </div>
            </form>
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