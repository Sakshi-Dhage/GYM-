

 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styl.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    
  </head>
  <body>
    <?php include_once("component/header.php"); ?>
      <main class="py-2 "  >
        <div class="row m-auto">
          <div class="col-3 text-center py-4">
            <img src="./static/users/ab1.jpg" alt="" height="280px" width="300px">
              
          </div>
          <div class="col-6 py-2" >
            <h1 class="text-center">User Login</h1>
            <form action="query.php" method="post" >
              <div class="mb-3">
                <input type="text" class="form-control" name="uname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Username">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Enter Your Password">
              </div>              
              <div class="text-right">
                <a href="forgot_pwd.php" class="fw-bold">forgot Password?</a>
              </div>
              <div class="text-center">
                <input type="submit"  value="login" name="login" class="btn btn-success"></button>
              </div>
            </form>
          </div>
          <div class="col-3 text-center  py-4">
          <img src="./static/users/ab2.jpg" alt="" height="280px" width="300px">

                        </div>
        </div>
      </main>
    <?php include_once("component/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>