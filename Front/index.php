<?php
  session_start();
  if(isset($_SESSION['uname'])){
    header("Location:home.php");
  }
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
        <?php include_once("component/slider.php"); ?>

  

    <main class="container-fluid row m-auto">
        <div class=" col-6 background " >
        <p class="text-center pt-2">
                <img src="./static/users/cat1.png" alt="banner" height="180px" class="pic" id="logo">
            </p>
           
           <h2 class="text-center text-light bg-dark">PERSONAL TRANING</h2>
            <p class="txt"> You’ll look at graphs and charts in Task One, how to approach the task and<br>
                the language needed for a successful answer.<br>
            <button class="btn bg-danger">Course</button></p>
        </div>
        <div class=" col-6 background ">
            <p class="text-center pt-2">
            <img src="./static/users/cat2.png" alt="banner" height="180px" class="pic" id="log">  
            </p>
            <h2 class="text-center text-light bg-dark ">GROUP TRANING</h2>
            <p class="txt">You’ll look at graphs and charts in Task One, how to approach the task and<br>
          the language needed for a successful answer. <br><button class="btn bg-danger">Course</button></p></p>
        </div>
    </main><div class=""></div>
    <p class="textt bg-dark text-center">WHAT I OFFER</p>
    <nav class="container-fluid row m-auto ">
        <div class="col-4">
            <p class="text-center pt-2">
                <img src="./static/users/team1.png" alt="banner" height="270px" id="s1">
            </p>
            <h2 class="text-center text-dark">BODY BUILDING</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus assumenda quaerat optio repudiandae </p>
        </div>
        <div class=" col-4">
            <p class="text-center pt-2">
                <img src="./static/users/team2.png" alt="banner" height="270px" id="s2">
            </p>
            <h2 class="text-center text-dark">MUSCLE GAIN</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus </a></p>
        </div>
        <div class="col-4">
            <p class="text-center pt-2">
                <img src="./static/users/team3.png" alt="banner" height="270px" id="s3">
            </p>
            <h2 class="text-center text-dark">WEIGHT LOSS</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus </p>
        </div>
</nav><div class=""></div>
     
</section><div class=""></div>
       <main class="container-fluid row m-auto">
        <div class=" col-4">
            <p class="text-center pt-2">
            <img src="./static/users/gym1.jpg" alt="banner" height="300px"  width="430px" id="s1" class="img">
            </p>
            </div>
        <div class=" col-4">
            <p class="text-center pt-2">
            <img src="./static/users/gym2.jpg" alt="banner" height="300px" width="430px" id="s1" class="img">
            </p>
             </div>
        <div class=" col-4">
            <p class="text-center pt-2">
            <img src="./static/users/gym3.jpg" alt="banner" height="300px" width="430px" id="s1" class="img">
            </p>
           </div>
    </main><div class=""></div>

    </section><div class=""></div>
       <main class="container-fluid row m-auto">
        <div class=" col-4">
            <p class="text-center pt-2 ">
            <img src="./static/users/gym4.jpeg" alt="banner" height="300px"  width="430px" id="s1" class="img">
            </p>
            </div>
        <div class=" col-4">
            <p class="text-center pt-2 ">
            <img src="./static/users/gym5.jpg" alt="banner" height="300px" width="430px" id="s1" class="img">
            </p>
             </div>
        <div class=" col-4">
            <p class="text-center pt-2  ">
            <img src="./static/users/gym6.jpg" alt="banner" height="300px" width="430px" id="s1" class="img">
            </p>
           </div>
    </main><div class=""></div>
    <p class="textt bg-dark text-center ">PRICING</p>
    <nav class="container-fluid row m-auto bg-">
        <div class=" border border-dark  col-4">
            <p class=" pt-2 fs-1">
                          <i class="fa-solid fa-dumbbell fw-bold"></i>
            </p>
            <h2 class=" text-dark">6 Month</h2>
            <p class="fs-4"><i class="fa-solid fa-check"></i>Free Riding<br><i class="fa-solid fa-check"></i>Unlimited Equipments<br>
            <i class="fa-solid fa-check"></i>Personal Trainer<br>  <i class="fa-solid fa-check"></i>Weight Losing Classes<br>
            <i class="fa-solid fa-check"></i>Month To Month</p><br>
            <button class="btn bg-danger fw-bold">Join Now</button>
        </div>
        <div class="border border-dark  col-4">
        <p class=" pt-2 fs-1">
            <i class="fa-solid fa-dumbbell fw-bold"></i>
            </p>
            <h2 class=" text-dark">6 Month</h2>
            <p class="fs-4"><i class="fa-solid fa-check"></i>Free Riding<br><i class="fa-solid fa-check"></i>Unlimited Equipments<br>
            <i class="fa-solid fa-check"></i>Personal Trainer<br>  <i class="fa-solid fa-check"></i>Weight Losing Classes<br>
            <i class="fa-solid fa-check"></i>Month To Month</p><br>
            <button class="btn bg-danger fw-bold">Join Now</button>
        
             </div>
        <div class=" border border-dark col-4">
        <p class=" pt-2 fs-1">
            <i class="fa-solid fa-dumbbell fw-bold"></i>
            </p>
            <h2 class=" text-dark">6 Month</h2>
            <p class="fs-4"><i class="fa-solid fa-check"></i>Free Riding<br><i class="fa-solid fa-check"></i>Unlimited Equipments<br>
            <i class="fa-solid fa-check"></i>Personal Trainer<br>  <i class="fa-solid fa-check"></i>Weight Losing Classes<br>
            <i class="fa-solid fa-check"></i>Month To Month</p><br>
            <button class="btn bg-danger fw-bold ">Join Now</button>
         </div>
</nav><div class=""></div><br><br>


    

    
    
   
    
    <script>
  document.getElementById('logo').addEventListener('mouseenter',()=>{
    document.getElementById('logo').style="height:200px";
  });
  document.getElementById('logo').addEventListener('mouseout',()=>{
    document.getElementById('logo').style="height:180px";
  });
  document.getElementById('log').addEventListener('mouseenter',()=>{
    document.getElementById('log').style="height:200px";
  });
  document.getElementById('log').addEventListener('mouseout',()=>{
    document.getElementById('log').style="height:180px";
  });
  document.getElementById('s1').addEventListener('mouseenter',()=>{
    document.getElementById('s1').style="height:290px";
  });
  document.getElementById('s1').addEventListener('mouseout',()=>{
    document.getElementById('s1').style="height:270px";
  });
  document.getElementById('s2').addEventListener('mouseenter',()=>{
    document.getElementById('s2').style="height:290px";
  });
  document.getElementById('s2').addEventListener('mouseout',()=>{
    document.getElementById('s2').style="height:270px";
  });
  document.getElementById('s3').addEventListener('mouseenter',()=>{
    document.getElementById('s3').style="height:290px";
  });
  document.getElementById('s3').addEventListener('mouseout',()=>{
    document.getElementById('s3').style="height:270px";
  });



</script>
<?php include_once("component/footer.php"); ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
  