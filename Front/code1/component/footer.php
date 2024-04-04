<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .footer {
  width: 100%;
  background-color: black;
}
.footer .col {
  width: 190px;
  height: auto;
  float: left;
  box-sizing: border-box;
  padding: 20px;
}
.footer .col h2 {
  margin: 0;
  padding: 0;
  font-size: 15px;
  line-height: 17px;
  padding: 10px 0;
  color: #FF0063;
  text-transform: uppercase;
}
.footer .col ul {
  list-style-type: none;
  padding: 0;
}
.footer .col ul li {
  color: white;
  font-size: 12px;
  padding: 5px 0px;
}
.address ul li {
  display: inline-block;
  padding-right: 5px !important;
}

.footer .col ul li:hover {
  cursor: pointer;
  color: lightgray;
  font-weight: bold;
}
.clearfix {
  clear: both;
}
a{
  color:white;
}
@media only screen and (min-width: 1280px) {
  .contain {
    width: 1200px;
    margin: 0 auto;
  }
}
@media only screen and (max-width: 1139px) {
  .contain .address {
    width: 1000px;
    display: block;
  }
  .address h2 {
    margin: 0px;
  }
}
@media only screen and (max-width: 950px) {
  .footer .col {
    width: 33%;
  }
  .footer .col h2 {
    font-size: 14px;
  }
  .footer .col ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 500px) {
    .footer .col {
      width: 50%;
    }
    .footer .col h2 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
}
@media only screen and (max-width: 340px) {
  .footer .col {
    width: 100%;
  }
}

    </style>
</head>
<body>
<footer>
<div class="footer">
  <div class="contain">
  <div class="col">
  <img src="./static/s1.png" alt="logo" height="120px" href="home.php">
  </div>
  <div class="col">
  <a class="navbar-brand py-3 fw-b  text-center " href="home.php ">
   <a href="home.php"><h2> <b>P.V.G's</b></h2>
    <h1>Muktangan</h1>
    <h2><b>Eng. School & Jr.College</b></h2></a></a>
  </div>
  <div class="col">
    
  </div>
  <div class="col">
    
  <h2>Office Timing</h2>
  <ul>

<li>Monday to Friday</li>

<li>10:30 am to 12:30 pm &</li>

<li>4:30 pm to 5:30 pm</li>

<li>Saturday</li>

<li>10:00 am to 12:00 noon</li>


    
    </ul>
  </div>
  <div class="col">
    <h2>links</h2>
    <ul>
      <li><a href="home.php">home</a></li>
      <li><a href="about.php">about us</li>
      <li><a href="contact.php">contact us</li>
    </ul>
  </div>
  <div class="col address">
    <h2>Address </h2>
    <ul>
      <li>Kranti Chowk,Chhtrapati Sambhajinagar</li>
  </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
</footer>

</body>
</html>