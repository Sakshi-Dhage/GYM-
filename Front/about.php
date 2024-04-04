<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="./styl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>index</title>
    
  </head>
  <body>
    
  <?php include_once("component/header.php"); ?>
    <main class="container-fluid row m-auto logo">
        <div class="">
          <p>Lorem ipsum dolor<br> sit amet consectetur adipisicing elit. <br>Voluptate, dicta<br> a dignissimos dolor ut nihil<br> laudantium tempore <br>perspiciatis porro hic,<br> quaerat dolores<br>   culpa! Dolore maiores ducimus<br> <p class="logoo">About</p>libero voluptates<br>, quidem laboriosam<br> consequatur autem itaque beatae <br>necessitatibus odio perferendis <br>reprehenderit eaque<br> aspernatur nam doloremque iusto illum delectus expedita.<br> Nostrum illum excepturi ab explicabo vo
        
          <div>
            
</main>
<p class="textt bg-dark text-center ">WHAT I OFFER</p>
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
<main class="container-fluid row m-auto">
        <div class=" col-6 background " >
        <p class="text-center pt-2">
                <img src="./static/users/trai.avif" alt="banner" height="300px" class="picc" id="lo">
            </p>
        </div>
        <div class=" col-6 background ">
            <h2 class="text-center text-light bg-dark ">About Me</h2>
            <p class="txt">You’ll look at graphs and charts in Task One, how to approach the task and<br>
          the language needed for a successful answer. <br>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>Molestiae, distinctio nostrum. Asperiores, nisi saepe unde veritatis nemo necessitatibus odio suscipit debitis cum ut iusto quidem est,<br> non perferendis dolor corporis omnis optio eos a id architecto accusamus repellendus soluta? <br>Blanditiis aliquid voluptatum itaque delectus. Ut iure numquam placeat quasi alias.
          <button class="btn bg-danger fw-bold"> My Course</button></p></p>
        </div>
    </main><div class=""></div>
    
<script>
  document.getElementById('s2').addEventListener('mouseenter',()=>{
    document.getElementById('s2').style="height:300px";
  });
  document.getElementById('s2').addEventListener('mouseout',()=>{
    document.getElementById('s2').style="height:270px";
  });
  document.getElementById('s3').addEventListener('mouseenter',()=>{
    document.getElementById('s3').style="height:300px";
  });
  document.getElementById('s3').addEventListener('mouseout',()=>{
    document.getElementById('s3').style="height:270px";
  });
  document.getElementById('s1').addEventListener('mouseenter',()=>{
    document.getElementById('s1').style="height:300px";
  });
  document.getElementById('s1').addEventListener('mouseout',()=>{
    document.getElementById('s1').style="height:270px";
  });
  </script>
<?php include_once("component/footer.php"); ?>

  
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

