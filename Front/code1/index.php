

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>index</title>
  </head>
  <body>
    <?php include_once("component/header.php"); ?>
    <?php include_once("component/slider.php"); ?>
    <main class="container-fluid row m-auto  bg-warning "><h1 class="text-primary  text-center">Our Achivement
</h1>
        <div class=" col-4">
            <p class="text-center pt-2">
            <i class="fa-solid fa-graduation-cap h-50"></i>
                </p>
            <h2 class="text-center text-primary "> Education</h2>
            <p >The school has a highly educated, well trained and competent staff. The first batch of students appeared for S.S.C. examination in March 1984 and our results were 100%. More than half the number of students secured above 75%. Since then the school has maintained a glorious tradition of excellent results.<br> <a href="registration.php">Read More....</a></p>
        </div>
        <div class=" col-4">
            <p class="text-center pt-2">
                
            </p>
            <h2 class="text-center text-primary">Sports </h2>
            <p>Miss. Janvhavi Chorghe got selected for Nationals in two events,
1. 400 mtr. Hurdles
2. Long Jump
Miss. Kavya Kulkarni got selected for Nationals in shot put throw.
Our school’s 4X100mtr. Relay team stood second in the state championship held at Chandrapur during 29th Oct 2023 to 1st Nov 2023.

<br> <a href="registration.php bg-black">Read More....</a></p>
        </div>
        <div class=" col-4">
            <p class="text-center pt-2">
                
            </p>
            <h2 class="text-center text-primary">Others
</h2>
            <p>Miss. Ira Sarde, a 7th grade student, won a gold medal in the ‘Rangotsav Celebration’ painting competition organized by the National Art Competition and was selected for the international competition.

<br> <a href="registration.php bg-">Read More....</a></p>
        </div>
    </main>
    <nav class="container-fluid row m-auto text-center  bg-warning"><h1  class="text-primary ">Objectives
</h1>
<p>Muktangan believes in the philosophy that we should emphasize the best in Indian culture and heritage, adopt the best from the school educational system and evolve a pattern for all-round development of students. We help to develop their minds, physique and their personality and help them to develop into good responsible individuals.The school tries to inculcate in the students a spirit of love for all that is good, love for cleanliness,love for beauty and awareness of the aesthetic sense.

</p>
<p>
</p>
</nav>
<section class="container-fluid row m-auto text-center  bg-warning">
  <div class="height=50px" >
<h1  class="text-primary ">Events in 2023-24</h1></div>
<div class="container-fluid ">
<img src="./static/e1.jpg" alt="logo" height="150px" id="logo"> <img src="./static/e2.webp" height="150px"  alt="" id="logo1"> <img src="./static/e3.jpg" height="150px"  alt="" id="logo2"> <img src="./static/e4.jpg" height="150px"  alt="" id="logo3"> <img src="./static/e5.jpg"  height="150px" alt="" id="logo4"> 
</div>
<br>
<br>
</section>
<script>
  document.getElementById('logo').addEventListener('mouseenter',()=>{
    document.getElementById('logo').style="height:200px";
  });
  document.getElementById('logo').addEventListener('mouseout',()=>{
    document.getElementById('logo').style="height:150px";
  });
  
  document.getElementById('logo1').addEventListener('mouseenter',()=>{
    document.getElementById('logo1').style="height:200px";
  });
  document.getElementById('logo1').addEventListener('mouseout',()=>{
    document.getElementById('logo1').style="height:150px";
  });
 
  document.getElementById('logo2').addEventListener('mouseenter',()=>{
    document.getElementById('logo2').style="height:200px";
  });
  document.getElementById('logo2').addEventListener('mouseout',()=>{
    document.getElementById('logo2').style="height:150px";
  });
 

  document.getElementById('logo3').addEventListener('mouseenter',()=>{
    document.getElementById('logo3').style="height:200px";
  });
  document.getElementById('logo3').addEventListener('mouseout',()=>{
    document.getElementById('logo3').style="height:150px";
  });
 

  document.getElementById('logo4').addEventListener('mouseenter',()=>{
    document.getElementById('logo4').style="height:200px";
  });
  document.getElementById('logo4').addEventListener('mouseout',()=>{
    document.getElementById('logo4').style="height:150px";
  });
 
  </script>
    <?php include_once("component/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>