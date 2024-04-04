

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
            <h1 class="text-center">Registration</h1>
            <form method="POST" action="query.php" enctype="multipart/form-data">
              <div class="mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter student's full Name">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" name="mobile"  placeholder="Enter Your Mobile">
              </div>
              
              <div class="mb-3">
                <input type="date" class="form-control" name="date" id="date">
              </div>
              
              <div class="mb-3">
                <input type="text" class="form-control" name="class"  placeholder="Enter Your class">
              </div>
              <div class="mb-3">  
                <textarea class="form-control" name="adr" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Address"></textarea>
              </div>
              <div class="text-center">
                <input type="submit" class="btn btn-success" value="Registration" name="registration">
              </div>
            </form>
          </div>
          <div class="col-2 text-center">
              <br>
          </div>        
        </div>
      </main>
    <?php include_once("component/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>