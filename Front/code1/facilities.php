
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
    <?php include_once("component/header.php"); ?>
    <main class="">
        <div class="container-fluid row m-auto">          
          <div class="col-3 text-center pt-2">
            <img src="./static/f1.jpg" alt="blog_image" height="150px" id="f1">
          </div>
          <div class="col-9">
            <h1>   Library:</h1>
            <p>We have a well equipped library with about 23,000 books. Books are issued to children from Std. V onwards for home reading. We subscribe to a wide variety of newspapers and important educational magazines. We have a large collection of reference books too.

          </p>          
          </div>
        </div>
        <br>
        <div class="m-auto">
        </div>
         <div class="container-fluid row m-auto">          
         <div class="col-3 text-center pt-2">
          <img src="./static/f2.jpg" alt="blog_image" height="150px" id="f2">
          </div>
          <div class="col-9">
           <h1> Laboratories</h1>
            <p>We have three equipped laboratories for Physics , Chemistry and Biology which is used by the students from std IX to XII which make teaching more interesting and meaningful.<br>

            Chemistry Lab :
            The school has Chemistry Lab with all new equipments. Students from std IX to XII use the lab for various experiments
          </p>          
         </div>
        </div>
        <br>
        <div class="">
         </div>
         <div class="container-fluid row m-auto">
         <div class="col-3 text-center pt-2">
            <img src="./static/f3.jpg" alt="blog_image" height="150px" id="f3">
          </div>
          <div class="col-9">
            <h1>Physics Lab :</h1>
            <p>We have a well equipped library with about 23,000 books. <br>Books are issued to children from Std. V onwards for home reading. We subscribe to a wide variety of newspapers and important educational magazines. We have a large collection of reference books too. </p>          
          </div>
           </div>
           <br>
           <div class=" ">
           </div>
           <div class="container-fluid row m-auto">
           <div class="col-3 text-center pt-2">
            <img src="./static/f4.jpg" alt="blog_image" height="150px" id="f4">
          </div>
          <div class="col-9">
            <h1>Biology Lab :</h1>
            <p>The school also has a Biology lab with latest equipments. Students from std IX to XII use the lab for various practicals</p>          
          </div>
           </div>
           <br>
           <div class="">
           </div>
           </main>
           <section class="container-fluid row m-auto text-center  ">
        <div class="height=50px" >
        <h1  class=" ">Computer Lab</h1></div>
        <p>A special section imparting Information Technology was started in the year 2001. We have a separate laboratory having 40 computers installed. Students from std.V to XII are given computer training</p>
        <div class="container-fluid ">
         <img src="./static/f6.jpg" height="230px" alt="" id="logo8"> <img src="./static/f7.jpg" height="230px"  alt="" id="logo9"> <img src="./static/f8.jpg" height="230px"  alt="" id="logo7"> 
        </div>
      </section>
      <br>
      <br>

           
      <script>
  document.getElementById('logo8').addEventListener('mouseenter',()=>{
    document.getElementById('logo8').style="height:250px";
  });
  document.getElementById('logo8').addEventListener('mouseout',()=>{
    document.getElementById('logo8').style="height:230px";
  });
  
  document.getElementById('logo9').addEventListener('mouseenter',()=>{
    document.getElementById('logo9').style="height:250px";
  });
  document.getElementById('logo9').addEventListener('mouseout',()=>{
    document.getElementById('logo9').style="height:230px";
  });
 
  document.getElementById('logo7').addEventListener('mouseenter',()=>{
    document.getElementById('logo7').style="height:250px";
  });
  document.getElementById('logo7').addEventListener('mouseout',()=>{
    document.getElementById('logo7').style="height:230px";
  });


  document.getElementById('f1').addEventListener('mouseenter',()=>{
    document.getElementById('f1').style="height:200px";
  });
  document.getElementById('f1').addEventListener('mouseout',()=>{
    document.getElementById('f1').style="height:150px";
  });
  
  document.getElementById('f2').addEventListener('mouseenter',()=>{
    document.getElementById('f2').style="height:200px";
  });
  document.getElementById('f2').addEventListener('mouseout',()=>{
    document.getElementById('f2').style="height:150px";
  });
 
  document.getElementById('f3').addEventListener('mouseenter',()=>{
    document.getElementById('f3').style="height:200px";
  });
  document.getElementById('f3').addEventListener('mouseout',()=>{
    document.getElementById('f3').style="height:150px";
  });
  document.getElementById('f4').addEventListener('mouseenter',()=>{
    document.getElementById('f4').style="height:200px";
  });
  document.getElementById('f4').addEventListener('mouseout',()=>{
    document.getElementById('f4').style="height:150px";
  });
 
 
  </script>


       
       
     
       
     
    <?php include_once("component/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>